<?php
    require('../../conn.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Reporting Tables</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="shortcut icon" href="../../dist/img/icon.png" type="image/x-icon">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
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
            <h1>Reporting Tables</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          
          <!-- /.col -->
          <div class="col-md-12">
           <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#busstype" data-toggle="tab">Loans</a></li>
                  <li class="nav-item"><a class="nav-link" href="#area" data-toggle="tab">BBF</a></li>
                  <li class="nav-item"><a class="nav-link" href="#emp" data-toggle="tab">Reports</a></li>

                  <li class="nav-item"><a class="nav-link" href="#vbusstype" data-toggle="tab">PayOuts</a></li>
                  <li class="nav-item"><a class="nav-link" href="#varea" data-toggle="tab">Transfer</a></li>
                  <li class="nav-item"><a class="nav-link" href="#vemp" data-toggle="tab">Members</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="busstype">
                    <!-- Post -->
                     <div class="table-responsive">
                            <table id="example" class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                <th>ID</th>
                                <th>Applicant</th>
                                <th>Amount(Ksh)</th>
                                <th>R.Peroid</th>
                                <th>Phone</th>
                                <th>AppDate</th>
                                <th>Status</th>
                                <th>GForm</th>
                               
                              </tr>
                              </thead>
                              <tbody>

                                <?php 
                                $querry="SELECT * FROM LOAN";
                                $result=mysqli_query($conn,$querry);
                                while($row=mysqli_fetch_array($result))
                                {
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
                                  $State = 'Disbursed';
                                }elseif ($row[2]==3){
                                  $State = 'Rejected';
                                }elseif ($row[2]==1) {
                                  # code...
                                  $State = 'Pending';
                                }else{
                                  echo "Error";
                                }

                                ?>
                                <td><?php echo $State; ?></td>
                                <td class="project-actions text-left">
                                    <a href="/Nurses/pages/examples/guarantors.php?bid=<?php echo $row[0]; ?>&tid=<?php echo $row[1]; ?>" target="_blank" class="btn btn-primary btn-sm">
                                        <i class="fas fa-download">
                                        </i>
                                        View
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
                                <th>AppDate</th>
                                <th>Status</th>
                                <th>GForm</th>
                               
                              </tr>
                              </tfoot>
                            </table>
                    </div>
                    
                  </div>
                  <!-- /.tab-pane -->
                  <div class="tab-pane" id="area">
                    <!-- The timeline -->
                   <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                <th>Applicant</th>
                                <th>AppID</th>
                                <th>Contact</th>
                                <th>Deceased</th>
                                <th>Relationship</th>
                                <th>Date of Death</th>
                                <th>Application Time</th>
                                <th>Status</th>
                               
                              </tr>
                              </thead>
                              <tbody>

                                <?php 
                                $querry="SELECT * FROM BBF";
                                $result=mysqli_query($conn,$querry);
                                while($row=mysqli_fetch_array($result))
                                {
                                  $detail="SELECT * FROM USER WHERE USERID='$row[1]'";
                                  $res=mysqli_query($conn,$detail);
                                  $rowx=mysqli_fetch_array($res);
                                

                                ?>


                              <tr>
                                <td><?php echo $rowx[1]; ?></td>
                                <td><?php echo $rowx[3]; ?></td>
                                <td><?php echo $rowx[2]; ?></td>
                                <td><?php echo $row[2]; ?></td>
                                <td><?php echo $row[3]; ?></td>
                                <td><?php echo $row[4]; ?></td>
                                <td><?php echo $row[6]; ?></td>
                                <?php
                                if ($row[7]==0) {
                                  # code...
                                  $State = 'Pending';
                                }elseif ($row[7]==1){
                                  $State = 'Disbursed';
                                }elseif ($row[7]==2) {
                                  # code...
                                  $State = 'Rejected';
                                }else{
                                  echo "Error";
                                }

                                ?>
                                <td><?php echo $State; ?></td>
                                
                              </tr>

                              <?php
                              }
                              ?>
                             
                              </tbody>
                              <tfoot>
                              <tr>
                                <th>Applicant</th>
                                <th>AppID</th>
                                <th>Contact</th>
                                <th>Deceased</th>
                                <th>Relationship</th>
                                <th>Date of Death</th>
                                <th>Application Time</th>
                                <th>Status</th>
                               
                              </tr>
                              </tfoot>
                            </table>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="tab-pane" id="emp">
                   <div class="table-responsive">
                            <table id="example2" class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                <th>Uplodee</th>
                                <th>Contact</th>
                                <th>ReportName</th>
                                <th>ReportType</th>
                                <th>Dateploaded</th>
                                <th>Download</th>
                                
                               
                              </tr>
                              </thead>
                              <tbody>

                                <?php 
                                $querry="SELECT * FROM REPORT";
                                $result=mysqli_query($conn,$querry);
                                while($row=mysqli_fetch_array($result))
                                {
                                
                                  $detail="SELECT * FROM USER WHERE USERID='$row[1]'";
                                  $res=mysqli_query($conn,$detail);
                                  $rowx=mysqli_fetch_array($res);

                                ?>


                              <tr>

                                <td><?php echo $rowx[1]; ?></td>
                                <td><?php echo $rowx[2]; ?></td>
                                <td><?php echo $row[2]; ?></td>
                                <td><?php echo $row[3]; ?></td>
                                <td><?php echo $row[5]; ?></td>
                          
                                <td class="project-actions text-left">
                                    <a href="<?php echo $row[4]; ?>" target="_blank" class="btn btn-primary btn-sm">
                                        <i class="fas fa-envelope">
                                        </i>
                                        Letter.
                                    </a>
                                    
                                </td>
                           
                              </tr>

                              <?php
                              }
                              ?>
                             
                              </tbody>
                              <tfoot>
                              <tr>
                                <th>Uplodee</th>
                                <th>Contact</th>
                                <th>ReportName</th>
                                <th>ReportType</th>
                                <th>Dateploaded</th>
                                <th>Download</th>
                               
                              </tr>
                              </tfoot>
                            </table>
                    </div>
                  </div>
                  <div class="tab-pane" id="vbusstype">
                    <div class="table-responsive">
                            <table id="example3" class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                <th>Payee Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Amount(Ksh.)</th>
                                <th>Reason for Payment</th>
                                <th>Payment Date</th>
                                <th>Cheque</th>
                               
                              </tr>
                              </thead>
                              <tbody>

                                <?php 
                                $querry="SELECT * FROM PAYOUTS";
                                $result=mysqli_query($conn,$querry);
                                while($row=mysqli_fetch_array($result))
                                {

                                  $queryf="SELECT NAME,PHONE,IDNUM,EMAIL FROM USER WHERE USERID='$row[1]'";
                                  $resultf=mysqli_query($conn,$queryf);
                                  $row1=mysqli_fetch_array($resultf);
                                  
                                ?>


                              <tr>
                                <td><?php echo $row1[0]; ?></td>
                                <td><?php echo $row1[1]; ?></td>
                                <td><?php echo $row1[3]; ?></td>
                                <td><?php echo number_format($row[2],2); ?></td>
                                <td><?php echo $row[3]; ?></td>
                                <td><?php echo $row[5]; ?></td>
                                <td class="project-actions text-left">
                                    <a href="<?php echo $row[4]; ?>" target="_blank" class="btn btn-primary btn-sm">
                                        <i class="fas fa-money-check-alt">
                                        </i>
                                        Cheque.
                                    </a>
                                    
                                </td>
                                
                              </tr>

                              <?php
                              }
                              ?>
                             
                              </tbody>
                              <tfoot>
                              <tr>
                                <th>Payee Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Amount(Ksh.)</th>
                                <th>Reason for Payment</th>
                                <th>Payment Date</th>
                                <th>Cheque</th>
                              </tr>

                              </tfoot>
                            </table>
                    </div>
                  </div>
                  <div class="tab-pane" id="varea">
                     <div class="table-responsive">
                            <table id="example4" class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                <th>UserID</th>
                                <th>Name</th>
                                <th>IDNumber</th>
                                <th>Phone</th>
                                <th>From</th>
                                <th>To</th>
                                <th>TimeStamp</th>
                                <th>Letter</th>
                               
                              </tr>
                              </thead>
                              <tbody>

                                <?php 
                                $querry="SELECT * FROM USER WHERE REGION != TRANSFER AND TRANSFER != 0 ";
                                $result=mysqli_query($conn,$querry);
                                while($row=mysqli_fetch_array($result))
                                {
                                 
                                $x="SELECT SUBCOUNTY FROM SUBCOUNTY WHERE ID='$row[28]'";
                                $y=mysqli_query($conn,$x);
                                $z=mysqli_fetch_array($y);
                                $from=$z[0];

                                $e="SELECT SUBCOUNTY FROM SUBCOUNTY WHERE ID='$row[8]'";
                                $g=mysqli_query($conn,$e);
                                $h=mysqli_fetch_array($g);
                                $to=$h[0];



                                ?>


                              <tr>
                                <td><?php echo $row[0]; ?></td>
                                <td><?php echo $row[1]; ?></td>
                                <td><?php echo $row[3]; ?></td>
                                <td><?php echo $row[2]; ?></td>
                                <td><?php echo $from; ?></td>
                                <td><?php echo $to; ?></td>
                                <td><?php echo $row[30]; ?></td>
                                <td class="project-actions text-left">
                                    <a href="<?php echo $row[29]; ?>" target="_blank" class="btn btn-primary btn-sm">
                                        <i class="fas fa-envelope">
                                        </i>
                                        Letter.
                                    </a>
                                    
                                </td>
                                
                              </tr>

                              <?php
                              }
                              ?>
                             
                              </tbody>
                              <tfoot>
                              <tr>
                                <th>UserID</th>
                                <th>Name</th>
                                <th>IDNumber</th>
                                <th>Phone</th>
                                <th>From</th>
                                <th>To</th>
                                <th>TimeStamp</th>
                                <th>Letter</th>
                               
                              </tr>
                              </tfoot>
                            </table>
                    </div>
                  </div>
                  <div class="tab-pane" id="vemp">
                     <div class="table-responsive">
                            <table id="example5" class="table table-bordered table-hover">
                              <thead>
                              <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>IDNumber</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Domain</th>
                                <th>Status</th>
                                <th>P/No</th>
                                <th>Occupation</th>
                                <th>Sex</th>
                                <th>RegDate</th>
                                <th>Detail</th>
                               <!--  <th>Detail</th> -->
                               
                              </tr>
                              </thead>
                              <tbody>

                                <?php 
                                $querry="SELECT * FROM USER";
                                $result=mysqli_query($conn,$querry);
                                while($row=mysqli_fetch_array($result))
                                {
                                $domain=$row[6];
                                $status=$row[7];
                                $gender=$row[14];

                                if ($domain==1) {
                                  # code...
                                  $dom='Administrator';
                                }elseif ($domain==2) {
                                  # code...
                                  $dom='Member';
                                }else{
                                  $dom='Undefined';
                                }

                                
                                if ($status==1) {
                                  $stat=' Active';
                                }elseif ($status==2) {
                                  $stat='Suspended';
                                }else{
                                  $stat='Undefined';
                                }


                                if ($gender==1) {
                                  $sex='Male';
                                }elseif ($gender==2) {
                                  $sex='Female';
                                }else{
                                  $sex='Undefined';
                                }

                                ?>


                              <tr>
                                <td><?php echo $row[0]; ?></td>
                                <td><?php echo $row[1]; ?></td>
                                <td><?php echo $row[3]; ?></td>
                                <td><?php echo $row[2]; ?></td>
                                <td><?php echo $row[4]; ?></td>
                                <td><?php echo $dom; ?></td>
                                <td><?php echo $stat; ?></td>
                                <td><?php echo $row[10]; ?></td>
                                <td><?php echo $row[11]; ?></td>
                                <td><?php echo $sex; ?></td>
                                <td><?php echo $row[27]; ?></td>
                                <!-- <td class="project-actions text-left">
                                    <a href="#" onclick="setEventId(<?= $row[0]?>)" class="btn btn-primary btn-sm" type="button" data-toggle="modal" data-target="#myModal">
                                        <i class="fas fa-user">
                                        </i>
                                        Detail.
                                    </a>
                                    
                                </td> -->
                                <td>
                                <button data-toggle="modal" data-target="#view-modal" data-id="<?php echo $row['USERID']; ?>" id="getUser" class="btn btn-sm btn-info"><i class="fas fa-user"></i> Detail</button>
                                </td>
                                
                              </tr>

                              <?php
                              }
                              ?>
                             
                              </tbody>
                              <tfoot>
                              <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>IDNumber</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Domain</th>
                                <th>Status</th>
                                <th>P/No</th>
                                <th>Occupation</th>
                                <th>Sex</th>
                                <th>RegDate</th>
                              <!--   <th>Detail</th> -->
                                <th>Detail</th>
                               
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
                                          <i class="fas fa-user"></i> User Profile
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


                    <div id="myModal" class="modal fade" role="dialog">
                      <div class="modal-dialog modal-lg">

                        <!-- Modal content-->
                        <div class="modal-content">
                          <div class="modal-header text-center">
                            <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
                            <h3 class="text-center">User Detail</h3>
                          </div>
                          <div class="modal-body">

                            <?php
                            $test = '<span id="event_id">';

                            ?>
                            <!-- <p>Index <?php echo $test; ?></p> -->
                            
                            <form>

                              <?php
                                require('modals.php');
           
                              ?>

                              
                            </form>
                          </div>
                          <div class="modal-footer">
                            <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
                          </div>
                        </div>

                      </div>
                    </div>




                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
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
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>




<!-- DataTables -->
<script type="text/css" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css"></script>
<script type="text/css" src="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css"></script>
<script type="text/css" src="https://cdn.datatables.net/buttons/1.6.0/css/buttons.bootstrap4.min.css"></script>


<script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js" ></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.bootstrap4.min.js"></script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.html5.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.print.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.0/js/buttons.colVis.min.js"></script>

  

<!-- page script -->

<script>
$(document).ready(function(){
  
  $(document).on('click', '#getUser', function(e){
    
    e.preventDefault();
    
    var uid = $(this).data('id');   // it will get id of clicked row
    
    $('#dynamic-content').html(''); // leave it blank before ajax call
    $('#modal-loader').show();      // load ajax loader
    
    $.ajax({
      url: 'select.php',
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
  $(document).ready(function() {
    var table = $('#example').DataTable( {
        lengthChange: false,
        paging: true,
        ordering: true,
        searching: true,
        info: true,
        autoWidth: false,
        scrollX: false,
        dom:'Bfrtip',
        buttons: [ 'print' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example_wrapper .col-md-6:eq(0)' );
} );
</script>


<script>
  $(document).ready(function() {
    var table = $('#example1').DataTable( {
        lengthChange: false,
        paging: true,
        ordering: true,
        searching: true,
        info: true,
        autoWidth: false,
        scrollX: false,
        dom:'Bfrtip',
        buttons: [ 'print' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example1_wrapper .col-md-6:eq(0)' );
} );
</script>
<script>
  $(document).ready(function() {
    var table = $('#example2').DataTable( {
        lengthChange: false,
        paging: true,
        ordering: true,
        searching: true,
        info: true,
        autoWidth: false,
        scrollX: false,
        dom:'Bfrtip',
        buttons: [ 'print' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example3_wrapper .col-md-6:eq(0)' );
} );
</script>
<script>
  $(document).ready(function() {
    var table = $('#example3').DataTable( {
        lengthChange: false,
        paging: true,
        ordering: true,
        searching: true,
        info: true,
        autoWidth: false,
        scrollX: false,
        dom:'Bfrtip',
        buttons: [ 'print' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example3_wrapper .col-md-6:eq(0)' );
} );
</script>
<script>
  $(document).ready(function() {
    var table = $('#example4').DataTable( {
        lengthChange: false,
        paging: true,
        ordering: true,
        searching: true,
        info: true,
        autoWidth: false,
        scrollX: false,
        dom:'Bfrtip',
        buttons: [ 'print' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example3_wrapper .col-md-6:eq(0)' );
} );
</script>
<script>
  $(document).ready(function() {
    var table = $('#example5').DataTable( {
        lengthChange: false,
        paging: true,
        ordering: true,
        searching: true,
        info: true,
        autoWidth: false,
        scrollX: false,
        dom:'Bfrtip',
        buttons: [ 'print' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example3_wrapper .col-md-6:eq(0)' );
} );
</script>
<script>
  $(document).ready(function() {
    var table = $('#example6').DataTable( {
        lengthChange: false,
        paging: true,
        ordering: false,
        searching: true,
        info: true,
        autoWidth: false,
        scrollX: false,
        dom:'Bfrtip',
        buttons: [ 'print' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example3_wrapper .col-md-6:eq(0)' );
} );
</script>
<script>
  $(document).ready(function() {
    var table = $('#example7').DataTable( {
        lengthChange: false,
        paging: true,
        ordering: false,
        searching: true,
        info: true,
        autoWidth: false,
        scrollX: false,
        dom:'Bfrtip',
        buttons: [ 'print' ]
    } );
 
    table.buttons().container()
        .appendTo( '#example3_wrapper .col-md-6:eq(0)' );
} );
</script>

</body>
</html>
