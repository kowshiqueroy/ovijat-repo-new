<?php
include_once("header.php");

?>

<?php
?>

<div class="container ">
  <div class="row">
    <div class="col-sm">

      <meta name="viewport" content="width=device-width, initial-scale=1">

      <?php


            if (isset($_POST["addsavebtn"])) {


                

                $id = $_POST["itemid"];
                $i = $_POST["itemnamef"];
                $pg = $_POST["pagenamef"];
                $d = $_POST["detailsf"];

                $pg=strtolower($pg);

                $flag=0;


                $select = $pdo->prepare("select * from item order by id desc");

                $select->execute();

                while ($row = $select->fetch(PDO::FETCH_OBJ)) {

                    if ($row->itemname == $i and $row->pagename == $pg) {
                    $flag++;

                    }



                }


                if ($flag ==0) {

               









                $target_dir = "uploads/";
                $target_file = $target_dir .$i.$pg.".".basename($_FILES["fileToUpload"]["type"]);
                $target_name= $i.$pg.".".basename($_FILES["fileToUpload"]["type"]);
                //time(). basename($_FILES["fileToUpload"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                
                // Check if image file is a actual image or fake image
                if(isset($_POST["addsavebtn"])) {
                  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                  if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                  } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                  }    echo "<br>";
                }
             
               // Check if file already exists
                if (file_exists($target_file)) {
                  echo "Sorry, file already exists.";
                //  $uploadOk = 0;
                unlink($target_file);
                  echo "<br>";
                }
              
                // Check file size
                if ($_FILES["fileToUpload"]["size"] > 500000) {
                  echo "Sorry, your file is too large.";
                  $uploadOk = 0;
                  echo "<br>";
                }
                
                // Allow certain file formats
                if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                && $imageFileType != "gif" ) {
                  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                  $uploadOk = 0;
                  echo "<br>";
                }
                
                // Check if $uploadOk is set to 0 by an error
                if ($uploadOk == 0) {
                  echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
                } else {
                  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                    
                    
                    
                    echo "The file ". htmlspecialchars( $target_name). " has been uploaded.";
                
                    $ph = htmlspecialchars($target_name);



                
                   
                    
                   
                 
    
                 
    
                        $insert = $pdo->prepare("insert into item(id,itemname,details,pagename,photo) values(:id,:i,:d,:pg,:ph)
                         ON DUPLICATE KEY UPDATE itemname='$i', pagename='$pg',photo='$ph'");
    
                        $insert->bindParam(":i", $i);
                        $insert->bindParam(":d", $d);
                        $insert->bindParam(":id", $id);
                        $insert->bindParam(":pg", $pg);
                        $insert->bindParam(":ph", $ph);
    
    
                        $insert->execute();
                
                  } else {
                    echo "Sorry, there was an error uploading your file.";
                  }
                }
            }
            








             


             
                   
    
                  
                

               


            }




            


                if (isset($_GET["del"])) {
                    $iid = $_GET["del"];
                    $iph = $_GET["photo"];

                    unlink("uploads/".$iph);

                

                    $del = $pdo->prepare("delete from item where id='$iid'");

                    $del->execute();
                
                    echo '  <script>
                    window.location.href = "item.php";
                </script>';
                        
                  
                 
                   


                }


                

                if (isset($_GET["id"])) {
                    $id = $_GET["id"];

                    $i = $_GET["name"];
                    $pg = $_GET["page"];
                    $ph = $_GET["photo"];
                    $d = $_GET["details"];

                

                    $del = $pdo->prepare("delete from item where id='$id'");

                    $del->execute();


                    $insert = $pdo->prepare("insert into item(itemname,details,pagename,photo) values(:i,:d,:pg,:ph)
                    ON DUPLICATE KEY UPDATE itemname='$i', pagename='$pg',photo='$ph'");

                   $insert->bindParam(":i", $i);
                   $insert->bindParam(":d", $d);
                 
                   $insert->bindParam(":pg", $pg);
                   $insert->bindParam(":ph", $ph);


                   $insert->execute();


                
                    echo '  <script>
                    window.location.href = "item.php";
                </script>';
                        
                  
                 
                   


                }








            
            ?>

      <form action="item.php" method="post" enctype="multipart/form-data">
        <div class="containerform">
          <h1>Add new</h1>
          <p>Please fill in this form.</p>
          <hr>
          <input type="hidden" name="itemid" id="id" required>

          <label for="i"><b>Item Name<br>(for job give here deadline YYYY.mm.dd [2023.11.01]<br>
          for Top Wish mm.ddSOMETHING [11.01] / mm [11SOMETHING /  YYYYSOMETHING [2023SOMETHING / active])</b></label>
          <input type="text" name="itemnamef" id="i" required>

          <label for="i"><b>Details</b></label>
          <input type="text" name="detailsf" id="d" required>

          <label for="p"><b>Page Name</b></label>
          <select name="pagenamef" id="p" required>
          <option>top wish</option> 
          <option>job</option>

            <option>snacks</option>
            <option>drinks</option>
            <option>edible oil</option>
            <option>rices</option>
            <option>bakery</option>
            <option>spices</option>

            <option>chairman</option>
            <option>managing director</option>
            <option>deputy managing director</option>

            <option>banner</option>

            <option>mission</option>
            <option>vission</option>
            <option>qa</option>
            <option>company</option>
            <option>sister</option>

            <option>trading</option>
          </select>
          <label for="p"><b>Photo [jpg/jpeg/png/gif file only smaller than 500KB]</b></label>
          <input type="hidden" name="photonamef" id="ph" readonly>
          <input type="file" name="fileToUpload" id="fileToUpload" required>

          <hr>

          <button type="submit" name="addsavebtn" class="savebtn">Save</button>
        </div>

      </form>

    </div>
    <div class="col-sm">

      <h2>Database</h2>
      <p>Item List</p>

      <table id="dt" class="table table-striped">
        <tr>
          <th>ID</th>
          <th>Item Name</th>
          <th>Details</th>
          <th>Page Name</th>
          <th>Photo</th>
          <th>Action</th>

        </tr>

        <?php

                $select = $pdo->prepare("select * from item order by id desc");

                $select->execute();

                while ($row = $select->fetch(PDO::FETCH_OBJ)) {
                    echo "
    <tr>
    <td>$row->id</td>   
    <td>$row->itemname</td>
    <td>$row->details</td>
    <td>$row->pagename</td>
    <td ></img>
   <a href='uploads/$row->photo'><img style='height:80px; width:80px;' src='uploads/$row->photo'></a></td>
    
    
   
    <td>  <p>
    <a  href=\"item.php?del=" . $row->id  ."&photo=".$row->photo. "\" ><i class='bi bi-x-circle'></i>    </a>
    </a></p><br><p>    
    <a  href=\"item.php?id=" . $row->id  ."&name=".$row->itemname."&page=".$row->pagename."&photo=".$row->photo."&details=".$row->details. "\" ><i class='bi bi-arrow-up'></i>    </a>
    </a>
</p>
    </td>
    </tr>
    ";
                }
                ?>

      </table>

    </div>

  </div>
</div>

<?php
include_once("footer.php");

?>