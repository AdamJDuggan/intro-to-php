<?php
//Message vars 
$msg = "";
$msgClass = "black";


//Check for the submit
if(filter_has_var(INPUT_POST, 'submit')){
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // Check required fields
    if(!empty($name) && !empty($email) && !empty($message)  ){
        // Passed
        // Email 
        if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
            //Failed
            $msg = "Please use a valid email";
            $msgClass = "red";
        }    
        else{
            //Passed
            $toEmail = "adamduggan17@gmail.com";
            $subject = "Contact request from ". $name;
            $body = "<h2>Contact request: </h2>
            <h4>Name</h4>.<p>.$name.</p> 
            <h4>Email</h4>.<p>.$email.</p> 
            <h4>Message</h4>.<p>.$message.</p> 
            ";
            //Email headers
            $headers = "MIME-version: 1.0 ". "\r\n";
            $headers .= "Content-Type: text-html; charset=UTF-8". "\r\n";
        
        //Additional headers
        $headers .= "From ". $name. " ". $email;
        
        if(mail($toEmail, $subject, $body, $headers)){
            // Email sent
            $msg = "YOur email was sent";
        }
        else{
            $msg = "Email did not send";
        }


        }
    }
    else{
        //Failed
        $msg = "Please fill in all fields";
        $msgClass = "red";
        }
}
?>

<!doctype html>
<html>
<head>
<title>Contact us</title>
<body>
<nav>
</nav>
<?php if($msg !== ""): ?>
<div><?php echo $msg; ?></div>
<?php endif; ?>
<form method="post" action="<? echo $_SERVER['PHP_SELF']; ?>">
<input name="name" placeholder="name"/>
<br>
<input name="email" placeholder="email"/>
<br>
<textarea name="message" placeholder="message">
</textarea>
<br>
<button type="submit">
Submit
</button><br>

</form>

</body>
</head>
</html>