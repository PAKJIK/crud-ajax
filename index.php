<!DOCTYPE html>
<html lang="en">
<head>       
	<title>Malasngoding.com - CRUD AJAX PHP MYSQLI </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
 
<body>
	<br>
	<div class="container">
		<h2>MENAMPILKAN DATA</h2>
		<div class="row">           
			<div class="col-7">
				<div id="tampil_data">
 
				</div>
			</div>
		</div>
	</div>
 
</body>
<script src="https://code.jquery.com/jquery-3.5.1.js"
integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
 
<script>
	$(document).ready(function () {
		tampil_data();
	});            
 
         //fungsi tampil data
	function tampil_data() {
		$.ajax({
			url: 'data.php',
			type: 'get',
			success: function(data) {
				$('#tampil_data').html(data);
			}
		});
	}
</script>
 
</html>