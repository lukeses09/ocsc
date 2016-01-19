<?php
    session_start();    

  if( isset($_SESSION["ocsc_uname"]) || isset($_SESSION["ocsc_utype"]) )
  {
    $username = $_SESSION["ocsc_uname"];
    $usertype = $_SESSION["ocsc_utype"];
  }
  else {  ?>

    <script type="text/javascript">   
      window.location="maintenance/user/login.php";
    </script>
 <?php } ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Shipping | Home</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- ionics -->   
    <link href="plugins/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />      
    <!-- FontAwesome 4.3.0 -->
    <link href="bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />  
    <!-- Theme style -->
    <link href="dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />   
    <link href="dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
  </head>
  <?php
    $themeValue = "skin-blue";
    try{
      include('maintenance/include/connect.php');
    }
    catch(PDOException $x)
    {
      $themeValue = "skin-red";
      ?>
      <script type="text/javascript">
        alert('Warning No Database Connection');
      </script>
      <?php
    }  
    echo'<body class='.$themeValue.'>';
  ?>      

    <div class="wrapper">
      
      <header class="main-header">
        <!-- Logo --> 
        <a href="index.php" class="logo">Shipping System</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <!-- Sidebar toggle button-->
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>      
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <?php echo'<img src="dist/img/'.$usertype.'.png" class="user-image" alt="User Image" />'; ?>
                  <span class="hidden-xs"><?php echo"".ucfirst($username)."" ?></span>
                </a>

                  <ul class="dropdown-menu" style="width:10%;border-radius:5px">
                    <li style="text-align:center"> 
                      <small style="font-size:0.8em"><?php echo ucfirst($usertype); ?></small>
                    </li>
                      <li class="divider"></li>
                  <?php if($usertype=="root"){ ?>                      
                    <li><a href="maintenance/uc/uc.php"><i class="fa fa-gear"></i> User Accounts</a></li>
                  <?php } ?>
                    <li><a onclick="return logout()" href="maintenance/user/processlogout.php"> <i class="fa fa-sign-in"></i><span>Log-out</span>    
              </a></li><br>
                  </ul>
              </li>   
             <!-- User Account: style can be found in dropdown.less -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->

      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
  
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">MENU NAVIGATION</li>
            <li class="active treeview">
              <a href="index.php">
                <i class="fa fa-home"></i> <span>Home</span>
              </a>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-gear"></i>
                <span>Maintenance</span>            <!--  MAINTENANCE  -->
              </a>
              <ul class="treeview-menu">
                <li>
                  <a href="maintenance/cust/cust.php"><i class="fa fa-circle-o"></i> Customer </a>
                </li>                
                <li><a href="maintenance/emp/emp.php"><i class="fa fa-circle-o"></i>Employee</a></li>
                <li><a href="maintenance/ch/ch.php"><i class="fa fa-circle-o"></i> Charges </a></li>
                <li><a href="maintenance/cont/cont.php"><i class="fa fa-circle-o"></i> Containers </a></li> 
                <li><a href="maintenance/tr/tr.php"><i class="fa fa-circle-o"></i> Trucks </a></li>
                <li><a href="maintenance/disc/disc.php"><i class="fa fa-circle-o"></i> Discount </a></li>   
              </ul>
            </li>
            
            <li class="treeview">
              <a href="trans/shp/shp.php">
                <i class="fa fa-truck"></i>
                <span>Transaction</span>    
              </a>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-files-o"></i>
                <span>Reports</span>    
              </a>
              <ul class="treeview-menu">
                    <li><a href="trans/rm/rm.php"><i class="fa fa-circle-o"></i> Daily Remmitance Report </a></li>
                <li><a href="trans/ar/ar.php"><i class="fa fa-circle-o"></i> Accounts Receivable </a></li>                                                                                                                                                                                                   
              </ul>
            </li>

            <?php if($usertype=="root") { ?>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-wrench"></i>
                <span>Utilities</span>    
              </a>
              <ul class="treeview-menu">
                <li><a href="maintenance/at/at.php"><i class="fa fa-circle-o"></i> Audit Trails</a></li>
                <li><a href="maintenance/lb/lb.php"><i class="fa fa-circle-o"></i> Local Backup</a></li>      
              </ul>
            </li>
            <?php } ?>
       
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1> Home 
        
          </h1>
        </section>
        <!-- Main content -->
        <section class="content">
<!--load-->
                      <div id="loading" class="modal fade">
                          <div class="modal-dialog">
                              <div class="overlay">
                                  <div class="modal-body" style="text-align:center">
                                    <div class="overlay">
                                      <br><br><br><br><br><br><br><br><br><br><br>
                                      <i class="fa fa-spinner fa-pulse fa-spin"  
                                      style="font-size:60px;"></i>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>  
<!--/.loading-->                             



          
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 3.0
        </div>
        <strong>Copyright &copy; 2015<?php if(date("Y")!=2015)echo" - ".date("Y")."";?></strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- jQuery UI 1.11.2 -->
    <script src="plugins/jQueryUI/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js" type="text/javascript"></script>
<script>

function load(get){  // LOAD DATATABLES
    if(get == 'startup'){
      $('#loading').modal({backdrop: 'static'})              
      $('#loading').modal('show');
    }

    var user = $(this).attr('id');
    if(user != '') 
    { 
    $.ajax({
      url: 'trans/dashboard.php',
      dataType: 'json',
      success: function(s){
      console.log(s);
            for(var i = 0; i < s.length; i++) 
            { 
              //GRN
              $('#lbl_grn_pending').html('₱'+s[i][0]);
              $('#lbl_grn_shipped').html('₱'+s[i][1]);
              //DN
              $('#lbl_dn_pending').html('₱'+s[i][2]);
              $('#lbl_dn_shipped').html('₱'+s[i][3]);
              //SALES
              $('#lbl_sl_pending').html('₱'+s[i][4]);
              $('#lbl_sl_shipped').html('₱'+s[i][5]);       
              //STN-BB
              $('#lbl_STNbb_pending').html('₱'+s[i][6]);
              $('#lbl_STNbb_shipped').html('₱'+s[i][7]);
              //STN-WW
              $('#lbl_STNww_pending').html('₱'+s[i][8]);
              $('#lbl_STNww_shipped').html('₱'+s[i][9]);
              //STN-BW
              $('#lbl_STNbw_pending').html('₱'+s[i][10]);
              $('#lbl_STNbw_shipped').html('₱'+s[i][11]);                      
            }     
            $('#loading').modal('hide');                          
      },
      error: function(e){
        $('#loading').modal('hide');                                             
         console.log(e.responseText); 
      }
      });
    } 
       // $('#loading').modal('hide');                                             
    } // END OF LOAD DATATABLES
//**********************END OF POPULATING DATA****************
load('startup');


function logout()
{
  var choice = confirm("Are you sure you want to Log-out?");
  if(choice==true)
  {
    return true;
  }
  else
    return false;
}

$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip();
}); 

</script>
  </body>
</html>