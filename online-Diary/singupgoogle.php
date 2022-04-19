<?php

session_start();
$con=mysqli_connect("sql105.epizy.com","epiz_31321105","cejGgLI41My5","epiz_31321105_saa");

$db="project";

if (mysqli_connect_errno())

{

echo "Failed to connect to MySQL: " . mysqli_connect_error();

}

// if(isset($_REQUEST['type']) && $_REQUEST['type']=="gmail"){

    $email=$_REQUEST['email'];

    $name=$_REQUEST['name'];

    $pass='';

    $type="GOOGLE";
    $confrim = '';
    $mobile = '';
    $gmail_id=$_REQUEST['id'];

    // print_r($gmail_id);    
    // die();
    $sql= "SELECT * from sign_up where gmail_id='".$gmail_id."'";

	$result = mysqli_query($con,$sql);

    $query    = "SELECT * from sign_up WHERE gmail_id='$gmail_id' OR email = '$email'";
    $result_2   = mysqli_query($con, $query);

    if(mysqli_num_rows($result_2) >= 1){
        echo $_SESSION['userid']= $name;

    }else{

  

    // if(mysqli_num_rows($result) != 1) {

        

        $insertSQL="INSERT INTO `sign_up`(`userid`,`email`, `mobile`, `pass`, `confirm`, `type`, `gmail_id`) VALUES ('".$name."','".$email."','".$mobile."','".$pass."','".$confrim."','".$type."','".$gmail_id."')";

        $result = mysqli_query($con,$insertSQL);
        // $error_message = mysqli_error($con);
        $_SESSION['userid']= $name;
        if ($result) {
            // session_start();
            // $hour=time()+3600*24*30;
            // setcookie($_SESSION['userid']= $name,$hour)
            // $_SESSION['userid']= $name;
            // echo $_SESSION['userid'];
            echo "Done";
            header("location: index.php");

            // $_SESSION['userid']=$name;
        }
       

          // }

    }

die();

    $sql= "SELECT * from sign_up where gmail_id='".$gmail_id."'";

	$result = mysqli_query($con,$sql);

    if(mysqli_num_rows($result) == 1) {

        session_start();

        $_SESSION['userid']=$name;

        // $_SESSION['pass']=$_POST['password'];

        // print_r($_SESSION['userid']=$_POST['username']);


        // if($_POST['remember_me']=='1' || $_POST['remember_me']=='on')

        // {

        //     $hour=time()+3600*24*30;

        //     setcookie($_SESSION['userid'],$_POST['username'],$hour);

        //     setcookie($_SESSION['pass'],$_POST['password'],$hour);

        // }

        header("location: index.php");

        exit();

    }

// }
?>