<?php include('../../maintenance/include/log.php'); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Daily Remittance</title>
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
    <link href="slive_pertui.css" rel="stylesheet" type="text/css" />  
    <link href="../../plugins/TableTools/css/dataTables.tableTools.css" rel="stylesheet" type="text/css" />

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
            Daily Remittance
            <small>Report</small>
          </h1>                              
        </section>


        <!-- Main content -->
        <section class="content">


        <div class="row" style="margin-top:30px">

          <div class="col-md-1"></div>
          <div id = "div_collector" class="col-md-3">
                <input id="collector" type="text" name="collector" class="form-control input-lg" onblur="checkIfExist(this.value)" onfocus="checkIfExist(this.value)" placeholder=" Search Collector">
                <input id="checkIfMatch" type="hidden" >
          </div>

          <div id="dateInputDiv" class="col-md-3">
                <input type="text" class="form-control input-lg" id="dateInput" placeholder="Select Range Date" />          
          </div><!--/. col 4-->
          <div class="col-md-1">
            <button id="btnSearchDate" class="btn btn-lg btn-default" style="background-color:white">Search </button>
          </div>
          <div class="col-md-1">
            <button id="btnViewAll" class="btn btn-lg btn-default" style="background-color:white"> View All </button>
          </div>    

          <div class="col-md-3"></div>    
        </div> <!-- /. row -->

        <div class="row" id="lblDiv" style="margin-top:20px; display:none">  <!-- bar labels below-->
          <div class="col-md-2"></div> <!-- left margin -->

          <div class="col-md-4 col-xs-12"> <!-- total customer -->
            <div class="info-box">
              <span class="info-box-icon bg-aqua"><i class="ion-ios-pie-outline"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total Payment Record</span>
                <h1 id="lbl_tot_payment" class="info-box-number"></h1>
              </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->
          </div><!--/.col(0)-->


          <div class="col-md-4 col-xs-12"> <!-- total sales -->
            <div class="info-box">
              <span class="info-box-icon bg-green"><i class="ion-ios-pricetags-outline"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Total Amount of Payments</span>
                <h1 id="lbl_tot_amount" class="info-box-number"></h1>
              </div><!-- /.info-box-content -->
            </div><!-- /.info-box -->      
          </div><!--/.col(2)-->
         <div class="col-md-2"></div> <!-- right margin -->
        </div>

          <div id="loading" class="modal fade">
              <div class="modal-dialog">
                  <div class="overlay">
                      <div class="modal-body" style="text-align:center">
                        <div class="overlay">
                          <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                          <i class="fa fa-spinner fa-pulse fa-spin"  
                          style="font-size:60px;"></i>
                        </div>
                      </div>
                  </div>
              </div>
          </div>   


          <div class="row" id="tablediv" style="display:none">                     <!-- TABLES -->
          <div class="col-lg-12 col-sm-12 col-xs-12">
              <div class="box box-solid">
                <div class="box-header">
                  <h3 class="box-title">Browse List</h3>
                  <div class="myData"></div>

                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="jsontable" class="table table-condensed table-striped table-hover">
                    <thead>
                      <tr>
                        <th>Collector</th>                        
                        <th style="width:130px"> No. </th>   
                        <th style="width:130px">SO No.</th>      
                        <th> Customer </th>              
                        <th>Date</th>
                        <th>Amount</th>
                        <th>Type</th>
                      </tr>
                      <tbody></tbody>
                    </thead>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div>  <!-- /.row -->

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
    <!-- Daterang Picker -->
    <script src="../../plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>    
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
    <!-- slive -->
    <script src="../../plugins/slive/typeahead.min.js" type="text/javascript"></script>     
    <script src="../../plugins/TableTools/js/dataTables.tableTools.js" type="text/javascript"></script> 

    <script type="text/javascript">

$(document).ready(function () {

  $('#collector').typeahead({
  name: 'collector',
  remote:'search_collector.php?key=%QUERY',
  limit : 10
      }); 


  $('#dateInput').daterangepicker(
          {
            ranges: {
              'Today': [moment(), moment()],
              'Yesterday': [moment().subtract('days', 1), moment().subtract('days', 1)],
              'Last 7 Days': [moment().subtract('days', 6), moment()],
              'Last 30 Days': [moment().subtract('days', 29), moment()],
              'This Month': [moment().startOf('month'), moment().endOf('month')],
              'Last Month': [moment().subtract('month', 1).startOf('month'), moment().subtract('month', 1).endOf('month')]
            },
            startDate: moment().subtract('days', 29),
            endDate: moment()
          },
  function (start, end) {
    $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
  }
  );
}); 

