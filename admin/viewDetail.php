<?php
	$pagetitle= "View Detail";
	include 'process/sessionRedirect.php';
	include 'header.php';

	$block= strtolower($_GET['blk']);

?>

<section>
	<div class="container mt-3">
		<div class="row  container-fluid">
			<div class="col" md-4></div>
			<div class="col auto md-4">
				<div class="form-group">
					<form action="#" method="post">	
						<select class="custom-select" name="blkoption" id="blkoption">
								<option value="*">All Blocks</option>
								<option value="A">A</option>
								<option value="B">B</option>
								<option value="C">C</option>
								<option value="D">D</option>
								<option value="E">E</option>
								<option value="F">F</option>
								<option value="G">G</option>
								<option value="H">H</option>
								<option value="J">J</option>
								<option value="K">K</option>
								<option value="L">L</option>
								<option value="M">M</option>
							</select>
				</div>
			</div>

			<div class="col md-4">
						<input type="submit" class="btn btn-secondary" name="btn" name="View Detail" >
					</form>
			</div>
		</div>
	</div>

</section>

<section>
	<div class="container mt-3">
		<div class="container col-md-auto">
			<div class="row">
				<div class="col-md text-center">
					<h2>Block- <span id="heading"></span> Detail</h2>
				</div>
			</div>
		</div>

		<div class="container justify-content-center mt-4">
			<table class="table table-hover  table-striped">
				<thead>
					<tr>
						<th scope="col">Id</th>
						<th scope="col">Floor</th>
						<th scope="col">Flat</th>
						<th scope="col">Owner Name</th>
						<th scope="col">Family member</th>
						<th scope="col">Maintenance</th>
					</tr>
				</thead>
				<tbody id="tbody">
				
				</tbody>
			</table>
		</div>
	</div>
</section>

<script>
$(document).ready(function(){
	$("#blkoption").on('change',function(){
		var value = $(this).val()
		console.log(value)
		$.ajax({
			method:"POST",
			url:"Process/selectedblock.php",
			data: {
               'blkoption': value,
            },
			dataType:'html',
			success:function(data){
				$("#heading").html(value);
				$("#tbody").html(data);
			}
		});
	});

});


</script>
<?php 
include 'footer.php';
?>
