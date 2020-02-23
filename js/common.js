function checkSaveBtn() {
	var errorLen = $(document).find('.has-error:visible').length;

	if (errorLen == 0) {
		$('.btn-submit').attr('disabled', false);
		$('.btn-submit').removeAttr('disabled');
		$('.btn-submit').removeClass('disabled');
	} else {
		$('.btn-submit').attr('disabled', true);
	}
}

$('input').on('keypress',function(){

	checkSaveBtn();
});

$(document).ready(function(){
	$('#confirm').on('show.bs.modal', function(e) {

		$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
	});
	$('#decline').on('show.bs.modal', function(e) {

		$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
	});
});