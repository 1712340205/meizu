<?php

    header('content-type:text/html;charset=utf-8');

    $users=$_POST['username'];
    $passw=$_POST['password'];


    $link=mysqli_connect('localhost','root','root','login');

    $link1="SELECT*FROM `user` WHERE `username`='$users' AND `password`='$passw'";

    $res=mysqli_query($link,$link1);

    $date=mysqli_fetch_assoc($res);

   

    if($date){
        echo 1;
    }
    else{
        echo "用户名或密码错误！";
    }

    // $link2="INSERT INTO `user` (`username`,`password`) VALUES('$users','$passw')";

    // $res2=mysqli_query($link,$link2);

    // mysqli_close($link);

    // if($res2){
    //     echo 1;
    // }
    // else{
    //     echo "注册失败！";
    // }

    mysqli_close($link);
?>