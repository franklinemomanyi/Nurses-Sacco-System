<?php
    require('../../conn.php');
    require('../../fileinput.php');
$query="SELECT * FROM BUSSTYPE";
$result=mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Loan Application Form</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

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
  <!-- /.navbar -->

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
            <h1>Loan Form</h1>
          </div>
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Loan Application Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="bussapplication.php" method="post" enctype="multipart/form-data">
                <div class="card-body">

                  <div class="row">

                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" name="name" id="name" required="" placeholder="<?php echo $_SESSION['name'] ?>">
                      </div>
                    </div>

                    <div class="col-sm-6">
                      <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" name="mail" id="mail" required="" placeholder="<?php echo $_SESSION['user'] ?>">
                      </div>
                    </div>
                  </div>

                <div class="row">
                  
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Phone No.</label>
                      <input type="text" class="form-control" name="phone" id="phone" required="" placeholder="<?php echo $_SESSION['phone'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="exampleInputEmail1">ID No.</label>
                      <input type="text" class="form-control" name="id" id="id" required="" placeholder="<?php echo $_SESSION['idnum'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Name of Employer</label>
                    <input type="text" class="form-control" name="ename" id="ename" required="" placeholder="">
                    </div>
                  </div>
                            
                </div>


                <div class="row">

                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Employment No.</label>
                      <input type="text" class="form-control" name="eno" id="eno" required="" placeholder="">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Position at work</label>
                      <input type="text" class="form-control" name="epos" id="epos" required="" placeholder="">
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Location/Place of Work</label>
                    <input type="text" class="form-control" name="eloc" id="eloc" required="" placeholder="">
                    </div>
                  </div>
                </div>


                <div class="row">

                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Loan Amount(Ksh.)</label>
                      <input type="number" class="form-control" name="amt" id="amt" required="" placeholder="">
                    </div>
                  </div>
                  

                  <div class="col-sm-9">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Loan Amount in Words</label>
                    <input type="text" class="form-control" name="amtwrd" id="amtwrd" required="" placeholder="">
                    </div>
                  </div>
                </div>


                <div class="row">

                  <div class="col-sm-3">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Repayment Period</label>
                    <select name="repp" id="repp" class="form-control" required>
                          <option value="0" selected disabled>Period?</option>
                          <option value="1">1 Month</option>
                          <option value="2">2 Months</option>
                          <option value="3">3 Months</option>
                          <option value="4">4 Months</option>
                          <option value="5">5 Months</option>
                          <option value="6">6 Months</option>
                          <option value="7">7 Months</option>
                          <option value="8">8 Months</option>
                          <option value="9">9 Months</option>
                          <option value="10">10 Months</option>
                          <option value="11">11 Months</option>
                          <option value="12">12 Months</option>
                          <option value="13">13 Months</option>
                          <option value="14">14 Months</option>
                          <option value="15">15 Months</option>
                          <option value="16">16 Months</option>
                          <option value="17">17 Months</option>
                          <option value="18">18 Months</option>
                          <option value="19">19 Months</option>
                          <option value="20">20 Months</option>
                          <option value="21">21 Months</option>
                          <option value="22">22 Months</option>
                          <option value="23">23 Months</option>
                          <option value="24">24 Months</option>
                          
                      </select>
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="exampleInputEmail1">KRA Pin</label>
                      <input type="text" class="form-control" name="pin" id="pin" required="" placeholder="">
                    </div>
                  </div>
                  

                  <div class="col-sm-6">

                    <div class="form-group">
                      <label for="exampleInputEmail1">ID Upload</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="idf" id="file" required="" accept=".pdf"/>
                          <label class="custom-file-label" for="exampleInputFile"></label>
                        </div>
                       
                      </div>
                    </div>

                  </div>
                </div>


                <div class="row">
                  <?php
                  $month = date('m');
                  if ($month==1) {
                    # code...
                    $slip='December';
                    $slipn='November';

                  }elseif ($month==2) {
                    # code...
                    $slip='January';
                    $slipn='December';
                  }elseif ($month==3) {
                    # code...
                    $slip='February';
                    $slipn='January';
                  }elseif ($month==4) {
                    # code...
                    $slip='March';
                    $slipn='February';
                  }elseif ($month==5) {
                    # code...
                    $slip='April';
                    $slipn='March';
                  }elseif ($month==6) {
                    # code...
                    $slip='May';
                    $slipn='April';
                  }elseif ($month==7) {
                    # code...
                    $slip='June';
                    $slipn='July';
                  }elseif ($month==8) {
                    # code...
                    $slip='July';
                    $slipn='June';
                  }elseif ($month==9) {
                    # code...
                    $slip='August';
                    $slipn='July';
                  }elseif ($month==10) {
                    # code...
                    $slip='September';
                    $slipn='August';
                  }elseif ($month==11) {
                    # code...
                    $slip='October';
                    $slipn='September';
                  }elseif ($month==12) {
                    # code...
                    $slip='November';
                    $slipn='October';
                  }else{
                    echo "Invalid";
                  }
                  ?>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="exampleInputFile">Payslip (<?php echo $slip; ?>)</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="slip1f" id="file1" required="" accept=".pdf"/>
                          <label class="custom-file-label" for="exampleInputFile"></label>
                        </div>
                       
                      </div>
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                      <label for="exampleInputFile">Payslip (<?php echo $slipn; ?>)</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="slip2f" id="file2" required="" accept=".pdf"/>
                          <label class="custom-file-label" for="exampleInputFile"></label>
                        </div>
                        
                      </div>
                    </div>
                  </div>

                </div>

                

                <div class="row">

                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Guarantor One(Name)</label>
                      <input type="text" class="form-control" name="g1name" id="g1name" required="" placeholder="">
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label for="exampleInputEmail1">ID Number</label>
                      <input type="number" class="form-control" name="g1id" id="g1id" required="" placeholder="">
                    </div>
                  </div>

                  <div class="col-sm-2">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Phone No.</label>
                    <input type="number" class="form-control" name="g1phone" id="g1phone" required="" placeholder="">
                    </div>
                  </div>

                  <div class="col-sm-2">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Amount</label>
                      <input type="number" class="form-control" name="g1amt" id="g1amt" required="" placeholder="">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="exampleInputEmail1">ID(Upload)</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="g1idf" id="file3" required="" accept=".pdf"/>
                          <label class="custom-file-label" for="exampleInputFile"></label>
                        </div>
                        
                      </div>
                    </div>
                  </div>

                </div>

                <div class="row">

                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Guarantor Two(Name)</label>
                      <input type="text" class="form-control" name="g2name" id="g2name" required="" placeholder="">
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label for="exampleInputEmail1">ID Number</label>
                      <input type="number" class="form-control" name="g2id" id="g2id" required="" placeholder="">
                    </div>
                  </div>

                  <div class="col-sm-2">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Phone No.</label>
                    <input type="number" class="form-control" name="g2phone" id="g2phone" required="" placeholder="">
                    </div>
                  </div>

                  <div class="col-sm-2">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Amount</label>
                      <input type="number" class="form-control" name="g2amt" id="g2amt" required="" placeholder="">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="exampleInputEmail1">ID(Upload)</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="g2idf" id="file4" required="" accept=".pdf"/>
                          <label class="custom-file-label" for="exampleInputFile"></label>
                        </div>
                        
                      </div>
                    </div>
                  </div>

                </div>

                <div class="row">

                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Guarantor Three(Name)</label>
                      <input type="text" class="form-control" name="g3name" id="g3name" required="" placeholder="">
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-group">
                      <label for="exampleInputEmail1">ID Number</label>
                      <input type="number" class="form-control" name="g3id" id="g3id" required="" placeholder="">
                    </div>
                  </div>

                  <div class="col-sm-2">
                    <div class="form-group">
                    <label for="exampleInputEmail1">Phone No.</label>
                    <input type="number" class="form-control" name="g3phone" id="g3phone" required="" placeholder="">
                    </div>
                  </div>

                  <div class="col-sm-2">
                  <div class="form-group">
                      <label for="exampleInputEmail1">Amount</label>
                      <input type="number" class="form-control" name="g3amt" id="g3amt" required="" placeholder="">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <label for="exampleInputEmail1">ID(Upload)</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" class="custom-file-input" name="g3idf" id="file5" required="" accept=".pdf"/>
                          <label class="custom-file-label" for="exampleInputFile"></label>
                        </div>
                        
                      </div>
                    </div>
                  </div>

                </div>

              
                  

                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required="">
                    <label class="form-check-label" for="exampleCheck1">I understand the<a href="#"> Terms & Conditions</a></label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            

            <!-- Input addon -->
           
            <!-- /.card -->
            <!-- Horizontal Form -->
           

          </div>
          <!--/.col (left) -->
          <!-- right column -->
         
          <!--/.col (right) -->
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
<?php
    require('../../fileinput.php');
?>



<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
