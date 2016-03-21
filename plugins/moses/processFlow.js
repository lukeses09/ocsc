function transferDel(btnId) // TRANSFER ID TO BTNDEL
{
  var newbtnId = btnId;
  document.getElementById('btnDel').value=newbtnId;
  $('#delModal').modal('show');      
}

function transferSave() // SET BTNSAVE VALUE
{
  clearProd();  
  document.getElementById('btnSave').value='save';
}

//**********************POPULATE ALL DATA TO JQUERY DATATABLES****************
function load(){  // LOAD DATATABLES
var oTable = $('#jsontable').dataTable();  //Initialize the datatable
    var user = $(this).attr('id');
    if(user != '') 
    { 
    $.ajax({
      url: '../../maintenance/cust/process.php',
      dataType: 'json',
      success: function(s){
      console.log(s);
          oTable.fnClearTable();
            for(var i = 0; i < s.length; i++) 
            {
              oTable.fnAddData
              ([
                  s[i][0], s[i][1], s[i][2], s[i][3], s[i][4], s[i][5], s[i][6],
  '<button id="update" value='+s[i][0]+' onclick="up(this.value)" class="btn btn-xs btn-flat btn-primary"> Update </button>',
  '<button id="del" value='+s[i][0]+' onclick="transferDel(this.value)" data-toggle="modal" class="btn btn-xs btn-flat btn-danger"> Delete </button>',      
              ]);                                    
            } // End For                   
      },
      error: function(e){
         console.log(e.responseText); 
      }
      });
    } } // END OF LOAD DATATABLES
//**********************END OF POPULATING DATA****************



//****************** FUNCTION of SAVING & UPDATING on ONE MODAL **************//
$(function() {  //  SAVING RECORD
$("#btnSave").click(function() {
  var btnVal = $(this).prop("value");
    var category = $('#category').val();
    var prodname = $('#prodname').val();
    var variant = $('#variant').val();
    var price = $('#price').val();
    var mod = $('#mod').val();
    var supp = $('#supp').val();

    var dataString = 'category='+category+ '&prodname='+prodname+ '&variant='+variant+ '&price='+price+ '&mod='+mod+ '&supp='+supp;
    
    if(btnVal == 'save') // WILL SAVE
    {
    $.ajax({
    type: "POST",
    url: "addProd.php",
    data: dataString,
    cache: false,
      success: function(html)
      {
        /* $("#display").after(html); */
        $('#custModal').modal('hide');
        $("#msgContent").html('ADDED record: "'+prodname+'"');
        document.getElementById('msg').style.display="block";      
        load();
      }
    });  
    return false;
    }     // END OF WILL SAVE
    else // WILL UPDATE
    {
    dataString+='&idKey='+btnVal;
    $.ajax({
    type: "POST",
    url: "upProd.php",
    data: dataString,
    cache: false,
      success: function(html)
      {
        /* $("#display").after(html); */
        $('#custModal').modal('hide');
        $("#msgContent").html('UPDATED record: "'+prodname+'"');
        document.getElementById('msg').style.display="block";      
        load();
      } // END OF UPDATE
    });  
    return false;
    }
  }); 
}); 
//****************** FUNCTION of SAVING & UPDATING on ONE MODAL **************//
