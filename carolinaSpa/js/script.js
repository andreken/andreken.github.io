$(document).ready(function(){

	// Fixed menu on scroll
	var navbarOffset = $('.navigation').offset();

	$(window).scroll(function(){
		var scroll = $(window).scrollTop();
		if(scroll>navbarOffset.top){
			$('.navigation').addClass('fixed-top').removeClass('mt-4');
		} else {
			$('.navigation').removeClass('fixed-top').addClass('mt-4');
		}
	});

	$('#contact_form').on('submit',function(event){
		event.preventDefault();

		var errors = [];

		// Validates name input field
		var name = $('#name').val();
		if(name.length < 4){
			$('#name').removeClass('is-valid').addClass('is-invalid');
			errors.push("1");
		} else {
			$('#name').removeClass('is-invalid').addClass('is-valid');
		}

		// Validates email input field
		var email = $('#email').val();
		if(email.length < 4){
			$('#email').removeClass('is-valid').addClass('is-invalid');
			errors.push("2");
		} else {
			$('#email').removeClass('is-invalid').addClass('is-valid');
		}

		// Validates email input field
		var message = $('#message').val();
		if(message.length < 1){
			$('#message').removeClass('is-valid').addClass('is-invalid');
			errors.push("3");
		} else {
			$('#message').removeClass('is-invalid').addClass('is-valid');
		}

		// Check if there are any errors and, if not, send ajax request
		var contact_form = $('#contact_form');
		if(!(errors.length > 0)){
			$.ajax({
				type: contact_form.attr('method'),
				url: contact_form.attr('action'),
				data: contact_form.serialize()
			}).done(function(data){
				// Use split to extract only the message, ignoring send mail errors on localhost
				// var result = '{'+data.split('{')[1];
				var result = data;
				var response = JSON.parse(result);
				$('#output').html(response.message).addClass("d-block");
			});
		}
	})
});