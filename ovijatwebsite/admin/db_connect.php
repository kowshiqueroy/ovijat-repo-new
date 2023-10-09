<?php
//ovijattt_staff_db
 //ovijattt_admin

$sd="localhost";
//$ud="ovijattt_admin";
//$pd="B?b)*^XhRc6j";
//$dbd="ovijattt_staff_db";

$ud="root";
$pd="";
$dbd="staff_db";

 $db = new mysqli("$sd","$ud","$pd");
 //$dbs = new mysqli("$sd","$ud","$pd",$dbd);
 if($db->connect_errno > 0){
       die('Unable to connect to database [' . $db->connect_error . ']');  } 
   
 $db->query("CREATE DATABASE IF NOT EXISTS `$dbd`");
 
           mysqli_select_db($db,"$dbd");

   
        		                       
		    
		$stableYZ="CREATE TABLE IF NOT EXISTS Inorg (id int(11) NOT NULL auto_increment,
                 name varchar(300)NOT NULL,Phone varchar(300)NOT NULL,email varchar(100)NOT NULL,
                 website varchar(300)NOT NULL,year varchar(200)NOT NULL,pname varchar(1000)NOT NULL,type varchar(30)NOT NULL,
                 size decimal(10)NOT NULL,content longblob NOT NULL, PRIMARY KEY(id) )";
               $db->query($stableYZ);
							 
			   $stableZ="CREATE TABLE IF NOT EXISTS Profilepictures (id int(11) NOT NULL auto_increment,
                 ids varchar(30)NOT NULL,Category varchar(30)NOT NULL,name varchar(1000)NOT NULL,type varchar(30)NOT NULL,
                 Size decimal(10)NOT NULL,content longblob NOT NULL,
                 PRIMARY KEY(id) )";
               $db->query($stableZ);
			   
			    $stable1="CREATE TABLE IF NOT EXISTS Files (id int(11) NOT NULL auto_increment,
                                  Title varchar(300)NOT NULL,Name varchar(1000)NOT NULL,
                                 Type varchar(30)NOT NULL,Size decimal(10) NULL,
                                   content longblob NOT NULL,PRIMARY KEY(id) )";
                                 $db->query( $stable1);

       $job="CREATE TABLE IF NOT EXISTS Jobs (id int(11) NOT NULL auto_increment,
                                 job_deadline varchar(20)NOT NULL,
                                 job_title varchar(200)NOT NULL,
                                 job_details varchar(400)NOT NULL,
                               
                                 PRIMARY KEY(id) )";
                                $db->query( $job);

        $notice="CREATE TABLE IF NOT EXISTS Notices (id int(11) NOT NULL auto_increment,
                                notice_date varchar(200)NOT NULL,
                                notice_title varchar(200)NOT NULL,
                                notice_details varchar(400)NOT NULL,
                                notice_person varchar(5000)NOT NULL,
                              
                                PRIMARY KEY(id) )";
                               $db->query( $notice);
               
                  $stable56="CREATE TABLE IF NOT EXISTS Users (id int(11) NOT NULL auto_increment,
                                  Firstname varchar(50)NOT NULL, 
                                  Sirname varchar(50)NOT NULL,
                                  Mtitle Varchar(30)NOT NULL,
                                  MStatus varchar(30)NOT NULL, 
                                  Joining  varchar(30), 
                                  Dissmissed varchar(30)NOT NULL,                                   
                                  Rank varchar(30)NOT NULL,                                 
                                  Department varchar(50)NOT NULL,
                                  Phone varchar(20)NOT NULL,
                                  Email varchar(50)NOT NULL,
                                  NID varchar(50)NOT NULL,
                                  Staffid varchar(10)NOT NULL,
                                  Online varchar(300)NOT NULL,
                                  Picname varchar(1000)NOT NULL,
                                  Time bigint(30)NOT NULL,                         
                                  PRIMARY KEY(id) )";
                         $db->query($stable56); 
                         
                        
			   
			    $stable4="CREATE TABLE IF NOT EXISTS Administrator (
                                  Firstname varchar(30)NOT NULL,Sirname varchar(30)NOT NULL,
                                 Password varchar(30)NOT NULL,Email varchar(30)NOT NULL,PRIMARY KEY(Email) )";
                                      $db->query($stable4);
						
			 	 	
		
					$sql="SELECT * FROM Administrator ";					
                   $result=mysqli_query($db,$sql);
                   $rowcount=mysqli_num_rows($result);
                     
                       if($rowcount==0)
                         {
                           $enter="INSERT INTO Administrator (Password,Email,Firstname,Sirname) VALUES('itovijat12','it.ovijat@gmail.com','IT','Ovijat')";
                                  $db->query($enter);
								  
						   
                                                    $querydy = "INSERT INTO Files (Title,Name,Size,Type) ".
                                 "VALUES ('Staff','staff.csv','76','application/vnd.ms-excel')";                                 
                                     $db->query($querydy) or die('Errorr, query failed to upload');	
                                  
                          }
                     
					 		

?>