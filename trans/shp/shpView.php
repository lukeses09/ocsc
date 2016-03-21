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
    <link href="../../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />    
    <!-- live seach skin -->
    <style type="text/css">
      .tt-dropdown-menu {
        background-color: #FFFFFF;
        border: 1px solid rgba(0, 0, 0, 0.2);  
        border-radius: 4px;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        margin-top: 12px;
        padding: 8px 0;
        width: 280px;
      }
      .tt-hint {
        color: white;
      }
      .tt-suggestion {
        font-size: 18px;
        line-height: 18px;
        padding: 5px 20px;
      }
      .tt-suggestion.tt-is-under-cursor {
        background-color: #0097CF; */
        font-color: white;
        color: #FFFFFF;
      }
    </style> 

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
<?php include("aside.php");
$so_no = $_GET['so_no'];
echo'<input type="hidden" id="so_no" value='.$so_no.'>'; ?>


      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">

        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           Shipping
            <a href='javascript: $("#delModal").modal("show");' id="deleteRecord" style="text-decoration:underline" class="text-red pull-right"><h5>Delete Record</h5></a>            
            <small id="so_no"> <?php echo($so_no); ?> </small>
          </h1>                    
        </section>


<!--modals-->
  <!-- payment modal -->
    <div id="pyModal" class="fade modal"> <!-- PAYMENT MODAL-->
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h5 class="modal-title">Payment</h5>
          </div>
        <div class="modal-body">    

          <div class="row">

            <div class="col-sm-4" id="py_dateDIv">
              <label>Date of Payment</label>
              <input type="date" id="py_date" class="form-control" value="<?php echo"".date('Y-m-d')."" ?>">
            </div>

            <div class="col-sm-4" id="py_collectorDiv">
              <label>Collector</label>
              <input id="py_collector" type="text" class="form-control" onblur="checkCollector(this.value)" onfocus="checkCollector(this.value)" placeholder="Search">
              <input id="chk_py_collector" type="hidden" value="no-match">
            </div>  

            <div class="col-sm-4">
              <label>Mode of Payment</label>
              <select id="py_mode" class="form-control">
                <option>cash</option>
                <option>cheque</option>
              </select>
            </div>                                  
          </div>
          <hr>
          <div class="row" style="text-align:center">
            <h4 class="lead"> Amount : ₱ <text id="lbl_pyAmount"></text></h4>
          </div>                    
                                        
        </div><!--/.modal body-->

          <div class="modal-footer">                                 
            <button id="pyConfirm" type="button" class="btn btn-block btn-success btn-lg">Confirm Payment</button>
            <button type="button" class="btn btn-block btn-default" data-dismiss="modal">Cancel</button>                                      
          </div>
        </div>
      </div>
    </div>  
  <!--/.payment modal-->  

  <!--msg Modal-->
    <div id="msgModal" class="modal"> <!-- DONE MODAL-->
      <div class="modal-dialog" style="width:30%">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Message</h5>
          </div>
          <div class="modal-body" style="text-align:center">
            <h3 id="msgContent" class="text-success"></h3>                                   
          </div>
          <div class="modal-footer">                                 
            <button id="done" type="button" class="btn btn-block btn-success btn-lg" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>  
  <!--/.msg Modal-->

  <!-- shipping modal-->
    <div id="shippingModal" class="fade modal"> <!-- PAYMENT MODAL-->
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h5 class="modal-title"><i class="fa fa-truck"></i> Shipping</h5>
          </div>
        <div class="modal-body">    

          <div class="row">
            <div class="col-sm-1"></div> <!--left margin-->
                    <div class="col-sm-4" id="depDateDiv">
                      <label></font>Departure Date:</label>    
                      <div  class="date input-group" style="margin-top:4px">
                       <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        <input id="depDate" type="date" class="form-control" value="<?php echo"".date('Y-m-d')."" ?>">
                      </div>    
                    </div> <!-- /.col-->      
                    <div class="col-sm-1"></div> <!--right margin-->
                    <div class="col-sm-5 bootstrap-timepicker" >
                      <div class="form-group" id="depTimeDiv">
                        <label> Departure Time:</label>
                        <div class="input-group" style="margin-top:4px">
                          <div class="input-group-addon">
                            <i class="fa fa-clock-o"></i>
                          </div>                          
                          <input id="depTime" type="text" class="form-control">
                        </div><!-- /.input group -->
                      </div><!-- /.form group -->                      
                    </div>

          </div>                    
                                        
        </div><!--/.modal body-->

          <div class="modal-footer">                                 
            <button id="shippingConfirm" type="button" class="btn btn-block bg-teal btn-lg"><i class="fa fa-truck"></i> Update to Shipping</button>
            <button type="button" class="btn btn-block btn-default" data-dismiss="modal">Cancel</button>                                      
          </div>
        </div>
      </div>
    </div>    
  <!--/.shipping modal-->

  <!-- shipped modal-->
    <div id="shippedModal" class="fade modal"> <!-- PAYMENT MODAL-->
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h5 class="modal-title"><i class="fa fa-check"></i> Shipped Details</h5>
          </div>
        <div class="modal-body">    

          <div class="row">
            <div class="col-sm-1"></div> <!--left margin-->
              <div class="col-sm-4" id="act_pickDateDiv">
                <label></font>Actual Pickup-Date:</label>    
                <div  class="date input-group" style="margin-top:4px">
                 <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  <input id="act_pickDate" type="date" class="form-control" value="<?php echo"".date('Y-m-d')."" ?>">
                </div>    
              </div> <!-- /.col-->      
              <div class="col-sm-1"></div> <!--right margin-->
              <div class="col-sm-5 bootstrap-timepicker" >
                <div class="form-group" id="act_pickTimeDiv">
                  <label> Actual Pickup-Time:</label>
                  <div class="input-group" style="margin-top:4px">
                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>                          
                    <input id="act_pickTime" type="text" class="form-control">
                  </div><!-- /.input group -->
                </div><!-- /.form group -->                      
              </div>
          </div>    

          <div class="row">
            <div class="col-sm-1"></div> <!--left margin-->
              <div class="col-sm-4" id="act_delDateDiv">
                <label></font>Actual Delivery-Date:</label>    
                <div  class="date input-group" style="margin-top:4px">
                 <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                  <input id="act_delDate" type="date" class="form-control" value="<?php echo"".date('Y-m-d')."" ?>">
                </div>    
              </div> <!-- /.col-->      
              <div class="col-sm-1"></div> <!--right margin-->
              <div class="col-sm-5 bootstrap-timepicker" >
                <div class="form-group" id="act_delTimeDiv">
                  <label> Actual Delivery-Time:</label>
                  <div class="input-group" style="margin-top:4px">
                    <div class="input-group-addon">
                      <i class="fa fa-clock-o"></i>
                    </div>                          
                    <input id="act_delTime" type="text" class="form-control">
                  </div><!-- /.input group -->
                </div><!-- /.form group -->                      
              </div>
          </div>                              
                                        
        </div><!--/.modal body-->

          <div class="modal-footer">                                 
            <button id="shippedConfirm" type="button" class="btn btn-block bg-green btn-lg"><i class="fa fa-check"></i> Update to Shipped</button>
            <button type="button" class="btn btn-block btn-default" data-dismiss="modal">Cancel</button>                                      
          </div>
        </div>
      </div>
    </div>    
  <!--/.shippied modal-->

  <!-- dlete modal-->
    <div id="delModal" class="modal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Confirmation</h4>
                </div>
                <div class="modal-body">
                    <h4>Do you want to Delete?</h4>
                    <p class="text-warning"><small>Click Delete Record to continue, or Cancel to quit.</small></p>
                </div>
                <div class="modal-footer">
                    <button type="button" id="btnDel" value="" class="btn-block btn-lg btn btn-danger">Delete Record</button>                                  
                    <button type="button" class="btn btn-block btn-default" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>   
  <!-- /.delete modal-->

