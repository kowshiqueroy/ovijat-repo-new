<!DOCTYPE html>
<html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/10.6.4/math.js"
    integrity="sha512-BbVEDjbqdN3Eow8+empLMrJlxXRj5nEitiCAK5A1pUr66+jLVejo3PmjIaucRnjlB0P9R3rBUs3g5jXc8ti+fQ=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/mathjs/10.6.4/math.min.js"
    integrity="sha512-iphNRh6dPbeuPGIrQbCdbBF/qcqadKWLa35YPVfMZMHBSI6PLJh1om2xCTWhpVpmUyb4IvVS9iYnnYMkleVXLA=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

  <style>
    table {

      border: 1px solid black;
      position: fixed;
      bottom: 100px;
      right: 15px;
      z-index: 9;
      display: none;
    



    }

    input[type="button"] {
      width: 100%;
      padding: 15px 15px;
      background-color: black;
      color: white;
      font-size: 20px;
      font-weight: bold;
      border: none;
      border-radius: 5px;
      opacity: 0.9;
    }

    input[type="text"] {
      padding: 20px 20px;
      font-size: 24px;
      font-weight: bold;
      border: none;
      border-radius: 5px;
      border: 2px solid black;
      opacity: 1;
    }
  </style>

  <style>
    body {
      font-family: "Lato", sans-serif;
    }

    .sidebar {
      height: 100%;
      width: 0;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      transition: 0.5s;
      padding-top: 60px;
    }

    .sidebar a {
      padding: 8px 8px 8px 32px;
      text-decoration: none;
      font-size: 25px;
      color: #818181;
      display: block;
      transition: 0.3s;
    }

    .sidebar a:hover {
      color: #f1f1f1;
    }

    .sidebar .closebtn {
      position: absolute;
      top: 0;
      right: 25px;
      font-size: 36px;
      margin-left: 50px;
    }

    .openbtn {
      font-size: 20px;
      cursor: pointer;
      background-color: #111;
      color: white;
      padding: 10px 15px;
      border: none;
    }

    .openbtn:hover {
      background-color: #444;
    }

    #up {
      display: flex;


    }

    #main {

      position: fixed;
      top: 10px;
      left: 10px;
      opacity: 0.7;
    }

    #account {
      position: fixed;
      top: 10px;
      right: 10px;
      opacity: 0.7;
      background-color: black;
    }

    #downmenu {
      position: fixed;
      bottom: 10px;
      background-color: black;
      width: 100%;
      padding: 20px;



    }

    #downbtn1 {
      margin-left: 27%;

    }

    #downbtn2 {
      margin-left: 8%;

    }

    #downbtn3 {
      margin-left: 8%;

    }

    #downbtn4 {
      margin-left: 8%;

    }

    #downbtn5 {
      margin-left: 8%;
    

    }


    #content {
      transition: margin-left .5s;
      padding-top: 30px;


    }

    #timestamp {
 
      padding: 0 10px 0 10px;

      color: white;

    }

    /* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
    @media screen and (max-height: 550px) {
      .sidebar {
        padding-top: 15px;
      }

      .sidebar a {
        font-size: 15px;
      }

      #downbtn1 {
      margin-left: 15%;

    }

    #downbtn2 {
      margin-left: 8%;

    }

    #downbtn3 {
      margin-left: 8%;

    }

    #downbtn4 {
      margin-left: 8%;

    }

    #downbtn5 {
      margin-left: 8%;
    

    }

  



    }
  </style>
</head>

<body>

  <div id="mySidebar" class="sidebar">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
    <a href="#">About</a>
    <a href="#">Services</a>
    <a href="#">Clients</a>
    <a href="#">Contact</a>
  </div>

  <div id="up">

    <div id="main">
      <button class="openbtn" onclick="openNav()">☰ khoriddar.com</button>

    </div>

    <div id="account">

      <p id="timestamp"></p>
    </div>

    <div id="downmenu">
      <a class="downbtn" id="downbtn1" onclick="calct()"><i class="fa fa-sign-out"
          style="font-size:20px;color:white"></i></a>
      <a class="downbtn" id="downbtn2" onclick="calct()"><i class="fa fa-bell"
          style="font-size:20px;color:white"></i></a>
      <a class="downbtn" id="downbtn3" onclick="calct()"><i class="fa fa-bars"
          style="font-size:20px;color:white"></i></a>
      <a class="downbtn" id="downbtn4" onclick="pdfdwn()"><i class="fa fa-download"
          style="font-size:20px;color:white"></i></a>
      <a class="downbtn" id="downbtn5" onclick="calct()"><i class="fa fa-calculator"
          style="font-size:20px;color:white"></i></a>

    </div>
    <script>
      function calct() {
        var x = document.getElementById("calcu");
        if (x.style.display === "none") {
          x.style.display = "block";

         
        } else {
          x.style.display = "none";
        }
      }

      function pdfdwn(){


window.print();

      }
    </script>

    <table id="calcu">
      <tr>
        <td colspan="3"><input type="text" id="result"></td>
        <td><input type="button" value="c" onclick="clr()" /> </td>
      </tr>
      <tr>
        <td><input type="button" value="1" onclick="dis('1')" onkeydown="myFunction(event)"> </td>
        <td><input type="button" value="2" onclick="dis('2')" onkeydown="myFunction(event)"> </td>
        <td><input type="button" value="3" onclick="dis('3')" onkeydown="myFunction(event)"> </td>
        <td><input type="button" value="/" onclick="dis('/')" onkeydown="myFunction(event)"> </td>
      </tr>
      <tr>
        <td><input type="button" value="4" onclick="dis('4')" onkeydown="myFunction(event)"> </td>
        <td><input type="button" value="5" onclick="dis('5')" onkeydown="myFunction(event)"> </td>
        <td><input type="button" value="6" onclick="dis('6')" onkeydown="myFunction(event)"> </td>
        <td><input type="button" value="*" onclick="dis('*')" onkeydown="myFunction(event)"> </td>
      </tr>
      <tr>
        <td><input type="button" value="7" onclick="dis('7')" onkeydown="myFunction(event)"> </td>
        <td><input type="button" value="8" onclick="dis('8')" onkeydown="myFunction(event)"> </td>
        <td><input type="button" value="9" onclick="dis('9')" onkeydown="myFunction(event)"> </td>
        <td><input type="button" value="-" onclick="dis('-')" onkeydown="myFunction(event)"> </td>
      </tr>
      <tr>
        <td><input type="button" value="0" onclick="dis('0')" onkeydown="myFunction(event)"> </td>
        <td><input type="button" value="." onclick="dis('.')" onkeydown="myFunction(event)"> </td>

        <!-- solve function call function solve to evaluate value -->
        <td><input type="button" value="=" onclick="solve()"> </td>

        <td><input type="button" value="+" onclick="dis('+')" onkeydown="myFunction(event)"> </td>
      </tr>
    </table>

    <script>
      // Function that display value 
      function dis(val) {
        document.getElementById("result").value += val
      }

      function myFunction(event) {
        if (event.key == '0' || event.key == '1' ||
          event.key == '2' || event.key == '3' ||
          event.key == '4' || event.key == '5' ||
          event.key == '6' || event.key == '7' ||
          event.key == '8' || event.key == '9' ||
          event.key == '+' || event.key == '-' ||
          event.key == '*' || event.key == '/')
          document.getElementById("result").value += event.key;
      }
      var cal = document.getElementById("calcu");
      cal.onkeyup = function(event) {
        if (event.keyCode === 13) {
          console.log("Enter");
          let x = document.getElementById("result").value
          console.log(x);
          solve();
        }
      }
      // Function that evaluates the digit and return result 
      function solve() {
        let x = document.getElementById("result").value
        let y = math.evaluate(x)
        document.getElementById("result").value = y
      }
      // Function that clear the display 
      function clr() {
        document.getElementById("result").value = ""
      }
    </script>

  </div>

  <div id="content">

    <h1>Main Content Here. Main Content Here. Main Content Here. Main Content Here. <h1>Main Content Here. Main Content
        Here. Main Content Here. Main Content Here.</h1>
    </h1>
    <h1>Main Content Here. Main Content Here. Main Content Here. Main Content Here. <h1>Main Content Here. Main Content
        Here. Main Content Here. Main Content Here.</h1>
    </h1>
    <h1>Main Content Here. Main Content Here. Main Content Here. Main Content Here.</h1>
    <h1>Main Content Here. Main Content Here. Main Content Here. Main Content Here.</h1>
    <h1>Main Content Here. Main Content Here. Main Content Here. Main Content Here.</h1>
    <h1>Main Content Here. Main Content Here. Main Content Here. Main Content Here.</h1>
    <h1>Main Content Here. Main Content Here. Main Content Here. Main Content Here.</h1>
    <h1>Main Content Here. Main Content Here. Main Content Here. Main Content Here.</h1>
    <h1>Main Content Here. Main Content Here. Main Content Here. Main Content Here.</h1>
    <h1>Main Content Here. Main Content Here. Main Content Here. Main Content Here.</h1>
    <h1>Main Content Here. Main Content Here. Main Content Here. Main Content Here.</h1>
    <h1>Main Content Here. Main Content Here. Main Content Here. Main Content Here.</h1>
    <h1>Main Content Here. Main Content Here. Main Content Here. Main Content Here.</h1>
    <h1>Main Content Here. Main Content Here. Main Content Here. Main Content Here.</h1>
    <h1>Main Content Here. Main Content Here. Main Content Here. Main Content Here.</h1>
    <h1>Main Content Here. Main Content Here. Main Content Here. Main Content Here.</h1>
    <h1>Main Content Here. Main Content Here. Main Content Here. Main Content Here.</h1>
    <h1>Main Content Here. Main Content Here. Main Content Here. Main Content Here.</h1>
    <h1>Main Content Here. Main Content Here. Main Content Here. Main Content Here.</h1>

  </div>

  <script>
    var x = setInterval(function() {
      var today = new Date();
      var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
      var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
      var dateTime = date + ' ' + time;
      document.getElementById("timestamp").innerHTML = dateTime;
    }, 1000);
  </script>

  <script>
    function openNav() {
      document.getElementById("mySidebar").style.width = "250px";
      document.getElementById("content").style.marginLeft = "250px";
      document.getElementById("main").style.display = "none";
    }

    function closeNav() {
      document.getElementById("mySidebar").style.width = "0";
      document.getElementById("content").style.marginLeft = "10px";
      document.getElementById("main").style.display = "block";
    }
  </script>

</body>

</html>