<?php
session_start();
$connect = mysqli_connect("localhost","root","","my_shop");
if (isset($_POST['btnsubmit'])) 
{
    $email= $_POST['txtemail'];
    $password=md5($_POST['txtpass']);

    $selectaccount = "SELECT * from staff where Email= '$email' And Password = '$password'";
    $run = mysqli_query($connect,$selectaccount);

    $count = mysqli_num_rows($run);
    if($count>0)
    {
        $data=mysqli_fetch_array($run);
        $_SESSION['staffname'] = $data['StaffName'];
        $_SESSION['email']= $data['Email'];
        
        echo "<script>alert('Staff Login Successful!')</script>";
        echo "<script>location='StaffLogin.php'</script>";
    }

    else
    {
        echo "<script>alert('Email or Password incorrect! Please try again!')</script>";
        echo "<script>location='StaffLogin.php'</script>";      
    }

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StaffLogin</title>
</head>
<body>
<form action="" method="POST">
        <label>Email :</label>
        <label><input type="text" name="txtemail"></label><br><br>
        <label>Password:</label>
        <label><input type="password" name="txtpass"></label><br><br>
        <input type="submit" value="Submit" name ="btnsubmit">
    </form>
    
</body>
</html>