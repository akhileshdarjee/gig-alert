$(document).ready(function() {
	$(".follow").on("click", function() {
		var me = this;

		$.ajax({
			type: 'POST',
			url: $(me).data('href'),
			dataType: 'json',
			success: function(data) {
				if (data['status'].toLowerCase() == 'ok') {
					$(me).html(data['text']);
					$(me).attr("data-href", data['link']);
					$(me).data("href", data['link']);
				}
				else {
					alert("Some error occured");
				}
			},
			error: function(data) {
				$btn.button('reset');
				alert("Some error occured");
			}
		});
	});
});