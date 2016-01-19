function ichi()
{
	alert('hello');
    var table = $("#jsontable tbody");

    table.find('tr').each(function (i) {
        var $tds = $(this).find('td'),
            productId = $tds.eq(0).text(),
            prodname = $tds.eq(1).text(),
            variant = $tds.eq(2).text();
        // do something with productId, product, Quantity
alert(productId+"\n"+prodname+"\n"+variant);
    });	
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




function soldBtn(get)
{
alert("puta");
$('#qtyInputErr').css('visibility','hidden');	
var r = get;
$('#tdQty').html($('#jsontable tr:nth-child('+r+') td:nth-child(1)').text());
$('#tdName').html($('#jsontable tr:nth-child('+r+') td:nth-child(2)').text());
$('#tdVariant').html($('#jsontable tr:nth-child('+r+') td:nth-child(3)').text());
$('#tdPrice').html($('#jsontable tr:nth-child('+r+') td:nth-child(4)').text());
  $('#soldModal').modal('show');      
}
