<?php
$connect =mysqli_connect("localhost","root","","voting_system") or die("connection faild");
if($connect){
    echo"connected";

}
else{
    echo"not connected";
}


?>