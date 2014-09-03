<form class="form">

    <h3>Contact Us</h3>

    <?php
    function spamcheck($field)
      {
      //filter_var() sanitizes the e-mail
      //address using FILTER_SANITIZE_EMAIL
      $field=filter_var($field, FILTER_SANITIZE_EMAIL);
    
      //filter_var() validates the e-mail
      //address using FILTER_VALIDATE_EMAIL
      if(filter_var($field, FILTER_VALIDATE_EMAIL))
        {
        return TRUE;
        }
      else
        {
        return FALSE;
        }
      }
    
    if (isset($_REQUEST['email']))
      {//if "email" is filled out, proceed
    
      //check if the email address is invalid
      $mailcheck = spamcheck($_REQUEST['email']);
      if ($mailcheck==FALSE)
        {
        echo "Invalid input";
        }
      else
        {//send email
        $email = $_REQUEST['email'] ;
        $subject = $_REQUEST['subject'] ;
        $message = $_REQUEST['message'] ;
        $name = $_REQUEST['name'] ;
        $email = $_REQUEST['email'] ;
        $phone = $_REQUEST['phone'] ;
        $desc = $_REQUEST['desc'] ;
          $to = 'kgreenup@ngutn.com';
          $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
          $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
          $headers .= "MIME-Version: 1.0\r\n";
          $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
          $message = '<html><body>';
          $message .= 'Name: '.$name.'<br>';
          $message .= 'Email: '.$email.'<br>';
          $message .= 'Phone: '.$phone.'<br>';
          $message .= 'How May We Help You: '.$desc.'<br>';
          $message .= '</body></html>';
          $subject = 'Request for Consultation';


    mail($to, $subject, $message, $headers);;
    echo "<div style='padding: 50px 20px 80px; color: #fff; text-align: center; font-family: open_sansbold_italic;'><label> Thank you for using our form. We will be in contact with you as soon as possible.</label></div>";
    }
  }
else
  { echo "
        <form method='post' action=''>
        <div class='floating-placeholder'><input type='text' required name='name' id='name' size='10'><label for='name'>Name</label></div>
        <div class='floating-placeholder'><input type='text' required name='phone' id='phone' size='10'><label for='phone'>Phone</label></div>
        <div class='floating-placeholder'><input type='text' required name='email' id='email' size='10'><label for='email'>Email</label></div>
        <textarea class='floating-placeholder' required name='desc' id='desc' size='10'>How May We Help You?</textarea>
        <button class='submit'>Submit Form</button>
      </form>";
      }
    ?>
    
    


    

</form>

<div class="clear"></div>

