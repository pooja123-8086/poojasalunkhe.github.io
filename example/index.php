<?php

$con=mysqli_connect('localhost','root','','example');//host,username,pasword,database name
if (!$con)
{
    echo"Error in db connection";
}

if ($_SERVER['REQUEST_METHOD']=="POST")
{
        $name=$_POST['name'];
        $email=$_POST['email'];
        $contact=$_POST['contact'];
        $message=$_POST['message'];

        $ins="insert into feedback (name ,email	,cantact,message,datetime) 
        values('$name','$email','$contact','$message',now())";
        $status=mysqli_query($con,$ins);
        if ($status )
        {
            echo"Success";
        }
        else{
            "fail";
        }
   
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>FORM</title>
    <style>
    #form{
        height: 400px;
        width: 400px;
        background:pink;
        margin:auto;
    }
    </style>

</head>
<body>
    <form method="post" action="">
    <div id="form">
    <label>Name</label><br>
    <input type="text" name="name" required><br>
    <label>Email</label><br>
    <input type="text" name="email" required><br>
    <label>Contact</label><br>
    <input type="text" name="contact" required><br>
    <label>Message</label><br>
    <textarea rows="12" cols="40" name="message" required></textarea><br>
    <input type="Submit">
    </div>
</body>
</html>