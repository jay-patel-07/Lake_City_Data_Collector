
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!--<meta http-equiv="refresh" content="5">-->
  <link rel="stylesheet" href="ja.css">
  <link rel="stylesheet" media="only screen and (max-width: 799px)" href="mobile.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="ja.js"></script>
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
      <h1 class="head"> Avadh Lake City </h1>
      <p>  Welcome to the website of Avadh Lake City </p>
      <p> Co-operative Housing Society </p>
      <br>
      <form action="data.php" method="GET">
        	<input type=text name='search' placeholder="Search"style="display:block;width:217px "></input>
		  <select name="check" style="height: 31.5px;color: white;background-color:#8f5641; border-radius:8.5px; border-color: white; border-width: 2.2px;font-size:14px">
		  	<option selected disabled>-- Select --</option>
		  	<option value='name'>Name</option>
		  	<option value='house_no'>House No</option>
		  	<option value='blood'>Blood Group</option>
		  	<option value='profession'>Profession</option>
		  	<option value='mobile_no'>Mobile No</option>
		  	<option value='shabhasad'>Shabhasad No</option>
		  	<option value='shabhasad'>Receipt No</option>
		  	<option value='shabhasad'>DOB</option>
		  </select>
		  <button class="submit"> Submit </button>
      </form>
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
