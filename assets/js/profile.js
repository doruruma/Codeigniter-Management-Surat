$(document).ready(function () {

	$('#profileLink').addClass('active')
	// input type file editprofile
	$('.custom-file-input').on('change', function () {
		const fileName = $(this).val().split('\\').pop();
		$(this).next('.custom-file-label').addClass('selected').html(fileName);
		$('.img-fluid').attr('src', window.URL.createObjectURL(this.files[0]));
	});

})
