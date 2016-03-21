<?php include('../../maintenance/include/log.php'); ?>
<?php
  $so_no = $_GET['so_no'];
  echo'<input type="hidden" id="so_no" value='.$so_no.'>';
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Shipment Details <?php echo($so_no); ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link href="../../bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />    
    <!-- Font Awesome -->
    <link href="../../bootstrap/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />  
    <!-- Ionicons -->
    <link href="../../plugins/ionicons/css/ionicons.min.css" rel="stylesheet" type="text/css" />  
    <!-- Theme style -->
    <link href="../../dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body >
    <div class="wrapper">
      <!-- Main content -->
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


        </section><!-- /.invoice -->
    </div><!-- ./wrapper -->

    <!-- AdminLTE App -->
  </body>
  <!-- jQuery 2.1.3 -->
  <script src="../../plugins/jQuery/jQuery-2.1.3.min.js" type="text/javascript"></script>
  <script>


  loadDetails(); 
  loadcTable();
  setTimeout( 'window.print()', 300);                


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

            $('#td_preg').text(comma(s[i][13]));
            $('#td_dreg').text(comma(s[i][15]));
            $('#td_tpch').text(comma(parseFloat(s[i][22],10)*parseFloat(s[i][19],10)));
            $('#td_tdch').text(comma(parseFloat(s[i][23],10)*parseFloat(s[i][21],10)));


          } // End For     
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
  }


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
  </script>
</html>
