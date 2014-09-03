// JavaScript Document

// codekit pre-prends

// set initial variables
var $showMenu,
	$showDistrictOne,
	$showDistrictTwo,
	$showDistrictThree,
	$showDistrictFour,
	$showDistrictFive,
	$showDistrictSix,
	$showDistrictSeven,
	$showDistrictEight,
	$showDistrictNine,
	$header,
	$content,
	$showContent;

$(function() {
	firstLoad();
});

function firstLoad() {
	initVars();
	showMenu();
	showDistrictOne();
	showDistrictTwo();
	showDistrictThree();
	showDistrictFour();
	showDistrictFive();
	showDistrictSix();
	showDistrictSeven();
	showDistrictEight();
	showDistrictNine();
	checkScreenSize();
	initPlaceholders();
}

// function to set dom vars, etc that will not change
function initVars() {
	$header 	= $('header');
	$showMenu 	= $('a#showMenu');
	$showDistrictOne 	= $('a.showDistrictOne');
	$showDistrictTwo 	= $('a.showDistrictTwo');
	$showDistrictThree 	= $('a.showDistrictThree');
	$showDistrictFour 	= $('a.showDistrictFour');
	$showDistrictFive 	= $('a.showDistrictFive');
	$showDistrictSix 	= $('a.showDistrictSix');
	$showDistrictSeven 	= $('a.showDistrictSeven');
	$showDistrictEight 	= $('a.showDistrictEight');
	$showDistrictNine 	= $('a.showDistrictNine');
	$map 		= $('#map');
}

$(window).resize(function() {
	checkScreenSize();
});

// show hide left menu
function showMenu(){
	$showMenu.click(function(){
		if ($header.hasClass('expand')) {
			menuOut();
		} else {
			menuIn();
		}
		return false;
	});	
}
function menuOut() {
	$header.removeClass('expand');
	//$content.unbind('click',menuOut);
}
function menuIn() {
	$header.addClass('expand');
	//$content.bind('click',menuOut);
}

// show hide district
function showDistrictOne(){
	$showDistrictOne.click(function(){
		if ($map.hasClass('allCounties')) {
			showMapOne();
		} else {
			hideMapOne();
		}
		return false;
	});	
}
function showMapOne() {
	$map.removeClass('allCounties');
	$map.addClass('districtOne');
	$showDistrictOne.addClass('active');
}
function hideMapOne() {
	$map.addClass('allCounties');
	$map.removeClass('districtOne');
	$showDistrictOne.removeClass('active');
}

// show hide district
function showDistrictTwo(){
	$showDistrictTwo.click(function(){
		if ($map.hasClass('allCounties')) {
			showMapTwo();
		} else {
			hideMapTwo();
		}
		return false;
	});	
}
function showMapTwo() {
	$map.removeClass('allCounties');
	$map.addClass('districtTwo');
	$showDistrictTwo.addClass('active');
}
function hideMapTwo() {
	$map.addClass('allCounties');
	$map.removeClass('districtTwo');
	$showDistrictTwo.removeClass('active');
}

// show hide district
function showDistrictThree(){
	$showDistrictThree.click(function(){
		if ($map.hasClass('allCounties')) {
			showMapThree();
		} else {
			hideMapThree();
		}
		return false;
	});	
}
function showMapThree() {
	$map.removeClass('allCounties');
	$map.addClass('districtThree');
	$showDistrictThree.addClass('active');
}
function hideMapThree() {
	$map.addClass('allCounties');
	$map.removeClass('districtThree');
	$showDistrictThree.removeClass('active');
}

// show hide district
function showDistrictFour(){
	$showDistrictFour.click(function(){
		if ($map.hasClass('allCounties')) {
			showMapFour();
		} else {
			hideMapFour();
		}
		return false;
	});	
}
function showMapFour() {
	$map.removeClass('allCounties');
	$map.addClass('districtFour');
	$showDistrictFour.addClass('active');
}
function hideMapFour() {
	$map.addClass('allCounties');
	$map.removeClass('districtFour');
	$showDistrictFour.removeClass('active');
}

// show hide district
function showDistrictFive(){
	$showDistrictFive.click(function(){
		if ($map.hasClass('allCounties')) {
			showMapFive();
		} else {
			hideMapFive();
		}
		return false;
	});	
}
function showMapFive() {
	$map.removeClass('allCounties');
	$map.addClass('districtFive');
	$showDistrictFive.addClass('active');
}
function hideMapFive() {
	$map.addClass('allCounties');
	$map.removeClass('districtFive');
	$showDistrictFive.removeClass('active');
}

// show hide district
function showDistrictSix(){
	$showDistrictSix.click(function(){
		if ($map.hasClass('allCounties')) {
			showMapSix();
		} else {
			hideMapSix();
		}
		return false;
	});	
}
function showMapSix() {
	$map.removeClass('allCounties');
	$map.addClass('districtSix');
	$showDistrictSix.addClass('active');
}
function hideMapSix() {
	$map.addClass('allCounties');
	$map.removeClass('districtSix');
	$showDistrictSix.removeClass('active');
}

// show hide district
function showDistrictSeven(){
	$showDistrictSeven.click(function(){
		if ($map.hasClass('allCounties')) {
			showMapSeven();
		} else {
			hideMapSeven();
		}
		return false;
	});	
}
function showMapSeven() {
	$map.removeClass('allCounties');
	$map.addClass('districtSeven');
	$showDistrictSeven.addClass('active');
}
function hideMapSeven() {
	$map.addClass('allCounties');
	$map.removeClass('districtSeven');
	$showDistrictSeven.removeClass('active');
}

// show hide district
function showDistrictEight(){
	$showDistrictEight.click(function(){
		if ($map.hasClass('allCounties')) {
			showMapEight();
		} else {
			hideMapEight();
		}
		return false;
	});	
}
function showMapEight() {
	$map.removeClass('allCounties');
	$map.addClass('districtEight');
	$showDistrictEight.addClass('active');
}
function hideMapEight() {
	$map.addClass('allCounties');
	$map.removeClass('districtEight');
	$showDistrictEight.removeClass('active');
}

// show hide district
function showDistrictNine(){
	$showDistrictNine.click(function(){
		if ($map.hasClass('allCounties')) {
			showMapNine();
		} else {
			hideMapNine();
		}
		return false;
	});	
}
function showMapNine() {
	$map.removeClass('allCounties');
	$map.addClass('districtNine');
	$showDistrictNine.addClass('active');
}
function hideMapNine() {
	$map.addClass('allCounties');
	$map.removeClass('districtNine');
	$showDistrictNine.removeClass('active');
}

// this function fixes placeholders in browsers that don't support it
function initPlaceholders() {
	if ($('input[placeholder]').length > 0) {
		if (!placeholderSupported()) {
			$('input[placeholder]').focus(function() {
				var input = $(this);
				if (input.val() == input.attr('placeholder')) {
					input.val('');
					input.removeClass('placeholder');
				}
			}).blur(function() {
				var input = $(this);
				if (input.val() == '' || input.val() == input.attr('placeholder')) {
					input.addClass('placeholder');
					input.val(input.attr('placeholder'));
				}
			}).blur();
			$('input[placeholder]').parents('form').submit(function() {
				$(this).find('[placeholder]').each(function() {
					var input = $(this);
					if (input.val() == input.attr('placeholder')) {
						input.val('');
					}
				})
			});
		}
	}
}
function placeholderSupported() {
    test = document.createElement('input');
    return ('placeholder' in test);
}