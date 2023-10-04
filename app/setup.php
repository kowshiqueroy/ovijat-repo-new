<?php


 

function createDB() {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "app_db";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password);
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    

 // Drop database
 $sql = "DROP DATABASE ".$dbname.";";
 if ($conn->query($sql) === TRUE) {
   echo "Database droped successfully<br>";
  
  
 
 } else {
   echo "Error creating database: " . $conn->error;




 }



    // Create database
    $sql = "CREATE DATABASE IF NOT EXISTS ".$dbname.";";
    if ($conn->query($sql) === TRUE) {
      echo "Database created successfully<br>";
      $conn->close();
      createTable();
    
    } else {
      echo "Error creating database: " . $conn->error;
    }
}






function createTable() {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "app_db";

    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }

    // sql to create table
    $sql = "CREATE TABLE IF NOT EXISTS company (
       
        company_name VARCHAR(100) NOT NULL PRIMARY KEY,
        reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        
        if ($conn->query($sql) === TRUE) {
          echo "Table company created successfully<br>";
          
        } else {
          echo "Error creating table: " . $conn->error;
        }

// sql to create table
$sql = "CREATE TABLE IF NOT EXISTS role (

  id INT  AUTO_INCREMENT  PRIMARY KEY,
  role_name VARCHAR(100) NOT NULL,
  company_name VARCHAR(100) NOT NULL,
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  
  if ($conn->query($sql) === TRUE) {
    echo "Table role created successfully<br>";
  
  } else {
    echo "Error creating table: " . $conn->error;
  }





  // sql to create table
$sql = "CREATE TABLE IF NOT EXISTS user (

  id INT  AUTO_INCREMENT  PRIMARY KEY,
  user_name VARCHAR(100) NOT NULL,
  user_password VARCHAR(100) NOT NULL,
  role_name VARCHAR(100) NOT NULL,
  company_name VARCHAR(100) NOT NULL,
  reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
  )";
  
  if ($conn->query($sql) === TRUE) {
    echo "Table user created successfully<br>";
  
  } else {
    echo "Error creating table: " . $conn->error;
  }


  insertData();

}



function insertData () {


    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "app_db";


//company1
  $company_name="ovijat";
  $sql = "INSERT INTO company (company_name)
  VALUES ('$company_name')";
    $conn = new mysqli($servername, $username, $password, $dbname);


  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
    $conn->close();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

//company2
  $company_name="sharm";
  $sql = "INSERT INTO company (company_name)
  VALUES ('$company_name')";
    $conn = new mysqli($servername, $username, $password, $dbname);


  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
    $conn->close();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }



  //company3
  $company_name="LAM";
  $sql = "INSERT INTO company (company_name)
  VALUES ('$company_name')";
    $conn = new mysqli($servername, $username, $password, $dbname);


  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully<br>";
    $conn->close();
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }



//role1
$company_name="ovijat";
$role_name="admin";
$sql = "INSERT INTO role (role_name,company_name)
VALUES ('$role_name','$company_name')";
  $conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully<br>";
  $conn->close();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


//role2
$company_name="ovijat";
$role_name="manager";
$sql = "INSERT INTO role (role_name,company_name)
VALUES ('$role_name','$company_name')";
  $conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully<br>";
  $conn->close();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




//role1
$company_name="sharm";
$role_name="admin";
$sql = "INSERT INTO role (role_name,company_name)
VALUES ('$role_name','$company_name')";
  $conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully<br>";
  $conn->close();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


//role2
$company_name="sharm";
$role_name="manager";
$sql = "INSERT INTO role (role_name,company_name)
VALUES ('$role_name','$company_name')";
  $conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully<br>";
  $conn->close();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


//role1
$company_name="ovijat";
$role_name="Ast manager";
$sql = "INSERT INTO role (role_name,company_name)
VALUES ('$role_name','$company_name')";
  $conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully<br>";
  $conn->close();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


//role2
$company_name="ovijat";
$role_name="Purchaser";
$sql = "INSERT INTO role (role_name,company_name)
VALUES ('$role_name','$company_name')";
  $conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully<br>";
  $conn->close();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}




//role1
$company_name="LAM";
$role_name="Owner";
$sql = "INSERT INTO role (role_name,company_name)
VALUES ('$role_name','$company_name')";
  $conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully<br>";
  $conn->close();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


//role2
$company_name="LAM";
$role_name="manager";
$sql = "INSERT INTO role (role_name,company_name)
VALUES ('$role_name','$company_name')";
  $conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully<br>";
  $conn->close();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


//user1
$company_name="ovijat";
$role_name="admin";
$user_name="a";
$p="a";
$user_password=md5($p);
$sql = "INSERT INTO user (user_name,user_password,role_name,company_name)
VALUES ('$user_name','$user_password','$role_name','$company_name')";
  $conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully<br>";
  $conn->close();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



//user2
$company_name="ovijat";
$role_name="manager";
$user_name="a";
$p="a";
$user_password=md5($p);
$sql = "INSERT INTO user (user_name,user_password,role_name,company_name)
VALUES ('$user_name','$user_password','$role_name','$company_name')";
  $conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully<br>";
  $conn->close();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


//user2
$company_name="LAM";
$role_name="manager";
$user_name="a";
$p="a";
$user_password=md5($p);
$sql = "INSERT INTO user (user_name,user_password,role_name,company_name)
VALUES ('$user_name','$user_password','$role_name','$company_name')";
  $conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully<br>";
  $conn->close();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


//user2
$company_name="ovijat";
$role_name="admin";
$user_name="b";
$p="b";
$user_password=md5($p);
$sql = "INSERT INTO user (user_name,user_password,role_name,company_name)
VALUES ('$user_name','$user_password','$role_name','$company_name')";
  $conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully<br>";
  $conn->close();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


//user2
$company_name="sharm";
$role_name="admin";
$user_name="b";
$p="b";
$user_password=md5($p);
$sql = "INSERT INTO user (user_name,user_password,role_name,company_name)
VALUES ('$user_name','$user_password','$role_name','$company_name')";
  $conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully<br>";
  $conn->close();
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

















}

createDB();




?>




