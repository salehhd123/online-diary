<?php
session_start();
$uname=$_SESSION['userid'];
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="google-signin-client_id" content="308103995366-umqq7if1hc5fieq51dj3q9gtnl9l0t6b.apps.googleusercontent.com">

	<title>
		Add New-notes
	</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<style >
	body{
		background-image: url("bk8.jpg");
			background-size: cover;
	}
nav
{
position:absolute;
top:0;
left:0;
width:100vw;
height: 8vh;
background-color: #8f1503 ;
}
.button{
display:inline;
background-color: #8f1503;
font-family: Trebuchet MS;
border-color: #8f1503;
height:53px;
border-width: 1.2px;
border-style: unset;
color:white;
font-size: 15px;
margin-left:40px;
border-radius: 6px;
cursor: pointer;
}
.button:hover
{
	background-color:#C73720;
}
.button:focus
{
	outline: none;
}
.button1{
    float: right;
    margin-right: 20px;
display:inline;
background-color: #8f1503 ;
font-family: Trebuchet MS;
border-color: #8f1503;
height:53px;
border-width: 1.2px;
border-style: unset;
color:white;
font-size: 15px;
margin-left:40px;
border-radius: 6px;
cursor: pointer;
}
.button1:hover
{
    background-color:#C73720;
}
.button1:focus
{
    outline: none;
}
.btn {
    background-color:#e6e6e6 ; 
    border: none; 
    color:#933A16; 
    padding: 8px 16px; 
    font-size: 19px; 
    cursor: pointer; 
    margin-top:-15px;
}
.btn:hover {
    background-color: #d6d6d6;
}
.d1{
	
	background-color: #e6e6e6;
	margin-left: 40px;
	margin-right: 40px;
	margin-top:25px;
	height:28px;
	padding-top: 10px;
	padding-left: 15px;
	font-family: Trebuchet MS;
	border-radius: 8px;
}

h1{
	margin-top: 30px;
	margin-left: 40px;
	font-family: Trebuchet MS;
	font-size:30px;
	color:#373737 ;
}
#hr1{
	margin-top:-20px;
	margin-left: 40px;
	margin-right: 40px;
	background-color: #e6e6e6;
}
label{
margin-left:180px;
}
input,textarea,select{
border-radius:10px;
height:30px;
width:60%;
float:right;
margin-right:180px;
font-size:17px; 
font-family: Trebuchet MS;
}
.d2{
background-color: #e6e6e6;
margin-left: 20px;
margin-right: 20px;
margin-top:25px;
height:35px;
padding-top: 5px;
padding-left: 15px;
padding-bottom:5px;
font-family: Trebuchet MS;
border-radius: 8px;
padding-bottom: 2px;
}
#f1{
margin-top:220px;
padding:20px;
font-family: Trebuchet MS;
}
#btn1{
	background-color:#8f1503;
	color:white;
	border:none;
	width:100px;
	height:30px;
	margin-right:15px;
	border-radius:10px;
	font-family: Trebuchet MS;
	}
#btn2{
background-color:#8f1503;
color:white;
border:none;
width:100px;
height:30px;
margin-right:250px;
border-radius:10px;
font-family: Trebuchet MS;
font-size:17px;
}
#btn1:hover,#btn2:hover{
background-color: #C73720;
}
#b1{
background-color:#8f1503;
color:white;
border:none;
width:100px;
height:30px;
margin-right:10px;
border-radius:10px;
font-size:20px;
font-family: Trebuchet MS;
}
#b1:hover{
background-color: #C73720;
}
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 170px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
a{
   font-family: Trebuchet MS; 
}
</style>
</head>
<body>
<nav>


</div>

<!-- <button class="button1" onclick="location.href='login page.php'"><b>Logout</b></button><br><br> -->
<button onclick="signOut()" class="button1"><b>Logout</b></button><br><br>
<div class="d1"><button class="btn" onclick="location.href='index.php'"><i class="fa fa-home"></i></button> / <b style="color:#8f1503">Write Notes</b> </div>
<h1> Write notes </h1>
</nav>
<form name="myform" id="f1" action="" method="post">
<label for="nid">Nid<b style="color:red">*</b></label>
<input type="text" id="nid" name="nid" required><br><br><br>
<label for="notes">Notes<b style="color:red">*</b></label>
<input type="text" id="notes" name="notes" required><br><br><br>
<label for="date">Date<b style="color:red">*</b></label>
<input type="date" id="date" name="date"required><br><br><br>
<label for="time">Time<b style="color:red">*</b></label>
<input type="time" id="time" name="time"required><br><br><br>

<p style="text-align:right;margin-right:200px"><b style="color:red">*</b>- Required field</p>
<div class="d2">
<input type="submit" id="b1" onclick='alert("the diary is saved!");' value="Save">
<button id="btn2">Cancel</bottun>
</div>
</form>
<script>
var button =document.getElementById("btn2");
button.addEventListener("click",()=>{
var a = confirm("you are about to cancle write diary!");
if(a){
	window.location.href='index.php';	
}else{
	console.log("false");
}
})
	</script>
</body>
</html>




<script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
<script>

  function signOut() {
    setTimeout(function(){
        gapi.load('auth2', function() {
                    gapi.auth2.init().then(function(){
                        var auth2 = gapi.auth2.getAuthInstance();
                        auth2.signOut().then(function(){
                            // console.log("ok");
                            setTimeout(function(){
                                if (true) {
                                    window.location = "logout.php";                             
                                }
                            },500)
                            // window.location = "/logout.php/state=not_logged_in";

                        });
                    });

                });
    },500)
  }
</script>




<?php
$con=mysqli_connect("sql105.epizy.com","epiz_31321105","cejGgLI41My5","epiz_31321105_saa");
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
$nid=filter_input(INPUT_POST, 'nid');
$notes=filter_input(INPUT_POST, 'notes');
$date=filter_input(INPUT_POST, 'date');
$time=filter_input(INPUT_POST, 'time');
$username=filter_input(INPUT_POST, 'username');
$result=mysqli_query($con,"INSERT INTO notes (nid, notes, date, time,username) VALUES('$nid','$notes','$date','$time','$uname')");
if (!$result)
  {

  }

mysqli_close($con);
?>









