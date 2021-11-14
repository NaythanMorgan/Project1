<?php
session_start();
if (!isset($_SESSION['staffname'])) 
{
    echo "<script>alert('Need to login first!')</script>";
    echo "<script>location='StaffLogin.php'</script>"; 
}
else
{
    echo "Welcome :".$_SESSION['staffname'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Display</title>
</head>
<body>
    <form action="" method="POST">
        <h2 style="text-align:center;">Product Display Form</h2>
        <table align='center' width='80%' border='1' >
        <tr>
            <th>Product Name</th>
            <th>Product Picture></th>
            <th>Price</th>
            <th>Available Quantity</th>
        </tr>
        <tr>
            <td>IT Web Developer</td>
            <td>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi corrupti consequatur quo provident, dolorum recusandae quibusdam eum rerum neque, hic facilis eligendi doloremque, ipsum enim unde expedita obcaecati! Vel, praesentium!</td>
            <td>Yangon</td>
            <td><a href="pdf/Eimaung.pdf">More Detail</a></td>

        </tr>
        </table>
    </form>
</body>
</html>