<!--/.modals-->




        <section class="invoice">
          <!-- title row -->
          <div class="row">
            <div class="col-xs-12">
              <h2 class="page-header">
                <i class="fa fa-info-circle"></i> <text style="text-transform: uppercase" id="shpStatus"></text>
                <small class="pull-right">Date: <text id="transdate"></text></small>
              </h2>
            </div><!-- /.col -->
          </div>
          <!-- info row -->
          <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">
              <address>
                <strong>Client: </strong><text id="custName"></text><br>
                <strong>Email: </strong><text id="custEmail"></text> <br>                
                <strong>Telephone: </strong><text id="custTel"></text><br>
                <text id="CP"></text><br>
                <Text id="CPphone"></text>
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <address>
                <strong>Clerk: </strong><text id="clerk"></text><br>
                <strong>Driver: </strong><text id="driver"></text><br>
                <strong>Truck: </strong><text id="truck"></text><br>                
                <strong>Cargo: </strong><text id="cargo"></text><br>
                <strong id="lbl_helper" style="display:none">Helper: </strong><text id="helper"></text>
              </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">
              <address>
                <strong>Pickup: </strong><text id="pickup"></text><br>
                <strong>Delivery: </strong><text id="delivery"></text><br>
                <strong>Pickup Expect: </strong><text id="pickupEx"></text> <br>
                <strong>Delivery Expect: </strong><text id="deliveryEx"></text>
              </address>
            </div><!-- /.col -->
         

          </div><!-- /.row -->

          <!-- Table row -->
          <div class="row">

            <div class="col-sm-4 table-responsive">
              <p class="lead">Charge Breakdown</p>              
              <table id="bTable" class="table">
                <tbody>
                <tr> <td>Pick-up Region</td> <td id="td_preg">0.00</td></tr>
                <tr> <td>Destination Region</td> <td id="td_dreg">0.00</td></tr>                              
                <tr> <td>To Pick-up Charge</td> <td id="td_tpch">0.00</td></tr>
                <tr> <td>To Destination Charge</td> <td id="td_tdch">0.00</td></tr>
                <tr> <td>Containers</td> <td id="td_cont">0.00</td></tr>
                <tr> <td>Tax <td id="td_tax">0.00</td></tr>                              
                <tr> <td>Discount</td> <td id="td_disc">0.00</td></tr>
                </tbody>
                <tfoot>
                <th>Grand Total:</th>
                <th id="bTableFoot"></th>
                </tfoot>
                <tbody></tbody>   
              </table>
            </div><!-- /.col -->

            <div class="col-sm-8 table-responsive">              
              <address style="margin-top:40px">
                <strong>Pickup Charge: </strong><text id="pickupCharge"></text><br>
                <strong>Delivery Charge: </strong><text id="deliveryCharge"></text><br>
                <strong>Tax: </strong><text id="tax"></text><br>
                <strong>Discount: </strong><text id="discount"></text><br>                
              </address>

              <table id="cTable" class="table table-striped">
                <thead>
                  <th>Container</th>
                  <th>Height</th>
                  <th>Width</th>
                  <th>Rate</th>
                  <th>Qty</th>
                </thead>
                <tbody>
                </tbody>
              </table>

            </div><!-- /.col -->
          </div><!-- /.row -->




          <!-- this row will not appear when printing -->
          <div class="row no-print">
            <div class="col-xs-12">
              <form action="soa.php" method="get">
                <input type="hidden" value=<?php echo($so_no); ?> name="so_no">
                <button type="submit" target="_blank" class="btn btn-default" data-toggle="tooltip" data-placement="right" title="Print Shipping Details"><i class="fa fa-print"></i> Print</button>
              </form>
            </div>
          </div>
        </section><!-- /.invoice -->

        <!-- Main content -->
        <section class="content">


    <div class="row">
    <div class="col-lg-5 col-xs-12">
