$(document).ready(function() {
	$("#follow-artist").on("click", function() {
		var $btn = $(this).button('loading');
		var me = this;

		$.ajax({
			type: 'POST',
			url: $(me).data('href'),
			dataType: 'json',
			success: function(data) {
				$btn.button('reset');

				if (data['status'].toLowerCase() == 'ok') {
					$(me).html("Unfollow");
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