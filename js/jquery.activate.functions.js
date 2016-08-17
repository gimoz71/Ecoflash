// VALIDAZIONE DEL FORM CONTATTI
$(document).ready(function(){
	
	/* parametri aggiuntivi per la validazione della richiesta di collaborazione*/
	
	/* AMBITO NAVALE */
	
	$("#richiesta_info_navale").keypress(function(e) {
		if (e.which == 13) {
			return false;
		}
	});
	
	$("#richiesta_info_navale").validate({
		/*rules: {
			piva: {
				required: true,
				minlength: 11,
				maxlength: 11,
				number: true
			},
			tel: {
				number: true
			},
			fax: {
				number: true
			}
		},*/
		submitHandler: function(form){
			if(!this.wasSent){
				this.wasSent = true;
				$(':submit', form).val('inviato')
					  .attr('disabled', 'disabled')
					  .addClass('disabled');
				form.submit();
			} else {
				return false;
			}
		},
		// set this class to error-labels to indicate valid fields
		success: function(label) {
			// set &nbsp; as text for IE
			label.html("&nbsp;").addClass("valid");
		}
		
	});
	
	/* AMBITO INDUSTRIA */
	
	$("#richiesta_info_industria").keypress(function(e) {
		if (e.which == 13) {
			return false;
		}
	});
	
	$("#richiesta_info_industria").validate({
		/*rules: {
			piva: {
				required: true,
				minlength: 11,
				maxlength: 11,
				number: true
			},
			tel: {
				number: true
			},
			fax: {
				number: true
			}
		},*/
		submitHandler: function(form){
			if(!this.wasSent){
				this.wasSent = true;
				$(':submit', form).val('inviato')
					  .attr('disabled', 'disabled')
					  .addClass('disabled');
				form.submit();
			} else {
				return false;
			}
		},
		// set this class to error-labels to indicate valid fields
		success: function(label) {
			// set &nbsp; as text for IE
			label.html("&nbsp;").addClass("valid");
		}
		
	});
	
	/* AMBITO BONIFICHE */
	
	$("#richiesta_info_bonifiche").keypress(function(e) {
		if (e.which == 13) {
			return false;
		}
	});
	
	$("#richiesta_info_bonifiche").validate({
		/*rules: {
			piva: {
				required: true,
				minlength: 11,
				maxlength: 11,
				number: true
			},
			tel: {
				number: true
			},
			fax: {
				number: true
			}
		},*/
		submitHandler: function(form){
			if(!this.wasSent){
				this.wasSent = true;
				$(':submit', form).val('inviato')
					  .attr('disabled', 'disabled')
					  .addClass('disabled');
				form.submit();
			} else {
				return false;
			}
		},
		// set this class to error-labels to indicate valid fields
		success: function(label) {
			// set &nbsp; as text for IE
			label.html("&nbsp;").addClass("valid");
		}
		
	});
	
});


/* funzione per il valore di default nei campi
/*jQuery(function($) {
	$("#email, #email2").defaultvalue("Inserisci la tua email", "Inserisci la tua email");
});*/


//--------------------------------------

// INVIO DEI DATI DAL FORM

//--------------------------------------

$(document).ready(function(){
	
	
	/* AMBITO NAVALE */
	// Invio e controllo dal form di richiesta collaborazioni
	$("#richiesta_info_navale").submit(function(){
		
		$('#messaggi').ajaxStart(function() {
			$(this).html('<span class="statewait"><img src="images/form/ajax-loader-rect.gif" width="160" height="10" /></span>');
		});
		
		// 'this' refers to the current submitted form
		var str = $(this).serialize();
		
		$.ajax({ 	
		type: "POST",
		url: "email_check_invio.php",
		data: str,
		success: function(msg){
			$("#messaggi").ajaxComplete(function(event, request, settings){
				if(msg == 'OK') // Message Sent? Show the 'Thank You' message and hide the form
					{
						result = '<span class="state3">Controlla la tua casella di posta,<br />verrai al pi&ugrave; presto contattato da un nostro consulente</span>';
						/*_gaq.push(['_trackPageview', '/richiesta-informazioni']);*/
					}
					else
					{
						result = msg;
					}
						$(this).html(result);
					});
				}
		 	});
		return false;
	});
	
	/* AMBITO INDUSTRIA */
	// Invio e controllo dal form di richiesta collaborazioni
	$("#richiesta_info_industria").submit(function(){
		
		$('#messaggi').ajaxStart(function() {
			$(this).html('<span class="statewait"><img src="images/form/ajax-loader-rect.gif" width="160" height="10" /></span>');
		});
		
		// 'this' refers to the current submitted form
		var str = $(this).serialize();
		
		$.ajax({ 	
		type: "POST",
		url: "email_check_invio.php",
		data: str,
		success: function(msg){
			$("#messaggi").ajaxComplete(function(event, request, settings){
				if(msg == 'OK') // Message Sent? Show the 'Thank You' message and hide the form
					{
						result = '<span class="state3">Controlla la tua casella di posta,<br />verrai al pi&ugrave; presto contattato da un nostro consulente</span>';
						/*_gaq.push(['_trackPageview', '/richiesta-informazioni']);*/
					}
					else
					{
						result = msg;
					}
						$(this).html(result);
					});
				}
		 	});
		return false;
	});
	
	/* AMBITO BONIFICHE */
	// Invio e controllo dal form di richiesta collaborazioni
	$("#richiesta_info_bonifiche").submit(function(){
		
		$('#messaggi').ajaxStart(function() {
			$(this).html('<span class="statewait"><img src="images/form/ajax-loader-rect.gif" width="160" height="10" /></span>');
		});
		
		// 'this' refers to the current submitted form
		var str = $(this).serialize();
		
		$.ajax({ 	
		type: "POST",
		url: "email_check_invio.php",
		data: str,
		success: function(msg){
			$("#messaggi").ajaxComplete(function(event, request, settings){
				if(msg == 'OK') // Message Sent? Show the 'Thank You' message and hide the form
					{
						result = '<span class="state3">Controlla la tua casella di posta,<br />verrai al pi&ugrave; presto contattato da un nostro consulente</span>';
						/*_gaq.push(['_trackPageview', '/richiesta-informazioni']);*/
					}
					else
					{
						result = msg;
					}
						$(this).html(result);
					});
				}
		 	});
		return false;
	});
});

