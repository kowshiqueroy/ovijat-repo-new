<?php
include 'index-head.php';
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div style="margin-left:100px">
  <h1>Setup Your Company</h1>

</div>


<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.formsetup {
  border-radius: 5px;
  background-color: #f2f2f2;
    padding: 20px;
  margin-left: 100px;
  max-width:50%;
}
</style>
<body>  



<div class="formsetup">
  <form action="setupcompany_action.php" method="post">
    <label for="fname">Company Name</label>
    <input type="text" id="fname" name="c" placeholder="" required>

    <label for="lname">Admin mail</label>
    <input type="text" id="lname" name="u" placeholder="" required>


    <label for="lname">Password</label>
    <input type="text" id="lname" name="p" placeholder="">

    <label for="country">Setup Type</label>
    <select id="setup_type" name="setup_type" required>
    <option value="demo">Demo for 1 hour</option>
      <option value="license_code">License Code</option>

    </select>

    <label for="license_code" class="license_code">License Code</label>
    <input type="text" class="license_code" name="license_code" placeholder="">
  
    <input type="submit" value="Submit" name="submit">
  </form>
</div>

</script>
<script type="text/javascript">
    $(document).ready(function(){


      $(".license_code").hide();
      $("#setup_type").on("change",function(){
        var d1 = String($(this).val());

       if(d1=="license_code") {
            $(".license_code").show();
       }
       else {
            $(".license_code").hide();
       }

      });

     
    });

    
  


  </script>

<?php
include 'index-foot.php';
?>