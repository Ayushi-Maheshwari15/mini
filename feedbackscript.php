<?php
$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$email=$_POST['emailid'];

$comment=$_POST['feedback'];
$tel=$_POST['telnum'];
$con = mysqli_connect("localhost", "root", "", "mini") or die(mysqli_error($con));
$user_query="insert into feedback(first, last, email,tel,comment) values('$fname','$lname','$email','$tel','$comment')";
$user_registration_submit = mysqli_query($con, $user_query) or die(mysqli_error($con));
        if(!mysqli_query($con,$user_query)){
            echo "not inserted";
           
        }
        else{
           echo "inserted";
           
        }


