 <?php
 include '../includes/config.php';
 include 'cls_prevalidate.php';
 $objPreval = new Prevalidate();
 $arr       = array();
 $arr1      = array();
 if(isset($_POST["btnsave"]))
 {

       $arr["order_amount"]                   = getParam("order_amount");
       $arr["order_currencyCode"]             = getParam("order_currencyCode");
       $arr["order_containsDigitalGoods"]     = getParam("order_containsDigitalGoods"); 
       
       $arr["customer_company"]               = getParam("customer_company");
       $arr["customer_gender"]                = getParam("customer_gender");
       $arr["customer_firstname"]             = getParam("customer_firstname");  
       $arr["customer_lastname"]              = getParam("customer_lastname");
       $arr["customer_street"]                = getParam("customer_street");
       $arr["customer_houseNumber"]           = getParam("customer_houseNumber");
       $arr["customer_postcode"]              = getParam("customer_postcode");
       $arr["customer_city"]                  = getParam("customer_city");
       $arr["customer_country"]               = getParam("customer_country");
       $arr["customer_dateOfBirth"]           = getParam("customer_dateOfBirth");
       $arr["customer_email"]                 = getParam("customer_email"); 
       $arr["customer_phone"]                 = getParam("customer_phone"); 

       $arr["deliveryAddress_company"]        = getParam("deliveryAddress_company"); 
       $arr["deliveryAddress_gender"]         = getParam("deliveryAddress_gender"); 
       $arr["deliveryAddress_firstname"]      = getParam("deliveryAddress_firstname"); 
       $arr["deliveryAddress_lastname"]       = getParam("deliveryAddress_lastname"); 
       $arr["deliveryAddress_street"]         = getParam("deliveryAddress_street");
       $arr["deliveryAddress_houseNumber"]    = getParam("deliveryAddress_houseNumber"); 
       $arr["deliveryAddress_postcode"]       = getParam("deliveryAddress_postcode"); 
       $arr["deliveryAddress_city"]           = getParam("deliveryAddress_city"); 
       $arr["deliveryAddress_country"]        = getParam("deliveryAddress_country");

           
       $objPreval->setValue($arr);
       $id_value = $objPreval->insertData();
      
       if(!empty($id_value))
       {
	       $customer_id                   = mysql_insert_id();
               $arr1["customer_id"]           = $customer_id; 
               $arr1["order_amount"]          = getParam("order_amount");
               $arr1["order_currencyCode"]    = getParam("order_currencyCode");
               $arr1["order_containsDigitalGoods"] = getParam("order_containsDigitalGoods"); 
               $objPreval->setValueOrder($arr1);
               $id_value                      = $objPreval->insertOrderData();
               $_SESSION['CUSTOMER_ID']       = $customer_id;
               header("Location:prevalidateOrder.php");
       } 
       else
       {
		echo "Error";
       }
        	 
}
?>
<html>
 <head>
    <title>BillSAFE Test Application</title>
    <link rel="stylesheet" type="text/css" href="../css/style.css">
 </head>
 <body>
 <table>
      <tbody>
                <tr>
                    <td></td>
                    <td><h1 class="header"><img src="../resource/logo_pp.jpg"></img>Test Application</h1></td>
                </tr>
      </tbody>
 </table>

 <br>
 <form method="POST" action="#">
 <table>
        <tbody>
        <tr>
            <td colspan="2" class="heading">Order details</td>
        </tr>

        <tr>
            <td>order amount</td>
            <td><input type="text" name="order_amount" value=""></td>
        </tr>
        <tr>
            <td>order currency Code</td>
            <td>
                <select name="order_currencyCode">
                    <option value="EUR">EUR</option>
                    <option selected="selected" value="USD">USD</option>
                </select>
            </td>
        </tr>

        <tr>
            <td>order contains Digital Goods</td>
            <td><input type="checkbox" name="order_containsDigitalGoods" value="1"></td>
        </tr>
        <tr><td>&nbsp;</td></tr>

        <tr>
            <td colspan="2" class="heading">Invoice address</td>
        </tr>
        <!--<tr>
            <td>customer id</td>
            <td><input name="customer_id" value="" type="text"></td>
        </tr>-->
        <tr>
            <td>customer company</td>
            <td><input type="text" name="customer_company" value=""></td>
        </tr>
        <tr>
            <td>customer gender</td>
            <td>
                <input name="customer_gender" value="m" checked="checked" type="radio">m
                <input name="customer_gender" value="f" type="radio">f
            </td>
        </tr>
        <tr>
            <td>customer firstname</td>
            <td><input type="text" name="customer_firstname" value=""></td>
        </tr>
        <tr>
            <td>customer lastname</td>
            <td><input type="text" name="customer_lastname" value=""></td>
        </tr>
        <tr>
            <td>customer street</td>
            <td><input type="text" name="customer_street" value=""></td>
        </tr>
        <tr>
            <td>customer houseNumber.</td>
            <td><input type="text" name="customer_houseNumber" value=""></td>
        </tr>
        <tr>
            <td>customer postcode</td>
            <td><input type="text" name="customer_postcode" value=""></td>
        </tr>
        <tr>
            <td>customer city</td>
            <td><input type="text" name="customer_city" value="" ></td>
        </tr>
        <tr>
            <td>customer country</td>
            <td>
                <select name="customer_country">
                    <option selected="selected" value="US">DE</option>
                    <option value="US">US</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>customer date Of Birth</td>
            <td><input type="text" name="customer_dateOfBirth" value=""></td>
            <td></td>
        </tr>

        <tr>
            <td>customer email</td>
            <td><input type="text" name="customer_email" value=""></td><td>
        </td></tr>
        <tr>
            <td>customer phone</td>
            <td><input type="text" name="customer_phone" value=""></td><td>
        </td></tr>
        <tr>
            <td colspan="2">&nbsp;</td>
        </tr>

        <tr>
            <td colspan="2" class="heading">Delivery address</td>
        </tr>
        <tr>
            <td>delivery Address company</td>
            <td><input type="text" name="deliveryAddress_company" value=""></td>
        </tr>
        <tr>
            <td>delivery Address gender</td>
            <td>
                <input name="deliveryAddress_gender" value="m" checked="checked" type="radio">m
                <input name="deliveryAddress_gender" value="f" type="radio">f
            </td>
        </tr>
        <tr>
            <td>delivery Address firstname</td>
            <td><input type="text" name="deliveryAddress_firstname" value=""></td>
        </tr>
        <tr>
            <td>delivery Address lastname</td>
            <td><input type="text" name="deliveryAddress_lastname" value=""></td>
        </tr>
        <tr>
            <td>delivery Address street</td>
            <td><input type="text" name="deliveryAddress_street" value="" ></td>
        </tr>
        <tr>
            <td>delivery Address houseNumber</td>
            <td><input type="text" name="deliveryAddress_houseNumber" value=""></td>
        </tr>
        <tr>
            <td>delivery Address postcode</td>
            <td><input type="text" name="deliveryAddress_postcode" value="" ></td>
        </tr>
        <tr>
            <td>delivery Address city</td>
            <td><input type="text" name="deliveryAddress_city" value="" ></td>
        </tr>
        <tr>
           <td>delivery Address country</td>
              <td>
                <select name="deliveryAddress_country">
                    <option selected="selected" value="DE">DE</option>
                    <option value="US">US</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">&nbsp;</td>
       </tr>

       <tr>
            <td colspan="2"><input type="submit" id="btnsave" name="btnsave" value="continue"></td>
       </tr>
      </tbody>
     </table>
   </form>

 </body>
</html>
