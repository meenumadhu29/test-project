<?php
session_start();
?>

<!doctype html>
<html>
<head>
<title>crime</title>
<script type="text/javascript" src="img.js"> </script>
<link rel="stylesheet" type="text/css" href="login.css">
<style>
.vertical-menu {
    width: 200px;
    
}
body {
    font-family: Arial, Helvetica, sans-serif;
    background-color: #f1f1f1;
}

.vertical-menu a {
    background-color: #eee;
    color: black;
    display: block;
    padding: 12px;
    text-decoration: none;
    
}

.vertical-menu a:hover {
    background-color: #ccc;
}

.vertical-menu a.active {
    background-color: #4CAF50;
    color: white;
}


* {
    box-sizing: border-box;
}

/* Add padding to containers */
.container {
    padding: 16px;
    background-color:#f1f1f1;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: white;
}

input[type=text]:focus, input[type=password]:focus {
    background-color:#ddd;
    outline: none;
}

/* Overwrite default styles of hr */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4da6ff;
    color: white;
    padding: 16px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
}


</style>
</head>
<body>


<img src="mainimg.png" height="175" width="1315s">
<header>
<nav role="main">
<ul class="ul">
<li class="li"><a href ="home.html">Home</a></li>&nbsp 
<li  class="li"><a href ="report.html">Report Complaint</a></li>&nbsp 
<li class="li"><a href ="login.html"> Login</a></li>&nbsp
<li class="li"><a href ="news.html">News</a></li>&nbsp 
<li class="li"><a href ="help.html">Help</a></li>&nbsp 
<li style="float:right"><a class="active" href="#about">About Us</a></li>
</ul>
</nav>
</header>

<table>
<tr>
<td valign="top">
<div class="vertical-menu">
  <a href="user.html">User Login</a>
  <a href="pol.html">Police Login</a>
   <a href="reg.html">Create User Account</a>
<a href="polreg.html">Create Police Account</a>
</div>
</td>

<td valign="top" >
<h1>Welcome</h1>
<h4>Account created successfully!</h4>
</td>
</tr>
</table>

</body>
</html>