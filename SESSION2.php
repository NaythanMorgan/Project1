<?php
session_start();
if (isset($_SESSION['fname'])) 
{
    echo "Wecome User ".$_SESSION['fname']." ".$_SESSION['lname'];
}
else 
{
    echo "<script>alert('Pls try with SESSION1')</script>";
    echo "<script>location='SESSION1.php'</script>";
}
?>