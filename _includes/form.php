<div class="form">

    <h3>Contact Us</h3>

    <?php
        $name = $_REQUEST['name'] ;
        $email = $_REQUEST['email'] ;
        $phone = $_REQUEST['phone'] ;
        $desc = $_REQUEST['desc'] ;
        if (isset($_POST['submit'])) {
<<<<<<< HEAD
          $to = 'kgreenup@ngutn.com';
=======
          $to = 'info@tnrmt.com';
>>>>>>> FETCH_HEAD
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

    mail($to, $subject, $message, $headers);
    echo "<div style='padding: 50px 20px 80px; color: #fff; text-align: center; font-family: open_sansbold_italic;'><label> Thank you for using our form. We will be in contact with you as soon as possible.</label></div>";
  }
else
  { echo "
        <form method='post' action='".$_SERVER['SCRIPT_NAME']."'>
        <div class='floating-placeholder'><input type='text' required name='name' id='name' size='10'><label for='name'>Name</label></div>
        <div class='floating-placeholder'><input type='text' required name='phone' id='phone' size='10'><label for='phone'>Phone</label></div>
        <div class='floating-placeholder'><input type='text' required name='email' id='email' size='10'><label for='email'>Email</label></div>
        <textarea class='floating-placeholder' required name='desc' id='desc' size='10'>How May We Help You?</textarea>
        <button class='submit' type='submit' name='submit'>Submit Form</button>
      </form>";
      }
    ?>

    
    


    

</div>

<div class="clear"></div>

