<?php include('../../maintenance/include/log.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Shipping Order</title>
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
    <!-- Time Picker -->
    <link rel="stylesheet" href="../../plugins/timepicker/bootstrap-timepicker.css">    
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="../../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <!-- live seach skin -->
    <link href="sliveRecSkin.css" rel="stylesheet" type="text/css" />


  </head>
  <?php
    $themeValue = "skin-blue";
    try{
      include('../../maintenance/include/connect.php');
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
                      <li><a href="../../maintenance/uc/uc.php"><i class="fa fa-gear"></i> User Accounts</a></li>
                    <?php } ?>
                      <li><a onclick="return logout()" href="../../maintenance/user/processlogout.php"> <i class="fa fa-sign-in"></i><span>Log-out</span></a>
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
           Shipping
            <small>Add New Order</small>
          </h1>                              
        </section>


        <!-- Main content -->
        <section class="content">

          <!-- TOP CONTROL PANELS -->
                      <div class="row">
                        <div class="col-sm-1 col-xs-2">                        
                          <h4 class="box-title" style="margin-left:13px">
                               <a href="shp.php" onclick="return confirmCancel()" role="button" data-toggle='tooltip' title="Cancel" data-placement='bottom' class="btn text-red"
                               style="box-shadow: 0px 3px 7px #888888; border-radius:100px; width:50px; height:50px; margin-bottom:5px; outline:none;
                               text-align: center; font-size:25px; background-color:white"> <i class="ion-android-close"></i> </a>                               
                          </h4>     
                        </div> 

                        <div class="col-sm-1 col-xs-2">
                          <h4 class="box-title">
                               <button id="btn_save" role="button" data-toggle='tooltip' title="Save Record" data-placement='bottom' class="btn text-green"
                               style="box-shadow: 0px 3px 7px #888888; border-radius:100px; width:50px; height:50px; margin-bottom:5px; outline:none;
                               text-align: center; font-size:25px; background-color:white; " disabled > <i class="ion-android-done"></i> </button>                               
                          </h4>                             
                        </div>      
                                           
                        <div class="col-xs-6"></div> <!--empty space-->

                        <div class="pull-right col-xs-4 ">
                          <div class="box box-solid">
                            <div class="box-body">
                              <div class="description-block" >
                                <h5 class="description-header" id="lbl_grandtot" style="font-size:20px">0.00</h5>
                                <span class="description-text">GRAND TOTAL</span>
                              </div><!-- /.description-block -->
                            </div> <!-- /.box-body -->
                          </div> <!-- /. box-solid -->
                        </div><!--/.col--> 

                      </div>

          <!-- TOP CONTROL PANELS -->

          <div class="row" >              
          <div class="col-lg-12 col-sm-12 col-xs-12">
              <div class="box box-solid">
                <div class="box-header">     
                  <div class="row" style="margin-top:25px">

                    <div class="col-md-3 col-xs-12" id="custnameDiv">
                      <label id="custnameErr" ><font color="darkred">*</font>Client Name :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-user"></i></span>
                       <input id="custname" type="text" name="custname"  onblur="checkCustomer(this.value)" onfocus="checkCustomer(this.value)" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Name ">
                      </div>    
                      <input type='hidden' id="chkCust" value="no-match">
                    </div> <!-- /.col-->  <!--Customer Field-->

                    <div class="col-md-3 col-xs-12" id="clerkDiv">
                      <label id="clerkErr"  ><font color="darkred">*</font>Employee Clerk :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-user"></i></span>
                       <input id="clerk" type="text" name="clerk" onblur="checkClerk(this.value)" onfocus="checkClerk(this.value)"  class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Name ">
                      </div>    
                      <input type='hidden' id="chkClerk" value='no-match'>
                    </div> <!-- /.col-->  <!--Customer Field-->                 

                    <div class="col-md-3 col-xs-12" id="transdateDiv">
                      <label id="transdateErr" ><font color="darkred">*</font>Order Date :</label>    
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input id="transdate" value="<?php echo"".date('Y-m-d')."" ?>" type="date" class="form-control" >
                      </div>    
                    </div> <!-- /.col-->  

                    <div class="col-md-3 col-xs-12" id="discountDiv">
                      <label id="discountErr"  >Discount :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-tags"></i></span>
                       <input id="discount" type="text" name="discount" onblur="checkDiscount(this.value)" onfocus="checkDiscount(this.value)"  class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Discount ">
                      </div>    
                      <input type='hidden' id="chkDiscount" value="no-match">
                      <input type="hidden" value=0 id="rate_discount">

                    </div> <!--/. discout-->                    
                  </div><!--/.row-->


                    <!-- address rows -->
                    <div class="row"  style="margin-top:25px" id="pickupDiv">
                      <div class="col-md-3 col-xs-12">
                        <label id="pickupErr" ><font color="darkred">*</font>Pick-up Address:</label>     
                        <textarea id="pickup" rows="2" class="form-control" style="resize:none"></textarea>
                      </div> <!--/. col -->

                    <div class="col-md-3 col-xs-12" id="pickupRegDiv">
                      <label id="pickupRegErr"  ><font color="darkred">*</font>Pick-up Region :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                       <input id="pickupReg" type="text" name="pickupReg"  onblur="checkpickupReg(this.value)" onfocus="checkpickupReg(this.value)"  class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Region ">
                      </div>    
                      <input type='hidden' id="chkpickupReg" value='no-match'>
                    </div> <!-- /.col-->  <!--Customer Field-->                     

                    <div class="col-md-3 col-xs-12" id="deliveryDiv">
                      <label id="deliveryErr" ><font color="darkred">*</font>Delivery Address  :</label>     
                      <textarea id="delivery" rows="2" class="form-control" style="resize:none"></textarea>
                    </div> <!--/. -->

                    <div class="col-md-3 col-xs-12" id="deliveryRegDiv">
                      <label id="deliveryRegErr"  ><font color="darkred">*</font>Delivery Region :</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                       <input id="deliveryReg" type="text" name="deliveryReg"  onblur="checkdeliveryReg(this.value)" onfocus="checkdeliveryReg(this.value)" class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Region">
                      </div>    
                      <input type='hidden' value='no-match' id="chkdeliveryReg">
                    </div> <!-- /.col-->  <!--Customer Field-->    

                  </div> <!-- /. row -->


                  <!--row cargo -->
                  <div class="row" style="margin-top:25px" id="cargoDiv">
                    <div class="col-md-3 col-xs-12">
                      <label id="cargoErr" ><font color="darkred">*</font>Cargo :</label>     
                      <textarea id="cargo" rows="2" class="form-control" style="resize:none"></textarea>
                    </div> <!--/. col -->          

                    <div class="col-md-3 col-xs-12" id="truckDiv">
                      <label id="truckErr"  ><font color="darkred">*</font>Truck:</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-truck"></i></span>
                       <input id="truck" type="text" name="truck" onblur="checkTruck(this.value)" onfocus="checkTruck(this.value)"  class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Truck">
                      </div>    
                      <input type='hidden' value='no-match' id="chkTruck">
                    </div> <!-- /.col-->  <!--Customer Field-->    

                    <div class="col-md-3 col-xs-12" id="driverDiv">
                      <label id="driverErr"  ><font color="darkred">*</font>Driver</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-user"></i></span>
                       <input id="driver" type="text" name="driver" onblur="checkDriver(this.value)" onfocus="checkDriver(this.value)"  class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Driver">
                      </div>    
                      <input type='hidden' value='no-match' id="chkDriver">
                    </div> <!-- /.col-->  <!--Customer Field-->  

                    <div class="col-md-3 col-xs-12" id="helperDiv">
                      <label id="helperErr"  >Driver's Helper</label>
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-user"></i></span>
                       <input id="helper" type="text" name="helper" onblur="checkHelper(this.value)" onfocus="checkHelper(this.value)"  class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Helper">
                      </div>    
                      <input type='hidden' value='no-match' id="chkHelper">
                    </div> <!-- /.col-->  <!--Customer Field-->  
                  </div> <!-- /. row -->


                  <hr> <!-- DIVIDER -->


                <div class="row" style="margin-top:15px" >
                                    
                    <div class="col-md-3 col-xs-12" id="pickupChargeDiv">
                      <label id="pickupChargeErr"  ><font color="darkred">*</font>To-Pickup Charge :</label>
                      <div class="input-group" style="margin-top:3px">
                        <span class="input-group-addon"><i class="ion-android-locate"></i></span>
                        <input id="pickupCharge" name="pickupCharge" type="text"  onblur="checkpickupCharge(this.value)" onfocus="checkpickupCharge(this.value)"  class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Charge">
                      </div>    
                      <input type='hidden' value='no-match' id="chkpickupCharge">
                      <input type='hidden' id="rate_pickupCharge">
                    </div> <!-- /.col-->  <!--Customer Field-->  

                    <div class="col-md-3 col-xs-12" id="distance_pickupDiv">
                      <label id="distance_pickupErr" ><font color="darkred">*</font> To-Pickup Distance :</label>    
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-location-arrow"></i></span>
                        <input id="distance_pickup"  onkeyup="compute_tpch(this.value)" onchange="compute_tpch(this.value)" onclick="compute_tpch(this.value)" type="number" class="form-control" disabled>
                      </div>    
                    </div> <!-- /.col-->                                          

                    <div class="col-md-3 col-xs-12" id="destiChargeDiv">
                      <label id="destiChargeErr"  ><font color="darkred">*</font>To-Destination Charge :</label>
                      <div class="input-group" style="margin-top:3px">
                        <span class="input-group-addon"><i class="ion-android-locate"></i></span>
                        <input id="destiCharge" name="destiCharge" type="text" onblur="checkdestiCharge(this.value)" onfocus="checkdestiCharge(this.value)" onclick="checkdestiCharge(this.value)"  class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Charge">
                      </div>    
                      <input type='hidden' value='no-match' id="chkdestiCharge">
                      <input type="hidden" id="rate_destiCharge">
                    </div> <!-- /.col-->  <!--Customer Field-->  


                    <div class="col-md-3 col-xs-12" id="distance_delDIv">
                      <label id="distance_delErr" ><font color="darkred">*</font>To-Destination Distance :</label>    
                      <div class="input-group" style="margin-top:3px">
                       <span class="input-group-addon"><i class="fa fa-arrows-h"></i></span>
                        <input id="distance_deli"  onkeyup="compute_tdch(this.value)" onchange="compute_tdch(this.value)" type="number" class="form-control" disabled>
                      </div>    
                    </div> <!-- /.col--> 
                </div><!--/. row -->


                <div class="row" style="margin-top:25px">

         
                    <div class="col-md-2 col-xs-12" id="pickupExDiv">
                      <label id="pickupExErr" ><font color="darkred">*</font>Pickup Expected :</label>    
                      <div  class="date input-group" style="margin-top:4px">
                       <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input id="pickupEx" type="text" class="form-control" >
                      </div>    
                    </div> <!-- /.col-->      

                    <div class="col-md-2 col-xs-12 bootstrap-timepicker" id="pickupTimeDiv">
                      <div class="form-group">
                        <label id="pickupTimeErr"> <font color="darkred">*</font>Time Expected:</label>
                        <div class="input-group" style="margin-top:4px">
                          <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                          </div>                          
                          <input id="pickupTime" type="text" class="form-control">
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->                      
                    </div>

                    <div class="col-md-2 col-xs-12" id="deliveryExDiv">
                      <label id="deliveryExErr" ><font color="darkred">*</font>Delivery Expected :</label>    
                      <div class="input-group" style="margin-top:4px">
                       <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input id="deliveryEx"  type="text" class="form-control" >
                      </div>    
                    </div> <!-- /.col-->       

                    <div class="col-md-2 col-xs-12 bootstrap-timepicker" id="deliveryTimeDiv">
                      <div class="form-group">
                        <label id="deliveryTimeErr"> <font color="darkred">*</font>Time Expected:</label>
                        <div class="input-group" style="margin-top:4px">
                          <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                          </div>                          
                          <input id="deliveryTime" type="text" class="form-control">
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->                      
                    </div>

                    <div class="col-md-4 col-xs-12" id="containerDiv">
                      <label id="containerErr"  ><font color="darkred">*</font>Container :</label>
                      <div class="input-group" style="margin-top:3px">
                      <span class="input-group-btn">
                      <button class="btn bg-blue" onclick="addRow()" id="addCont" style="height:35px" disabled> <i class="ion-android-arrow-down"></i>  ADD    </button>
                      </span>                 
                       <input id="container" type="text" name="container" onblur="checkContainer(this.value)" onfocus="checkContainer(this.value)"  class="typeahead tt-query" autocomplete="off" spellcheck="false" placeholder=" Search Container">                                             
                      </div>    
                      <input type='hidden' id="chkContainer">
                    </div> <!-- /.col-->  <!--Customer Field-->  
              
                </div>

                <hr>
                <!--TABLES -->
                <div class="row" style="margin-top:25px">
                  <div class="col-sm-4 col-xs-12">
                          <table id="bTable" class="table table-condensed table-bordered table-hover table-striped" >
                            <thead>
                              <th style="width:180px">Charge</th>
                              <th>Amount</th>                         
                            </thead>
                            <tbody>
                              <tr> <td>Pick-up Region</td> <td id="td_preg">0.00</td></tr>
                              <tr> <td>Destination Region</td> <td id="td_dreg">0.00</td></tr>                              
                              <tr> <td>To Pick-up Charge</td> <td id="td_tpch">0.00</td></tr>
                              <tr> <td>To Destination Charge</td> <td id="td_tdch">0.00</td></tr>
                              <tr> <td>Containers</td> <td id="td_cont">0.00</td></tr>
                              <tr> <td>Tax % <input type='number' id="tax" onkeyup="taxValidate(this.value)" onchange="taxValidate(this.value)" style="width:70px; border:none" value='12'></td> <td id="td_tax">0.00</td></tr>                              
                              <tr> <td>Discount</td> <td id="td_disc">0.00</td></tr>
                            </tbody>
                            <tfoot>
                              <th>Grand Total:</th>
                              <th id="bTableFoot"></th>
                            </tfoot>
                            <tbody></tbody>            
                          </table> 
                  </div> <!-- /. col -->        

                  <div class="col-sm-8 col-xs-12">
                    <table id="cTable" class="table table-bordered table-condensed table-striped table-hover">
                      <thead>
                        <tr>
                          <th style="width:180px">Cont No.</th>   
                          <th>Name</th>                    
                          <th>Rate</th>
                          <th>Qty</th>
                          <th>Sub Total</th>
                          <th style="width:10px"></th>
                        </tr>
                        <tbody></tbody>
                      </thead>
                    </table>
                  </div> <!-- /. col -->                                                                                        
                </div> <!--/.row-->


<!--_______modals_________-->
    <div id="confirmModal" class="modal fade"> <!-- Confirms MODAL-->
      <div class="modal-dialog" style="width:30%">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h5 class="modal-title">Confirmation</h5>
          </div>
          <div class="modal-body" style="text-align:center">
            <h3 id="totalamount" class="text-warning"></h3>
            <h4 id="confirmQty" >Add this Shipment?</h4>
            <h4> <text id="howmuch" > </h4>
            <p class="text-muted"><small>Note: This cannot be undo once changes has been made.</small></p>                               
          </div>
          <div class="modal-footer">                                 
            <button type="button" id="btnConfirm" value="" class="btn-block btn-lg btn bg-green">Confirm</button>                                  
            <button type="button" class="btn btn-block btn-default" data-dismiss="modal">Cancel</button> 
        </div>
      </div>
    </div> 

    <div id="msgModal" class="modal"> <!-- DONE MODAL-->
      <div class="modal-dialog" style="width:30%">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Message</h5>
          </div>
          <div class="modal-body" style="text-align:center">
            <h3 id="msgContent" class="text-success">Shipment Record Added</h3>                                   
          </div>
          <div class="modal-footer">                                 
            <button id="done" type="button" class="btn btn-block btn-success btn-lg" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div> 
<!-- ________/.modals_____-->          
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
    <script src="../../plugins/datetimepicker/bootstrap-datetimepicker.js" type="text/javascript"></script>    
    <!-- bootstrap time picker -->
    <script src="../../plugins/timepicker/bootstrap-timepicker.js"></script>    
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
    <script src="../../plugins/slive/typeahead.min.js" type="text/javascript"></script>    



    <script type="text/javascript">


    $(document).ready(function()
    { // LIVE SEARCH


      $('#custname').typeahead({
          name: 'custname',
          remote:'custSearch.php?key=%QUERY',
          limit : 10
      }); 

      $('#clerk').typeahead({
          name: 'clerk',
          remote:'clerkSearch.php?key=%QUERY',
          limit : 10
      }); 
   

      $('#pickupReg').typeahead({
          name: 'pickupReg',
          remote:'regSearch.php?key=%QUERY',
          limit : 10
      }); 

      $('#deliveryReg').typeahead({
          name: 'deliveryReg',
          remote:'regSearch.php?key=%QUERY',
          limit : 10
      }); 

      $('#truck').typeahead({
          name: 'truck',
          remote:'truckSearch.php?key=%QUERY',
          limit : 10
      });       


      $('#driver').typeahead({
          name: 'driver',
          remote:'driverSearch.php?key=%QUERY',
          limit : 10
      });   


      $('#helper').typeahead({
          name: 'helper',
          remote:'helperSearch.php?key=%QUERY',
          limit : 10
      });   

      $('#container').typeahead({
          name: 'container',
          remote:'containerSearch.php?key=%QUERY',
          limit : 10
      });   

      $('#discount').typeahead({
          name: 'discount',
          remote:'discountSearch.php?key=%QUERY',
          limit : 10
      });   

      $('#pickupCharge').typeahead({
          name: 'pickupCharge',
          remote:'pickupChargeSearch.php?key=%QUERY',
          limit : 10
      });        

      $('#destiCharge').typeahead({
          name: 'destiCharge',
          remote:'destinationChargeSearch.php?key=%QUERY',
          limit : 10
      });         
    }); // document ready END


function checkCustomer(get)
{
  var custname = get;
  $.ajax
  ({
    type: 'POST',
    url: 'checkCustName.php',
    data: "custname="+ custname,
    dataType: 'json',
    success: function(s)
    {
      if(s[0]==1){
        $('#chkCust').val(s[1]);
        $('#custname').val(get);
      }
      else
        $('#chkCust').val('no-match');        
    }
  })
}

function checkClerk(get)
{
  var clerk = get;
  $.ajax
  ({
    type: 'POST',
    url: 'checkClerk.php',
    data: "clerk="+ clerk,
    dataType: 'json',
    success: function(s)
    {
      if(s[0]==1){
        $('#chkClerk').val(s[1]);
        $('#clerk').val(get);
      }
      else
        $('#chkClerk').val('no-match');        
    }
  })
}

function checkpickupReg(get)
{
  var pickupReg = get;
  $.ajax
  ({
    type: 'POST',
    url: 'checkpickupReg.php',
    data: "pickupReg="+ pickupReg,
    dataType: 'json',
    success: function(s)
    {
      if(s[0]==1){
        $('#chkpickupReg').val(s[1]);
        $('#pickupReg').val(get);
        $('#td_preg').html(comma(s[2]));
        compute_tax();   
      }
      else{
        $('#chkpickupReg').val('no-match');     
        $('#td_preg').html('0.00');     
        compute_tax(); 
      }             
    }

  })
}

function checkdeliveryReg(get)
{
  var deliveryReg = get;
  $.ajax
  ({
    type: 'POST',
    url: 'checkdeliveryReg.php',
    data: "deliveryReg="+ deliveryReg,
    dataType: 'json',
    success: function(s)
    {
      if(s[0]==1){
        $('#chkdeliveryReg').val(s[1]);
        $('#deliveryReg').val(get);
        $('#td_dreg').html(comma(s[2]));
        compute_tax();
      }
      else{
        $('#chkdeliveryReg').val('no-match');  
        $('#td_dreg').html('0.00');
        compute_tax();
      }
              
    }
  }) 
}

function checkTruck(get)
{
  var truck = get;
  $.ajax
  ({
    type: 'POST',
    url: 'checkTruck.php',
    data: "truck="+ truck,
    dataType: 'json',
    success: function(s)
    {
      if(s[0]==1){
        $('#chkTruck').val(s[1]);
        $('#truck').val(get);
      }
      else
        $('#chkTruck').val('no-match');        
    }
  })
}

function checkDriver(get)
{
  var driver = get;
  $.ajax
  ({
    type: 'POST',
    url: 'checkDriver.php',
    data: "driver="+ driver,
    dataType: 'json',
    success: function(s)
    {
      if(s[0]==1){
        $('#chkDriver').val(s[1]);
        $('#driver').val(get);
      }
      else
        $('#chkDriver').val('no-match');        
    }
  })
}

function checkHelper(get)
{
  var helper = get;
  $.ajax
  ({
    type: 'POST',
    url: 'checkHelper.php',
    data: "helper="+ helper,
    dataType: 'json',
    success: function(s)
    {
      if(s[0]==1){
        $('#chkHelper').val(s[1]);
        $('#helper').val(get);
      }
      else
        $('#chkHelper').val('no-match');        
    }
  })
}

function checkDiscount(get)
{
  $.ajax
  ({
    type: 'POST',
    url: 'checkDiscount.php',
    data: "discount="+ get,
    dataType: 'json',
    success: function(s)
    {
      if(s[0]==1){
        $('#chkDiscount').val(s[1]);
        $('#discount').val(get);
        $("#rate_discount").val(s[2]);  
        compute_tax();
      }
      else{
        $('#chkDiscount').val('no-match');        
        $("#rate_discount").val('0');
        compute_tax();
      }
    }
  })
}

function checkpickupCharge(get)
{
  $.ajax
  ({
    type: 'POST',
    url: 'checkpickupCharge.php',
    data: "charge="+ get,
    dataType: 'json',
    success: function(s)
    {
      if(s[0]>=1){
        $('#chkpickupCharge').val(s[1]);
        $('#pickupCharge').val(get);
        $("#distance_pickup").prop('disabled',false); 
        $('#rate_pickupCharge').val(s[2]);       
      }
      else{
        $("#distance_pickup").prop('disabled',true);    
        $('#distance_pickup').val('');    
        $('#chkpickupCharge').val('no-match'); 
        $('#rate_pickupCharge').val('');
        $('#td_tpch').html('0.00');
      }  
      compute_tax();            
    }
  })
}

function checkdestiCharge(get)
{
  $.ajax
  ({
    type: 'POST',
    url: 'checkdestiCharge.php',
    data: "charge="+ get,
    dataType: 'json',
    success: function(s)
    {
      if(s[0]>=1){
        $('#chkdestiCharge').val(s[1]);
        $('#destiCharge').val(get);
        $("#distance_deli").prop('disabled',false);  
        $('#rate_destiCharge').val(s[2]);
      }
      else{
        $("#distance_deli").prop('disabled',true);  
        $('#distance_deli').val('');      
        $('#chkdestiCharge').val('no-match');      
        $('#rate_destiCharge').val('');    
        $('#td_tdch').html('0.00');      
      }
      compute_tax();
    }
  })
}

function checkContainer(get)
{
  $.ajax
  ({
    type: 'POST',
    url: 'checkContainer.php',
    data: "container="+ get,
    dataType: 'json',
    success: function(s)
    {
      if(s[0]==1){
        $('#chkContainer').val(s[1]);
        $('#container').val(get);
        $("#addCont").prop('disabled',false);  

      }
      else{
        $('#chkContainer').val('no-match');        
        $("#addCont").prop('disabled',true);  
      }
    }
  })
}

function compute_tpch(get){
  var rate = $('#rate_pickupCharge').val();
  if(get > 999999 || get < 0){
    $('#td_tpch').html('0.00');
    $('#distance_pickup').val('');
  }
  else if(get == ''){
    $('#td_tpch').html('0.00');
  }
  else{
    var charge = parseFloat(rate,10)*parseFloat(get,10);
    $('#td_tpch').html(comma(charge.toFixed(2)));    
  }
  compute_tax();
}

function compute_tdch(get){
  var rate = $('#rate_destiCharge').val();
  if(get > 999999 || get < 0){
    $('#td_tdch').html('0.00');
    $('#distance_deli').val('');
  }
  else if(get == ''){
    $('#td_tdch').html('0.00');
  }
  else{
    var charge = parseFloat(rate,10)*parseFloat(get,10);
    $('#td_tdch').html(comma(charge.toFixed(2)));    
  }
  compute_tax();
}

function compute_tax(){
  var addTax = '0.'+$('#tax').val();
  var preg = parseFloat(uncomma($('#td_preg').text()),10);
  var dreg = parseFloat(uncomma($('#td_dreg').text()),10);
  var tpch = parseFloat(uncomma($('#td_tpch').text()),10);
  var tdch = parseFloat(uncomma($('#td_tdch').text()),10);
  var cont = parseFloat(uncomma($('#td_cont').text()),10);
  var  td_sub= (preg+dreg+tpch+tdch+cont);  
  var tax = ((preg+dreg+tpch+tdch+cont)*(parseFloat(addTax,10)));
  $('#td_tax').text(comma(tax.toFixed(2)));
  compute_discount((td_sub+tax));
}
  
function compute_discount(subtot){
  if($('#rate_discount').val()!=0){
    var disc = subtot*parseFloat('0.'+$('#rate_discount').val(),10);
    $('#td_disc').text(comma((disc-(disc*2)).toFixed(2)));
    compute_grandTOT((subtot-disc));
  }
  else{
    $('#td_disc').text('0.00');
    compute_grandTOT(subtot);    
  }

}

function compute_grandTOT(grandTOT){
  $('#bTableFoot').text(comma(grandTOT.toFixed(2)));
  $('#lbl_grandtot').text(comma(grandTOT.toFixed(2)));

  if($('#td_preg').text()!=0.00 && $('#td_dreg').text()!=0.00 && $('#td_tpch').text()!=0.00 && $('#td_tdch').text()!=0.00 && $('#td_cont').text()!=0.00 ){
    $('#btn_save').prop('disabled',false);
  }
  else
    $('#btn_save').prop('disabled',true);
}

function taxValidate(get){
   if(get >= 100 || get < 0 || get.length >= 3){
    $('#tax').val('');
  }
  compute_tax();
}

function addRow() 
{   
    var cont_no = $('#chkContainer').val();
        $.ajax
        ({
          type: 'POST',
          url: 'fetchAddRow_cont.php',
          data: 'cont_no='+cont_no,
          dataType: 'json',
          success:function(s)
          {                              
              for(var i=0; i<s.length;i++)
              {            
                var A = s[i][0]; // cont_no
                var B = s[i][1]; // cont name
                var C = comma(s[i][2]); // cont rate
                var D = 1; // qty
                var E = C;
              }//.for loop [i]   


          if($('#'+A).length){

            var current = uncomma($('#qty'+A).text());
            current = parseInt(current)+1;
            $('#qty'+A).html(comma(current));    

            currentTOT = parseFloat(current,10)*parseFloat(uncomma(C),10);
            $('#sub'+A).html(comma(currentTOT.toFixed(2)));

            addContValToTable(uncomma(C));
          }                
          else{
            $('#cTable tr:last').after('<tr id='+A+'><td>'+A+'</td><td>'+B+'</td><td>'+C+'</td><td id='+"qty"+A+'>'+comma(D)+'</td><td id='+"sub"+A+'>'+E+'</td> <td><button value='+A+' onclick="delRow(this.value)" class="btn btn-xs text-red" title="Remove"><i class="fa fa-close"></i></td></tr>');            
            addContValToTable(uncomma(E));
          } 

          } //.function(s)          
        })// end.ajax
      
        clearContField();
}

function addContValToTable(E){
  var cont_tot_val = parseFloat(uncomma($('#td_cont').text()),10) + parseFloat(E,10);
  $('#td_cont').html(comma(cont_tot_val.toFixed(2)));
  compute_tax();
}

function delRow(get){
  var lastdata = uncomma($('#cTable #sub'+get).text());  
  var cont_tot_val = parseFloat(uncomma($('#td_cont').text()),10) - parseFloat(lastdata,10);
  $('#td_cont').html(comma(cont_tot_val.toFixed(2)));  
  $('#cTable #'+get).remove();
  compute_tax();
}

function clearContField(){
  $('#container').val('');
  $('#addCont').prop('disabled','true');
  $('#chkContainer').val('');
}

  
$('#btn_save').click(function(){

  if(formValidate()=='false'){
    $('#howmuch').text( '₱'+$('#bTableFoot').text() );
    $('#confirmModal').modal('show');
  }
  else{
    alert("Ooops Please Fill up the Required Fields");     
  }
}) //end of btn_save

$('#btnConfirm').click(function(){

  $(this).prop('disabled',true);

    var cust = $('#chkCust').val();
    var clerk = $('#chkClerk').val();
    var transdate = $('#transdate').val();
    var discount = $('#chkDiscount').val();
    var pickup = $('#pickup').val();
    var pickupReg = $('#chkpickupReg').val();
    var delivery = $('#delivery').val();
    var deliveryReg = $('#chkdeliveryReg').val();
    var cargo = $('#cargo').val();
    var truck = $('#chkTruck').val();
    var driver = $('#chkDriver').val();
    var helper = $('#chkHelper').val();
    var pickupCharge = $('#chkpickupCharge').val();
    var distance_pickup = $('#distance_pickup').val();
    var destiCharge = $('#chkdestiCharge').val();
    var distance_deli = $('#distance_deli').val();
    var pickupEx = $('#pickupEx').val();
    var deliveryEx = $('#deliveryEx').val();
    var pickupTime = $('#pickupTime').val();
    var deliveryTime = $('#deliveryTime').val();
    var tax = '0.'+$('#tax').val();
    var addBal = uncomma($('#bTableFoot').text());

    var dts = '&cust='+cust+ '&clerk='+clerk+ '&transdate='+transdate+ '&discount=' +discount;
    dts += '&pickup='+pickup+ '&pickupReg='+pickupReg+ '&delivery='+delivery+ '&deliveryReg='+deliveryReg;
    dts += '&cargo='+cargo+ '&truck='+truck+ '&driver='+driver+ '&helper='+helper;
    dts += '&pickupCharge=' +pickupCharge+ '&distance_pickup='+distance_pickup+ '&destiCharge='+destiCharge+ '&distance_deli='+distance_deli;
    dts += '&pickupEx='+pickupEx+ '&deliveryEx='+deliveryEx+ '&pickupTime='+pickupTime+ '&deliveryTime='+deliveryTime+ '&tax='+tax+ '&addBal='+addBal;

    var dataString = "";
    var iterator = 0;
    var rowCount = 0;  
    $('#cTable td').each(function() 
    {
          var cellValue = $(this).html();
          var column = iterator % 6;
          //var row = Math.round(iterator / 3);
          var row = Math.floor(iterator / 6);
 
          if(column == 0) {
            dataString += "cont_no[" + row + "]=" + cellValue + "&";
          } 
          else if(column == 3) {
            dataString += "qty[" + row + "]=" + uncomma(cellValue) + "&";
          }
          rowCount = row + 1;
          iterator++;
    });    
    dataString += "rowCount=" + rowCount;
    dataString += dts;

    //ajax now
    $.ajax ({
      type: "POST",
      url: "addProcess.php",
      data: dataString,
      cache: false,
        success: function(s)
        {
          $('#btnConfirm').prop('disabled','true');
          $('#howmuch').text('');
          $('#msgModal').modal({backdrop: 'static'})        
          $('#msgModal').modal('show');          
        }
    }); 
    //ajax end  
})

$('#done').click(function(){
  $('#confirmModal').modal('hide');
  $('#msgModal').modal('hide');
  setTimeout(' window.location="shp.php"', 0);                
})

function formValidate(){
  var err = 'false';

  if($('#chkCust').val()=='no-match'){
    err = 'true';
    $('#custnameErr').addClass('text-red');
  }
  else
    $('#custnameErr').removeClass('text-red');   

  if($('#chkClerk').val()=='no-match'){
    err = 'true';
    $('#clerkErr').addClass('text-red');
  }
  else
    $('#clerkErr').removeClass('text-red');

  if($('#transdate').val()==''){
    err = 'true';
    $('#transdateErr').addClass('text-red');
  }
  else
    $('#transdateErr').removeClass('text-red');          

  if($('#pickup').val()==''){
    err = 'true';
    $('#pickupErr').addClass('text-red');
  }
  else
    $('#pickupErr').removeClass('text-red');   

  if($('#delivery').val()==''){
    err = 'true';
    $('#deliveryErr').addClass('text-red');
  }
  else
    $('#deliveryErr').removeClass('text-red');     

  if($('#cargo').val()==''){
    err = 'true';
    $('#cargoErr').addClass('text-red');
  }
  else
    $('#cargoErr').removeClass('text-red');   

  if($('#chkTruck').val()=='no-match'){
    err = 'true';
    $('#truckErr').addClass('text-red');
  }
  else
    $('#truckErr').removeClass('text-red');     

  if($('#chkDriver').val()=='no-match'){
    err = 'true';
    $('#driverErr').addClass('text-red');
  }
  else
    $('#driverErr').removeClass('text-red');   

  if($('#pickupEx').val()=='' || $('#pickupEx').val().length != 10 ){
    err = 'true';
    $('#pickupExErr').addClass('text-red');
  }
  else
    $('#pickupExErr').removeClass('text-red');     

  if($('#deliveryEx').val()=='' ||  $('#deliveryEx').val().length != 10){
    err = 'true';
    $('#deliveryExErr').addClass('text-red');
  }
  else
    $('#deliveryExErr').removeClass('text-red');     

  if($('#pickupTime').val()=='' || $('#pickupTime').val().length!=8 ){
    err = 'true';
    $('#pickupTimeErr').addClass('text-red');
  }
  else
    $('#pickupTimeErr').removeClass('text-red');    

  if($('#deliveryTime').val()=='' || $('#deliveryTime').val().length!=8 ){
    err = 'true';
    $('#deliveryTimeErr').addClass('text-red');
  }
  else
    $('#deliveryTimeErr').removeClass('text-red');        
//--------------    
  return err; 
}



//utilities methods
function comma(val){
    while (/(\d+)(\d{3})/.test(val.toString())){
      val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
    }
    return val;
}
function uncomma(x) {
  var string1 = x;
  for (y = 0; y < 12; y++) {
    string1 = string1.replace(/\,/g, '');
  }
  return string1;
} 

$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip();
  $('#pickupEx').datepicker({ autoclose: true, todayHighlight: true });
  $('#deliveryEx').datepicker({ autoclose: true, todayHighlight: true });

  //Timepicker
  $("#pickupTime").timepicker({
    showInputs: false
  }); $('#pickupTime').val('00:00:00');

  $("#deliveryTime").timepicker({
    showInputs: false
  }); $('#deliveryTime').val('00:00:00');
}); 
    </script> 

  </body>
</html>