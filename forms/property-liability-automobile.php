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

    <form method='post' action=''>

		<p class='required-text'><span class='required'>*</span> = required field</p>

		<div class='clear'></div>

	    <div class='floating-placeholder'><input type='text' required name='person-completing-form' id='person-completing-form' size='10'><label for='person-completing-form'><span class="required">*</span>Person Completing This Form</label></div>
	    <div class='floating-placeholder'><input type='text' required name='phone' id='phone' size='10'><label for='phone'><span class="required">*</span>Phone</label></div>
	    <div class='floating-placeholder'><input type='text' required name='date-of-accident' id='date-of-accident' size='10'><label for='date-of-accident'><span class="required">*</span>Date of Accident</label></div>
	    <div class='floating-placeholder'><input type='text' required name='time-of-accident' id='time-of-accident' size='10'><label for='time-of-accident'><span class="required">*</span>Time of Accident (include AM/PM)</label></div>
	    <div class='floating-placeholder'><input type='text' required name='insureds-name' id='insureds-name' size='10'><label for='insureds-name'><span class="required">*</span>Insured's Name</label></div>
	    <div class='floating-placeholder'><input type='text' required name='insureds-address' id='insureds-address' size='10'><label for='insureds-address'><span class="required">*</span>Insured's Address</label></div>
	    <div class='floating-placeholder'><input type='text' name='insureds-city' id='insureds-city' size='10'><label for='insureds-city'>Insured's City</label></div>
        <select name='insureds-state' data-placeholder='Insureds State...' class='chosen-select'>
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
	    <div class='floating-placeholder'><input type='text' required name='insureds-zip' id='insureds-zip' size='10'><label for='insureds-zip'><span class="required">*</span>Insured's Zip</label></div>
	    <div class='floating-placeholder'><input type='text' required name='insureds-phone' id='insureds-phone' size='10'><label for='insureds-phone'><span class="required">*</span>Insured's Phone</label></div>
	    <div class='floating-placeholder'><input type='text' required name='claimants-name' id='claimants-name' size='10'><label for='claimants-name'><span class="required">*</span>Claimant's Name</label></div>
	    <div class='floating-placeholder'><input type='text' required name='claimants-address' id='claimants-address' size='10'><label for='claimants-address'><span class="required">*</span>Claimant's Address</label></div>
	    <div class='floating-placeholder'><input type='text' required name='claimants-city' id='claimants-city' size='10'><label for='claimants-city'><span class="required">*</span>Claimant's City</label></div>
        <select name='claimants-state' data-placeholder='Claimants State...' class='chosen-select'>
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
	    <div class='floating-placeholder'><input type='text' required name='claimants-zip' id='claimants-zip' size='10'><label for='claimants-zip'><span class="required">*</span>Claimant's Zip</label></div>
	    <div class='floating-placeholder'><input type='text' required name='claimants-phone' id='claimants-phone' size='10'><label for='claimants-phone'><span class="required">*</span>Claimant's Phone</label></div>
	    <div class="radio-container">
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
			<input name='student-accident' id='student-accident-no' value='student-accident-no' checked='' hidden='' type='radio'>
			<label for='student-accident-no' class='radio'><span></span>No</label>
			<input name='student-accident' id='student-accident-yes' value='student-accident-yes' hidden='' type='radio'>
			<label for='student-accident-yes' class='radio'><span></span>Yes</label>
		</div><!--radio-container-->
	    <textarea class='floating-placeholder' required name='injury-desc' id='injury-desc' size='10' placeholder='Brief Description of Incident'></textarea>
	    <div class='floating-placeholder'><input type='text' required name='incident-location' id='incident-location' size='10'><label for='incident-location'><span class="required">*</span>Location of Incident</label></div>

	    <h3>If Auto, Insured Driver and Number</h3>

	    <div class='floating-placeholder'><input type='text' name='driver' id='driver' size='10'><label for='driver'>Driver</label></div>
	    <div class='floating-placeholder'><input type='text' name='number' id='number' size='10'><label for='number'>Number</label></div>
	    <textarea class='floating-placeholder' required name='witnesses' id='witnesses' size='10' placeholder='Witnesses and/or injuries'></textarea>
	    <textarea class='floating-placeholder' required name='insureds-property-damaged' id='insureds-property-damaged' size='10' placeholder='Insureds property damaged (make and model or describe property) and where located'></textarea>
	    <textarea class='floating-placeholder' required name='claimants-property-damaged' id='claimants-property-damaged' size='10' placeholder='Claimants property damaged (make and model or describe property) and where located'></textarea>
	    <textarea class='floating-placeholder' required name='comments' id='comments' size='10' placeholder='Additional Comments'></textarea>

		<div id='pot'>If you see this, leave this form field blank and invest in CSS support.
			<input type='text' name='body' value='' />
		</div><!--pot-->

	    <button class='submit'>Submit Form</button>

	    <div class='clear'></div>

    </form>

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