<div class="box box-solid">
  <div class="box-body">
      <div class="row" style="margin-top:10px">
        <div class="col-sm-1"></div><!--left margin-->
        <div class="col-sm-5">
          <button id="btn_shipping" class="btn bg-teal btn-block" disabled> <i class="fa fa-truck" ></i> SHIPPING </button>
        </div>    
        <div class="col-sm-5">
          <button  id="btn_shipped" class="btn btn-block bg-green" disabled> <i class="fa fa-check"></i> SHIPPED </button>
        </div>            
        <div class="col-sm-1"></div><!--right margin-->        
      </div>
      <hr>
      <h4 class="description-header" style="text-align:center;font-size:22px">Balance: ₱<text id="balAmount"></text></h4>    
      <div id="paymentDiv" class="input-group input-group-lg" >
        <input id="paymentInput" type="number" class="form-control">
          <span class="input-group-btn">
          <button id="paymentBtn" class="btn bg-default" type="button">Payment</button>
          </span>
      </div><!-- /input-group -->
    </div> <!-- /. col -->
  </div> <!--/.box-body-->
</div> <!-- /.box -->


    <div class="col-lg-7 col-xs-12">
<div class="box box-solid">
  <div class="box-body">    
  <h4>Payment History</h4>
      <table id="pTable" class="table table-striped">
        <thead>
          <th>Date</th>
          <th>Amount</th>
          <th>Method</th>
          <th>Collector</th>
        </thead>
        <tbody></tbody>            
      </table>
  </div><!--/.box body-->  
