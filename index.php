<?php
include 'includes/connection.inc.php';
$connread = dbConnect('read', 'pdo');
$connwrite = dbConnect('write', 'pdo');
?>
<html>
	<head>
		<link rel="stylesheet" href="css/style.css" />
		<script src="js/jquery-3.5.1.js"></script>
		<link
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css"
			rel="stylesheet"
			integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl"
			crossorigin="anonymous"
		/>
		<script
			src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
			integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0"
			crossorigin="anonymous"
		></script>
	</head>
	<body>
		<div class="wrapper">
			<br /><br /><br /><br />

			<!--  
THIS IS INPUT WHERE USER WRITE WISHING SUGGESTION THAT SHOULD SHOWS BELLOW ----- START
-->
			<div class="input-group mb-3">
				<input
					type="text"
					id="auto-suggest"
					class="form-control"
					placeholder="Search for result"
					aria-label="Search for result"
					aria-describedby="basic-addon2"
				/>
				<div class="input-group-append">
					<button class="btn btn-primary button-half" type="button"
						>Search</button
					>
				</div>
			</div>
			<!--  
THIS IS INPUT WHERE USER WRITE WISHING SUGGESTION THAT SHOULD SHOWS BELLOW ----- END
-->

			<!--  
THIS IS AUTOSUGGEST BOX WHERE TAGS ARE SHOWN ----- START
-->
			<div class="autosuggest-box notclickable" id="autosuggest-box"> </div>
			<!--  
THIS IS AUTOSUGGEST BOX WHERE TAGS ARE SHOWN ----- END
-->
		</div>

		<!--  
THIS IS AJAX CODE WHERE WE CALL VALUES FROM DATABASE AND SHOW VALUES IN AUTOSUGGESTBOX ----- START
-->
		<script>
			$('#auto-suggest').on('change paste keyup', function () {
				var auto_suggest = $('#auto-suggest').val();
				if (auto_suggest != '') {
					$('.autosuggest-box').show();
				} else {
					$('.autosuggest-box').hide();
				}
				var xhttp = new XMLHttpRequest();
				xhttp.onreadystatechange = function () {
					if (this.readyState == 4 && this.status == 200) {
						document.getElementById(
							'autosuggest-box'
						).innerHTML = this.responseText;
					}
				};
				xhttp.open(
					'GET',
					'autosuggest-ajax-get.php?auto_suggest=' + auto_suggest + '',
					true
				);
				xhttp.send();
				return false;
			});
		</script>
		<!--  
THIS IS AJAX CODE WHERE WE CALL VALUES FROM DATABASE AND SHOW VALUES IN AUTOSUGGESTBOX ----- END
-->

		<!--  
THIS IS JAVASCRIPT CODE TO HIDE AUTOSUGGESTBOX IF CLICK ANYWHERE ELSE ----- START
-->
		<script>
			$(document).mouseup(function (e) {
				var notclickable = $('.notclickable');
				if (!notclickable.is(e.target)) {
					$('#autosuggest-box').hide();
				}
			});
		</script>
		<!--  
THIS IS JAVASCRIPT CODE TO HIDE AUTOSUGGESTBOX IF CLICK ANYWHERE ELSE ----- END
-->

		<!--  
THIS IS JAVASCRIPT CODE TO PUT VALUE FROM AUTOSUGGEST BOX TO OUR INPUT ----- START
-->
		<script>
			$(function () {
				$(document).on('click', '.autosuggest-p', function (e) {
					var autosuggestp = this.id;
					var autosuggestp_clean = autosuggestp.replace(/[^\d.-]/g, '');
					var autosuggestp_id = '#autosuggestp' + autosuggestp_clean;
					var autosuggestp_val = $(autosuggestp_id).html();
					$('#auto-suggest').val(autosuggestp_val);
					$('#autosuggest-box').hide();
				});
			});
		</script>
		<!--  
THIS IS JAVASCRIPT CODE TO PUT VALUE FROM AUTOSUGGEST BOX TO OUR INPUT ----- END
-->
	</body>
</html>