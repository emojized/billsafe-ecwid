<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
 <head>
 <title>BillSAFE Test Application</title>
 <link rel="stylesheet" type="text/css" href="../css/style.css">
 </head>
 <body>
 <table>
    <tr>
        <td><h1 class="header"><img src="../resource/logo_pp.jpg"></img>Test Application</h1></td>
    </tr>
 </table>
 <form method="POST" action="tutorial.php">
 <div>
 <table>
 <?php
 //$array=$_POST;
// foreach($array as $key => $value)
//{
 //foreach($getCustomer as $details)
 //{ 
/*x_test_request - TRUE
x_description - Order #6
x_login - asdf
x_amount - 0.01
x_currency_code - USD
x_version - 3.1
x_line_item - 1 cent<|>asdf123<|><|>1<|>0.01<|>N
x_email - theo@berlin.com
x_fp_sequence - -111608577
x_fp_timestamp - 1402955369
x_fp_hash - 329a1b0798b7fa9eb4e7d0fd3d8f01aa

x_cust_id - 15855677
x_relay_response - TRUE
x_relay_url - http://app.ecwid.com/authorizenet/1903102
x_show_form - PAYMENT_FORM
x_method - ECHECK 
*/

?> 
 <tr>
         <td valign="top">
                <table>
                    <tr>
                        <td colspan="2" class="heading">Order details</td>
                    </tr>
                    <tr>
                        <td>order number</td>
                        <td><input type="text" name="order_number" value="<?php echo $_POST['x_invoice_num']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>order amount *</td>
                        <td><input type="" name="order_amount" value="<?php echo $_POST['x_amount']; ?>"/></td>
                    </tr>
                     <tr>
                        <td colspan="2" class="heading">Customer details</td>
                    </tr>
                    <tr>
                        <td>customer id</td>
                        <td><input type="text" name="customer_id" value="<?php echo $_POST['x_cust_id']; ?>" /></td>
                    </tr>
	              <tr>
                        <td>customer firstname *</td>
                        <td><input type="text" name="customer_firstname" value="<?php echo $_POST['x_first_name']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>customer lastname *</td>
                        <td><input type="text" name="customer_lastname" value="<?php echo $_POST['x_last_name']; ?>" /></td>
                    </tr>
                    
                   <?php
                   //$addr = explode(".",$_POST['x_address']);  
                   ?>
                    
                    <tr>
                        <td>customer Address *</td>
                        <td><input type="text" name="customer_street" value="<?php echo $_POST['x_address']; ?>" /></td>
                    </tr>
                    <tr>
                        <td>customer city *</td>
                        <td><input type="text" name="customer_city" value="<?php echo $_POST['x_city']; ?>"/>
                    </tr>

                    <tr>
                        <td>customer state *</td>
                        <td><input type="text" name="customer_state" value="<?php echo $_POST['x_state']; ?>" /></td>
                    </tr>
			 <tr>
                        <td>customer country *</td>
                        <td><input type="text" name="customer_country" value="<?php echo $_POST['x_country']; ?>" /></td>
                    </tr>
		   <tr>
                        <td>customer zip *</td>
                        <td><input type="text" name="customer_zip" value="<?php echo $_POST['x_zip']; ?>" /></td>
                    </tr>
		    <tr>
                        <td>customer email *</td>
                        <td><input type="text" name="customer_email" value="<?php echo $_POST['x_email']; ?>" /><td>
                    </tr>
                    <tr>
                        <td>customer phone</td>
                        <td><input type="text" name="customer_phone" value="<?php echo $_POST['x_phone']; ?>" /><td>
                    </tr>
		 <tr>
                        <td>customer Fax *</td>
                        <td><input type="text" name="customer_fax" value="<?php echo $_POST['x_fax']; ?>" /></td>
                 </tr>
		<tr>
                        <td>Currency *</td>
                        <td><input type="text" name="order_currencyCode" value="<?php echo $_POST['x_currency_code']; ?>" /></td>
                 </tr>
                    
                 <?php
		 //$i=1;
		 $item=explode("<|>",$_POST['x_line_item']);

		 //foreach($item as $product)
		 //{
		 ?> 
                 <tr>
                         <td colspan="4" class="subheading">
                            <input name="checkbox[]" type="checkbox" id="checkbox[]" value="" checked="checked">&nbsp;Item 
                         </td>
                 </tr>
                   
                 <tr>
                        <td class="articlesLeft">article_name</td>
                        <td><input type="text" name="product_name" value="<?php echo $item['1'];?>" size="30" /></td>

                        <td class="articlesLeft">&nbsp;&nbsp;article_quantity</td>
                        <td><input type="text" name="product_quantity" value="<?php echo $item['3'];?>" size="5" /></td>

                        <td class="articlesRight">article_grossPrice </td>
                        <td><input type="text" name="product_grossPrice" value="<?php echo $item['4'];?>" size="5" /></td>
                 </tr>
                
                 <tr>
                        <td colspan="2" class="heading">URLs</td>
                 </tr>
                    
                    <tr>
                        <td>url return</td>
                        <td>
                            <input type="text" name="url_return" value="http://billsafe1.dev01.vijaywebsolutions.com:8081/billsafe/shop/shopReturnPage.php" readonly="readonly"/>
                        </td>
                    </tr>

                    <tr>
                        <td>url cancel</td>
                        <td>
                            <input type="text" name="url_cancel" value="http://billsafe1.dev01.vijaywebsolutions.com:8081/billsafe/shop/shopCancelPage.php" readonly="readonly" />
                        </td>
                    </tr>

                        
    </table>
    </td>
    </tr>
    </table>
    <input type="button" value="execute prepareOrder and open Payment Gateway"/>
    <input type="submit" value="execute prepareOrder and open Payment Layer"/>
    </div>
    </form>
  </body>
</html>
