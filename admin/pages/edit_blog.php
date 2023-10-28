<link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />
<?php
include("../db/db.php");

?>
<script>
	console.log('sdfdsf');
	const otherDiv = document.querySelector('#editMenu');
	otherDiv.classList.add('selected');
</script>
<style>

	.customButton button{
		padding: 0 5px;
	}
</style>


<div class="container-fluid">
	<div class="card">
		<div class="card-body">
			<h5 class="card-title fw-semibold mb-4">Edit Blog</h5>
			<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
				<thead>
					<tr>
						<th>ID</th>
						<th>Post Title</th>
						<th>Date</th>
						<th>Status</th>
						<th>Edit</th>
					</tr>
				</thead>
				<tbody>

					<?php
					$sql = "SELECT post_ID, post_title,post_date,post_status from post;";
					$result = mysqli_query($conn, $sql);
					while ($row = mysqli_fetch_array($result)) {
					?>
						<tr>
							<td><?= $row['0'] ?></td>
							<td><?= $row['1'] ?></td>
							<td><?= $row['2'] ?></td>
							<td>
								<?php
								if ($row['3'] == "active") {
									echo '<div class="text-success">' . $row['3'] . '</div>';
								} else {
									echo '<div class="text-danger">' . $row['3'] . '</div>';
								}
								?>
							</td>
							<td data-order="1000" class="text-center customButton">
								<button type="button" class="btn btn-outline-primary m-1"><i class="ti ti-ballpen"></i></button>
								<button type="button" class="btn btn-outline-danger m-1"><i class="ti ti-trash"></i></button>
							</td>
						</tr>
					<?php
					}
					?>

				</tbody>
			</table>

			<script>
				new DataTable('#example');
			</script>
			<!-- <script src="assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/sidebarmenu.js"></script>
    <script src="assets/js/app.min.js"></script>
    <script src="assets/libs/simplebar/dist/simplebar.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.js"></script> -->
			<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
			<script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
			<script>
				$(document).ready(function() {
					//Only needed for the filename of export files.
					//Normally set in the title tag of your page.
					document.title = "Simple DataTable";
					// DataTable initialisation
					$("#example").DataTable({
						dom: '<"dt-buttons"Bf><"clear">lirtp',
						paging: true,
						autoWidth: true,
						buttons: [
							"colvis",
							"copyHtml5",
							"csvHtml5",
							"excelHtml5",
							"pdfHtml5",
							"print"
						]
					});
				});
			</script>

			</body>



			</html>