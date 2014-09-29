<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); // HTTP head
?>    		
<script src="/_scripts/chosen.jquery.min.js"></script>
    		
	<title>Employer's First Report of Work Injury and Illness | Tennessee Risk Management Trust</title>
	<meta name="description" content="">

</head>

<body class="sub">

<?php
require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/header.php'); // header and navigation
?>    		

</header> <!-- header -->

<div class="inner">

<div class="fb-bio form-page actual-form-page">

	<h1>Employer's First Report of Work Injury and Illness</h1>

    <?php
        $carrier_fein = $_REQUEST['carrier_fein'] ;
        $employer_name = $_REQUEST['employer_name'] ;
        $employer_address = $_REQUEST['employer_address'] ;
        $employer_city = $_REQUEST['employer_city'] ;
        $employer_state = $_REQUEST['employer_state'] ;
        $employer_zip = $_REQUEST['employer_zip'] ;
        $employer_fein = $_REQUEST['employer_fein'] ;
        $sic_code = $_REQUEST['sic_code'] ;
        $employer_phone = $_REQUEST['employer_phone'] ;
        $employee_first_name = $_REQUEST['employee_first_name'] ;
        $employee_last_name = $_REQUEST['employee_last_name'] ;
        $employee_middle_initial = $_REQUEST['employee_middle_initial'] ;
        $employee_address = $_REQUEST['employee_address'] ;
        $employee_city = $_REQUEST['employee_city'] ;
        $employee_state = $_REQUEST['employee_state'] ;
        $employee_zip = $_REQUEST['employee_zip'] ;
        $employee_ssn = $_REQUEST['employee_ssn'] ;
        $employee_dob = $_REQUEST['employee_dob'] ;
        $employee_date_of_hire = $_REQUEST['employee_date_of_hire'] ;
        $employee_phone = $_REQUEST['employee_phone'] ;
        $employee_department = $_REQUEST['employee_department'] ;
        $employee_gender = $_REQUEST['employee_gender'] ;
        $employee_status = $_REQUEST['employee_status'] ;
        $occupation_description = $_REQUEST['occupation_description'] ;
        $employee_marital_status = $_REQUEST['employee_marital_status'] ;
        $ncci_class_code = $_REQUEST['ncci_class_code'] ;
        $wage = $_REQUEST['wage'] ;
        $period = $_REQUEST['period'] ;
        $days_per_week = $_REQUEST['days_per_week'] ;
        $salary_continued = $_REQUEST['salary_continued'] ;
        $full_wages_paid = $_REQUEST['full_wages_paid'] ;
        $injury_date = $_REQUEST['injury_date'] ;
        $injury_date_notified_employer = $_REQUEST['injury_date_notified_employer'] ;
        $injury_date_notified_admin = $_REQUEST['injury_date_notified_admin'] ;
        $last_day_worked = $_REQUEST['last_day_worked'] ;
        $date_disability_began = $_REQUEST['date_disability_began'] ;
        $date_return_to_work = $_REQUEST['date_return_to_work'] ;
        $date_death = $_REQUEST['date_death'] ;
        $on_premises = $_REQUEST['on_premises'] ;
        $injury_address = $_REQUEST['injury_address'] ;
        $injury_city = $_REQUEST['injury_city'] ;
        $injury_state = $_REQUEST['injury_state'] ;
        $injury_zip = $_REQUEST['injury_zip'] ;
        $injury_country = $_REQUEST['injury_country'] ;
        $injury_time = $_REQUEST['injury_time'] ;
        $injury_time_began = $_REQUEST['injury_time_began'] ;
        $injury_body_part = $_REQUEST['injury_body_part'] ;
        $injury_nature = $_REQUEST['injury_nature'] ;
        $injury_code = $_REQUEST['injury_code'] ;
        $injury_desc = $_REQUEST['injury_desc'] ;
        $physician_name = $_REQUEST['physician_name'] ;
        $physician_address = $_REQUEST['physician_address'] ;
        $physician_city = $_REQUEST['physician_city'] ;
        $physician_state = $_REQUEST['physician_state'] ;
        $physician_zip = $_REQUEST['physician_zip'] ;
        $treatment = $_REQUEST['treatment'] ;
        $date_prepared = $_REQUEST['date_prepared'] ;
        $preparers_name = $_REQUEST['preparers_name'] ;
        $preparers_title = $_REQUEST['preparers_title'] ;
        $preparers_company_name = $_REQUEST['preparers_company_name'] ;
        $preparers_phone = $_REQUEST['preparers_phone'] ;
        if (isset($_POST['submit'])) {
          $to = 'claims@tnrmt.com,webmaster@tnrmt.com';
          $headers = "From: " . strip_tags($_POST['email']) . "\r\n";
          $headers .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
          $headers .= "MIME-Version: 1.0\r\n";
          $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
          $message = '<html><body>';
          $message .= 'Carrier FEIN: '.$carrier_fein.'<br><br><hr><br>';
          $message .= 'Employer Name: '.$employer_name.'<br>';
          $message .= 'Employer Address: '.$employer_address.'<br>';
          $message .= 'Employer City: '.$employer_city.'<br>';
          $message .= 'Employer State: '.$employer_state.'<br>';
          $message .= 'Employer Zip: '.$employer_zip.'<br>';
          $message .= 'Employer FEIN: '.$employer_fein.'<br>';
          $message .= 'SIC Code: '.$sic_code.'<br>';
          $message .= 'Employer Phone: '.$employer_phone.'<br><br><hr><br>';
          $message .= 'Employee First Name: '.$employee_first_name.'<br>';
          $message .= 'Employee Last Name: '.$employee_last_name.'<br>';
          $message .= 'Employee MI: '.$employee_middle_initial.'<br>';
          $message .= 'Employee Address: '.$employee_address.'<br>';
          $message .= 'Employee City: '.$employee_city.'<br>';
          $message .= 'Employee State: '.$employee_state.'<br>';
          $message .= 'Employee Zip: '.$employee_zip.'<br>';
          $message .= 'Employee SSN: '.$employee_ssn.'<br>';
          $message .= 'Employee DOB: '.$employee_dob.'<br>';
          $message .= 'Employee Date of Hire: '.$employee_date_of_hire.'<br>';
          $message .= 'Employee Phone: '.$employee_phone.'<br>';
          $message .= 'Employee Department: '.$employee_department.'<br>';
          $message .= 'Employee Gender: '.$employee_gender.'<br>';
          $message .= 'Employee Status: '.$employee_status.'<br>';
          $message .= 'Occupation Description: '.$occupation_description.'<br>';
          $message .= 'Employee Marital Status: '.$employee_marital_status.'<br>';
          $message .= 'NCCI Class Code: '.$ncci_class_code.'<br>';
          $message .= 'Wage: '.$wage.'<br>';
          $message .= 'Period: '.$period.'<br>';
          $message .= 'Days per Week: '.$days_per_week.'<br>';
          $message .= 'Salary Continued in Lieu of Compensation: '.$salary_continued.'<br>';
          $message .= 'Full Wages Paid for Date of Injury: '.$full_wages_paid.'<br><br><hr><br>';
          $message .= 'Date of Injury: '.$injury_date.'<br>';
          $message .= 'Date Employer was Notified of Injury: '.$injury_date_notified_employer.'<br>';
          $message .= 'Date Administration was Notified of Injury: '.$injury_date_notified_admin.'<br>';
          $message .= 'Last Day Worked: '.$last_day_worked.'<br>';
          $message .= 'Date Disability Began: '.$date_disability_began.'<br>';
          $message .= 'Date of Return to Work: '.$date_return_to_work.'<br>';
          $message .= 'Date of Death: '.$date_death.'<br>';
          $message .= 'Did Injury Occur on Employer Premises? '.$on_premises.'<br>';
          $message .= 'Injury Address: '.$injury_address.'<br>';
          $message .= 'Injury City: '.$injury_city.'<br>';
          $message .= 'Injury State: '.$injury_state.'<br>';
          $message .= 'Injury Zip: '.$injury_zip.'<br>';
          $message .= 'Injury Country: '.$injury_country.'<br>';
          $message .= 'Injury Time: '.$injury_time.'<br>';
          $message .= 'Injury Time Began: '.$injury_time_began.'<br>';
          $message .= 'Injury Body Part: '.$injury_body_part.'<br>';
          $message .= 'Nature of Injury: '.$injury_nature.'<br>';
          $message .= 'Cause of Injury Code: '.$injury_code.'<br>';
          $message .= 'Injury Description: '.$injury_desc.'<br><br><hr><br>';
          $message .= 'Physician Name: '.$physician_name.'<br>';
          $message .= 'Physician Address: '.$physician_address.'<br>';
          $message .= 'Physician City: '.$physician_city.'<br>';
          $message .= 'Physician State: '.$physician_state.'<br>';
          $message .= 'Physician Zip: '.$physician_zip.'<br>';
          $message .= 'Medical Treatment: '.$treatment.'<br>';
          $message .= 'Date Prepared: '.$date_prepared.'<br>';
          $message .= 'Preparers Name: '.$preparers_name.'<br>';
          $message .= 'Preparers Title: '.$preparers_title.'<br>';
          $message .= 'Preparers Company Name: '.$preparers_company_name.'<br>';
          $message .= 'Preparers Phone: '.$preparers_phone.'<br>';
          $message .= '</body></html>';
          $subject = 'Submission: Employers First Report of Work Injury and Illness';


    mail($to, $subject, $message, $headers);
    echo "<div style='padding: 50px 20px 80px; color: #fff; text-align: center; font-family: open_sansbold_italic; color: black;'><label> Thank you for using our form. We will be in contact with you as soon as possible.</label></div>";
  }
