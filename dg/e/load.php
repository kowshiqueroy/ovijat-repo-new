<html>
<head>
<title>AUTO REFRESH</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
    <center>
    <h3></h3>
    </center>
<script>
    $(document).ready(function(){  
        setInterval(function(){   
            $("h3").load("data.php");
        }, 1000);
    });
    </script>
</body>
</html>