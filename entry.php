<?php
$servername="localhost";
$username="root";
$password="";
$data="dataEntry";

$conn=mysqli_connect($servername, $username, $password, $data);
error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="ja.css">
  <link rel="stylesheet" media="only screen and (max-width: 799px)" href="mobile.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <title>Document</title>
</head>
<body>
  <div class="main">
    <nav id="navbar">
      <a href="javascript:void(0);" class="navbar-toggle" id=js-navbar-toggle onclick="myFunction()">
        <i class="fa fa-bars"></i>
      </a>
      <div class="omegapic">
        <a href="profile.html"><img src="omega.png" class="omega"> </img> </a>
      </div>
      <ul id="myLinks">
        <li class="types"> <a href="index.php"> Home </a> </li>
        <li class="types"> <a href="facilities.html"> Facilities </a> </li>
        <li class="types"> <a href="facilities.html#findus"> FInd Us </a> </li>
        <li class="types"> <a href="signin.php"> Log In </a> </li>
      </ul>
      <div class="lakecitypic">
        <img src="lake_city.jpg" id="lakecity"></img>
      </div>
    </nav>
    <section id="home">
      <h1 class="head" style="margin-top: 215px"> Data Entry</h1>
      <form action="", method="GET">
      <input type=text name='name' placeholder="Name"style="display:block;width:200px"></input>
      <input type=text name='house_no' placeholder="House No."style="display:block;width:200px"></input>
      <input type=text name='mobile_no' placeholder="Mobile No."style="display:block;width:200px"></input>
      <input type=text name='profession' placeholder="Profession"style="display:block;width:200px"></input>
      <input type=text name='shabha' placeholder="Shabhasad No."style="display:block;width:200px"></input>
      <input type=text name='receipt' placeholder="Receipt No."style="display:block;width:200px"></input>
      <input type=date name='dob' placeholder="DOB"style="display:block;width:200px; padding-left:6px; height: 27px;"></input>
        	<select name="blood" style="display: block; margin: auto;height: 31.5px;color: white;background-color:#8f5641; border-radius:8.5px; border-color: white; border-width: 2.2px;font-size:14px; margin-top: 5px;">
		  	<option selected disabled>-- Blood Group--</option>
		  	<option value='A+ve'>A+ve</option>
		  	<option value='A-ve'>A-ve</option>
		  	<option value='B+ve'>B+ve</option>
		  	<option value='B-ve'>B-ve</option>
		  	<option value='O+ve'>O+ve</option>
		  	<option value='O-ve'>O-ve</option>
		  	<option value='AB+ve'>AB+ve</option>
		  	<option value='AB-ve'>AB-ve</option>
		  </select>
		<div style="display:block; margin:auto; padding-left:33px;padding-top: 6px;padding-bottom: 6px;font-size:20px; font-weight:bold;">
      <input type=radio name='gate' value="1"placeholder="Entry">Entry</input>&nbsp;&nbsp;&nbsp;
      <input type=radio name='gate' value="0" placeholder="Exit">Exit</input>
      </div>
      <input type="submit" name="save" value="Submit"style="display:block;cursor: pointer;margin:auto;width:100px;height:30px;color:white;background-color:#8f5641;"></input>
      </form>
      <?php
      	
      	  	$n= $_GET['name'];
      	  	$h= $_GET['house_no'];
      	  	$m= $_GET['mobile_no'];
      	  	$p= $_GET['profession'];
      	  	$b= $_GET['blood'];
      	  	$g= $_GET['gate'];
      	  	$s= $_GET['shabha'];
      	  	$r= $_GET['receipt'];
      	  	$dob= $_GET['dob'];
      	  	
      	  	$simple_string = $m; 
			$ciphering = "AES-128-CTR"; 
			$iv_length = openssl_cipher_iv_length($ciphering); 
			$options = 0;
			$encryption_iv = '1234567891011121'; 
			$encryption_key = "prOmega"; 
			$encryption = openssl_encrypt($simple_string, $ciphering, $encryption_key, $options, $encryption_iv); 

      	  	$t="SELECT * from entry where name='$n'";
      	  	$dd=mysqli_query($conn, $t);
  			$total=mysqli_num_rows($dd);
  			if($total!=0)
  			{
  				$q="UPDATE entry SET gate='$g' where name='$n'";
		  		$d=mysqli_query($conn, $q);
  			}
      	  	else if($g=='1')
      	  	{
			  	$q="INSERT INTO entry VALUES ('$n', '$h', '$encryption', '$p', '$b', '$g', '$s', '$r', '$dob')";
			  	$d=mysqli_query($conn, $q);
		  	}
      ?>
    </section>
    	  <div style="display: flex; justify-content: space-between;position: absolute;color: white; background-color: black; width: 100vw; left:0px; bottom: 0px">
	  	<p style="text-align: center; padding: 5px;"> (c) Copyright 2020 prOmega </p>
	  	<p style="text-align: center; padding: 5px;padding-right:155px"><a href="profile.html" style="color: white;"> Jay | Kevin | Dev</a></p>
	  	<!--<img src="omega.png" style="width:30px;"></img>-->
	  	<p style="text-align: center; padding: 5px;padding-right: 10px"> Ω </p>
	  </div>
  </div>
</body>
</html>
