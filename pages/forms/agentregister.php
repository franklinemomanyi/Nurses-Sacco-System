<?php
    require('../../conn.php');
    $query1="SELECT * FROM SUBCOUNTY";
    $result1=mysqli_query($conn,$query1);
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Member Registration Form</title>
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
            <h1>Form</h1>
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
                <h3 class="card-title">Member Registration Form</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="staffregister.php" method="post">
                <div class="card-body">
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                    <div class="btn btn-primary">Personal details</div>
                  </div>
                  </div>
                </div>

                <div class="row">

                  <div class="col-sm-6">
                    <div class="form-group">
                   
                    <input type="text" class="form-control" name="name" id="name" placeholder="Full Names">
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                   
                    <input type="email" class="form-control" name="mail" id="mail" placeholder="E-mail">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                     
                      <input type="text" class="form-control" name="pno" id="pno" placeholder="P.No.">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                    
                      <input type="text" class="form-control" name="occup" id="occup" placeholder="Occupation">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                     
                      <input type="text" class="form-control" name="pob" id="pob" placeholder="Place of Birth">
                    </div>
                  </div>

                  <div class="col-sm-3">
                    <div class="form-group">
                     
                      <select name="sub" id="sub" class="form-control" required="">
                        <option value="0" selected disabled>Sub County?</option>
                        <?php while ($row=mysqli_fetch_array($result1)):;?>
                        <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                        <?php endwhile;?>
                     </select>

                    </div>
                  </div>
                  
                </div>

                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                    
                      <input type="text" class="form-control" name="pobox" id="pobox" placeholder="P.O.Box">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                     
                      <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone Number">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      
                      <input type="text" class="form-control" name="id" id="id" placeholder="ID Number">
                    </div>
                  </div>
                   <div class="col-sm-3">
                    <div class="form-group">
                      
                      <select name="sex" id="sex" class="form-control" required="">
                          <option value="0" selected disabled>Gender?</option>
                          <option value="1">Male</option>
                          <option value="2">Female</option>
                          
                      </select>
                    </div>
                  </div>
                  
                  
                </div>
                <div class="row">
                  <div class="col-sm-4">
                    <div class="form-group">
                    <div class="btn btn-primary">Next of Kin</div>
                  </div>
                  </div>
                </div>

                  <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                     
                      <input type="text" class="form-control" name="kname" id="kname" placeholder="Full name">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                    
                      <input type="text" class="form-control" name="kid" id="kid" placeholder="ID. No.">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                     
                      <input type="text" class="form-control" name="kpobox" id="kpobox" placeholder="P.O.Box">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      <select name="krel" id="krel" class="form-control" required="">
                          <option value="0" selected disabled>Reltionship?</option>
                          <option value="Spouse">Spouse</option>
                          <option value="Son">Son</option>
                          <option value="Daughter">Daughter</option>
                          <option value="Mother">Mother</option>
                          <option value="Father">Father</option>
                          <option value="Aunt">Aunt</option>
                          <option value="Uncle">Uncle</option>
                          <option value="Friend">Friend</option>
                          
                      </select>
                    </div>
                  </div>
                  
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                    <div class="btn btn-primary">Witness</div>
                  </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                     
                      <input type="text" class="form-control" name="wname" id="wname" placeholder="Full name">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                    
                      <input type="text" class="form-control" name="wid" id="wid" placeholder="ID. No.">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                     
                      <input type="text" class="form-control" name="wpobox" id="wpobox" placeholder="P.O.Box">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                     
                      <input type="text" class="form-control" name="wphone" id="wphone" placeholder="Phone No.">
                    </div>
                  </div>
                  
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <div class="form-group">
                    <div class="btn btn-primary">Employment</div>
                  </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                     
                      <input type="text" class="form-control" name="ename" id="ename" placeholder="Employer name">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                    
                      <input type="text" class="form-control" name="eno" id="eno" placeholder="Employment No.">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                     
                      <input type="text" class="form-control" name="epos" id="epos" placeholder="Position at Work">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                     
                      <input type="text" class="form-control" name="eloc" id="eloc" placeholder="Location">
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
                  <button type="submit" class="btn btn-success">Submit</button>
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
<!-- <script type="text/javascript">
  FUNCTION NAME IN OPTION HTML
  onchange="fun_showtextbox()"

  FUNCTION DEFINITION IN JS
  function fun_showtextbox()
  {
    var select_type=$('#type').val();
    if (select_type=='1') 
    {
      $('#area').show();
    }
    else
    {
      $('#area').hide();
    }
  }
</script> -->



<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
</body>
</html>
