<?php
 $connection=mysqli_connect("localhost","root","") or die("it didn't connect to database main".mysqli_errno());
  //crrating  a database from here below
     $create="CREATE DATABASE kitweBoys";
	    $createquery=mysqli_query($connection,$create);
	      if($create){echo "it has created database CAVENDISH";}
		    else{die("it didnt create database".mysqli_error($connection));}	

 mysqli_select_db($connection,"cavendish");
//admin table below

		 
$createtable="CREATE TABLE applicant
	(ID int(255) not null auto_increment primary key,
	    AdminID_number VARCHAR(255) NOT NULL,
	      Admin_name VARCHAR(255) NOT NULL,
		   status VARCHAR(10) NOT NULL)";
	        $createtablequery=mysqli_query($connection,$createtable);
              if($createtablequery){echo "it has created table ADMIN";} 
		         else{die("it hasnt created ADMIN database because".mysqli_error($connection));};
			   
//create tables below
	
$createtable="CREATE TABLE student
	 (ID int(255) not null auto_increment primary key,
	    student_number VARCHAR(255) NOT NULL,
	    student_name VARCHAR(255),
		course VARCHAR(255),
		nationality VARCHAR(255),
		phonenumber VARCHAR(255),
		email VARCHAR(255),
		passportphoto VARCHAR(255),
		results VARCHAR(255),
        status VARCHAR(10) NOT NULL)";//IF POSIIBLE CAN BE NULL
	        $createtablequery=mysqli_query($connection,$createtable);
               if($createtablequery){echo "it has created table student";} 
		           else{die("it hasnt created student database because".mysqli_error($connection));};
			        

			   
   exit();
?>