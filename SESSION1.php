<?php
session_start();
if (isset($_POST['btnsubmit'])) 
{
    $fname= $_POST['txtfname'];
    $lname=$_POST['txtlname'];

    $_SESSION['fname']=$fname;
    $_SESSION['lname']=$lname;

    // echo $_SESSION['fname'];
    // echo $_SESSION['lname'];
    echo "<script>alert('Go to session2 page!')</script>";
    echo "<script>location='SESSION2.php'</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSION</title>
</head>
<body>
    <form action="" method="POST">
        <label>First Name:</label>
        <label><input type="text" name="txtfname"></label><br><br>
        <label>Last Name:</label>
        <label><input type="text" name="txtlname"></label><br><br>
        <input type="submit" value="Submit" name ="btnsubmit">
    </form>
</body>
</html>