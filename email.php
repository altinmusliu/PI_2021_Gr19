<?php


    $name=$_POST['username'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $msg=$_POST['message'];

    $to='andi.hasanaj@student.uni-pr.edu';
    $subject='Form Submission';
    $message="Name: ".$name."\n"."Phone :".$phone."\n"."Wrote the following: "."\n\n".$msg;
    $headers="From: ".$email;

    if(mail($to,$subject,$message,$headers)){
        echo "<h1>Sent successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
    }
    else{
        echo "Something went wrong";
    }
    

?>