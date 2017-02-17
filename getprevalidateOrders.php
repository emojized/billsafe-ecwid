<?php
  include '../includes/config.php';
  include 'cls_prevalidate.php';
  $objPreval      = new Prevalidate();
  echo $customer_id    = $_SESSION['CUSTOMER_ID'];
  $getPrevalidate = $objPreval->getCustomerDetails($customer_id);
 ?>
<html>
    <head>
        <title>BillSAFE Test Application - API function: prepareOrder</title>
        <link rel="stylesheet" type="text/css" href="../css/style.css">
    </head>
    <body>
        <table>
            <tr>
                <td><h1 class="header"><img src="../resource/logo_pp.jpg"></img>Test Application</h1></td>
            </tr>
        </table>
   <div>
    <table>
        <tr>
            <td valign="top">
                <table>
                    <tr>
                        <td colspan="2" class="heading">Order details</td>
                    </tr>
                    <tr>
                        <td>order number</td>
                        <td><input type="text" name="order_number" value="<?php echo $getPrevalidate['order_number']?>" /></td>
                    </tr>
                    <tr>
                        <td>order amount *</td>
                        <td><input type="text" name="order_amount" value="<?php echo $getPrevalidate['order_amount']?>"/></td>
                    </tr>
                    <tr>
                        <td>order taxAmount *</td>
                        <td><input type="text" name="order_taxAmount" value=""/></td>
                    </tr>
                    <tr>
                        <td>Order Currency Code *</td>
                        <td>
                            <select name="order_currencyCode">
                                <option value="EUR">EUR</option>
                                <option value="USD">USD</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>

                    <tr>
                        <td colspan="2" class="heading">Customer details</td>
                    </tr>
                    <tr>
                        <td>customer id</td>
                        <td><input type="text" name="customer_id" value="<?php echo $getPrevalidate['customer_id'];?>" /></td>
                    </tr>

                    <tr>
                        <td>customer company</td>
                        <td><input type="text" name="customer_company" value="<?php echo $getPrevalidate['customer_company'];?>" /></td>
                    </tr>
                    <tr>
                        <td>customer gender</td>
                        <td>
                            <?php
                               $check3 ="";
                               $check4 ="";
                               if($getPrevalidate['customer_gender']=='m')
                               {
                                   $check3 = "checked='checked'";   
                               } 
                               if($getPrevalidate['customer_gender']=='f')
                               { 
                                  $check4 = "checked='checked'";  
                               }   
                               ?> 
                            <input type="radio" name="customer_gender" value="m" <?php echo $check3;?> />m
                            <input type="radio" name="customer_gender" value="f" <?php echo $check4;?> />f
                        </td>
                    </tr>

                    <tr>
                        <td>customer firstname *</td>
                        <td><input type="text" name="customer_firstname" value="<?php echo $getPrevalidate['customer_firstname'];?>" /></td>
                    </tr>
                    <tr>
                        <td>customer lastname *</td>
                        <td><input type="text" name="customer_lastname" value="<?php echo $getPrevalidate['customer_lastname'];?>" /></td>
                    </tr>

                    <tr>
                        <td>customer street *</td>
                        <td><input type="text" name="customer_street" value="<?php echo $getPrevalidate['customer_street'];?>" /></td>
                    </tr>
                    <tr>
                        <td>customer houseNumber *</td>
                        <td><input type="text" name="customer_houseNumber" value="<?php echo $getPrevalidate['customer_houseNumber'];?>"/>
                    </tr>

                    <tr>
                        <td>customer postcode *</td>
                        <td><input type="text" name="customer_postcode" value="<?php echo $getPrevalidate['customer_postcode'];?>" /></td>
                    </tr>
                    <tr>
                        <td>customer city *</td>
                        <td><input type="text" name="customer_city" value="<?php echo $getPrevalidate['customer_city'];?>" /></td>
                    </tr>
                    <tr>
                        <td>customer country *</td>
                        <td>
                            <select name="customer_country">
                                <option value="DE">DE</option>
                                <option value="US">US</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>customer dateOfBirth</td>
                        <td><input type="text" name="customer_dateOfBirth" value="<?php echo $getPrevalidate['customer_dateOfBirth'];?>" /><td>
                    </tr>
                    <tr>
                        <td>customer email *</td>
                        <td><input type="text" name="customer_email" value="<?php echo $getPrevalidate['customer_email'];?>" /><td>
                    </tr>
                    <tr>
                        <td>customer phone</td>
                        <td><input type="text" name="customer_phone" value="<?php echo $getPrevalidate['customer_phone'];?>" /><td>
                    </tr>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>

                    <tr>
                        <td colspan="2" class="heading">Delivery address</td>
                    </tr>
                    <tr>
                        <td>deliveryAddress company</td>
                        <td><input type="text" name="deliveryAddress_company" value="<?php echo $getPrevalidate['deliveryAddress_company'];?>"/></td>
                    </tr>
                    <tr>
                        <td>delivery Addressgender</td>
                        <td>
                            <?php
                               $check1 ="";
                               $check2 ="";
                               if($getPrevalidate['deliveryAddress_gender']=='m')
                               {
                                   $check1 = "checked='checked'";   
                               } 
                               if($getPrevalidate['deliveryAddress_gender']=='f')
                               { 
                                  $check2 = "checked='checked'";  
                               }   
                               ?> 
                            <input type="radio" name="deliveryAddress_gender" value="m" <?php echo $check1;?> />m
                            <input type="radio" name="deliveryAddress_gender" value="f" <?php echo $check2;?> />f
                        </td>
                    </tr>
                    <tr>
                        <td>delivery Address firstname</td>
                        <td><input type="text" name="deliveryAddress_firstname" value="<?php echo $getPrevalidate['deliveryAddress_firstname'];?>" /></td>
                    </tr>
                    <tr>
                        <td>delivery Address lastname</td>
                        <td><input type="text" name="deliveryAddress_lastname" value="<?php echo $getPrevalidate['deliveryAddress_lastname'];?>" /></td>
                    </tr>
                    <tr>
                        <td>delivery Address street</td>
                        <td><input type="text" name="deliveryAddress_street" value="<?php echo $getPrevalidate['deliveryAddress_street'];?>" /></td>
                    </tr>
                    <tr>
                        <td>delivery Address houseNumber</td>
                        <td><input type="text" name="deliveryAddress_houseNumber" value="<?php echo $getPrevalidate['deliveryAddress_houseNumber'];?>" /></td>
                    </tr>
                    <tr>
                        <td>delivery Address postcode</td>
                        <td><input type="text" name="deliveryAddress_postcode" value="<?php echo $getPrevalidate['deliveryAddress_postcode'];?>" /></td>
                    </tr>
                    <tr>
                        <td>deliveryAddress city</td>
                        <td><input type="text" name="deliveryAddress_city" value="<?php echo $getPrevalidate['deliveryAddress_city'];?>" /></td>
                    </tr>
                    <tr>
                        <td>deliveryAddress country</td>
                        <td>
                            <select name="deliveryAddress_country">
                                <option value="DE">DE</option>
                                <option value="US">US</option>
                            </select>
                        </td>
                    </tr>
                    <!--  <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="heading">Product type</td>
                    </tr>

                    <tr>
                    <td>invoice</td>
                    <td>
                        <select name="product">
                            <option value="invoice">Rechnungskauf</option>
                        </select>
                    </td>
                    <tr>
                        <td colspan="2">&nbsp;</td>
                    </tr>
                    <tr>
                        <td colspan="2" class="heading">URLs</td>
                    </tr>
                     <tr>
                        <td>url_return</td>
                        <td>
                            <input type="text" name="url_return" value="http://digital-downloads.head-over-heels.net/BS-SDK/Shop/shopReturnPage.php?action=return" />
                        </td>
                    </tr>
                    <tr>
                        <td>url_cancel</td>
                        <td>
                            <input type="text" name="url_cancel" value="http://digital-downloads.head-over-heels.net/BS-SDK/Shop/shopReturnPage.php?action=cancel" />
                        </td>
                    </tr>
                    <tr>
                        <td>url_image</td>
                        <td>
                            <input name="url_image" type="text" value="" />
                        </td>
                    </tr>-->
               </table>
            </td>
            <td valign="top">
                <table class="right">
                    <tr>
                        <td colspan="4" class="heading">Product List</td>
                   </tr>
                   <tr>
                        <td colspan="4" class="subheading"><input type="checkbox" name=""/>Product</td>
                   </tr>
                   
                   <tr>
                        <td class="articlesLeft">number</td>
                        <td><input type="text" name="product_number" value="" size="30" /></td>
                        <td class="articlesLeft">&nbsp;quantity</td>
                        <td><input type="text" name="product_name" value="" size="5" /></td>
                   </tr>
                   <tr>
                        <td class="articlesLeft">name*</td>
                        <td><input type="text" name="product_name" value="" size="30" /></td>
                        <td class="articlesRight">grossPrice </td>
                        <td><input type="text" name="product_grossPrice" value="" size="5" /></td>
                   </tr>
                    
                   <tr>
                        <td class="articlesLeft">description</td>
                        <td><input type="text" name="product_description" value="" size="30" /></td>
                        <td class="articlesRight">tax</td>
                        <td><input type="text" name="product_tax" value="" size="5" />%</td>
                   </tr>

                   <tr>
                        <td class="articlesLeft">Product Type</td>
                        <td colspan="3">
                            <select name="product_type">
                                <option value="goods">Goods</option>
                                <option value="shipment">Shipment</option>
                                <option value="handling">Handling</option>
                                <option value="voucher">Voucher</option>
                            </select>
                        </td>
                   </tr>

                </table>
            </td>
    </tr>
    </table>
    <input type="hidden" name="paymentMethod" id="paymentMethod" value="billsafe"/>
    <input type="button" value="execute prepareOrder and open Payment Gateway" />
    <input type="submit" value="execute prepareOrder and open Payment Layer" />
    </div>
    </form>
    </body>
    </html>
