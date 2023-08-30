<?php
    require('../../conn.php');
    $query="SELECT * FROM SUBCOUNTY";
    $result=mysqli_query($conn,$query);

  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Profile</title>
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
            <h1>Profile</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="/Nurses/dist/img/avatar.png"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $_SESSION['name'] ?></h3>

                <p class="text-muted text-center">
                  <?php
                  if (($_SESSION['domain'])=='0') {
                    # code...
                    echo "System Administrator";
                  }elseif (($_SESSION['domain'])=='1') {
                    # code...
                    echo "Tax Agent";
                  }elseif (($_SESSION['domain'])=='2') {
                    # code...
                    echo "Business Person";
                  }

                  ?>
                  
                  </p>

                <ul class="list-group list-group-unbordered mb-3">
                  
                  
                </ul>

                <a href="/Nurses/pages/mailbox/compose.php" class="btn btn-primary btn-block"><b>Follow</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="profiled.php" method="post" enctype="multipart/form-data">
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
                   
                    <input type="text" class="form-control" name="name" id="name" placeholder="<?php echo $_SESSION['name'] ?>">
                    </div>
                  </div>

                  <div class="col-sm-6">
                    <div class="form-group">
                   
                    <input type="email" class="form-control" name="mail" id="mail" placeholder="<?php echo $_SESSION['user'] ?>">
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-3">
                    <div class="form-group">
                     
                      <input type="number" class="form-control" name="phone" id="phone" placeholder="<?php echo $_SESSION['phone'] ?>">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                      
                      <input type="number" class="form-control" name="id" id="id" placeholder="<?php echo $_SESSION['idnum'] ?>">
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
                        <?php while ($row=mysqli_fetch_array($result)):;?>
                        <option value="<?php echo $row[0]; ?>"><?php echo $row[1]; ?></option>
                        <?php endwhile;?>
                     </select>

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
                    
                      <input type="text" class="form-control" name="pobox" id="pobox" placeholder="P.O.Box">
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
                    
                      <input type="number" class="form-control" name="kid" id="kid" placeholder="ID. No.">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                     
                      <input type="number" class="form-control" name="kpobox" id="kpobox" placeholder="P.O.Box">
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
                    
                      <input type="number" class="form-control" name="wid" id="wid" placeholder="ID. No.">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                     
                      <input type="number" class="form-control" name="wpobox" id="wpobox" placeholder="P.O.Box">
                    </div>
                  </div>
                  <div class="col-sm-3">
                    <div class="form-group">
                     
                      <input type="number" class="form-control" name="wphone" id="wphone" placeholder="Phone No.">
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
                    
                      <input type="number" class="form-control" name="eno" id="eno" placeholder="Employment No.">
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
                  <button type="submit" name="submit" id="submit" class="btn btn-success">Submit</button>
                </div>
              </form>

              
              

            </div>
            <!-- /.card -->

            

           

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
</body>
</html>
