<?php
    include "db_con.php";
    //Import PHPMailer classes into the global namespace
    //These must be at the top of your script, not inside a function
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;
    // ---------------mail for user---------------
        function emailsend($first_name,$user_email){
           //Load Composer's autoloader
            require 'vendor/autoload.php';

            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);

            try {
                //Server settings
                $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'jeetsil300@gmail.com';                     //SMTP username
                $mail->Password   = 'eqrqftolcikymkdp';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('jeetsil300@gmail.com', 'JEET');
                $mail->addAddress($user_email, $first_name);     //Add a recipient
                // $mail->addAddress('ellen@example.com');               //Name is optional
                // $mail->addReplyTo('info@example.com', 'Information');
                // $mail->addCC('jeetsil100@gmail.com');
                // $mail->addBCC('bcc@example.com');

                //Attachments
                // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
                // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Thank You';
                $mail->Body    = 'Thank You '.$first_name.' for giving your <b>feedback</b>';
                // $mail->AltBody = 'Thank You '.$first_name.'for giving your <b>feedback</b>';

                $mail->send();
                echo 'Message has been sent';
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    // --------------------------------------mail for admin-------------------------------------------
    function adminmail($first_name,$last_name,$useremail,$usercomment){
        //Load Composer's autoloader
         require 'vendor/autoload.php';

         //Create an instance; passing `true` enables exceptions
         $mail = new PHPMailer(true);

         try {
             //Server settings
             $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
             $mail->isSMTP();                                            //Send using SMTP
             $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
             $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
             $mail->Username   = 'jeetsil300@gmail.com';                     //SMTP username
             $mail->Password   = 'eqrqftolcikymkdp';                               //SMTP password
             $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
             $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

             //Recipients
             $mail->setFrom('jeetsil300@gmail.com', 'System');
             $mail->addAddress('jeetsil100@gmail.com', 'Jeet');     //Add a recipient
             // $mail->addAddress('ellen@example.com');               //Name is optional
             // $mail->addReplyTo('info@example.com', 'Information');
            //  $mail->addCC('jeetsil300@gmail.com');
             // $mail->addBCC('bcc@example.com');

             //Attachments
             // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
             // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

             //Content
             $mail->isHTML(true);                                  //Set email format to HTML
             $mail->Subject = 'Report Mail';
             $mail->Body    = 'Hi Jeet, your portfolio website recieve one comment from '
             .$first_name.' '.$last_name.' from '.$useremail.' and user comment is <b>'.$usercomment.'</b>';
             $mail->AltBody = 'Hi Jeet, your portfolio website recieve one comment from '
             .$first_name.' '.$last_name.' from '.$useremail.' and user comment is <b>'.$usercomment.'</b>';

             $mail->send();
             echo 'Message has been sent';
         } catch (Exception $e) {
             echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
         }
     }
    //  ----------------------------------------------------------------------------------------------
    if(isset($_POST["send"]) && $_POST['send'] == true){
        
        $first_name =  mysqli_real_escape_string($conn,$_POST["fname"]);
        $last_name = mysqli_real_escape_string($conn,$_POST["lname"]);
        $email = mysqli_real_escape_string($conn,$_POST["email"]);
        $comment = mysqli_real_escape_string($conn,$_POST["comment"]);

        $sql = "INSERT INTO email_data SET
                first_name='$first_name',
                last_name='$last_name',
                email_id='$email',
                user_comment='$comment'
            ";    
        $runsql = mysqli_query($conn,$sql);
        if($runsql){
            emailsend($first_name,$email);
            adminmail($first_name,$last_name,$email,$comment);
            echo 1;
        }else{
            echo 0;
        }
    }
    
?>