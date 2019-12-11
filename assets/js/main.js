$(document).ready(function () {

	// setting url
	localStorage.setItem('url', 'http://' + window.location.hostname + '/manajemen_surat/')
	//session flashdata sweetalert 2
	const swalText = $('.flashAlert').data('text')
	const swalType = $('.flashAlert').data('type')
	if (swalType) {
		Swal.fire
			({
				title: swalType.toUpperCase(),
				html: swalText,
				type: swalType
			})
	}
	// tombol logout
	$('.btnLogout').click(function () {
		Swal.fire
			({
				title: "Peringatan",
				text: "Apakah anda yakin untuk Log out?",
				type: "warning",
				showCancelButton: true
			}).then((res) => {
				if (res.value) {
					document.location.href = localStorage.getItem('url') + 'Home/logout';
				}
			})
	})

}) 
