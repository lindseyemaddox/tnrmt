<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); // HTTP head
?>    		
<script src="/_scripts/chosen.jquery.min.js"></script>
    		
	<title>Property Liability Automobile Report Form | Tennessee Risk Management Trust</title>
	<meta name="description" content="">

</head>

<body class="sub">

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/header.php'); // header and navigation
?>    		

</header> <!-- header -->

<div class="inner">

<div class="fb-bio form-page actual-form-page">

	<h1>Property Liability Automobile Report Form</h1>

	<p class='required-text'><span class='required'>*</span> = required field</p>

	<div class='clear'></div>

    <?php
        $person_completing_form = $_REQUEST['person_completing_form'] ;
        $phone = $_REQUEST['phone'] ;
        $date_of_accident = $_REQUEST['date_of_accident'] ;
        $insureds_name = $_REQUEST['insureds_name'] ;
        $insureds_address = $_REQUEST['insureds_address'] ;
        $insureds_city = $_REQUEST['insureds_city'] ;
        $insureds_state = $_REQUEST['insureds_state'] ;
        $insureds_zip = $_REQUEST['insureds_zip'] ;
        $insureds_phone = $_REQUEST['insureds_phone'] ;
        $claimants_name = $_REQUEST['claimants_name'] ;
        $claimants_address = $_REQUEST['claimants_address'] ;
        $claimants_city = $_REQUEST['claimants_city'] ;
        $claimants_state = $_REQUEST['claimants_state'] ;
        $claimants_zip = $_REQUEST['claimants_zip'] ;
        $claimants_phone = $_REQUEST['claimants_phone'] ;
        $type = $_REQUEST['type'] ;
        $student_accident = $_REQUEST['student_accident'] ;
        $injury_desc = $_REQUEST['injury_desc'] ;
        $incident_location = $_REQUEST['incident_location'] ;
        $driver = $_REQUEST['driver'] ;
        $number = $_REQUEST['number'] ;
        $witnesses = $_REQUEST['witnesses'] ;
        $insureds_property_damaged = $_REQUEST['insureds_property_damaged'] ;
        $claimants_property_damaged = $_REQUEST['claimants_property_damaged'] ;
        $comments = $_REQUEST['comments'] ;
        if (isset($_POST['submit'])) {
<<<<<<< HEAD
<<<<<<< HEAD
          $to = 'claims@tnrmt.com, webmaster@tnrmt.com';
          $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
          $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
=======
          $to = 'claims@tnrmt.com,webmaster@tnrmt.com';
          $headers = "From: " . strip_tags($_POST['webmaster@tnrmt.com']) . "\r\n";
          $headers .= "Reply-To: ". strip_tags($_POST['webmaster@tnrmt.com']) . "\r\n";
>>>>>>> FETCH_HEAD
=======
          $to = 'claims@tnrmt.com,webmaster@tnrmt.com';
          $headers = "From: " . strip_tags($_POST['webmaster@tnrmt.com']) . "\r\n";
          $headers .= "Reply-To: ". strip_tags($_POST['webmaster@tnrmt.com']) . "\r\n";
>>>>>>> FETCH_HEAD
          $headers .= "MIME-Version: 1.0\r\n";
          $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
          $message = '<html><body>';
          $message .= 'Person Completing Form: '.$person_completing_form.'<br>';
          $message .= 'Phone: '.$phone.'<br>';
          $message .= 'Date of Accident: '.$date_of_accident.'<br>';
          $message .= 'Time of Accident: '.$time_of_accident.'<br>';
          $message .= 'Insureds Name: '.$insureds_name.'<br>';
          $message .= 'Insureds Address: '.$insureds_address.'<br>';
          $message .= 'Insureds City: '.$insureds_city.'<br>';
          $message .= 'Insureds State: '.$insureds_state.'<br>';
          $message .= 'Insureds Zip: '.$insureds_zip.'<br>';
          $message .= 'Insureds Phone: '.$insureds_phone.'<br>';
          $message .= 'Claimants Name: '.$claimants_name.'<br>';
          $message .= 'Claimants Address: '.$claimants_address.'<br>';
          $message .= 'Claimants City: '.$claimants_city.'<br>';
          $message .= 'Claimants State: '.$claimants_state.'<br>';
          $message .= 'Claimants Zip: '.$claimants_zip.'<br>';
          $message .= 'Claimants Phone: '.$claimants_phone.'<br>';
          $message .= 'Type: '.$type.'<br>';
          $message .= 'Student Accident? '.$student_accident.'<br>';
          $message .= 'Injury Description: '.$injury_desc.'<br>';
          $message .= 'Incident Location: '.$incident_location.'<br>';
          $message .= 'Driver: '.$driver.'<br>';
          $message .= 'Number: '.$number.'<br>';
          $message .= 'Witnesses: '.$witnesses.'<br>';
          $message .= 'Insureds Property Damaged: '.$insureds_property_damaged.'<br>';
          $message .= 'Claimants Property Damaged: '.$claimants_property_damaged.'<br>';
          $message .= 'Additional Comments: '.$comments.'<br>';
          $message .= '</body></html>';
<<<<<<< HEAD
<<<<<<< HEAD
          $subject = 'Submission: Property Liability Automobile Report';
=======
          $subject = 'Submission: Property / Liability / Auto';
>>>>>>> FETCH_HEAD
=======
          $subject = 'Submission: Property / Liability / Auto';
>>>>>>> FETCH_HEAD


    mail($to, $subject, $message, $headers);
    echo "<div style='padding: 50px 20px 80px; color: #fff; text-align: center; font-family: open_sansbold_italic; color:black;'><label> Thank you for using our form. We will be in contact with you as soon as possible.</label></div>";
  }