//**********************POPULATE ALL DATA TO JQUERY DATATABLES****************
    var oTable = $('#jsontable').dataTable({
      "aoColumnDefs": [ { "bSortable": false, "aTargets": [] } ],
      "aaSorting": [],
        sDom: 'T<"clear">lfrtip',
            "tableTools": {
                "sSwfPath": "../../plugins/TableTools/swf/copy_csv_xls_pdf.swf",
                 "aButtons": [
                  "xls",
                  "csv",
                  "pdf",
                  "copy"
                  ]
                }          
    });  //Initialize the datatable
function load(getStart,getEnd,name,type){  // LOAD DATATABLES
    $('#loading').modal({backdrop: 'static'})              
    $('#loading').modal('show');
    var t = type;
    var n = name;
    var s = getStart;
    var e = getEnd;
    var dataString = 'startDate='+s+'&endDate='+e+'&name='+n+'&type='+t;    
    var user = $(this).attr('id');
    if(user != '') 
    { 
    $.ajax({
      type: 'POST',      
      url: 'process.php',
      dataType: 'json',
      data: dataString,  
      success: function(s){
      $('#loading').modal('hide');  
      console.log(s);
          oTable.fnClearTable();
          var tot = 0;
            for(var i = 0; i < s.length; i++) 
            {          
              tot = parseFloat(tot,10) + parseFloat(s[i][5],10);
              oTable.fnAddData
              ([
                s[i][0],s[i][1],s[i][2],s[i][3],s[i][4],comma(s[i][5]),s[i][6],
              ],false);        
              oTable.fnDraw();                 
            } // End For    
          
          $('#lbl_tot_payment').html(comma(oTable.fnGetData().length));
          $('#lbl_tot_amount').html(comma(tot.toFixed(2)));
      },
      error: function(e){
        $('#loading').modal('hide');                                             
         console.log(e.responseText); 
      }
      });
    } } // END OF LOAD DATATABLES
//**********************END OF POPULATING DATA****************

function viewRemittance(getStart,getEnd,name,type)
{
  load(getStart,getEnd,name,type);
  //slLabels(getStart,getEnd,name,type);
  //odLOad(null,name);
  //lblReset();
  //$('#dateHeader').html('Range of '+getStart+ ' and ' +getEnd);
  $('#lblDiv').css('display','block');
  $('#tablediv').css('display','block');
  //$('#lblDiv').css('display','block');  
  //$('#lblOd').css('display','none');
}

$('#btnSearchDate').click(function(){   //searchButton .Clicked

  //lblReset();
  var str = $('#dateInput').val();
  var check = $('#checkIfMatch').val();

  if((str.length == 23 && str!='') &&  check == 'match') // if meron both
  {    
    var startDate = str.slice(0,10);
    var endDate = str.slice(13);  
    var name = $('#collector').val();
  $('#dateInputDiv').removeClass('has-error');    
  $('#div_collector').removeClass('has-error');      
  $('#jsontable').dataTable().fnClearTable();    
  viewRemittance(startDate,endDate,name,'specific');  
  }

  else if(str.length != 23 && check != 'match'){  // if walang date&match
  $('#dateInputDiv').addClass('has-error');
  $('#div_collector').addClass('has-error');  
  $('#jsontable').dataTable().fnClearTable();    
  //lblReset();    
  }
  else if(str.length != 23 && check == 'match'){  // if walang date
  $('#dateInputDiv').addClass('has-error');
  $('#div_collector').removeClass('has-error');      
  $('#jsontable').dataTable().fnClearTable();    
  //lblReset();    
  }
  else if((str.length == 23 && str!='') &&  check != 'match'){  // if walang match
  $('#div_collector').addClass('has-error');
  $('#dateInputDiv').removeClass('has-error');      
  $('#jsontable').dataTable().fnClearTable();    
  //lblReset();    
  }  
})

$('#btnViewAll').click(function(){
  $('#jsontable').dataTable().fnClearTable();    
  //lblReset();   
    var name = $('#recruiter').val();
  $('#dateInputDiv').removeClass('has-error');    
  $('#div_collector').removeClass('has-error');     
  $('#dateInput').val(''); 
  $('#collector').val('');
  $('#jsontable').dataTable().fnClearTable();    
  viewRemittance(null,null,name,'all');  
})


function checkIfExist(get)
{
  var name = get;
  $.ajax
  ({
    type: 'POST',
    url: 'checkIfExist.php',
    data: "name="+ name,
    dataType: 'json',
    success: function(s)
    {
      if(s==1)
        $('#checkIfMatch').val('match');
      else
        $('#checkIfMatch').val('no-match');        
    }
  })
}

function uncomma(x) {
  var string1 = x;
  for (y = 0; y < 12; y++) {
    string1 = string1.replace(/\,/g, '');
  }
  return string1;
} 

function comma(val){
  while (/(\d+)(\d{3})/.test(val.toString())){
    val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
  }
  return val;
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