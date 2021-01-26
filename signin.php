<?php
$servername="localhost";
$username="root";
$password="";
$data="login";

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
      <h1 class="head"> Log In</h1>
      <form action="", method="GET">
		  <input type="text" name='user' placeholder="UserName"style="display:block;width:200px"></input>
		  <input type="password" name='pass' placeholder="Password"style="display:block;height:25px; padding-left: 10px;width:200px"></input>
		  <input type="submit" name="save" value="Submit"style="display:block;cursor: pointer;margin:auto;margin-top:5px;width:100px;height:30px;color:black;color: white;background-color:#8f5641;"></input>
		<!--  <a href="entry.html"> <button class="submit">Submit</button></a>-->
	  </form>
    </section>
    	  <div style="display: flex; justify-content: space-between;position: absolute;color: white; background-color: black; width: 100vw; left:0px; bottom: 0px">
	  	<p style="text-align: center; padding: 5px;"> (c) Copyright 2020 prOmega </p>
	  	<p style="text-align: center; padding: 5px;padding-right:155px"><a href="profile.html" style="color: white;"> Jay | Kevin | Dev</a></p>
	  	<!--<img src="omega.png" style="width:30px;"></img>-->
	  	<p style="text-align: center; padding: 5px;padding-right: 10px"> Ω </p>
	  </div>
  </div>
    <?php
  	$n= $_GET['user'];
  	$p=$_GET['pass'];
	$q="SELECT * FROM entry WHERE username='$n' and password='$p'";
  	$d=mysqli_query($conn, $q);
  	$total=mysqli_num_rows($d);
  	if($total!=0)
  	{
	  	echo $n;
	  	echo $p;
  		header('Location: entry.php');
  	}
  
  ?>
</body>
</html>
