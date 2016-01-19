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
    <!-- bootstrap wysihtml5 - text editor -->
    <link href="../../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css" rel="stylesheet" type="text/css" />
    <!-- DATA TABLES -->
    <link href="../../plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
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
            Shipping
            <small>Order</small>
          </h1>                              
        </section>


        <!-- Main content -->
        <section class="content">

          <!-- Small boxes (Stat box) -->
          <div class="row">                                 
            <div class="col-lg-12 col-sm-12 col-xs-12">             <!-- NEW RECORD -->
                <!-- <a href="addTax.php"><button class="btn btn-success btn-lg" style="margin-bottom:5px;
                  box-shadow: 0px 4px 8px #888888"> 
                  + ADD NEW RECORD</button> </a> -->
                      <div class="box-header with-border">
                       <div class="row">
                        <div class="col-md-3 col-xs-12">                        
                        <h4 class="box-title">
                             <a href="add.php" onclick="transferSave()" role="button" data-toggle="tooltip" title="Add New Shipment" data-placement="right" class="btn btn-lg " data-toggle="modal"
                             style="box-shadow: 0px 3px 7px #888888; border-radius:100px; width:58px; height:57px; margin-bottom:5px; outline:none;
                             text-align: center; font-size:28px; background-color:#3C8DBC; color:white "
                            > <i class="ion-android-add"></i> </a>                        </h4>     
                        </div>          

                        <div class="col-md-9 col-xs-12"> <!-- MESSAGE -->
                        <div class="alert alert-xs  bg-teal alert-dismissable" style="width:85%; display:none" id="msg">
                          <i class="icon fa fa-check"></i>
                         <label id="msgContent"></label>
                        </div>                          
                        </div>    
                       </div>                                        
                      </div>

                    <div id="formModal" class="fade modal" >
                      <form name="formCust" method="post" action=""> <!-- FORM element -->
                        <div class="modal-dialog">
                            <div class="modal-content" >
                                <div class="modal-header">
                                    <button type="butt on" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title"> <i class="fa fa-plus-square-o"></i> Tax Form </h4>
                                </div>          
                                <div class="modal-body" >
<!-- ------------------------------------------------------------------------------------------- -->
                                  <div class="row" style="margin-bottom:5px"> <!-- ROW 1 -->
                                    
                                    <div class="col-xs-6" id="nameErDv"> 
                                      <label><font color="darkred">*</font>Tax Name</label> <!-- Prod_Name -->
                                      <input type="text" class="form-control input-lg" id="name">
                                    </div>               

                                    <div class="col-xs-6" id="rateErDv"> 
                                      <label><font color="darkred">*</font>Rate</label> <!-- Prod_Name -->
                                        <div class="input-group" >
                                           <span class="input-group-addon">%</span>
                                           <input type="number" class="form-control input-lg" id="rate">
                                        </div>
                                    </div> 


                                  </div> <!-- /.row -->   
<!-- ------------------------------------------------------------------------------------------- -->


                                  </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" id="btnSave" class="btn bg-blue btn-lg btn-block" data-dismiss="modal fade"><i class="fa fa-send"></i> SAVE</button>                                
                                </div>
                            </div>
                        </div>
                      </form>
                    </div> 


                      <div id="delModal" class="modal">
                          <div class="modal-dialog" style="width:30%">
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

                      <div id="loading" class="modal fade">
                          <div class="modal-dialog">
                              <div class="overlay">
                                  <div class="modal-body" style="text-align:center">
                                    <div class="overlay">
                                      <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                                      <i class="fa fa-refresh fa-spin"  
                                      style="font-size:60px;"></i>
                                    </div>
                                  </div>
                              </div>
                          </div>
                      </div>   


          <div class="row">                     <!-- TABLES -->
          <div class="col-lg-12 col-sm-12 col-xs-12">
              <div class="box box-solid">
                <div class="box-header">
                  <h3 class="box-title">Browse Order List</h3>
                  <div class="myData"></div>

                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="jsontable" class="table table-condensed table-striped table-hover">
                    <thead>
                      <tr>
                        <th style="width:100px">ID</th>   
                        <th>Client</th>                    
                        <th style="width:120px">Client Phone</th>
                        <th style="width:200px">Cargo</th>
                        <th>Pick-up</th>
                        <th>Destination</th>
                        <th>Status</th>                        
                        <th style="width:10px"></th>

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
    <script src="../../plugins/TableTools/js/dataTables.tableTools.js" type="text/javascript"></script> 


    <script type="text/javascript">
function transferDel(btnId) // TRANSFER ID TO BTNDEL
{
  var newbtnId = btnId;
  document.getElementById('btnDel').value=newbtnId;
  $('#delModal').modal('show');      
}

function transferSave() // SET BTNSAVE VALUE
{
  clear();  
  document.getElementById('btnSave').value='save';
}    