</div><!--/. box -->     
    </div> <!-- /. col -->          
    </div> <!-- /. row -->

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
    <!-- live search -->
    <script src="../../plugins/slive/typeahead.min.js" type="text/javascript"></script>    
    <script src="../../plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>    

    <script type="text/javascript">

function loadDetails(){
  var so_no = $('#so_no').val();
    //ajax now
    $.ajax ({
      type: "POST",
      url: "shp_loadDetails.php",
      dataType: 'json',      
      data: 'so_no='+so_no,
      cache: false,
      success: function(s)
      {
        for(var i = 0; i < s.length; i++) 
        {                  
          $('#transdate').text(s[i][0]); 
          $('#custName').text(s[i][1]);      
          $('#custEmail').text(s[i][2]);         
          $('#custTel').text(s[i][3]);   
          if(s[i][4] !='') {
            $('#CP').text('Contact Person: '+s[i][4]);      
            $('#CPphone').text('Phone: '+s[i][5]);             
          }
          $('#clerk').text(s[i][6]); 
          $('#driver').text(s[i][7]);      
          $('#truck').text(s[i][28]+' , '+s[i][27]);
          if(s[i][8] != null) {
            $('#helper').text(s[i][8]);   
            $('#lbl_helper').css('display','inline');   
          }              
          $('#cargo').text(s[i][9]);   
          $('#pickup').text(s[i][12]+', '+s[i][10]);
          $('#delivery').text(s[i][14]+', '+s[i][11]);
          $('#pickupEx').text(s[i][16]);
          $('#deliveryEx').text(s[i][17]);
          
          $('#pickupCharge').text(s[i][22]+' x '+comma(s[i][19])+'('+s[i][18]+')');
          $('#deliveryCharge').text(s[i][23]+' x '+comma(s[i][21])+'('+s[i][20]+')');
          $('#tax').text(s[i][24]);
          if(s[i][25]!=null)
          $('#discount').text(s[i][26]+'% ('+s[i][25]+')');
          else
          $('#discount').text('NO-DISCOUNT');
          $('#shpStatus').text( (s[i][29]) );
          if(s[i][29]=='shipping'){
            $('#btn_shipped').prop('disabled',false);
            $('#btn_shipping').css('display','none');            
          }
          else if(s[i][29]=='shipped'){
            $('#btn_shipped').css('display','none');            
            $('#btn_shipping').css('display','none');                        
          }
          else if(s[i][29] == 'deleted'){
            $('#btn_shipped').css('display','none');            
            $('#btn_shipping').css('display','none'); 
            $('#paymentBtn').prop('disabled',true);
            $('#deleteRecord').css('display','none');            
          }

          $('#td_preg').text(comma(s[i][13]));
          $('#td_dreg').text(comma(s[i][15]));
          $('#td_tpch').text(comma(parseFloat(s[i][22],10)*parseFloat(s[i][19],10)));
          $('#td_tdch').text(comma(parseFloat(s[i][23],10)*parseFloat(s[i][21],10)));


        } // End For     
        loadpTable();
        compute_tax(s[0][24],s[0][26]);
      }  
    }); 
    //ajax end  
}