else
  { echo "

        <form method='post' action='".$_SERVER['SCRIPT_NAME']."'>

	    <div class='floating-placeholder'><input type='text' required name='person_completing_form' id='person_completing_form' size='10'><label for='person_completing_form'><span class='required'>*</span>Person Completing This Form</label></div>
	    <div class='floating-placeholder'><input type='text' required name='phone' id='phone' size='10'><label for='phone'><span class='required'>*</span>Phone</label></div>
	    <div class='floating-placeholder'><input type='text' required name='date_of_accident' id='date_of_accident' size='10'><label for='date_of_accident'><span class='required'>*</span>Date of Accident</label></div>
	    <div class='floating-placeholder'><input type='text' required name='time_of_accident' id='time_of_accident' size='10'><label for='time_of_accident'><span class='required'>*</span>Time of Accident (include AM/PM)</label></div>
	    <div class='floating-placeholder'><input type='text' required name='insureds_name' id='insureds_name' size='10'><label for='insureds_name'><span class='required'>*</span>Insured's Name</label></div>
	    <div class='floating-placeholder'><input type='text' required name='insureds_address' id='insureds_address' size='10'><label for='insureds_address'><span class='required'>*</span>Insured's Address</label></div>
	    <div class='floating-placeholder'><input type='text' name='insureds_city' id='insureds_city' size='10'><label for='insureds_city'>Insured's City</label></div>
        <select name='insureds_state' data-placeholder='Insureds State...' class='chosen-select'>
            <option value=''></option>
            <option value='alabama'>Alabama</option>
            <option value='alaska'>Alaska</option>
            <option value='arizona'>Arizona</option>
            <option value='arkansas'>Arkansas</option>
            <option value='california'>California</option>
            <option value='colorado'>Colorado</option>
            <option value='connecticut'>Connecticut</option>
            <option value='delaware'>Delaware</option>
            <option value='district-of-columbia'>District of Columbia</option>
            <option value='florida'>Florida</option>
            <option value='georgia'>Georgia</option>
            <option value='hawaii'>Hawaii</option>
            <option value='idaho'>Idaho</option>
            <option value='illinois'>Illinois</option>
            <option value='indiana'>Indiana</option>
            <option value='iowa'>Iowa</option>
            <option value='kansas'>Kansas</option>
            <option value='kentucky'>Kentucky</option>
            <option value='louisiana'>Louisiana</option>
            <option value='maine'>Maine</option>
            <option value='maryland'>Maryland</option>
            <option value='massachusetts'>Massachusetts</option>
            <option value='michigan'>Michigan</option>
            <option value='minnesota'>Minnesota</option>
            <option value='mississippi'>Mississippi</option>
            <option value='missouri'>Missouri</option>
            <option value='montana'>Montana</option>
            <option value='nebraska'>Nebraska</option>
            <option value='nevada'>Nevada</option>
            <option value='new-hampshire'>New Hampshire</option>
            <option value='new-jersey'>New Jersey</option>
            <option value='new-mexico'>New Mexico</option>
            <option value='new-york'>New York</option>
            <option value='north-carolina'>North Carolina</option>
            <option value='north-dakota'>North Dakota</option>
            <option value='ohio'>Ohio</option>
            <option value='oklahoma'>Oklahoma</option>
            <option value='oregon'>Oregon</option>
            <option value='pennsylvania'>Pennsylvania</option>
            <option value='rhode-island'>Rhode Island</option>
            <option value='south-carolina'>South Carolina</option>
            <option value='south-dakota'>South Dakota</option>
            <option value='tennessee'>Tennessee</option>
            <option value='texas'>Texas</option>
            <option value='utah'>Utah</option>
            <option value='vermont'>Vermont</option>
            <option value='virginia'>Virginia</option>
            <option value='washington'>Washington</option>
            <option value='west-virginia'>West Virginia</option>
            <option value='wisconsin'>Wisconsin</option>
            <option value='wyoming'>Wyoming</option>
        </select>
	    <div class='floating-placeholder'><input type='text' required name='insureds_zip' id='insureds_zip' size='10'><label for='insureds_zip'><span class='required'>*</span>Insured's Zip</label></div>
	    <div class='floating-placeholder'><input type='text' required name='insureds_phone' id='insureds_phone' size='10'><label for='insureds_phone'><span class='required'>*</span>Insured's Phone</label></div>
	    <div class='floating-placeholder'><input type='text' required name='claimants_name' id='claimants_name' size='10'><label for='claimants_name'><span class='required'>*</span>Claimant's Name</label></div>
	    <div class='floating-placeholder'><input type='text' required name='claimants_address' id='claimants_address' size='10'><label for='claimants_address'><span class='required'>*</span>Claimant's Address</label></div>
	    <div class='floating-placeholder'><input type='text' required name='claimants_city' id='claimants_city' size='10'><label for='claimants_city'><span class='required'>*</span>Claimant's City</label></div>
        <select name='claimants_state' data-placeholder='Claimants State...' class='chosen-select'>
            <option value=''></option>
            <option value='alabama'>Alabama</option>
            <option value='alaska'>Alaska</option>
            <option value='arizona'>Arizona</option>
            <option value='arkansas'>Arkansas</option>
            <option value='california'>California</option>
            <option value='colorado'>Colorado</option>
            <option value='connecticut'>Connecticut</option>
            <option value='delaware'>Delaware</option>
            <option value='district-of-columbia'>District of Columbia</option>
            <option value='florida'>Florida</option>
            <option value='georgia'>Georgia</option>
            <option value='hawaii'>Hawaii</option>
            <option value='idaho'>Idaho</option>
            <option value='illinois'>Illinois</option>
            <option value='indiana'>Indiana</option>
            <option value='iowa'>Iowa</option>
            <option value='kansas'>Kansas</option>
            <option value='kentucky'>Kentucky</option>
            <option value='louisiana'>Louisiana</option>
            <option value='maine'>Maine</option>
            <option value='maryland'>Maryland</option>
            <option value='massachusetts'>Massachusetts</option>
            <option value='michigan'>Michigan</option>
            <option value='minnesota'>Minnesota</option>
            <option value='mississippi'>Mississippi</option>
            <option value='missouri'>Missouri</option>
            <option value='montana'>Montana</option>
            <option value='nebraska'>Nebraska</option>
            <option value='nevada'>Nevada</option>
            <option value='new-hampshire'>New Hampshire</option>
            <option value='new-jersey'>New Jersey</option>
            <option value='new-mexico'>New Mexico</option>
            <option value='new-york'>New York</option>
            <option value='north-carolina'>North Carolina</option>
            <option value='north-dakota'>North Dakota</option>
            <option value='ohio'>Ohio</option>
            <option value='oklahoma'>Oklahoma</option>
            <option value='oregon'>Oregon</option>
            <option value='pennsylvania'>Pennsylvania</option>
            <option value='rhode-island'>Rhode Island</option>
            <option value='south-carolina'>South Carolina</option>
            <option value='south-dakota'>South Dakota</option>
            <option value='tennessee'>Tennessee</option>
            <option value='texas'>Texas</option>
            <option value='utah'>Utah</option>
            <option value='vermont'>Vermont</option>
            <option value='virginia'>Virginia</option>
            <option value='washington'>Washington</option>
            <option value='west-virginia'>West Virginia</option>
            <option value='wisconsin'>Wisconsin</option>
            <option value='wyoming'>Wyoming</option>
        </select>
	    <div class='floating-placeholder'><input type='text' required name='claimants_zip' id='claimants_zip' size='10'><label for='claimants_zip'><span class='required'>*</span>Claimant's Zip</label></div>
	    <div class='floating-placeholder'><input type='text' required name='claimants_phone' id='claimants_phone' size='10'><label for='claimants_phone'><span class='required'>*</span>Claimant's Phone</label></div>
	    <div class='radio-container'>
	    	<p>Check One</p>
			<input name='type' id='property' value='property' checked='' hidden='' type='radio'>
			<label for='property' class='radio'><span></span>Property</label>
			<input name='type' id='general-liability' value='general-liability' hidden='' type='radio'>
			<label for='general-liability' class='radio'><span></span>General Liability</label>
			<input name='type' id='auto' value='auto' hidden='' type='radio'>
			<label for='auto' class='radio'><span></span>Auto</label>
		</div><!--radio-container-->
	    <div class='radio-container'>
	    	<p>Student Accident?</p>
			<input name='student_accident' id='student_accident_no' value='student_accident_no' checked='' hidden='' type='radio'>
			<label for='student_accident_no' class='radio'><span></span>No</label>
			<input name='student_accident' id='student_accident_yes' value='student_accident_yes' hidden='' type='radio'>
			<label for='student_accident_yes' class='radio'><span></span>Yes</label>
		</div><!--radio-container-->
	    <textarea class='floating-placeholder' required name='injury_desc' id='injury_desc' size='10' placeholder='Brief Description of Incident'></textarea>
	    <div class='floating-placeholder'><input type='text' required name='incident_location' id='incident_location' size='10'><label for='incident_location'><span class='required'>*</span>Location of Incident</label></div>

	    <h3 style='margin-bottom:10px;'>If Auto, Insured Driver and Number</h3>

	    <div class='floating-placeholder'><input type='text' name='driver' id='driver' size='10'><label for='driver'>Driver</label></div>
	    <div class='floating-placeholder'><input type='text' name='number' id='number' size='10'><label for='number'>Number</label></div>
	    <textarea class='floating-placeholder' required name='witnesses' id='witnesses' size='10' placeholder='Witnesses and/or injuries'></textarea>
	    <textarea class='floating-placeholder' required name='insureds_property_damaged' id='insureds_property_damaged' size='10' placeholder='Insureds property damaged (make and model or describe property) and where located'></textarea>
	    <textarea class='floating-placeholder' required name='claimants_property_damaged' id='claimants_property_damaged' size='10' placeholder='Claimants property damaged (make and model or describe property) and where located'></textarea>
	    <textarea class='floating-placeholder' required name='comments' id='comments' size='10' placeholder='Additional Comments'></textarea>

		<div id='pot'>If you see this, leave this form field blank and invest in CSS support.
			<input type='text' name='body' value='' />
		</div><!--pot-->

      <button class='submit' type='submit' name='submit'>Submit Form</button>

	    <div class='clear'></div>

      </form>";
      }
    ?>

</div><!--fb-bio-->

</div><!--inner-->

	<script type="text/javascript">
		$(document).ready(function(){

			function updateText(event){
					var input=$(this);
					setTimeout(function(){
						var val=input.val();
						if(val!="")
							input.parent().addClass("floating-placeholder-float");
						else
							input.parent().removeClass("floating-placeholder-float");
					},1)
				}
				$(".floating-placeholder input").keydown(updateText);
				$(".floating-placeholder input").change(updateText);
				$("input:text").val("");

				$('input[placeholder="mm/dd/yyyy"]').bind('keyup',function(){
					var strokes = $(this).val().length;
					if(strokes === 2 || strokes === 5){
							var thisVal = $(this).val();
							thisVal += '/';
							$(this).val(thisVal);
					}
			});

		});
	</script>

  <script type="text/javascript">
    var config = {
      '.chosen-select'           : {},
      '.chosen-select-deselect'  : {allow_single_deselect:true},
      '.chosen-select-no-single' : {disable_search_threshold:10},
      '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
      '.chosen-select-width'     : {width:"95%"}
    }
    for (var selector in config) {
      $(selector).chosen(config[selector]);
    }
  </script>

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/footer.php'); // footer, close body and html
?>    		