else
  { echo "
        <form method='post' action='".$_SERVER['SCRIPT_NAME']."'>

		<p class='required-text'><span class='required'>*</span> = required field</p>

		<div class='clear'></div>

		<h2>Claims Administration/Carrier</h2>

		<label for='carrier_fein' style='color:#fff;'>Carrier FEIN</label>
	    <div class='floating-placeholder'><input type='text' name='carrier_fein' id='carrier_fein' size='10' placeholder='62-6251137'></div>

	    <h2>Employer</h2>

	    <div class='floating-placeholder'><input type='text' required name='employer_name' id='employer_name' size='10'><label for='employer_name'><span class='required'>*</span>Employer Name</label></div>
	    <div class='floating-placeholder'><input type='text' required name='employer_address' id='employer_address' size='10'><label for='employer_address'><span class='required'>*</span>Employer Address</label></div>
	    <div class='floating-placeholder'><input type='text' required name='employer_city' id='employer_city' size='10'><label for='employer_city'><span class='required'>*</span>Employer City</label></div>
        <select name='employer_state' data-placeholder='Employer State...' class='chosen-select'>
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
	    <div class='floating-placeholder'><input type='text' required name='employer_zip' id='employer_zip' size='10'><label for='employer_zip'><span class='required'>*</span>Employer Zip</label></div>
	    <div class='floating-placeholder'><input type='text' required name='employer_fein' id='employer_fein' size='10'><label for='employer_fein'><span class='required'>*</span>Employer FEIN</label></div>
	    <div class='floating-placeholder'><input type='text' name='sic_code' id='sic_code' size='10'><label for='sic_code'>SIC Code</label></div>
	    <div class='floating-placeholder'><input type='text' required name='employer_phone' id='employer_phone' size='10'><label for='employer_phone'><span class='required'>*</span>Employer Phone</label></div>

	    <h2>Employee</h2>

	    <div class='floating-placeholder'><input type='text' required name='employee_last_name' id='employee_last_name' size='10'><label for='employee_last_name'><span class='required'>*</span>Employee Last Name</label></div>
	    <div class='floating-placeholder'><input type='text' required name='employee_first_name' id='employee_first_name' size='10'><label for='employee_first_name'><span class='required'>*</span>Employee First Name</label></div>
	    <div class='floating-placeholder'><input type='text' name='employee_middle_initial' id='employee_middle_initial' size='10'><label for='employee_middle_initial'>Employee Middle Initial</label></div>
	    <div class='floating-placeholder'><input type='text' required name='employee_address' id='employee_address' size='10'><label for='employee_address'><span class='required'>*</span>Employee Address</label></div>
	    <div class='floating-placeholder'><input type='text' required name='employee_city' id='employee_city' size='10'><label for='employee_city'><span class='required'>*</span>Employee City</label></div>
        <select name='employee_state' data-placeholder='Employee State...' class='chosen-select'>
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
	    <div class='floating-placeholder'><input type='text' required name='employee_zip' id='employee_zip' size='10'><label for='employee_zip'><span class='required'>*</span>Employee Zip</label></div>
	    <div class='floating-placeholder'><input type='text' required name='employee_ssn' id='employee_ssn' size='10'><label for='employee_ssn'><span class='required'>*</span>Employee Social Security Number</label></div>
	    <div class='floating-placeholder'><input type='text' required name='employee_dob' id='employee_dob' size='10'><label for='employee_dob'><span class='required'>*</span>Employee Date of Birth</label></div>
	    <div class='floating-placeholder'><input type='text' required name='employee_date_of_hire' id='employee_date_of_hire' size='10'><label for='employee_date_of_hire'><span class='required'>*</span>Employee Date of Hire</label></div>
	    <div class='floating-placeholder'><input type='text' required name='employee_phone' id='employee_phone' size='10'><label for='employee_phone'><span class='required'>*</span>Employee Phone (include area code)</label></div>
	    <div class='floating-placeholder'><input type='text' name='employee_department' id='employee_department' size='10'><label for='employee_department'>Department Regularly Worked</label></div>
	    <div class='radio-container'>
	    	<p>Employee Gender</p>
			<input name='employee_gender' id='employee_gender_male' value='male' checked='' hidden='' type='radio'>
			<label for='employee_gender_male' class='radio'><span></span>Male</label>
			<input name='employee_gender' id='employee_gender_female' value='female' hidden='' type='radio'>
			<label for='employee_gender_female' class='radio'><span></span>Female</label>
			<input name='employee_gender' id='employee_gender_unknown' value='unknown' hidden='' type='radio'>
			<label for='employee_gender_unknown' class='radio'><span></span>Unknown</label>
		</div><!--radio-container-->
        <select name='employee_status' data-placeholder='Employee Status Code...' class='chosen-select'>
            <option value=''></option>
            <option value='apprentice-part_time'>Apprentice: Part-time</option>
            <option value='apprentice-full_time'>Apprentice: Full-time</option>
            <option value='volunteer'>Volunteer</option>
            <option value='piece-worker'>Piece Worker</option>
            <option value='seasonal'>Seasonal</option>
            <option value='part_time'>Part-time</option>
            <option value='full_time'>Full-time / Regular</option>
        </select>
	    <div class='floating-placeholder'><input type='text' required name='occupation_description' id='occupation_description' size='10'><label for='occupation_description'><span class='required'>*</span>Occupation Description</label></div>
        <select name='employee_marital_status' data-placeholder='Employee Marital Status...' class='chosen-select'>
            <option value=''></option>
            <option value='married'>Married</option>
            <option value='separated'>Separated</option>
            <option value='unmarried-single-divorced'>Unmarried, Single, Divorced</option>
            <option value='unknown'>Unknown</option>
        </select>
	    <div class='floating-placeholder'><input type='text' name='ncci_class_code' id='ncci_class_code' size='10'><label for='ncci_class_code'>NCCI Class Code</label></div>

	    <h2>Wage</h2>

	    <div class='floating-placeholder'><input type='text' required name='wage' id='wage' size='10'><label for='wage'><span class='required'>*</span>Wage</label></div>
        <select name='period' data-placeholder='Period...' class='chosen-select'>
            <option value=''></option>
            <option value='hourly'>Hourly</option>
            <option value='daily'>Daily</option>
            <option value='weekly'>Weekly</option>
            <option value='bi-weekly'>Bi-Weekly</option>
            <option value='monthly'>Monthly</option>
        </select>
	    <div class='floating-placeholder'><input type='text' name='days_per_week' id='days_per_week' size='10'><label for='days_per_week'>Number of Days Worked Per Week</label></div>
	    <div class='radio-container'>
	    	<p>Salary Continued in Lieu of Compensation</p>
			<input name='salary_continued' id='salary_continued_no' value='no' checked='' hidden='' type='radio'>
			<label for='salary_continued_no' class='radio'><span></span>No</label>
			<input name='salary_continued' id='salary_continued_yes' value='yes' hidden='' type='radio'>
			<label for='salary_continued_yes' class='radio'><span></span>Yes</label>
		</div><!--radio-container-->
	    <div class='radio-container'>
	    	<p><span class='required'>*</span>Full Wages Paid For Date of Injury</p>
			<input name='full_wages_paid' id='full_wages_paid_no' value='no' checked='' hidden='' type='radio'>
			<label for='full_wages_paid_no' class='radio'><span></span>No</label>
			<input name='full_wages_paid' id='full_wages_paid_yes' value='yes' hidden='' type='radio'>
			<label for='full_wages_paid_yes' class='radio'><span></span>Yes</label>
		</div><!--radio-container-->

		<h2>Accident/Injury</h2>

	    <div class='floating-placeholder'><input type='text' required name='injury_date' id='injury_date' size='10'><label for='injury_date'><span class='required'>*</span>Date of Injury</label></div>
	    <div class='floating-placeholder'><input type='text' required name='injury_date_notified_employer' id='injury_date_notified_employer' size='10'><label for='injury_date_notified_employer'><span class='required'>*</span>Date Employer Notified of Injury</label></div>
	    <div class='floating-placeholder'><input type='text' required name='injury_date_notified_admin' id='injury_date_notified_admin' size='10'><label for='injury_date_notified_admin'><span class='required'>*</span>Date Claim Administrator Notified of Injury</label></div>
	    <div class='floating-placeholder'><input type='text' required name='last_day_worked' id='last_day_worked' size='10'><label for='last_day_worked'><span class='required'>*</span>Date Last Day Worked</label></div>
	    <div class='floating-placeholder'><input type='text' required name='date_disability_began' id='date_disability_began' size='10'><label for='date_disability_began'><span class='required'>*</span>Date Disibility Began</label></div>
	    <div class='floating-placeholder'><input type='text' name='date_return_to_work' id='date_return_to_work' size='10'><label for='date_return_to_work'>Return to Work Date (if applicable)</label></div>
	    <div class='floating-placeholder'><input type='text' name='date_death' id='date_death' size='10'><label for='date_death'>Date of Death (if applicable)</label></div>
	    <div class='radio-container'>
	    	<p>Did Injury/Illness Occur on Employer's Premises?</p>
			<input name='on_premises' id='on_premises_no' value='no' checked='' hidden='' type='radio'>
			<label for='on_premises_no' class='radio'><span></span>No</label>
			<input name='on_premises' id='on_premises_yes' value='yes' hidden='' type='radio'>
			<label for='on_premises_yes' class='radio'><span></span>Yes</label>
		</div><!--radio-container-->
	    <div class='floating-placeholder'><input type='text' name='injury_address' id='injury_address' size='10'><label for='injury_address'>Address Where Injury Occurred (if other than employer's premises)</label></div>
	    <div class='floating-placeholder'><input type='text' name='injury_city' id='injury_city' size='10'><label for='injury_city'>City of Injury</label></div>
        <select name='injury_state' data-placeholder='Injury State...' class='chosen-select'>
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
	    <div class='floating-placeholder'><input type='text' name='injury_zip' id='injury_zip' size='10'><label for='injury_zip'>Zip of Injury</label></div>
	    <div class='floating-placeholder'><input type='text' required name='injury_time' id='injury_time' size='10'><label for='injury_time'><span class='required'>*</span>Time of Injury (include AM/PM or note could not be determined)</label></div>
	    <div class='floating-placeholder'><input type='text' required name='injury_time_began' id='injury_time_began' size='10'><label for='injury_time_began'><span class='required'>*</span>Time Employee Began Work on Injury Date (note AM/PM)</label></div>
	    <div class='floating-placeholder'><input type='text' required name='injury_body_part' id='injury_body_part' size='10'><label for='injury_body_part'><span class='required'>*</span>Body Part Affected (i.e. Leg, Arm, Wrist)</label></div>
	    <div class='floating-placeholder'><input type='text' required name='injury_nature' id='injury_nature' size='10'><label for='injury_nature'><span class='required'>*</span>Nature of Injury (i.e. Burn, Cut, Strain)</label></div>
	    <div class='floating-placeholder'><input type='text' name='injury_code' id='injury_code' size='10'><label for='injury_code'>Cause of Injury Code</label></div>
	    <textarea class='floating-placeholder' required name='injury_desc' id='injury_desc' size='10' placeholder='How injury or illness occurred. Describe accident including what the employee was doing just before, the part of the body affected and how, and object or substance that directly harmed the employee.'></textarea>

	    <h2>Treatment</h2>

	    <div class='floating-placeholder'><input type='text' name='physician_name' id='physician_name' size='10'><label for='physician_name'>Physician Name</label></div>
	    <div class='floating-placeholder'><input type='text' name='physician_address' id='physician_address' size='10'><label for='physician_address'>Physician Address</label></div>
	    <div class='floating-placeholder'><input type='text' name='physician_city' id='physician_city' size='10'><label for='physician_city'>Physician City</label></div>
        <select name='physician_state' data-placeholder='Physician State...' class='chosen-select'>
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
	    <div class='floating-placeholder'><input type='text' name='physician_zip' id='physician_zip' size='10'><label for='physician_zip'>Physician Zip</label></div>

	    <h3 style='margin-bottom:10px;'>Initial Treatment</h3>


	    <div class='radio-container'>
			<input name='treatment' id='treatment_none' value='no' checked='' hidden='' type='radio'>
			<label for='treatment_none' class='radio'><span></span>No Medical Treatment</label>
			<input name='treatment' id='treatment_minor_employer' value='yes' hidden='' type='radio'>
			<label for='treatment_minor_employer' class='radio'><span></span>Minor: by Employer</label>
			<input name='treatment' id='treatment_minor_clinic' value='yes' hidden='' type='radio'>
			<label for='treatment_minor_clinic' class='radio'><span></span>Minor: by Clinic/Hospital</label>
			<input name='treatment' id='treatment_hospitalized' value='yes' hidden='' type='radio'>
			<label for='treatment_hospitalized' class='radio'><span></span>Hospitalized more than 24 hours</label>
			<input name='treatment' id='treatment_emergency' value='yes' hidden='' type='radio'>
			<label for='treatment_emergency' class='radio'><span></span>Emergency Care</label>
			<input name='treatment' id='treatment_future_major' value='yes' hidden='' type='radio'>
			<label for='treatment_future_major' class='radio'><span></span>Future Major Medical/Lost Time Anticipated</label>
		</div><!--radio-container-->

		<h2>Other Information</h2>

	    <div class='floating-placeholder'><input type='text' required name='date_prepared' id='date_prepared' size='10'><label for='date_prepared'><span class='required'>*</span>Date Prepared</label></div>
	    <div class='floating-placeholder'><input type='text' required name='preparers_name' id='preparers_name' size='10'><label for='preparers_name'><span class='required'>*</span>Preparer's Name</label></div>
	    <div class='floating-placeholder'><input type='text' required name='preparers_title' id='preparers_title' size='10'><label for='preparers_title'><span class='required'>*</span>Preparer's Title</label></div>
	    <div class='floating-placeholder'><input type='text' required name='preparers_company_name' id='preparers_company_name' size='10'><label for='preparers_company_name'><span class='required'>*</span>Preparer's Company Name</label></div>
	    <div class='floating-placeholder'><input type='text' required name='preparers_phone' id='preparers_phone' size='10'><label for='preparers_phone'><span class='required'>*</span>Preparer's Phone</label></div>

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
