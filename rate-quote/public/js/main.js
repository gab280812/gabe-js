// Author: Hiury Oliveira <hiuryoliveira117@gmail.com>;
// July, 2017;

$(function(){
  /**
  * Surely there's some improvements to make, comments/help always appreciated :3
  */

	// Form data.
	var data = [];
	data['propertyCounty'] = null; // OK OK
	data['loanProduct1']   = null; // OK OK
	data['loanProduct2']   = null; // OK OK
	data['loanProduct3']   = null; // OK OK
	data['loanProduct4']   = null; // OK OK
	data['loanProduct5']   = null; // OK OK
	data['appraisedvalue'] = null; // OK OK
	data['loan_amount'] 	 = null; // OK OK
	data['downpayment'] 	 = null; // OK OK
	data['propertyType']   = null; // OK Ok
	data['loanpurpose'] 	 = null; // OK OK
	data['fico'] 					 = 800;  // OK OK

  /** Handle successful response */
	function handleResp(result, success) {
    // Debug:
    // console.log(result);
    var places = result['places'][0];
    $("#placeName").html(places['place name']);
    $("#stateName").html(places['state']);

		// Adding value to propertyCounty.
		data['propertyCounty'] = places['place name'];

    if (places['state'] == "Utah") {
      // Show info and button.
      $(".show-info-places").removeClass("invisible");
      $("#btnNextPlaces").removeClass("invisible");

      $(".show-erro-places").addClass("invisible");
      $(".show-erro-notfound").addClass("invisible");
    } else {
      // Show erros.
      $(".show-erro-places").removeClass("invisible");
    }
	}


  function handleError() {
    $(".show-info-places").addClass("invisible");
    $("#btnNextPlaces").addClass("invisible");
    $(".show-erro-notfound").removeClass("invisible");
  }

  $("#zipcode").keyup(function() {
    var zipcode = $(this).val();

    if (zipcode.length == 5) {
      // Url from API.
      var url = "http://api.zippopotam.us/us/" + zipcode;

      // Ajax request.
      $.ajax({
        url: url,
        data: data,
        success: handleResp,
        error: handleError,
        dataType: "json",
        type: "GET"
      });
    } else {
      $(".show-erro-places").addClass("invisible");
      $(".show-erro-notfound").addClass("invisible");
    }
  });

  var height = $( window ).height();

  // Adjust height to screen size.
  $("#right-box").css('height', (height));

  function init() {
    // Generate li foreach fieldset
    for (var i = 0; i < count; i++) {
      var ul = document.querySelector('ul.items'),
          li = document.createElement("li");

      ul.appendChild(li);
    }
    // Add class active on first li
    ul.firstChild.classList.add('active');
  }

  function next(target) {
    var input = target.previousElementSibling;

    // Check if input is empty
    if (input.value === '') {
      body.classList.add('error');
    } else {
      body.classList.remove('error');

      var enable = document.querySelector('form fieldset.enable'),
          nextEnable = enable.nextElementSibling;
      enable.classList.remove('enable');
      enable.classList.add('disable');
      nextEnable.classList.add('enable');

      // Switch active class on left list
      var active = document.querySelector('ul.items li.active'),
          nextActive = active.nextElementSibling;
      active.classList.remove('active');
      nextActive.classList.add('active');
    }
  }

  function keyDown(event) {
    var key = event.keyCode,
        target = document.querySelector('fieldset.enable .button');
    if (key == 13 || key == 9) next(target);
  }

  var body = document.querySelector('body'),
      form = document.querySelector('form'),
      count = form.querySelectorAll('fieldset').length;

  window.onload = init();
  document.body.onmouseup = function (event) {
      var target = event.target || event.toElement;
      if (target.classList.contains("button")) next(target);
  };

  $("body").mouseup(function(event) {
    var target = event.target || event.toElement;
    if (target.classList.contains("button")) next(target);
  });

  document.addEventListener("keydown", keyDown, true);

  // Next Button.
  $(".next").click(function() {
    var enable = document.querySelector('form fieldset.enable'),
        nextEnable = enable.nextElementSibling;
    enable.classList.remove('enable');
    enable.classList.add('disable');
    nextEnable.classList.add('enable');

    // Switch active class on left list
    var active = document.querySelector('ul.items li.active'),
        nextActive = active.nextElementSibling;
    active.classList.remove('active');
    nextActive.classList.add('active');

    // Update value.
    asking++;

    if (asking == 1) {
      $('#one').removeClass('invisible');
      $('#two').addClass('invisible');
      $('#three').addClass('invisible');
    }

    console.log(asking);

    $("#asking").html(asking.toString());
  });

  var nextAction = function() {
    var enable = document.querySelector('form fieldset.enable'),
        nextEnable = enable.nextElementSibling;
    enable.classList.remove('enable');
    enable.classList.add('disable');
    nextEnable.classList.add('enable');

    // Switch active class on left list
    var active = document.querySelector('ul.items li.active'),
        nextActive = active.nextElementSibling;
    active.classList.remove('active');
    nextActive.classList.add('active');

    // Update value.
    asking++;

    if (asking == 2) {
      $('#one').addClass('invisible');
      $('#two').removeClass('invisible');
      $('#three').addClass('invisible');
    }

    if (asking == 3) {
      $('#one').addClass('invisible');
      $('#two').addClass('invisible');
      $('#three').removeClass('invisible');
    }

    if (asking > 3) {
      $('#three').addClass('invisible');
    }

    $("#asking").html(asking.toString());
  };

  // Section 01.
  $("#zipcode").mask("00000", {reverse: true});

  // Section 02.
  $("#purchase").click(function() {
    $("#refinance").removeClass("selected");
    $("#purchase").addClass("selected");
		data['loanpurpose'] = 0;
    nextAction(); // Action.
    $('#collapseTwo').collapse('show');
    $('#collapseOne').collapse('hide');
    $('#collapseThree').collapse('hide');


    // $('#one').removeClass('invisible');
    // $('#two').addClass('invisible');
    // $('#three').addClass('invisible');
  });

  $("#refinance").click(function() {
    $("#purchase").removeClass("selected");
    $("#refinance").addClass("selected");
		data['loanpurpose'] = 2;
    nextAction(); // Action.
    $('#collapseTwo').collapse('show');
    $('#collapseOne').collapse('hide');
    $('#collapseThree').collapse('hide');
  });

  // Section 03.
  $("#btnRateOrPayment").click(function() {
    $("#btnEquityOrCash").removeClass("selected");
    $("#btnRateOrPayment").addClass("selected");
    nextAction(); // Action.
  });

  $("#btnEquityOrCash").click(function() {
    $("#btnRateOrPayment").removeClass("selected");
    $("#btnEquityOrCash").addClass("selected");
    nextAction(); // Action.
  });

  // Section 04.
  $("#btnSingleFamily").click(function() {
    $("#btnCondo").removeClass("selected");
    $("#btnMultiUnit").removeClass("selected");
    $("#btnSingleFamily").addClass("selected");
		data['propertyType'] = 10;
    nextAction(); // Action.

    $('#collapseTwo').collapse('hide');
    $('#collapseOne').collapse('hide');
    $('#collapseThree').collapse('show');
  });

  $("#btnCondo").click(function() {
    $("#btnSingleFamily").removeClass("selected");
    $("#btnMultiUnit").removeClass("selected");
    $("#btnCondo").addClass("selected");
		data['propertyType'] = 3;
    nextAction(); // Action.


    $('#collapseTwo').collapse('hide');
    $('#collapseOne').collapse('hide');
    $('#collapseThree').collapse('show');
  });

  $("#btnMultiUnit").click(function() {
    $("#btnSingleFamily").removeClass("selected");
    $("#btnCondo").removeClass("selected");
    $("#btnMultiUnit").addClass("selected");
		data['propertyType'] = 12;
    nextAction(); // Action.


    $('#collapseTwo').collapse('hide');
    $('#collapseOne').collapse('hide');
    $('#collapseThree').collapse('show');
  });

  // Section Alternative.

  // Section 05.
	// Obs: Não existe esse paramêtro na API.
  $("#btnPrimaryHome").click(function () {
    $("#btnSecondaryHome").removeClass("selected");
    $("#btnInvestmentHome").removeClass("selected");
    $("#btnPrimaryHome").addClass("selected");
    nextAction(); // Action.
  });

  $("#btnSecondaryHome").click(function () {
    $("#btnPrimaryHome").removeClass("selected");
    $("#btnInvestmentHome").removeClass("selected");
    $("#btnSecondaryHome").addClass("selected");
    nextAction(); // Action.
  });

  $("#btnInvestmentHome").click(function () {
    $("#btnPrimaryHome").removeClass("selected");
    $("#btnSecondaryHome").removeClass("selected");
    $("#btnInvestmentHome").addClass("selected");
    nextAction(); // Action.
  });

  // Section 06.
	$("#btn5to7Yrs").click(function () {
    $("#btnLessThan15Yrs").removeClass("selected");
    $("#MoreThan15Yrs").removeClass("selected");
    $("#NotSure").addClass("selected");

		data['loanProduct1']   = "7 year ARM/30 yrs";
		data['loanProduct2']   = "7 year ARM/30 yrs";
		data['loanProduct3']   = "7 year ARM/30 yrs";
		data['loanProduct4']   = "7 year ARM/30 yrs";
		data['loanProduct5']   = "7 year ARM/30 yrs";
    nextAction(); // Action.
  });

	$("#btnLessThan15Yrs").click(function () {
    $("#btn5to7Yrs").removeClass("selected");
    $("#MoreThan15Yrs").removeClass("selected");
    $("#NotSure").addClass("selected");

		data['loanProduct1']   = "10 year fixed";
		data['loanProduct2']   = "10 year fixed";
		data['loanProduct3']   = "10 year fixed";
		data['loanProduct4']   = "10 year fixed";
		data['loanProduct5']   = "10 year fixed";
    nextAction(); // Action.
  });

	$("#MoreThan15Yrs").click(function () {
    $("#btn5to7Yrs").removeClass("selected");
    $("#btnLessThan15Yrs").removeClass("selected");
    $("#NotSure").addClass("selected");

		data['loanProduct1']   = "20 year fixed";
		data['loanProduct2']   = "20 year fixed";
		data['loanProduct3']   = "20 year fixed";
		data['loanProduct4']   = "20 year fixed";
		data['loanProduct5']   = "20 year fixed";
    nextAction(); // Action.
  });

	$("#NotSure").click(function () {
    $("#btn5to7Yrs").removeClass("selected");
    $("#btnLessThan15Yrs").removeClass("selected");
    $("#MoreThan15Yrs").addClass("selected");

		data['loanProduct1']   = "Other Products";
		data['loanProduct2']   = "Other Products";
		data['loanProduct3']   = "Other Products";
		data['loanProduct4']   = "Other Products";
		data['loanProduct5']   = "Other Products";
    nextAction(); // Action.
  });

	// ..........................
	// Section whatever.
	// Obs: Não existe esse paramêtro na API.
	$("#btnYesComfortable").click(function () {
    $("#btnNoComfortable").removeClass("selected");
    $("#btnYNoSureComfortable").removeClass("selected");
    $("#btnYesComfortable").addClass("selected");
    nextAction(); // Action.
  });

  $("#btnNoComfortable").click(function () {
    $("#btnYesComfortable").removeClass("selected");
    $("#btnYNoSureComfortable").removeClass("selected");
    $("#btnNoComfortable").addClass("selected");
    nextAction(); // Action.
  });

  $("#btnYNoSureComfortable").click(function () {
    $("#btnYesComfortable").removeClass("selected");
    $("#btnNoComfortable").removeClass("selected");
    $("#btnYNoSureComfortable").addClass("selected");
    nextAction(); // Action.
  });
	// ..........................

  // Section 07.
	// Obs: Não existe esse paramêtro na API.
	$("#btnYesVeteran").click(function () {
    $("#btnNoVeteran").removeClass("selected");
    $("#btnYesVeteran").addClass("selected");
    nextAction(); // Action.
  });

	$("#btnNoVeteran").click(function () {
    $("#btnYesVeteran").removeClass("selected");
    $("#btnNoVeteran").addClass("selected");
    nextAction(); // Action.
  });

  // Section 08.
	$('#value_expecting').maskMoney({prefix:'US$ ', allowNegative: true, thousands:',', decimal:'.', affixesStay: false, allowEmpty: true});

	$("#value_expecting").on('change', function() {
    var a = $("#value_expecting").maskMoney('unmasked')[0];
	  // console.log(a); // Debug.
	  var expecting = parseInt(a);
		if (expecting > 0) {
	    $(".expecting").removeClass("invisible");
			$("#ExpectingPay").click(function() {
				data['appraisedvalue'] = expecting;
				data['loan_amount'] 	 = ((expecting / 100) * 80);

        // Capturando valor da entrega padrão.
        var entrada = (((data['appraisedvalue'] / 100) * 20) * 100);
        $('#value_putdown').val(entrada);
        $('#value_putdown').focus();
			});
		}
	});

	// Section 09.
	$('#value_putdown').maskMoney({prefix:'US$ ', allowNegative: true, thousands:',', decimal:'.', affixesStay: false});

	$("#value_putdown").on('change', function() {
    var a = $("#value_putdown").maskMoney('unmasked')[0];
    var expecting = parseInt(a);
		if (expecting > 0) {
	    $(".putDown").removeClass("invisible");
			$("#PutDown").click(function() {
				data['downpayment'] = expecting;
				doQuery();
			});
		}
	});


  // Count fieldset.
  var body = document.querySelector('body'),
      form = document.querySelector('form'),
      count = form.querySelectorAll('fieldset').length;

  // Count.
  var asking = ((count - count));
  var countUp = (count - 1);

  // Show amount.
  $("#asking").html(asking.toString());
  $("#count").html(countUp.toString());


  // Changes XML to JSON
  function xmlToJson(xml) {

    // Create the return object
    var obj = {};

    if (xml.nodeType == 1) { // element
      // do attributes
      if (xml.attributes.length > 0) {
        obj["data"] = {};
        for (var j = 0; j < xml.attributes.length; j++) {
          var attribute = xml.attributes.item(j);
          obj["data"][attribute.nodeName] = attribute.nodeValue;
        }
      }
    } else if (xml.nodeType == 3) { // text
      obj = xml.nodeValue;
    }

    // do children
    if (xml.hasChildNodes()) {
      for(var i = 0; i < xml.childNodes.length; i++) {
        var item = xml.childNodes.item(i);
        var nodeName = item.nodeName;
        if (typeof(obj[nodeName]) == "undefined") {
          obj[nodeName] = xmlToJson(item);
        } else {
          if (typeof(obj[nodeName].push) == "undefined") {
            var old = obj[nodeName];
            obj[nodeName] = [];
            obj[nodeName].push(old);
          }
          obj[nodeName].push(xmlToJson(item));
        }
      }
    }
    return obj;
  };


  function clearInputs(){
    $("#emailInput").val('');
    $("#nameInput").val('');
   $("#phoneInput").val('');
  }


  $('#submitForm').click(function() {
    var email = $("#emailInput").val();
    var name = $("#nameInput").val();
    var phone = $("#phoneInput").val();

    // Email validation.
    var re = /[A-Z0-9._%+-]+@[A-Z0-9.-]+.[A-Z]{2,4}/igm;
    if (email == '' || !re.test(email)) {
      alert('Please enter a valid email address.');
      return false;
    }
    if (name == '') {
      alert('Please enter with your name.');
      return false;
    }
    if (phone == '') {
      alert('Please enter with your phone number.');
      return false;
    }
    var url = "http://blinkmortgageutah.com/rate-quote/email.php";
    $.ajax({
      type: "POST",
      url: url,
      data: {
        "email" : email,
        "name"  : name,
        "phone" : phone,
      },
      success: function (response) {
        if (response == 1) {
          alert("Message sent successfully.");
          clearInputs();
        }

        if (response == 0) {
          alert("Message could not be sent.");
        }
      }
    });
  });
  function goBack(e) {
    var target = e.target;
    var parent = target.parentNode.parentNode.parentNode;
    var previous = parent.previousElementSibling;
    var enable = document.querySelector('form fieldset.enable');
    var prevEnable = previous;
    enable.classList.remove('enable');
    enable.className = '';
    prevEnable.className = 'enable';
    var active = document.querySelector('ul.items li.active');
    prevActive = active.previousElementSibling;
    active.classList.remove('active');
    prevActive.classList.add('active');
    asking--;

    //var previous = parent.previousElementSibling;
    //console.log(previous);
  }
  var back_buttons = document.getElementsByClassName('bBack');
  for (var i =0; i < back_buttons.length; i++)
  {
    back_buttons[i].addEventListener('click', goBack);
  }
	function doQuery() {
		var baseUrl = "https://thirdparty.mortech-inc.com/mpg/servlet/mpgThirdPartyServlet?request_id=1&customerId=45cmtg01&thirdPartyName=ChristianRoberts&licenseKey=rvGJUuWx5d2cvT4P&emailAddress=juancarlos@soroconsulting.com&propertyState=UT&"
			+ "propertyCounty=" + data['propertyCounty'] + "&"
			+ "loanProduct1=" + data['loanProduct1'] + "&"
			+ "loanProduct2=" + data['loanProduct2'] + "&"
			+ "loanProduct3=" + data['loanProduct3'] + "&"
			+ "loanProduct4=" + data['loanProduct4'] + "&"
			+ "loanProduct5=" + data['loanProduct5'] + "&"
			+ "appraisedvalue=" + data['appraisedvalue'] + "&"
			+ "loan_amount=" + data['loan_amount'] + "&"
			+ "downpayment=" + data['downpayment'] + "&"
			+ "propertyType=" + data['propertyType'] + "&"
			+ "loanpurpose=" + data['loanpurpose'] + "&"
			+ "fico=" + data['fico']
			+ "&pmiCompany=-999";

		// Debug:
		console.log(baseUrl);

		// Do Query.
		$.get(baseUrl, function(response) {
      var result = xmlToJson(response);
      var q1 = result.mortech.results;
      if (typeof q1 == "undefined") {
        console.log("Não conseguimos recuperar nenhuma imóvel com os parametos que você preencheu.");
        $('#myModalErro').modal('show');
      }

      if (result.mortech.results != "undefined") {
        var quote = result.mortech.results.quote.quote_detail;
        console.log("Resultado:");
        console.log("Years:", result.mortech.results.quote.data.productDesc);
        console.log("Rate:", quote.data.rate);
        console.log("APR:", quote.data.apr);
        console.log("Monthly Payment:", quote.data.piti);

        $("#rate").html(quote.data.rate + "%");
        $("#apr").html(quote.data.apr + "%");
        $("#monthly").html("$ " + quote.data.piti);
        $("#years").html(result.mortech.results.quote.data.productDesc);
        $("#contentModal").removeClass("invisible");
        $('#myModal').modal('show');
      } else {
        console.log("Não conseguimos recuperar nenhuma imóvel com os parametos que você preencheu.");
        $('#myModalErro').modal('show');
      }
    });
	}
});
