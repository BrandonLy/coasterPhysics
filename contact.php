<?php
//ini_set('display_errors', 'On');

 $pageTitle="Contact" ; $section="contact" ;
 include('inc/smtpKeys.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $message = trim($_POST["message"]);
    $bot_field = trim($_POST["bots"]);

    $recaptcha=$_POST['g-recaptcha-response'];
    if(!empty($recaptcha)) {
        include("inc/getCurlData.php");
        $google_url="https://www.google.com/recaptcha/api/siteverify";
        $ip=$_SERVER['REMOTE_ADDR'];
        $url=$google_url."?secret=".$secret."&response=".$recaptcha."&remoteip=".$ip;
        $res=getCurlData($url);
    }

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
    if($bot_field === '' AND $res['success']) {
    require_once($ROOT . "inc/phpmailer/PHPMailerAutoload.php");
    $mail = new PHPMailer();

    $mail->IsSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.mandrillapp.com';                 // Specify main and backup server
    $mail->Port = 587;                                    // Set the SMTP port
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $apiEmail;                // SMTP username
    $mail->Password = $apiKey;                  // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

    $mail->From = $email;
    $mail->FromName = $name;
    $mail->AddAddress($sendEmail);               // Name is optional

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
    else {
        header("Location: contact.php?status=error");
    }
}
include('inc/phpmailer/PHPMailerAutoload.php');
include("inc/header.php");
?>

    <div id="content">
        <div class="content-wrapper">
<?php if(isset($_GET["status"]) AND ($_GET["status"] === "thanks")){ ?>
    <h1 class="areaTitle">Thanks for your submission!</h1>
        <p class="center">You'll hear back from a team member shortly!</p>
<?php } else {
    if(isset($_GET["status"]) AND ($_GET["status"] === "error")) { ?>
    <h1 class="areaTitle">There seems to be a problem with your form</h1>
<?php } ?>

<?php if(!isset($_GET["status"])) { ?>
        <h1 class="areaTitle">Contact Us!</h1>

        <form id="contact-form" method="post" action="contact.php">

            <label for="name">Name</label><br>

            <input type="text" name="name" id="name" placeholder="First and Last Name" required><br>

            <label for="email">Email</label><br>

            <input type="email" name="email" id="email" placeholder="email@yourdomain.com" required><br>

            <input type="text" name="bots" id="bots" label="screen reader users ignore this field">

            <label for="message">Message</label><br>

            <textarea name="message" id="message" placeholder="Tell us how we can you help you physics" required></textarea><br>

            <div class="g-recaptcha" data-sitekey="6LfruQMTAAAAAM8ApgBVcJMvYvuFKteoNqcl0c6E"></div>

            <div class="center"><input class="submit-form" type="submit" value="Send"></div>

        </form>
<?php } ?>
<?php } ?>
    </div>
</div>

<?php include( "inc/footer.php"); ?>
