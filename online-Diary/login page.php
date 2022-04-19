
<?php
$con=mysqli_connect("sql105.epizy.com","epiz_31321105","cejGgLI41My5","epiz_31321105_saa");
$db="project";
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}




if(isset($_POST['username'])){
    $sql= "SELECT * from sign_up where userid='".$_POST['username']."' AND pass='".$_POST['password']."'";
    $result = mysqli_query($con,$sql);
      if(mysqli_num_rows($result) == 1) {
          session_start();
          $_SESSION['userid']=$_POST['username'];
          $_SESSION['pass']=$_POST['password'];
          if($_POST['remember_me']=='1' || $_POST['remember_me']=='on')
          {
              $hour=time()+3600*24*30;
              setcookie($_SESSION['userid'],$_POST['username'],$hour);
              setcookie($_SESSION['pass'],$_POST['password'],$hour);
          }
           header("location: index.php");
           exit();
      }else {
         echo "<p style='margin-top:55px;' >" . "Your username or password is invalid"."</p>";
         exit();
      }
}

/* if(isset($_REQUEST['type']) && $_REQUEST['type']=="gmail"){
    $email=$_REQUEST['email'];
    $pass='';
    $type="GOOGLE";
    $gmail_id=$_REQUEST['id'];
    $sql= "SELECT * from sign_up where gmail_id='".$gmail_id."'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) != 1) {
        $insertSQL="INSERT INTO `sign_up`(`email`,  `pass`,  `type`, `gmail_id`) VALUES ('".$email."','".$pass."','".$type."','".$gmail_id."')";
        mysqli_query($con,$insertSQL);
    }

    $sql= "SELECT * from sign_up where gmail_id='".$gmail_id."'";
    $result = mysqli_query($con,$sql);
    if(mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['userid']=$_POST['username'];
        $_SESSION['pass']=$_POST['password'];
        if($_POST['remember_me']=='1' || $_POST['remember_me']=='on')
        {
            $hour=time()+3600*24*30;
            setcookie($_SESSION['userid'],$_POST['username'],$hour);
            setcookie($_SESSION['pass'],$_POST['password'],$hour);
        }
        header("location: index.php");
        exit();
    }
} */
mysqli_close($con);
?>

<html>
<head>
<meta name="google-signin-client_id" content="308103995366-umqq7if1hc5fieq51dj3q9gtnl9l0t6b.apps.googleusercontent.com">

<script type="text/javascript">

 
  function checkForm(form)
  {
    if(form.username.value == "") {
      alert("Error: Username cannot be blank!");
      form.username.focus();
      return false;
    }
    re = /^\w+$/;
    if(!re.test(form.username.value)) {
      alert("Error: Username must contain only letters, numbers and underscores!");
      form.username.focus();
      return false;
    }
	
	if(form.password.value == "") {
      alert("Error: Password cannot be blank!");
      form.username.focus();
      return false;
    }
	re = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{5,}$/;
	if(!re.test(form.password.value)) {
      alert("Error: Password must contain atleast one small letter, capital letter, number and a minimum length of 6 characters!");
      form.password.focus();
      return false;
    }
    return true;
  }