function loadcTable(){
  var so_no = $('#so_no').val();
    //ajax now
    $.ajax ({
      type: "POST",
      url: "shp_loadcTable.php",
      dataType: 'json',      
      data: 'so_no='+so_no,
      cache: false,
      success: function(s)
      {
        var total_cont=0;
        for(var i = 0; i < s.length; i++) 
        {                  
          $('#cTable tr:last').after('<tr><td>'+s[i][0]+'</td><td>'+s[i][1]+'</td><td>'+s[i][2]+'</td><td>'+comma(s[i][3])+'</td><td>'+comma(s[i][4])+'</td> </tr>');          
          total_cont+= (parseFloat(s[i][3],10)*s[i][4]);
        } // End For        
        $('#td_cont').text(comma(total_cont));
      }  
    }); 
    //ajax end  

    loadDetails();
}

function loadAccount(getBB){
  var so_no = $('#so_no').val();
    //ajax now
    $.ajax ({
      type: "POST",
      url: "shp_loadAccount.php",
      dataType: 'json',      
      data: 'so_no='+so_no,
      cache: false,
      success: function(s)
      {
        var total_cont=0;
        for(var i = 0; i < s.length; i++) 
        {                  
          $('#balAmount').text(comma(s[i][0]));
        } // End For     
        checkShipAvail(getBB,s[0][0]);           
      }  
    }); 
    //ajax end    
}

var pTable = $('#pTable').dataTable({
  "aoColumnDefs": [ { "bSortable": false, "aTargets": [1,2,3] } ],
});
function loadpTable(){
  var so_no = $('#so_no').val();
    //ajax now
    $.ajax ({
      type: "POST",
      url: "shp_loadpTable.php",
      dataType: 'json',      
      data: 'so_no='+so_no,
      cache: false,
      success: function(s)
      {
        pTable.fnClearTable();
        for(var i = 0; i < s.length; i++) 
        {         
          pTable.fnAddData
          ([
            s[i][0], comma(s[i][1]), s[i][2], s[i][3],
          ]);                 
        } // End For        
      }  
    }); 
    //ajax end    
}

loadcTable();


function compute_tax(getTax,getDiscount){
  var addTax = getTax;
  var addDiscount = getDiscount;
  var preg = parseFloat(uncomma($('#td_preg').text()),10);
  var dreg = parseFloat(uncomma($('#td_dreg').text()),10);
  var tpch = parseFloat(uncomma($('#td_tpch').text()),10);
  var tdch = parseFloat(uncomma($('#td_tdch').text()),10);
  var cont = parseFloat(uncomma($('#td_cont').text()),10);
  var  td_sub= (preg+dreg+tpch+tdch+cont);  
  var tax = ((preg+dreg+tpch+tdch+cont)*(parseFloat(addTax,10)));
  $('#td_tax').text(comma(tax.toFixed(2)));
  compute_discount((td_sub+tax),addDiscount);  
}

function compute_discount(subtot,getDiscount){
    var disc = subtot*parseFloat('0.'+getDiscount,10);
    $('#td_disc').text(comma((disc-(disc*2)).toFixed(2)));
    $('#bTableFoot').text(comma((subtot-disc).toFixed(2))); // for grand total
    loadAccount((subtot-disc).toFixed(2));
}

