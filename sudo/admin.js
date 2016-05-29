$(function() {

	$("#cryptx").submit(function(evt) {

		$(".answer-box").attr("disabled", "disabled");
		$.post("backend.checkanswer.php", { answer: $(".answer-box").val(), minet: "minet" })
			.done(function(data) {
				
		});

		evt.preventDefault();

	});


});