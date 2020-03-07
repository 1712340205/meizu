<?php

    header('content-type:text/html;charset=utf-8');

    $users=$_POST['username'];
    $passw=$_POST['password'];

    $link=mysqli_connect('localhost','root','root','login');

    $link1="INSERT INTO `user` (`username`,`password`) VALUES('$users','$passw')";

    $res=mysqli_query($link,$link1);

    mysqli_close($link);

    if($res){
        echo 1;
    }
    else{
        echo "注册失败！";
    }
?>