</script>

  <title>
    Login page
  </title>
  <style>
 body
{
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
background-color:   #8f1503   ;
}
.h1
{
  text-align:center; 
  margin:90px 90px;
  font-family: Trebuchet MS;
  font-size:35px;
  color: #373737 ;
}
.c1
{
  border-radius:4px;
  width:250px;
  height:28px;
  font-family: Trebuchet MS;
  padding-left: 10px;
  background:transparent;
  outline:none;
  outline-style: none;
  border-top:none;
  border-left: none;
  border-right: none;
  border-bottom: 2px solid #8f1503;
}
input[type=checkbox] {
    visibility: ;
}
.checkboxOne {
    width: 40px;
    height: 0px;
    padding-bottom: 5px;
    padding-top: 3px;
    background: #8f1503;
    margin-left: 42px;
    top: 14px;
    position: relative;
    border-radius: 3px;
     cursor: pointer;
     transition: all .5s ease;
}
.checkboxOne label {
    display: block;
    width: 16px;
    height: 16px;
    border-radius: 50%;
    transition: all .5s ease;
    cursor: pointer;
    position: absolute;
    top:  -4px;
    left: -3px;
    background: #ccc;
}
.checkboxOne input[type=checkbox]:checked + label {
    left: 27px;
}
div
{
  /* margin:2px 520px; 
  margin-top: -60px; */
  /*background-color: #e6e6e6;
  border:2px solid #8f1503  ; */
  text-align:center;
  border-radius:8px;
  padding-top: 25px;
  padding-bottom: -24px;
font-family: Trebuchet MS;
}
input::placeholder{
  color: black;
}
#p1
{
  color: black ;
  font-family:Trebuchet MS ;
  margin:17px 50px;
  font-size: 15px;
  padding-top: 10px;
  margin-left:10px;
}
.abcRioButton{
height: 50px;
    width: 340px;
    max-width: 100%;
    margin: auto;
    all:unset;
    
}
.abcRioButtonContents{
/* border: 2px solid red !important;
    padding: 20px;
    background-color: red; */ 
    background-color:  #8f1503 !important  ; 
  margin:38px 2px ;
  padding:12px;
  padding-bottom: 8px;
  padding-top: 8px;
  color:white;
  border-color:#8f1503  ;
  font-family: Trebuchet MS;
  border-radius:5px;

        
}
.abcRioButtonContentWrapper{
    width:50%;
    margin:auto;
}
.abcRioButtonIcon{
    display:none;
}
.button 
{background-color:  #8f1503   ; 
  margin:38px 2px ;
  padding:12px;
  padding-bottom: 8px;
  padding-top: 8px;
  color:white;
  border-color:#8f1503  ;
  font-family: Trebuchet MS;
  border-radius:5px;}
  .button:hover
  {
    background-color: #C73720;
  }
</style>
</head>
<body>
    
  <nav id="home">
<p class="h1"><br><br>
  <div id="my-signin2"></div>
	<button class="signout_all" style="display: none;" onclick="signOut()"></button>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" onsubmit="return checkForm(this);">
<div>
    <img src="final.png" width="100px" height="100px" radius="4px"><br><br><br>
<input class="c1" type="text" name="username" placeholder="Username"><br><br><br>
<input class="c1" type="password" name="password" placeholder="Password"><br><br>
    <br>
	
<input class="button" type="submit" value="Login" name="login">
<button class="button" type="button" onclick="location.href='sign_up.php'"><b>Sign up</b></button>

  </div>
  </form>

  
</nav>

   
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

   <script src="https://apis.google.com/js/platform.js?onload=renderButton" async defer></script>
<script >
let btn_sign = document.querySelector("#not_signed_ind89540jxbklr");
console.log(btn_sign , "btn")

    function onSuccess(googleUser) {
           var email=googleUser.getBasicProfile().getEmail();
           var id = googleUser.getBasicProfile().getId();
           var name = googleUser.getBasicProfile().getName();

           jQuery.ajax({
               type: "POST",
               url: "singupgoogle.php",
               data: {
                   email: email,
                   id: id,
                   name: name,
               },
               success: function(data) {
                   console.log(data);
                   setTimeout(function(){
                    window.location.href="http://online---diary.epizy.com/index.php";
                },500);
                   // jQuery(".inner-bg, #inner_page_infor").hide();
                   // jQuery(".show_registration").show();
                   // jQuery(".show_registration .inner_registration").append(data);
               },
               error: function(error) {
                   console.log('error'+error);

               }
           }); 
           // setTimeout(function(){
           //      
           //  },1000)
           // window.location.href="http://online---diary.epizy.com/singupgoogle.php?type=gmail&email="+email+"&id="+id+"&name="+name+"";

          // console.log('Logged in as: ' + googleUser.getBasicProfile().getName());

        }
        function onFailure(error) {
          console.log(error);
        }
        function renderButton() {
          gapi.signin2.render('my-signin2', {
            'scope': 'profile email',
            'width': 340,
            'height': 50,
            'longtitle': true,
            'theme': 'dark',
            'onsuccess': onSuccess,
            'onfailure': onFailure
          });
        }
        


</script>
  
</body>
</html>


