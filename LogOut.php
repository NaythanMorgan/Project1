<?php
session_start();
session_destroy();//destroy all session
// session_unset();//destroy all session
// unset($_SESSION['staffname']);//destroy selected session
echo "<script>alert('Staff Log Out Successful!')</script>";
echo "<script>location='Homepage.html'</script>"; 


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log Out</title>
</head>
<body>
    
</body>
</html>