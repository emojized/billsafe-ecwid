<?php
include('Billsafe/Sdk.php');
$token    =  $_REQUEST['token'];
$stopp = $_SESSION;


echo "<hr>";

print_r($stopp);
/*$params   = array('token' => $token);
$response = $bs->callMethod('prepareOrder',$params);
print_r($response);

/*$status=$response->status;
if (isset($response->status) == 'ACCEPTED')
{
       //... store order etc.
       echo "BillSAFE has accepted the transaction. Thank you for your order!";
}
else 
{
       //echo "Currently BillSAFE cannot be chosen as a payment method. Please pick another one!";
}*/

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <head>
   <title>BillSAFE Test Application</title>
     <link rel="stylesheet" type="text/css" href="../css/style.css">
 </head>
 <body>
 <form action="<?php echo $_POST["x_relay_url"]; ?>" method="POST" >
 <table>
    <tr>
       <td><h1 class="header"><img src="../resource/logo_pp.jpg"></img>Test Application</h1></td>
    </tr>
 </table>
 <table>
 <tr>
     <td valign="top">
      <tr>
           <td colspan="2" class="heading">Token Details</td>
      </tr>
      <tr>
          <td>token : </td>
          <td><?php echo $token;?></td>
      </tr>
      
 </table>
 <input type="submit" />
 </form>              
 </body>
</html>
