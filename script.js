$(document).ready(function(){
	$("#uploadForm").submit(function(e){
		e.preventDefault();
		var formData = new FormData(this);
		$.ajax({
			url: 'upload.php', // Đường dẫn đến file PHP
			type: 'POST',
			data: formData,
			contentType: false,
			processData: false,
			success: function(response){
				$('#result').html(response);
			}
		});
	});
});