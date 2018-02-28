<?php
function has_reader_injection($str){
    return preg_match("/[\r\n]/", $str);
}

if(isset($_POST['contact_submit'])){
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $msg = $_POST['msg'];

    if(has_reader_injection($name || has_reader_injection($email))){
        die();
    }

    if(!$name || !$email || $msg){
        echo 'Please complete all the fields';
        exit;
    }

    $to = "your@email.com";
    $subject = "$name sent you a message via your contact form";
    $msg = "Name: $name <br/>";
    $msg .= "Email: $email <br/>";
    $msg .= "Message: $msg <br/>" ;

    //if the suscribe checkbos was checked
    if(isset($_POST['suscribe']) && $_POST['suscribe'] == 'Suscribe'){
        $message .= "Please add $email to the mailing list";
    }

    $message = wordwrap($message, 72);

    //set the email headers
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/plain; charset=iso-8859-1\r\n";
    $headers .= "From: $name <$email> \r\n";
    $headers .= "X-Priority: 1 \r\n"; //1 hight priority, 0 go to spam
    $headers .= "X-MSMail-Priority: Hight \r\n\r\n";

    //send the email
    mail($to, $subject, $message, $headers);

    ?>

    <!-- show message success -->
    <h3>Tanks for contacting with us!</h3>
    <p>Please allow 24 hours for a response</p>

    <?php
}else{
    ?>
    <!-- hear create the form to send the message -->
    <?php
}