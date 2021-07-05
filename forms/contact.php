<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // $errors = [];
  // $errorMessage = '';
  
  // if (!empty($_POST)) {
  //     $name = $_POST['name'];
  //     $email = $_POST['email'];
  //     $message = $_POST['message'];
  
  //     if (empty($name)) {
  //         $errors[] = 'Name is empty';
  //     }
  
  //     if (empty($email)) {
  //         $errors[] = 'Email is empty';
  //     } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  //         $errors[] = 'Email is invalid';
  //     }
  
  //     if (empty($message)) {
  //         $errors[] = 'Message is empty';
  //     }
  
  
  //     if (empty($errors)) {
  //         $toEmail = 'xszitasz@gmail.com';
  //         $emailSubject = 'New email from your contant form';
  //         $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];
  
  //         $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
  //         $body = join(PHP_EOL, $bodyParagraphs);
  
  //         if (mail($toEmail, $emailSubject, $body, $headers)) {
  //             header('Location: thank-you.html');
  //         } else {
  //             $errorMessage = 'Oops, something went wrong. Please try again later';
  //         }
  //     } else {
  //         $allErrors = join('<br/>', $errors);
  //         $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
  //     }
  // }

  // if( file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
  //   include( $php_email_form );
  // } else {
  //   die( 'Unable to load the "PHP Email Form" Library!');
  // }

  // $contact = new PHP_Email_Form;
  // $contact->ajax = true;
  
  // $contact->to = $receiving_email_address;
  // $contact->from_name = $_POST['name'];
  // $contact->from_email = $_POST['email'];
  // $contact->subject = $_POST['subject'];

  // // Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
  // /*
  // $contact->smtp = array(
  //   'host' => 'example.com',
  //   'username' => 'example',
  //   'password' => 'pass',
  //   'port' => '587'
  // );
  // */

  // $contact->add_message( $_POST['name'], 'From');
  // $contact->add_message( $_POST['email'], 'Email');
  // $contact->add_message( $_POST['message'], 'Message', 10);

  // echo $contact->send();
?>
