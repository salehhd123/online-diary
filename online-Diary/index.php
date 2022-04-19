<!DOCTYPE html>
<html>
<head>
	<meta name="google-signin-client_id" content="308103995366-umqq7if1hc5fieq51dj3q9gtnl9l0t6b.apps.googleusercontent.com">
	<title>
		index
	</title>
	<style >
	body{
		background-image: url("bk8.jpg");
		background-size: cover;
	}
nav
{
position:fixed;
top:0;
left:0;
width:100vw;
height: 8vh;
background-color: #8f1503  ;
}
.s
{
height: 53px;
width:100px;
float:right;
background-color:#8f1503 ;
color: white;
font-family: Trebuchet MS;
border-color: #8f1503;
font-size: 15px;
border-radius:8px;
opacity: 0%;
}
.s:hover{
	background-color: #C73720;
}
.s:focus{
	outline: none;
}
h2
{
  text-align:center; 
  margin:70px 90px;
  color:#373737 ;
  font-family: Trebuchet MS;
  font-size:35px;
}
.button
{
	margin: 15px 30px;
    text-align:left;
	width:425px;
	font-size: 20px;
	padding: 15px;
	color:#8f1503;
	border-color: #8f1503;
	border-width: 1.2px;
	font-family: Trebuchet MS;
	border-radius:12px;
	background-color: #e6e6e6;
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
</style>
</head>
<body >
<nav>
	<!-- <a href="login.php"> -->
		<button onclick="signOut()" class="button1"><b>Logout</b></button>
	<!-- </a> -->
</select>
	<br><br>
	<h2> online diary</h2>
	<button class="button" onclick="location.href='add notes.php'"><b>Write Notes</b></button><br>
	<button class="button" onclick="location.href='notes.php'"><b>View Old Notes</b></button><br>
</div>

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
</nav>
</body>
</html>