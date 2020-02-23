$(document).ready(function() {

	$('#submit_form').bootstrapValidator({
		framework : 'bootstrap',
		message : 'This value is not valid',
		feedbackIcons : {
			valid : 'glyphicon glyphicon-ok',
			invalid : 'glyphicon glyphicon-remove',
			validating : 'glyphicon glyphicon-refresh'
		},
		fields : {
			first_name : {
				validators : {
					notEmpty : {
						message : 'first name is required!'
					}
				}
			},
			middle_name : {
				validators : {
					notEmpty : {
						message : 'middle name should not be empty'
					}
				}
			},
			last_name : {
				validators : {
					notEmpty : {
						message : 'last name should not be empty'
					}
				}
			},
			birthDate: {
				validators:{
					notEmpty:{
						message: 'birthdate shoud not be empty'
					},
					date: { 
                        format: 'MM/DD/YYYY',
                        message: 'birth Date is not valid'
                    }
				}
			},
			phoneNumber: {
				validators:{
					notEmpty:{
						message: 'phone shoud not be empty'
					},
					stringLength : {
						min : 11,
						max : 12,
						message : 'invalid phone number'
					}
				}
			},
			password: {
                validators: {
                    notEmpty: {
                        message: 'Please provide password.'
                    },
                    stringLength: {
                    	max: 15,
                        min: 5,
                        message: 'The password cannot be less than 5 characters or more than 15 characters long'
                    }
                }
            },
            confirmPassword: {
                validators: {
                    notEmpty: {
                        message: 'Confirm password cannot be empty.'
                    },
                    identical: {
                        field: 'password',
                        message: 'Passwords do not match.'
                    }
                }
            },	
            email: {
	            validators: {
	            	notEmpty: {
	            		message: 'Please input email address.'
	            	},
	                emailAddress: {
	                    message: 'The value is not a valid email address'
	            	}
	       		}
	       	},
	       	address:{
	       		validators: {
	            	notEmpty: {
	            		message: 'Please input address.'
	            	},
	                stringLength: {
                    	max: 255,
                        min: 5,
                        message: 'The password cannot be less than 5 characters or more than 255 characters long'
                    }
	       		}
	       	},
	       	tos:{
	       		validators:{
	       			required: true
	       		}
	       	}
		}
	});

});
