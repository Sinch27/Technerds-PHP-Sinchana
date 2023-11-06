<?php
$sn="localhost";
$un="root";
$poss="";
$dn="Students";
$conn=mysqli_connect($sn,$un,$poss,$dn);
if($conn){
echo"success";
}
else{
    echo"unsuccess";
}
mysqli_query($conn,"insert into `information`(id,Name,number)values('1','ghjjk','123')");
?>