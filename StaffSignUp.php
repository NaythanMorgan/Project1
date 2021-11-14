<?php
$connect =mysqli_connect('localhost','root','','my_shop');

if(isset ($_POST['btnsignup']))
{
    $sname = $_POST['txtsname'];
    $phone = $_POST['txtphone'];
    $email = $_POST['txtemail'];
    $gender = $_POST['rdogender'];
    $dob = $_POST['txtdob'];
    $pass = md5($_POST['txtpass']);
    $address = $_POST['txtaddress'];
    $hobby = $_POST['chkhobby'];
    $role = $_POST['optsrole'];
    $chk = "";
    $pass ;
    // .....................Image Saving............................
    $staffprofile=$_FILES['filpp']['name'];
    $staffimgfolder="StaffImg/";

    if ($staffprofile) 
    {
        $filename = $staffimgfolder."".$staffprofile;
        $copy = copy($_FILES['filpp']['tmp_name'],$filename);
        if (!$copy) 
        {
            exit("Problem ocurred while storing profile image!");
        }
    }
    // .....................Image Saving............................
    foreach ($hobby as $a)
    {
        $chk .= $a.",";
    }

    $checkemail ="Select * from staff where Email ='$email'";
    $runcheckemail = mysqli_query($connect,$checkemail);
    $countemail = mysqli_num_rows ($runcheckemail);
    if ($countemail ==0)
    {
        $staffinsert = "Insert into staff (StaffName,PhoneNumber,Email,Gender,DateOfBirth,Password,
        Address,Hobby,StaffProfile,RoleID) values('$sname','$phone','$email','$gender','$dob','$pass','$address','$chk','$filename','$role')";

        $run = mysqli_query($connect,$staffinsert);
        if ($run) 
        {
        echo "<script>alert('Staff Register Successful!')</script>";
        echo "<script>location='StaffSignUp.php'</script>";
        }
        else 
        {
        echo "<script>alert('Something went wrong. Pls try again!.')</script>";
        echo "<script>location='StaffSignUp.php'</script>";
        }
        
    }
    else
    {
        echo "<script>alert('Email already exist. Use another email!.')</script>";
        echo "<script>location='StaffSignUp.php'</script>";
    }


}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Register</title>
</head>
<body>
    <form action="" method="POST" enctype="multipart/form-data">
        <table align="center">
            <h2 style="text-align:center;">Staff Registration Form</h2>
            <tr>
                <td>Staff Name :</td>
                <td><input type="text" name="txtsname" placeholder="Eg: John" required></td>
            </tr>
            <tr>
                <td>Phone Number :</td>
                <td><input type="text" name="txtphone" placeholder="093334534" required></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><input type="email" name="txtemail" placeholder="Eg: John@gmail.com" required></td>
            </tr>
            <tr>
                <td>Gender :</td>
                <td><input type="radio" name="rdogender" Value="Male" Checked>Male
                <input type="radio" name="rdogender" Value="Fenale">Female</td>
            </tr>
            <tr>
                <td>Date of Birth :</td>
                <td><input type="date" name="txtdob" required></td>
            </tr>
            <tr>
                <td>Password :</td>
                <td><input type="password" name="txtpass" placeholder="*********" required></td>
            </tr>
            <tr>
                <td>Address :</td>
                <td><textarea name="txtaddress" placeholder="Eg.101/102,Tarmwe,Yangon" required></textarea></td>
            </tr>
            <tr>
                <td>Hobby :</td>
                <td><input type="checkbox" name="chkhobby[]" value="Reading">Reading
                <input type="checkbox" name="chkhobby[]" value = "Travelling">Travelling
                <input type="checkbox" name="chkhobby[]" value="Sport">Sport</td>
            </tr>
            <tr>
                <td>Staff Role: </td>
                <td><select name="" name="optsrole">
                <optgroup label="Choose Role">
                <?php
                $selectrole ="Select * from staffrole";
                $runrole = mysqli_query($connect,$selectrole);
                $countrole = mysqli_num_rows($runrole);
                for ($i=1; $i <= $countrole ; $i++) 
                { 
                    $data = mysqli_fetch_array($runrole);
                    $roleid= $data['RoleID'];
                    $role = $data['Role'];
                    echo"<option value='$roleid'>".$role."</option>";
                }
                ?>
                    
                        
                    </optgroup>
                </select></td>
            </tr>
            <tr>
                <td>Profile Picture</td>
                <td><input type="file" name="filpp" required></td>
            </tr>
            <tr>
                <td><input type="checkbox" required>I agree Terms and Conditions</td>
            </tr>
            <tr>
                <td colspan="2"><input type="submit" Value="Sign Up" name="btnsignup"></td>
            </tr>
            
        </table>
    </form>
</body>
</html>