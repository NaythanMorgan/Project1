<?php
$ans ='';
if(isset($_POST['btncalculate']))
{
    $fname = $_POST['txtfnum'];
    $sname = $_POST['txtsnum'];
    $opsign = $_POST['txtops'];
    // $ans;

    // if ($opsign == "+")
    // {
    //     $ans = $fname + $sname;
    // }
    // elseif ($opsign == "-")
    // {
    //     $ans = $fname - $sname;
    // }
    // elseif ($opsign == "*")
    // {
    //     $ans = $fname * $sname;
    // }    elseif ($opsign == "/")
    // {
    //     $ans = $fname / $sname;
    // }
    // else
    // {
    //     $ans = "Unknown Operator Sign!."
    // }

    switch ($opsign)
    {
        case '+':
            $ans =$fname + $sname;
            break;
        case '-':
            $ans =$fname - $sname;
            break;
        case '*':
            $ans =$fname * $sname;
            break;
        case '/':
            $ans =$fname/$sname;
            break;
        default:
            $ans ="Unknown Operator Sign!.";
            break;
    }



}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
</head>
<body>
    <form action="" method="POST">
        <label>First Number:</label>
        <label><input type="number" placeholder="Eg:123" name="txtfnum" style="appearance: textfield;" required></label>
        <br><br>
        <label>Opertator Sign:</label>
        <label><input type="text" placeholder="Eg:+,-,*,/" name="txtops" required></label>
        <br><br>
        <label>Second Number:</label>
        <label><input type="number" placeholder="Eg:123" name="txtsnum" style="appearance: textfield;" required></label>
        <br><br>
        <label><input type="submit" value="Calculate" name="btncalculate"></label>

        <br><br>
        <label><input type="text" value='<?php echo $ans ?>' readonly></label>
    </form>
    
</body>
</html>