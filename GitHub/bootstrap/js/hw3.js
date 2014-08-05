// wait for the page to fully load
$(document).ready(function() {
	// wait for the send button to be clicked
	$("#deann").click(function() {
		// get the data from the form 
		var contactname: $("contactname").val() ;
		//var arttype = [];
		//$('.arttype:checked').each(function(index) {
			//arttype[index] = $(this).val();
		//});
		//var contact = {contactname: $("#contactname").val() , contactemail: $("#contactemail").val() , arttype: arttype , comments: $("#comments").val() };
		$.ajax({
			type:"POST",
			url:'mailto.php',
			data:contactname
			}).done(function() {
			  alert("Success in testing DeAnn's Contact Form.");
			});	
	});
	
	
});