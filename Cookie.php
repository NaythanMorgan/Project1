<?php
if (isset($_POST['btnsubmit'])) 
{
    $uname= $_POST['txtuname'];
    $password=$_POST['txtpass'];

    setcookie(time()+60);
    echo $cookie_uname = $uname;
    echo $cookie_password = $password;


    // echo "<script>alert('Go to session2 page!')</script>";
    // echo "<script>location='SESSION2.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cookie </title>
</head>
<body>
<form action="" method="POST">
        <label>User Name:</label>
        <label><input type="text" name="txtuname"></label><br><br>
        <label>Password:</label>
        <label><input type="password" name="txtpass"></label><br><br>
        <input type="submit" value="Submit" name ="btnsubmit">
    </form>
</body>
</html>