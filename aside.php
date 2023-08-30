 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/Nurses/index.php" class="brand-link">
      <img src="/Nurses/dist/img/AdminLTELogo.png" alt="Nurses" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Nurses Sacco System</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/Nurses/dist/img/avatar.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="/Nurses/index.php" class="d-block"><?php echo $_SESSION['name'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <?php if (($_SESSION['domain'] == '1' OR $_SESSION['domain']=='2')AND  $_SESSION['info']==1) { ?>
              <li class="nav-item">
                <a href="/Nurses/pages/forms/loan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Loan Application</p>
                </a>
              </li>
              <?php } ?>
              

              <?php if ($_SESSION['domain'] == '1' AND  $_SESSION['info']==1) { ?>
                  <li class="nav-item">
                    <a href="/Nurses/pages/forms/bbf.php" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>BBF Application</p>
                    </a>
                  </li>
              <?php } ?>


              <?php if (($_SESSION['domain'] == '1' OR $_SESSION['domain']=='1' OR $_SESSION['domain']=='2')AND  $_SESSION['info']==1) { ?>
              <li class="nav-item">
                <a href="/Nurses/pages/forms/reportupload.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Report(Upload)</p>
                </a>
              </li>
              <?php } ?>



             <!--  <?php if ($_SESSION['domain'] == '0' OR $_SESSION['domain']=='1' OR $_SESSION['domain']=='2') { ?>
              <li class="nav-item">
                <a href="/Nurses/pages/tables/data.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contributions</p>
                </a>
              </li>
              <?php } ?> -->


             <!--  <?php if ($_SESSION['domain'] == '0') { ?>
              <li class="nav-item">
                <a href="/Nurses/pages/forms/add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <?php } ?> -->

              <!-- <?php if ($_SESSION['domain'] == '1') { ?>
              <li class="nav-item">
                <a href="/Nurses/pages/forms/verification.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Verification</p>
                </a>
              </li>
              <?php } ?> -->
              
            </ul>
          </li>



          <?php if ($_SESSION['domain'] == '1' AND  $_SESSION['info']==1) { ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-check-circle"></i>
              <p>
                Approvals
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/Nurses/pages/examples/loan.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Loans</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/Nurses/pages/examples/bbf.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>BBF</p>
                </a>
              </li>
            </ul>
           
          </li>
          <?php } ?>


          
          
          <?php if ($_SESSION['domain'] == '1' AND $_SESSION['info']==1) { ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-chart-pie"></i>
              <p>
                Reports
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/Nurses/Collections.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Coll/Disb</p>
                </a>
              </li>
            </ul>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/Nurses/index.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Disbursment</p>
                </a>
              </li>
            </ul> -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/Nurses/membership.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Membership</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/Nurses/pages/forms/add.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Tables</p>
                </a>
              </li>
            </ul>

          

          </li>
          <?php } ?>


          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-money-bill-wave"></i>
              <p>
                Payments
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>

            <!-- <ul class="nav nav-treeview"> -->
              <!-- <li class="nav-item"> -->
                <!-- <a href="/Nurses/pages/examples/mkpayment.php" class="nav-link"> -->
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <!-- <p>Make Payments</p> -->
                <!-- </a> -->
              <!-- </li> -->
            <!-- </ul> -->

            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/Nurses/pages/examples/invoice.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoices</p>
                </a>
              </li>
            </ul> -->
            <?php if ($_SESSION['domain'] == '1' AND $_SESSION['info']==1) { ?>
             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/Nurses/pages/examples/payments.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contributions</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/Nurses/pages/forms/payout.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Payouts</p>
                </a>
              </li>
            </ul>
          <?php } ?>
            
            <!-- <ul class="nav nav-treeview"> -->
              <!-- <li class="nav-item"> -->
                <!-- <a href="/Nurses/pages/examples/permit.php" class="nav-link"> -->
                  <!-- <i class="far fa-circle nav-icon"></i> -->
                  <!-- <p>Permits</p> -->
                <!-- </a> -->
              <!-- </li> -->
            <!-- </ul> -->
            
          </li>
         

         



          <?php if ($_SESSION['domain'] == '1' AND $_SESSION['info']==1) { ?>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Members
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/Nurses/pages/forms/agentregister.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/Nurses/pages/examples/agent.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Member Actions</p>
                </a>
              </li>
              <?php if ($_SESSION['domain'] == '1') { ?>
              <li class="nav-item">
                <a href="/Nurses/pages/forms/transfer.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Transfers</p>
                </a>
              </li>
              <?php } ?>
              <li class="nav-item">
                <a href="/Nurses/pages/tables/agentview.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Member List</p>
                </a>
              </li>
            </ul>
          </li>
        <?php } ?>

        

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>
                Mail
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/Nurses/pages/mailbox/compose.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
               <?php if ($_SESSION['domain'] == '1' AND $_SESSION['info']==1) { ?>
              <li class="nav-item">
                <a href="/Nurses/pages/mailbox/mailbox.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
            <?php }?>
              
            </ul>
            
          </li>

          <!-- <?php if ($_SESSION['domain'] == '0') { ?>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-sms"></i>
              <p>
                SMS
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/Nurses/pages/mailbox/composesms.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/Nurses/pages/mailbox/sms.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sent</p>
                </a>
              </li>
            </ul>
          </li>
          <?php }?>

 -->
         <!--  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Account
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/Nurses/pages/examples/profile.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Profile</p>
                </a>
              </li>
  
              <li class="nav-item">
                <a href="/Nurses/pages/examples/logout.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Log Out</p>
                </a>
              </li>
            </ul>
          </li> -->


           <li class="nav-item">
            <a href="/Nurses/pages/forms/map.php" class="nav-link">
              <i class="nav-icon fas fa-map-marker-alt"></i>
              <p>
                Location
              </p>
            </a>
          </li>
          
          
          
         
          
          
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>