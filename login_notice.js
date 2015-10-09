$(document).ready(function() {
	var html = "<div class='legal_notice'>";
	html += "<p><strong>Important notice:</strong></p>";
	html += "<p>Replace this placeholder text with your own HTML text.</p>";
	html += "</div>";
	$("#login-form .boxcontent .formbuttons").before($(html));
});
