
<?php
$name=$_POST['n'];
$pass=$_POST['p'];
$con = mysqli_connect("localhost", "root", "", "mini") or die(mysqli_error($con));
$user_query = "insert into log(name,password) values ('$name','$pass')";
        $user_registration_submit = mysqli_query($con, $user_query) or die(mysqli_error($con));
        if(!mysqli_query($con,$user_query)){
            echo "not login ";
           
        }
        else{
           echo "login";
           
        }
?>
    

