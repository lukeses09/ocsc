<?php include('../include/log.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Local Backup</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- ionics -->   
    <link href="../../plugins/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />  
    <!-- FontAwesome 4.3.0 -->
    <link href="../../bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />  
    <!-- Theme style -->
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
         folder instead of downloading all of them to reduce the load. -->
    <link href="../../dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="../../plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link href="../../plugins/morris/morris.css" rel="stylesheet" type="text/css" />
    <!-- jvectormap -->
    <link href="../../plugins/jvectormap/jquery-jvectormap-1.2.2.css" rel="stylesheet" type="text/css" />
    <!-- Date Picker -->
    <link href="../../plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
    <!-- Daterange picker -->
    <link href="../../plugins/daterangepicker/daterangepicker-bs3.css" rel="stylesheet" type="text/css" />
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="../../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />

  </head>
  <?php
    $themeValue = "skin-blue";
    try{
      include('../include/connect.php');
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
        <a href="../../index.php" class="logo">Shipping System</a>
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
                  <?php echo'<img src="../../dist/img/'.$usertype.'.png" class="user-image" alt="User Image" />'; ?>
                  <span class="hidden-xs"><?php echo"".ucfirst($username)."" ?></span>
                </a>
                  <ul class="dropdown-menu" style="width:10%;border-radius:5px">
                    <li style="text-align:center"> 
                      <small style="font-size:0.8em"><?php echo ucfirst($usertype); ?></small>
                    </li>
                      <li class="divider"></li>
                    <?php if($usertype=="root"){ ?>                      
                      <li><a href="../uc/uc.php"><i class="fa fa-gear"></i> User Accounts</a></li>
                    <?php } ?>
                      <li><a onclick="return logout()" href="../user/processlogout.php"> <i class="fa fa-sign-in"></i><span>Log-out</span></a>
                      </li>
                    <br>
                  </ul>
              </li>      
              <!-- User Account: style can be found in dropdown.less -->
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
<?php include("aside.php") ?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Local Backup
            <small>Utilities</small>
          </h1>                              
        </section>


        <!-- Main content -->
        <section class="content">

          <!-- Small boxes (Stat box) -->





          <div id="loading" class="modal fade">
              <div class="modal-dialog">
                  <div class="overlay">
                      <div class="modal-body" style="text-align:center">
                        <div class="overlay">
                          <br><br><br><br><br><br><br><br><br><br><br><br><br>
                          <i class="fa fa-spinner fa-pulse fa-spin"  
                          style="font-size:60px;"></i>
                        </div>
                      </div>
                  </div>
              </div>
          </div>   


          <div class="row" style="margin-top:100px">
            <div class="col-md-3"></div><!-- left margin-->
            <div class="col-md-6" style="text-align:center">
              <button role="button" id="btn_lb" data-toggle='tooltip' title="Create Local Backup" data-placement='bottom' class="btn bg-green btn-lg "
             style=" border-radius:100px; width:200px; height:200px; margin-bottom:5px; outline:none;
             text-align: center; font-size:108px; color:white "> <i class="fa fa-database"></i> 
              </button>              
            </div>
            <div class="col-md-3"></div><!-- right margin-->            
          </div>

          <div class="row" style="margin-top:50px; text-align:center">
            <div class="col-md-3"></div><!-- left margin-->
            <div class="col-md-6">
              <div class="alert alert-xs alert-dismissable" style="border: solid #ffc000 1px; background-color:white; display:none" id="msg">
                <i class=" text-success icon fa fa-check"></i> Local Backup Success at 'www' directory of the WebServer <br> Directory Name: 'OCSC_Backup'
               <label id="msgContent"></label>
              </div>                           
            </div>
            <div class="col-md-3"></div><!-- right margin-->                 
          </div>

            </section><!-- right col -->
          </div><!-- /.row (main row) -->
        </section><!-- /.content -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 3.0
        </div>
        <strong>Copyright &copy; 2015<?php if(date("Y")!=2015)echo" - ".date("Y")."";?></strong> All rights reserved.
      </footer>        
      </div><!-- /.content-wrapper -->

    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="../../plugins/jQuery/jQuery-2.1.3.min.js" type="text/javascript"></script>
    <!-- <script src="jquery.js" ype="text/javascript"></script> -->

    <!-- jQuery UI 1.11.2 -->
    <script src="../../plugins/jQueryUI/jquery-ui.min.js" type="text/javascript"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="../../bootstrap/js/bootstrap.min.js" type="text/javascript"></script>    

    <script src="../../plugins/datepicker/bootstrap-datepicker.js" type="text/javascript"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../../plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <!-- mask -->
    <script src="../../plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>

    <!-- Slimscroll -->
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='../../plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/app.min.js" type="text/javascript"></script>
    <!-- DATA TABLE SCRIPT--> 
    <script src="../../plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="../../plugins/moses/formV.js" type="text/javascript"></script>    


    <script type="text/javascript">



//**********************POPULATE ALL DATA TO JQUERY DATATABLES****************

$('#btn_lb').click(function(){
  $(this).prop('disabled',true);
      $('#loading').modal({backdrop: 'static'})                
    $('#loading').modal('show');  
  setTimeout(start_backup, 3000);                    
})

function start_backup(){
      //ajax now
    $.ajax ({
      url: "lbX.php",
      cache: false,
      success: function(s)
      {
        $('#msg').css('display','block');
        $('#loading').modal('hide');    
      }  
    }); 
    //ajax end  

}

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


    </script> 

  </body>
</html>