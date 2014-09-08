<?php require_once($_SERVER['DOCUMENT_ROOT'].'/_includes/head.php'); // HTTP head?>
<script src="/_scripts/chosen.jquery.min.js"></script>

	<title>Forms | Tennessee Risk Management Trust</title>
	<meta name="description" content="">

</head>

<body>

<div class="fb-bio form-page">

	<h1>Employer's First Report of Work Injury and Illness</h1>

    <form method='post' action=''>

		<p class="required-text"><span class="required">*</span> = required field</p>

		<div class="clear"></div>

		<h2>Claims Administration/Carrier</h2>

	    <div class='floating-placeholder'><input type='text' name='carrier-fein' id='carrier-fein' size='10'><label for='carrier-fein'>Carrier FEIN</label></div>

	    <h2>Employer</h2>

	    <div class='floating-placeholder'><input type='text' required name='employer-name' id='employer-name' size='10'><label for='employer-name'><span class='required'>*</span>Employer Name</label></div>
	    <div class='floating-placeholder'><input type='text' required name='employer-address' id='employer-address' size='10'><label for='employer-address'><span class='required'>*</span>Employer Address</label></div>
	    <div class='floating-placeholder'><input type='text' required name='employer-city' id='employer-city' size='10'><label for='employer-city'><span class='required'>*</span>Employer City</label></div>
        <select name='employer-state' data-placeholder='Employer State...' class='chosen-select'>
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
	    <div class='floating-placeholder'><input type='text' required name='employer-zip' id='employer-zip' size='10'><label for='employer-zip'><span class='required'>*</span>Employer Zip</label></div>
	    <div class='floating-placeholder'><input type='text' required name='employer-fein' id='employer-fein' size='10'><label for='employer-fein'><span class='required'>*</span>Employer FEIN</label></div>
	    <div class='floating-placeholder'><input type='text' name='sic-code' id='sic-code' size='10'><label for='sic-code'>SIC Code</label></div>
	    <div class='floating-placeholder'><input type='text' required name='employer-phone' id='employer-phone' size='10'><label for='employer-phone'><span class='required'>*</span>Employer Phone</label></div>

	    <h2>Employee</h2>

	    <div class='floating-placeholder'><input type='text' required name='employee-last-name' id='employee-last-name' size='10'><label for='employee-last-name'><span class='required'>*</span>Employee Last Name</label></div>
	    <div class='floating-placeholder'><input type='text' required name='employee-first-name' id='employee-first-name' size='10'><label for='employee-first-name'><span class='required'>*</span>Employee First Name</label></div>
	    <div class='floating-placeholder'><input type='text' name='employee-middle-initial' id='employee-middle-initial' size='10'><label for='employee-middle-initial'>Employee Middle Initial</label></div>
	    <div class='floating-placeholder'><input type='text' required name='employee-address' id='employee-address' size='10'><label for='employee-address'><span class='required'>*</span>Employee Address</label></div>
	    <div class='floating-placeholder'><input type='text' required name='employee-city' id='employee-city' size='10'><label for='employee-city'><span class='required'>*</span>Employee City</label></div>
        <select name='employee-state' data-placeholder='Employee State...' class='chosen-select'>
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
	    <div class='floating-placeholder'><input type='text' required name='employee-zip' id='employee-zip' size='10'><label for='employee-zip'><span class='required'>*</span>Employee Zip</label></div>
	    <div class='floating-placeholder'><input type='text' required name='employee-ssn' id='employee-ssn' size='10'><label for='employee-ssn'><span class='required'>*</span>Employee Social Security Number</label></div>
	    <div class='floating-placeholder'><input type='text' required name='employee-dob' id='employee-dob' size='10'><label for='employee-dob'><span class='required'>*</span>Employee Date of Birth</label></div>
	    <div class='floating-placeholder'><input type='text' required name='employee-date-of-hire' id='employee-date-of-hire' size='10'><label for='employee-date-of-hire'><span class='required'>*</span>Employee Date of Hire</label></div>
	    <div class='floating-placeholder'><input type='text' required name='employee-phone' id='employee-phone' size='10'><label for='employee-phone'><span class='required'>*</span>Employee Phone (include area code)</label></div>
	    <div class='floating-placeholder'><input type='text' name='employee-department' id='employee-department' size='10'><label for='employee-department'>Department Regularly Worked</label></div>
	    <div class="radio-container">
	    	<p>Employee Gender</p>
			<input name="employee-gender" id="employee-gender-male" value="male" checked="" hidden="" type="radio">
			<label for="employee-gender-male" class="radio"><span></span>Male</label>
			<input name="employee-gender" id="employee-gender-female" value="female" hidden="" type="radio">
			<label for="employee-gender-female" class="radio"><span></span>Female</label>
			<input name="employee-gender" id="employee-gender-unknown" value="unknown" hidden="" type="radio">
			<label for="employee-gender-unknown" class="radio"><span></span>Unknown</label>
		</div><!--radio-container-->
        <select name='employee-status' data-placeholder='Employee Status Code...' class='chosen-select'>
            <option value=''></option>
            <option value='apprentice-part-time'>Apprentice: Part-time</option>
            <option value='apprentice-full-time'>Apprentice: Full-time</option>
            <option value='volunteer'>Volunteer</option>
            <option value='piece-worker'>Piece Worker</option>
            <option value='seasonal'>Seasonal</option>
            <option value='part-time'>Part-time</option>
            <option value='full-time'>Full-time / Regular</option>
        </select>
	    <div class='floating-placeholder'><input type='text' required name='occupation-description' id='occupation-description' size='10'><label for='occupation-description'><span class='required'>*</span>Occupation Description</label></div>
        <select name='employee-marital-status' data-placeholder='Employee Marital Status...' class='chosen-select'>
            <option value=''></option>
            <option value='married'>Married</option>
            <option value='separated'>Separated</option>
            <option value='unmarried-single-divorced'>Unmarried, Single, Divorced</option>
            <option value='unknown'>Unknown</option>
        </select>
	    <div class='floating-placeholder'><input type='text' name='ncci-class-code' id='ncci-class-code' size='10'><label for='ncci-class-code'>NCCI Class Code</label></div>

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
	    <div class='floating-placeholder'><input type='text' name='days-per-week' id='days-per-week' size='10'><label for='days-per-week'>Number of Days Worked Per Week</label></div>
	    <div class="radio-container">
	    	<p>Salary Continued in Lieu of Compensation</p>
			<input name="salary-continued" id="salary-continued-no" value="no" checked="" hidden="" type="radio">
			<label for="salary-continued-no" class="radio"><span></span>No</label>
			<input name="salary-continued" id="salary-continued-yes" value="yes" hidden="" type="radio">
			<label for="salary-continued-yes" class="radio"><span></span>Yes</label>
		</div><!--radio-container-->
	    <div class="radio-container">
	    	<p><span class="required">*</span>Full Wages Paid For Date of Injury</p>
			<input name="full-wages-paid" id="full-wages-paid-no" value="no" checked="" hidden="" type="radio">
			<label for="full-wages-paid-no" class="radio"><span></span>No</label>
			<input name="full-wages-paid" id="full-wages-paid-yes" value="yes" hidden="" type="radio">
			<label for="full-wages-paid-yes" class="radio"><span></span>Yes</label>
		</div><!--radio-container-->

		<h2>Accident/Injury</h2>

	    <div class='floating-placeholder'><input type='text' required name='injury-date' id='injury-date' size='10'><label for='injury-date'><span class='required'>*</span>Date of Injury</label></div>
	    <div class='floating-placeholder'><input type='text' required name='injury-date-notified-employer' id='injury-date-notified-employer' size='10'><label for='injury-date-notified-employer'><span class='required'>*</span>Date Employer Notified of Injury</label></div>
	    <div class='floating-placeholder'><input type='text' required name='injury-date-notified-admin' id='injury-date-notified-admin' size='10'><label for='injury-date-notified-admin'><span class='required'>*</span>Date Claim Administrator Notified of Injury</label></div>
	    <div class='floating-placeholder'><input type='text' required name='last-day-worked' id='last-day-worked' size='10'><label for='last-day-worked'><span class='required'>*</span>Date Last Day Worked</label></div>
	    <div class='floating-placeholder'><input type='text' required name='date-disibility-began' id='date-disibility-began' size='10'><label for='date-disibility-began'><span class='required'>*</span>Date Disibility Began</label></div>
	    <div class='floating-placeholder'><input type='text' name='date-return-to-work' id='date-return-to-work' size='10'><label for='date-return-to-work'>Return to Work Date (if applicable)</label></div>
	    <div class='floating-placeholder'><input type='text' name='date-death' id='date-death' size='10'><label for='date-death'>Date of Death (if applicable)</label></div>
	    <div class="radio-container">
	    	<p>Did Injury/Illness Occur on Employer's Premises?</p>
			<input name="on-premises" id="on-premises-no" value="no" checked="" hidden="" type="radio">
			<label for="on-premises-no" class="radio"><span></span>No</label>
			<input name="on-premises" id="on-premises-yes" value="yes" hidden="" type="radio">
			<label for="on-premises-yes" class="radio"><span></span>Yes</label>
		</div><!--radio-container-->
	    <div class='floating-placeholder'><input type='text' name='injury-address' id='injury-address' size='10'><label for='injury-address'>Address Where Injury Occurred (if other than employer's premises)</label></div>
	    <div class='floating-placeholder'><input type='text' name='injury-city' id='injury-city' size='10'><label for='injury-city'>City of Injury</label></div>
        <select name='injury-state' data-placeholder='Injury State...' class='chosen-select'>
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
	    <div class='floating-placeholder'><input type='text' name='injury-zip' id='injury-zip' size='10'><label for='injury-zip'>Zip of Injury</label></div>
	    <div class='floating-placeholder'><input type='text' name='injury-country' id='injury-country' size='10'><label for='injury-country'>Country of Injury (if not US)</label></div>
	    <div class='floating-placeholder'><input type='text' required name='injury-time' id='injury-time' size='10'><label for='injury-time'><span class='required'>*</span>Time of Injury (include AM/PM or note could not be determined)</label></div>
	    <div class='floating-placeholder'><input type='text' required name='injury-time-began' id='injury-time-began' size='10'><label for='injury-time-began'><span class='required'>*</span>Time Employee Began Work on Injury Date (note AM/PM)</label></div>
	    <div class='floating-placeholder'><input type='text' required name='injury-body-part' id='injury-body-part' size='10'><label for='injury-body-part'><span class='required'>*</span>Body Part Affected (i.e. Leg, Arm, Wrist)</label></div>
	    <div class='floating-placeholder'><input type='text' required name='injury-nature' id='injury-nature' size='10'><label for='injury-nature'><span class='required'>*</span>Nature of Injury (i.e. Burn, Cut, Strain)</label></div>
	    <div class='floating-placeholder'><input type='text' name='injury-code' id='injury-code' size='10'><label for='injury-code'>Cause of Injury Code</label></div>
	    <textarea class='floating-placeholder' required name='injury-desc' id='injury-desc' size='10' placeholder='How injury or illness occurred. Describe accident including what the employee was doing just before, the part of the body affected and how, and object or substance that directly harmed the employee.'></textarea>

	    <h2>Treatment</h2>

	    <div class='floating-placeholder'><input type='text' name='physician-name' id='physician-name' size='10'><label for='physician-name'>Physician Name</label></div>
	    <div class='floating-placeholder'><input type='text' name='physician-address' id='physician-address' size='10'><label for='physician-address'>Physician Address</label></div>
	    <div class='floating-placeholder'><input type='text' name='physician-city' id='physician-city' size='10'><label for='physician-city'>Physician City</label></div>
        <select name='physician-state' data-placeholder='Physician State...' class='chosen-select'>
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
	    <div class='floating-placeholder'><input type='text' name='physician-zip' id='physician-zip' size='10'><label for='physician-zip'>Physician Zip</label></div>

	    <h3>Initial Treatment</h3>

		<ul>
		  <li>
		    <label>
		      <input type="checkbox" name="checkbox" value="1" checked> <span></span> No Medical Treatment
		    </label>
		  </li>
		  <li>
		    <label>
		      <input type="checkbox" name="checkbox" value="2"> <span></span> Minor: by Employer
		    </label>
		  </li>
		  <li>
		    <label>
		      <input type="checkbox" name="checkbox" value="99"> <span></span> Minor: by Clinic/Hospital
		    </label>
		  </li>
		  <li>
		    <label>
		      <input type="checkbox" name="checkbox" value="99"> <span></span> Hospitalized more than 24 hours
		    </label>
		  </li>
		  <li>
		    <label>
		      <input type="checkbox" name="checkbox" value="99"> <span></span> Emergency Care
		    </label>
		  </li>
		  <li>
		    <label>
		      <input type="checkbox" name="checkbox" value="99"> <span></span> Future Major Medical/Lost Time Anticipated
		    </label>
		  </li>
		</ul>	    

		<h2>Other Information</h2>

	    <div class='floating-placeholder'><input type='text' required name='date-prepared' id='date-prepared' size='10'><label for='date-prepared'><span class='required'>*</span>Date Prepared</label></div>
	    <div class='floating-placeholder'><input type='text' required name='preparers-name' id='preparers-name' size='10'><label for='preparers-name'><span class='required'>*</span>Preparer's Name</label></div>
	    <div class='floating-placeholder'><input type='text' required name='preparers-title' id='preparers-title' size='10'><label for='preparers-title'><span class='required'>*</span>Preparer's Title</label></div>
	    <div class='floating-placeholder'><input type='text' required name='preparers-company-name' id='preparers-company-name' size='10'><label for='preparers-company-name'><span class='required'>*</span>Preparer's Company Name</label></div>
	    <div class='floating-placeholder'><input type='text' required name='preparers-phone' id='preparers-phone' size='10'><label for='preparers-phone'><span class='required'>*</span>Preparer's Phone</label></div>

		<div id="pot">If you see this, leave this form field blank and invest in CSS support.
			<input type="text" name="body" value="" />
		</div><!--pot-->

	    <button class='submit'>Submit Form</button>

    </form>

</div><!--fb-bio-->

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