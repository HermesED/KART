$(function(){
	
	$("#form").validate({
		rules: {
			nim: {
				required: true,
				number: true,
				minlength: 8
			},
			company: {
				required: true
			},
			phone: {
				required: true,
				number: true,
				minlength: 6
			},
			email: {
				required: true,
				email: true
			},
			message: {
				required: true
			}
		},
		messages: {
			nim: {
				required: 'This field is required',
				number: 'Bukan Angka',
				minlength: 'Minimum length: 8'
			},
			company: {
				required: 'This field is required'
			},
			phone: {
				required: 'This field is required',
				number: 'Invalid phone number',
				minlength: 'Minimum length: 6'
			},
			email: 'Invalid e-mail address',
			message: {
				required: 'This field is required'
			}
		},
		success: function(label) {
			label.html('OK').removeClass('error').addClass('ok');
			setTimeout(function(){
				label.fadeOut(500);
			}, 2000)
		}
	});
	
});