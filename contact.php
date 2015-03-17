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

    require_once("inc/PHPMailerAutoload.php");
    $mail = new PHPMailer();

    $mail->IsSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.mandrillapp.com';                 // Specify main and backup server
    $mail->Port = 587;                                    // Set the SMTP port
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'lypanda1@gmail.com';                // SMTP username
    $mail->Password = 'aG7qkfrc1DDpU2MLMV2IKw';                  // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

    $mail->From = $email;
    $mail->FromName = $name;
    $mail->AddAddress('lypanda1@gmail.com');               // Name is optional

    $mail->IsHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'Physics Site Contact Message';
    $mail->Body    = '<h1>'. $name . '</h1>' . '<h2>' . $email . '</h2>' . '<p>' . $message . '</p>';

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

            <input type="email" name="email" id="email" placeholder="email@yourdomain.com" required><br>

            <label for="message">Message</label><br>

            <textarea name="message" id="message" placeholder="Tell us how we can you help you physics" required></textarea><br>

            <center><input type="submit" value="Send"></center>

        </form>
    </div>
</div>

<?php include( "inc/footer.php"); ?>