//**********************POPULATE ALL DATA TO JQUERY DATATABLES****************
    var oTable = $('#jsontable').dataTable({
      "aoColumnDefs": [ { "bSortable": false, "aTargets": [7] } ],
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
function load(get){  // LOAD DATATABLES
    if(get=='startup')
    {
      $('#loading').modal({backdrop: 'static'})              
      $('#loading').modal('show');
    }

    var user = $(this).attr('id');
    if(user != '') 
    { 
    $.ajax({
      url: 'populate.php',
      dataType: 'json',
      success: function(s){
      $('#loading').modal('hide');  
      console.log(s);
          oTable.fnClearTable();
            for(var i = 0; i < s.length; i++) 
            {
              var statcol;          
              if(s[i][5]=='SHIPPING')
                statcol = "label label-success";
              else if(s[i][5]=='SHIPPED')
                statcol = "label label-default";       
              else if(s[i][5]=='PENDING')
                statcol = "label label-warning"; 
              else if(s[i][5]=='DELETED')
                statcol = "label label-danger";               

              oTable.fnAddData
              ([
                  s[i][0],s[i][1],s[i][2],s[i][6]/*cargo*/,s[i][3],s[i][4],'<span class="'+statcol+'">'+s[i][5]+'</span>',
  '<form action="shpView.php" method="GET" ><input name="so_no"  type="hidden" value='+s[i][0]+'> <button id="view" class="btn btn-xs btn-default" value='+s[i][0]+' title="View"><i class="fa fa-eye"></i></button></form>',
              ]);                                    
            } // End For    
    

      },
      error: function(e){
        $('#loading').modal('hide');                                             
         console.log(e.responseText); 
      }
      });
    } } // END OF LOAD DATATABLES
//**********************END OF POPULATING DATA****************
load('startup');






//****************** FUNCTION of SAVING & UPDATING on ONE MODAL **************//
$(function() {  //  SAVING RECORD
$("#btnSave").click(function() {
var btnVal = $(this).prop("value");

var name = $('#name').val();
var rate = $('#rate').val();

var err = validate();
if(err!="true") // Validate if not empty
{    

var dataString = 'name='+name+ '&rate='+rate;

  if(btnVal=='save') // will save
  {
      $.ajax({
      type: "POST",
      url: "addTax.php",
      data: dataString,
      cache: false,
        success: function(html)
        {
          /* $("#display").after(html); */
          $('#formModal').modal('hide');
          $("#msgContent").html('ADDED: '+name+'');
          document.getElementById('msg').style.display="block";      
          clear();
          load();
        }
        });  
  }
  else // WILL UPDATE
  {
    dataString+='&idKey='+btnVal;
    $.ajax({
    type: "POST",
    url: "upTax.php",
    data: dataString,
    cache: false,
      success: function(html)
      {
        /* $("#display").after(html); */
        $('#formModal').modal('hide');
        $("#msgContent").html('UPDATED: '+name+'');
        document.getElementById('msg').style.display="block";      
        load();
      } // END OF UPDATE
    });  
    return false;
  }
}//validate if empty
else if(err=="true")
{ }
  }); 
}); 
//****************** FUNCTION of SAVING & UPDATING on ONE MODAL **************//

$(function() {  //DELETING RECORD
$("#btnDel").click(function() {   
    var idKey = $(this).prop("value");
    var dataString = 'idKey='+idKey;
    $.ajax({
    type: "POST",
    url: "delTax.php",
    data: dataString,
    cache: false,
      success: function(html)
      {
      /* $("#display").after(html); */
      $('#delModal').modal('hide');
      $("#msgContent").html('DELETED: "'+idKey+'"');
      document.getElementById('msg').style.display="block";
      load();
      }
    });  
    return false;
  });
}); //END of ON DELETING RECORD ajax

function up(btnUp)
{
  clear();
  document.getElementById('btnSave').value = btnUp;  
  var idKey = btnUp;
   $.ajax({
    type: 'POST',
    url: 'update.php',
    data: "idKey="+ idKey,
    dataType: 'json',
    success: function(s) {
    for(var i = 0; i < s.length; i++)
    {
      $('#name').val(s[i][0]);
      $('#rate').val(s[i][1]);
     
    }

    }
  });
      $('#formModal').modal('show');        
}
//****************** FUNCTION of update FETCHING **************//

//****************** end of FUNCTION of updateFetching **************//

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


function validate(){
  var err = 'false';

  if($('#name').val()==''){
    err = 'true';
    $('#nameErDv').addClass('has-error');
  }
  else
    $('#nameErDv').removeClass('has-error');     

  if($('#rate').val()=='' || $('#rate').val()<0  || $('#rate').val()>99  || isNaN($('#rate').val())==true){
    err = 'true';
    $('#rateErDv').addClass('has-error');
  }
  else
    $('#rateErDv').removeClass('has-error');   


//--------------    
  return err; 
}

function clear()
{
  $('#name').val('');
  $('#rate').val('');

  $('#nameErDv').removeClass('has-error');
  $('#rateErDv').removeClass('has-error');
}


 function comma(val){
    while (/(\d+)(\d{3})/.test(val.toString())){
      val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
    }
    return val;
  }

$(function () {
$('[data-toggle="tooltip"]').tooltip();   
  $("[data-mask]").inputmask();
}); //FOR MASKING


    </script> 

  </body>
</html>