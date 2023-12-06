
<div id="loader">

 <center> <p id="loaderp"><?php echo $company_name_db;?></p> <p id="loaderp2">Web App<br>Developer: kowshiqueroy@gmail.com</p>  </center> 
 

</div>

</main>
    </div>
</div>

<?php


?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js">
</script>

<script>
    $(document).ready(function() {
        $('.js-example-basic-single').select2({
            matcher: function(term, text) {
                // If search is empty we return everything
                if ($.trim(term.term) === '') return text;
                // Compose the regex
                var regex_text = '.*';
                regex_text += (term.term).split('').join('.*');
                regex_text += '.*'
                
                // Case insensitive
                var regex = new RegExp(regex_text, "i");
                // If no match is found we return nothing
                if (!regex.test(text.text)) {
                    return null;
                }
                // Else we return everything that is matching
                return text;
            }
        });
    });
</script>


</script>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }



    $(document).ready(function(){   
        window.setTimeout('fadeout();', 200);
        
    });

    function fadeout(){
        $('#loader').delay(200).fadeOut('slow', function() {
           $('.notLoaded').removeClass('notLoaded');
        });
    }


</script>



<?php


$ip = '';
if (isset($_SERVER['HTTP_CLIENT_IP']))
    $ip = $_SERVER['HTTP_CLIENT_IP'];
else if(isset($_SERVER['HTTP_X_FORWARDED_FOR']))
    $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
else if(isset($_SERVER['HTTP_X_FORWARDED']))
    $ip = $_SERVER['HTTP_X_FORWARDED'];
else if(isset($_SERVER['HTTP_FORWARDED_FOR']))
    $ip = $_SERVER['HTTP_FORWARDED_FOR'];
else if(isset($_SERVER['HTTP_FORWARDED']))
    $ip = $_SERVER['HTTP_FORWARDED'];
else if(isset($_SERVER['REMOTE_ADDR']))
    $ip = $_SERVER['REMOTE_ADDR'];
else
    $ip = 'UNKNOWN';


   // $ip="103.106.239.79"; //test
   // echo $_SESSION["ip"];
if ($_SESSION["ip"] !== $ip) {
 //   header('location: logout.php');


 echo "<script>window.location.replace('logout.php');</script>";

}
?>
