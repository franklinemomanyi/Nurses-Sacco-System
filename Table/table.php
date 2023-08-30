<?php
    require('../conn.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Payments</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-table100">
			<div class="wrap-table100">
				<div class="table100">
					<table id="example2">
						<thead>
							<tr class="table100-head">
								<th class="column1">ID</th>
								<th class="column2">Time</th>
								<th class="column3">Transaction ID</th>
								<th class="column4">Account</th>
								<th class="column5">Amount</th>
								<th class="column6">Phone</th>
								<th class="column5">FName</th>
								<th class="column6">MName</th>
								<th class="column6">LName</th>
							</tr>
						</thead>
						<tbody>

							<?php 


                  $querry="SELECT * FROM TBLPAYMENTS";
                  $result=mysqli_query($conn,$querry);


                  //$querry="SELECT * FROM tblpayments";
                  
                  while($row=mysqli_fetch_array($result))
                  {
                 

                  ?>


								<tr>
									<td class="column1"><?php echo $row[0]; ?></td>
									<td class="column2"><?php echo $row[1]; ?></td>
									<td class="column3"><?php echo $row[2]; ?></td>
									<td class="column4"><?php echo $row[3]; ?></td>
									<td class="column5"><?php echo $row[4]; ?></td>
									<td class="column6"><?php echo $row[5]; ?></td>
									<td class="column5"><?php echo $row[6]; ?></td>
									<td class="column6"><?php echo $row[7]; ?></td>
									<td class="column6"><?php echo $row[8]; ?></td>

								</tr>
								<?php
				                }
				                ?>
												
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>




	<!-- DataTables -->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
  
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
                    dom:'Bfrtip',
                    buttons:[
                         'print'
                    ]
    });
  });
</script>
<!-- DataTables -->

</body>
</html>