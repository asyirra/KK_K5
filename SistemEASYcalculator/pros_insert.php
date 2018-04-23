<?php
require_once 'config.php';
 
$no1=$_POST['no1'];
$no2=$_POST['no2'];
$oprs=$_POST['oprs'];
$catatan=$_POST['catatan'];
 
if((is_numeric($no1))&&(is_numeric($no2)))
{
    switch($oprs)
    {
        case '+':
            $result=$no1+$no2;
            break;
        case '-':
            $result=$no1-$no2;
            break;
        case '*':
            $result=$no1*$no2;
            break;
        case '/':
            $result=$no1/$no2;
            break;
        case '%':
            $result=$no1%$no2;
            break;
    }
}
else
    $result="";
 
$sql="insert into datapengguna ( ,no1, no2, oprs, result,catatan) values ('$', '$no1', '$no2', '$oprs', '$result','$catatan');";
 
$conn->query($sql);
 
if($result=="")
    header("Location: profcalculate.php?result=0");
else
    header("Location: profcalculate.php?result=".$result);
 
$conn->close();
?>