function checkShipAvail(getBB,bal){
  var min = parseFloat(getBB,10) - (parseFloat(getBB,10)*0.10);
  if(bal <= min){
    $('#btn_shipping').prop('disabled',false);
  }
  else{
    $('#btn_shipping').prop('disabled',true);
  }
}

$('#paymentBtn').click(function(){
  var pay_amount = $('#paymentInput').val();
  var bal = uncomma($('#balAmount').text());
  if(parseFloat(pay_amount,10) > parseFloat(bal,10) || pay_amount <= 0){
    $('#paymentDiv').addClass('has-error');
    $('#paymentBtn').addClass('bg-red');
  }
  else{
    $('#pyConfirm').prop('disabled',false);
    $('#paymentDiv').removeClass('has-error');
    $('#paymentBtn').removeClass('bg-red');  
    $('#lbl_pyAmount').text(comma(pay_amount));
    $('#pyModal').modal('show');    
  }
})

$('#pyConfirm').click(function(){
  var pyDate = $('#py_date').val();
  var pyAmount = $('#paymentInput').val();
  var pyCollector = $('#chk_py_collector').val();
  var pyMode = $('#py_mode').val();
  var so_no = $('#so_no').val();

  if(validatePayment()=='false'){
    $(this).prop('disabled',true);
    dataString='so_no='+so_no+'&pyDate='+pyDate+ '&pyAmount='+pyAmount+ '&pyCollector='+pyCollector+ '&pyMode='+pyMode;
    //ajax now
    $.ajax ({
      type: "POST",
      url: "addPayment.php",
      data: dataString,
      cache: false,
      success: function(s)
      {
        $('#py_collector').val('');
        $('#chk_py_collector').val('no-match');
        $('#paymentInput').val('');
        loadpTable();
        loadAccount(uncomma($('#bTableFoot').text()));
        $('#msgContent').text('Payment Successful');
        $('#msgModal').modal({backdrop: 'static'})        
        $('#msgModal').modal('show');
      }  
    }); 
    //ajax end        
  }
  else{    
  }
})

$('#btn_shipping').click(function(){
  $('#shippingModal').modal('show');
})

$('#btn_shipped').click(function(){
  $('#shippedModal').modal('show');
})

$('#shippingConfirm').click(function(){
  var so_no = $('#so_no').val();
  var depDate = $('#depDate').val();
  var depTime = $('#depTime').val();
  if(validateShipping()=='false'){
    $(this).prop('disabled',true);
    var dataString='so_no='+so_no+ '&depDate='+depDate+ '&depTime='+depTime;
    //ajax now
    $.ajax ({
      type: "POST",
      url: "updateShipping.php",
      data: dataString,
      cache: false,
      success: function(s)
      {
        loadDetails();
        $('#depTime').val('00:00:00');
        $('#shippingModal').modal('hide');  
        $('#msgContent').text('Success: Updated to Shipping');
        $('#msgModal').modal({backdrop: 'static'})      
        $('#msgModal').modal('show');
      }  
    }); 
    //ajax end 

  }
  else{    
  }
})

$('#shippedConfirm').click(function(){
  var so_no = $('#so_no').val();
  var act_pickDate = $('#act_pickDate').val();
  var act_pickTime = $('#act_pickTime').val();
  var act_delDate = $('#act_delDate').val();
  var act_delTime = $('#act_delTime').val();

  if(validateShipping()=='false'){
    $(this).prop('disabled',true);
    var dataString='so_no='+so_no+ '&pickDate='+act_pickDate+ '&pickTime='+act_pickTime+ '&delDate=' +act_delDate+ '&delTime=' +act_delTime;
    //ajax now  
    $.ajax ({
      type: "POST",
      url: "updateShipped.php",
      data: dataString,
      cache: false,
      success: function(s)
      {
        loadDetails();
        $('#act_pickTime').val('00:00:00');
        $('#act_delTime').val('00:00:00');        
        $('#shippedModal').modal('hide');  
        $('#msgContent').text('Success: Updated to Shipped');
        $('#msgModal').modal({backdrop: 'static'})      
        $('#msgModal').modal('show');
      }  
    });  
    //ajax end 

  }
  else{    
  }
})


