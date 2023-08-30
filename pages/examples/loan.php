<?php
    require('../../conn.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Loan Approval</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-navbar-fixed sidebar-collapse">  
<div class="wrapper">
  <!-- Navbar -->
  <?php
    require('../../nav.php');
  ?>

  <!-- Main Sidebar Container -->
  <?php
    require('../../aside.php');
  ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Loan Approval</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            
            <!-- /.card-header -->
            <div class="card-body">
              <div class="table-responsive">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Applicant</th>
                  <th>Amount(Ksh)</th>
                  <th>R.Peroid</th>
                  <th>Phone</th>
                  <th>ApplicationDate</th>
                  <th>Status</th>
                  <th>Documents</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>

                  <?php 
                  $querry="SELECT * FROM LOAN";
                  $result=mysqli_query($conn,$querry);
                  while($row=mysqli_fetch_array($result))
                  {
                  $id=$row['1'];
                  $bid=$row['0'];

                  $detail="SELECT * FROM USER WHERE USERID='$row[1]'";
                  $res=mysqli_query($conn,$detail);
                  $rowx=mysqli_fetch_array($res);


                  ?>

                <tr>
                  <td><?php echo $row[0]; ?></td>
                  <td><?php echo $rowx[1]; ?></td>
                  <td><?php echo number_format($row[3],2); ?></td>
                  <td><?php echo $row[5].' months'; ?></td>
                  <td><?php echo $rowx[2]; ?></td>
                  <td><?php echo $row[25]; ?></td>
                  <?php
                  if ($row[2]==2) {
                    # code...
                    $State = 'Rejected';
                  }elseif ($row[2]==0){
                    $State = 'Pending';
                  }elseif ($row[2]==1) {
                    # code...
                    $State = 'Approved';
                  }else{
                    echo "Error";
                  }

                  ?>
                  <td><?php echo $State; ?></td>

                  <td>
                    <button data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['ID']; ?>" id="getUser" class="btn btn-sm btn-info"><i class="fas fa-user"></i> Docs.</button>
                  </td>

                  <td class="project-actions text-left">
                      <a href="loana.php?bid=<?php echo $row[0]; ?>" target="_self" class="btn btn-sm btn-info">
                                <i class="fas fa-thumbs-up">
                                </i>
                                App.
                      </a>
                      <a href="loanr.php?bid=<?php echo $row[0]; ?>"  target="_self" class="btn btn-sm btn-info">
                          <i class="fas fa-times-circle">
                          </i>
                          Rej.
                      </a>
                      
                      
                  </td>
              
                  
                </tr>


                <?php
                }
                ?>
               
                </tbody>
                <tfoot>
                <tr>
                  <th>ID</th>
                  <th>Applicant</th>
                  <th>Amount(Ksh)</th>
                  <th>R.Peroid</th>
                  <th>Phone</th>
                  <th>ApplicationDate</th>
                  <th>Status</th>
                  <th>Documents</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
              </div>




              <div id="view-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                     <div class="modal-dialog modal-lg"> 
                          <div class="modal-content"> 
                          
                               <div class="modal-header"> 
          <!--                             <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> --> 
                                    <h4 class="modal-title">
                                      <i class="fas fa-user"></i> User Loan Application Details
                                    </h4> 
                               </div> 
                               <div class="modal-body"> 
                               
                                   <div id="modal-loader" style="display: none; text-align: center;">
                                    <img src="ajax-loader.gif">
                                   </div>                            
                                   <!-- content will be load here -->                          
                                   <div id="dynamic-content"></div>                             
                                </div> 
                                <div class="modal-footer"> 
                                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                                </div> 
                                
                         </div> 
                      </div>
              </div>



            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php
    require('../../footer.php');
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="../../plugins/datatables/jquery.dataTables.js"></script>
<script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>



<!-- DataTables -->
<!-- <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script> -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js" ></script> -->
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
  
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script> -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>





<!-- page script -->
<script>
$(document).ready(function(){
  
  $(document).on('click', '#getUser', function(e){
    
    e.preventDefault();
    
    var uid = $(this).data('id');   // it will get id of clicked row
    
    $('#dynamic-content').html(''); // leave it blank before ajax call
    $('#modal-loader').show();      // load ajax loader
    
    $.ajax({
      url: 'loanm.php',
      type: 'POST',
      data: 'id='+uid,
      dataType: 'html'
    })
    .done(function(data){
      console.log(data);  
      $('#dynamic-content').html('');    
      $('#dynamic-content').html(data); // load response 
      $('#modal-loader').hide();      // hide ajax loader 
    })
    .fail(function(){
      $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
      $('#modal-loader').hide();
    });
    
  });
  
});

</script>

<script type="text/javascript">
  function setEventId(event_id){
    document.querySelector("#event_id").innerHTML = event_id;
  }
</script>



<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": true,
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
