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
			pack : {
				validators : {
					notEmpty : {
						message : 'Package is required!'
					}
				}
			},
			date : {
				validators : {
					notEmpty : {
						message : 'Date should not be empty'
					},
					date: { 
                        format: 'MM/DD/YYYY',
                        message: 'Date is not valid'
                    }
				}
			},
			Itineraries : {
				validators : {
					notEmpty : {
						message : 'Itineraries should not be empty'
					}
				}
			}
		}
	});

});