$('#done').click(function(){
  $('#done').modal('hide');
  $('#msgContent').text('');
  $('#pyModal').modal('hide');
  $('#shippingModal').modal('hide');
  $('#shippedModal').modal('hide');
})


function validatePayment(){
  var err = 'false';

  if($('#py_date').val()==''){
    err = 'true';
    $('#py_dateDIv').addClass('has-error');
  }
  else
    $('#py_dateDIv').removeClass('has-error');   

  if($('#chk_py_collector').val()=='no-match'){
    err = 'true';
    $('#py_collectorDiv').addClass('has-error');
  }
  else
    $('#py_collectorDiv').removeClass('has-error');     
//--------------    
  return err; 
}

function validateShipping(){
  var err = 'false';

  if($('#depDate').val()==''){
    err = 'true';
    $('#depDateDiv').addClass('has-error');
  }
  else
    $('#depDateDiv').removeClass('has-error');   

  if($('#depTime').val()=='' || $('#depTime').val().length!=8 ){
    err = 'true';
    $('#depTimeDiv').addClass('text-red');
  }
  else
    $('#depTimeDiv').removeClass('text-red');    
//--------------    
  return err; 
}

function validateShipped(){
  var err = 'false';

  if($('#act_pickDate').val()==''){
    err = 'true';
    $('#act_pickDateDiv').addClass('has-error');
  }
  else
    $('#act_pickDateDiv').removeClass('has-error');   

  if($('#act_pickTime').val()=='' || $('#act_pickTime').val().length!=8 ){
    err = 'true';
    $('#act_pickTimeDiv').addClass('text-red');
  }
  else
    $('#act_pickTimeDiv').removeClass('text-red');    

  if($('#act_delDate').val()==''){
    err = 'true';
    $('#act_delDateDiv').addClass('has-error');
  }
  else
    $('#act_delDateDiv').removeClass('has-error');   

  if($('#act_delTime').val()=='' || $('#act_delTime').val().length!=8 ){
    err = 'true';
    $('#act_delTimeDiv').addClass('text-red');
  }
  else
    $('#act_delTimeDiv').removeClass('text-red');      
//--------------    
  return err; 
}

function checkCollector(get)
{
  $.ajax
  ({
    type: 'POST',
    url: 'checkCollector.php',
    data: "collector="+ get,
    dataType: 'json',
    success: function(s)
    {
      if(s[0]==1){
        $('#chk_py_collector').val(s[1]);
        $('#py_collector').val(get);
      }
      else
        $('#chk_py_collector').val('no-match');        
    }
  })
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

$('#btnDel').click(function(){
    //ajax now  
    $.ajax ({
      type: "POST",
      url: "deleteRecord.php",
      data: 'so_no='+$('#so_no').val(),
      cache: false,
      success: function(s)
      {
        loadDetails();
        $('#delModal').modal('hide');  
        $('#msgContent').text('Success: Shipment Deleted ');
        $('#msgModal').modal({backdrop: 'static'})      
        $('#msgModal').modal('show');
      }  
    });  
    //ajax end 
})


$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip();

  $('#py_collector').typeahead({
    name: 'py_collector',
    remote:'collectorSearch.php?key=%QUERY',
    limit : 10
  }); 

  //Timepicker
  $("#depTime").timepicker({
    showInputs: false
  }); $('#depTime').val('00:00:00');

  $("#act_pickTime").timepicker({
    showInputs: false
  }); $('#act_pickTime').val('00:00:00');  
  $("#act_delTime").timepicker({
    showInputs: false
  }); $('#act_delTime').val('00:00:00');  

}); 



    </script> 

  </body>
</html>