<?php
 $pageTitle="Contact" ; $section="contact" ;
//ini_set('display_errors', 'On');?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);


    if ($name == "" OR $email == "" OR $message == "") {
        echo "You must specify a value for name, email address, and message.";
        exit;
    }

    foreach( $_POST as $value ){
        if( stripos($value,'Content-Type:') !== FALSE ){
            echo "There was a problem with the information you entered.";
            exit;
        }
    }


    if ($_POST["address"] != "") {
        echo "Your form submission has an error.";
        exit;
    }

    require_once("inc/class.phpmailer.php");
    $mail = new PHPMailer();

    if (!$mail->ValidateAddress($email)){
        echo "You must specify a valid email address.";
        exit;
    }

    $email_body = "";
    $email_body = $email_body . "Name: " . $name . "<br>";
    $email_body = $email_body . "Email: " . $email . "<br>";
    $email_body = $email_body . "Message: " . $message;

    $mail->SetFrom($email, $name);
    $address = "lypanda1@gmail.com";
    $mail->AddAddress($address);
    $mail->Subject    = "Physics Contact Submission " . $name;
    $mail->MsgHTML($email_body);

    if(!$mail->Send()) {
      echo "There was a problem sending the email: " . $mail->ErrorInfo;
      exit;
    }

    header("Location: contact.php?status=thanks");
    exit;
}
include("inc/header.php");
include("inc/PHPMailerAutoload.php");
?>

<div id="content">
    <div class="content-wrapper">
        <h1 class="areaTitle">Contact Us!</h1>

        <form id="contact-form" method="post" action="contact.php">

            <label for="name">Name</label><br>

            <input type="text" name="name" id="name" placeholder="First and Last Name" required><br>

            <label for="email">Email</label><br>

            <input type="email" name="email" id="email" placeholder="Email@yourdomain.com" required><br>

            <label for="message">Message</label><br>

            <textarea name="message" id="message" placeholder="Tell us how we can you help you physics" required></textarea><br>

            <center><input type="submit" value="Send"></center>

        </form>
    </div>
</div>

<?php include( "inc/footer.php"); ?>
