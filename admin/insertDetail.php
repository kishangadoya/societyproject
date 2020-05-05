<?php
$pagetitle= "Insert Detail";
		//$_GET=['blk'];
include 'process/sessionRedirect.php';
include 'header.php';

	if ( empty($_GET['blk']) ) {	  //redirect to te home page if accessed by URL
		header('Location: home.php');
	}

	$block= strtolower($_GET['blk']);
	?>
	<section>
		<div class="container mt-0">
			<div class="container mt-5">
				<div class="row container">

					<div class="col-auto">
						<div class="form-group form-inline"><!--Put php code to Retrive block-->
							<input class="form-control" type="text"  value="<?php echo strtoupper($_GET['blk']);?>" style="width:100px" disabled>
						</div>
					</div><!-- 	1 ST COLUMN END-->

					<div class="col-auto">

						<form method="post" action="process/insertProcess.php?blk=<?php echo $_GET['blk']; ?>" class="form-inline">

							<div class="col" id="1">
								<select class="custom-select" id="selectFloor" name="selectFloor" onChange="changecat(this.value);">	
									<option disabled="true" selected>Select floor</option>
									<option value="0">	Floor-0		</option>
									<option value="1">	Floor-1		</option>
									<option  value="2">	Floor-2		</option>
								</select>
							</div>

							<div class="form-group ml-3">
								<select class="custom-select" name="selectFlat" id="selectFlat">
								    <option value="" disabled selected>Select</option>
								</select>
							</div>
									
					</div>


						<div class="form-group ml-3">
							<input type="text" class="form-control" id="owner" name="ownername" placeholder="Enter Flat Owner name" style="width:350px;">
						</div>		
						<div class="form-group ml-5">
							<input type="Number" class="form-control" id="familymember" name="familymember" placeholder="Number" style="width: 100px;">

						</div>
						<div class="form-group ml-3">
							<div class="col-sm-10">
								<button type="submit" class="btn btn-primary" name="submit">Submit</button>
							</div>
						</div>
					</form>
				</div><!-- 	2ND COLUMN END-->

			</div>
		</div>
	</div>
</section>

<div class="fixed-bottom container row justify-content-center mx-auto col-2 mb-5" id="toast" style="display: none;">
	<div class="alert bg-dark text-white text-center" id="toast-body">
	</div>
</div>
<?php
	if(isset($_SESSION['insert_status']))	 //
	{
		?>
		<script>
			document.getElementById("toast-body").innerHTML = 'Data inserted  &nbsp;<a href="viewDetail.php?blk=<?php echo $_GET['blk'];?>">View</a>';
			document.getElementById("toast").style.display='block';
			setTimeout(function(){
				document.getElementById("toast").style.display='none';
			}, 6000);
		</script>
		<?php
		unset($_SESSION['insert_status']);
	}

	include 'footer.php';
	
	$query = "SELECT * from block_".$block;
	$fire = mysqli_query($conn,$query) or die(mysqli_error($conn));
?>
<script type="text/javascript">
	
	var floorByselectFlat = {
    0: ["1", "2", "3", "4"],
    1: ["5", "6", "7", "8"],
    2: ["9", "10", "11", "12"]
}

function changecat(value) {
        if (value.length == 0) document.getElementById("selectFlat").innerHTML = "<option></option>";
        else {
        	var catOptions = "";
        	for (selectFlatId in floorByselectFlat[value]) {
        		 catOptions += "<option>" + floorByselectFlat[value][selectFlatId]
				 + "</option>";
			}
			document.getElementById("selectFlat").innerHTML = catOptions;
        }
    }
</script>