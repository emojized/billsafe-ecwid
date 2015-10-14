<html>
<head>

<title></title>
<body>
<form method="POST" action="ecwid.php">
 <div style="font-family: Arial;font-size:14px;display:inline;">
 
 Sehr geehrter Kunde,<br />
 da der Rechnungskauf in unserem Hause nur &uuml;ber eine Bonit&auml;tspr&uuml;fung m&ouml;glich ist, geben Sie bitte noch folgende Daten an:
 <br>
 Anrede: <select name="x_gender"><Option value="w">Frau</option><Option value="m">Herr</option></select><br>
 Geburtsdatum Tag:<input type="text" name="x_birth_day" size="2"> Monat:<input type="text" name="x_birth_month" size="2"> Jahr:<input type="text" name="x_birth_year" size="4"><br>	
 

                <table style="display:none;">
                    <tr>
                        <td colspan="2" class="heading">Order details</td>
                    </tr>
                    <tr>
                        <td>order number</td>
                        <td><input type="hidden" name="x_invoice_num" value="<?php echo $_POST["x_invoice_num"]; ?>" /></td>
                    </tr>
                    <tr>
                        <td>order amount *</td>
                        <td><input type="hidden" name="x_amount" value="<?php echo $_POST["x_amount"]; ?>"/></td>
                    </tr>
                     <tr>
                        <td colspan="2" class="heading">Customer details</td>
                    </tr>
                    <tr>
                        <td>customer id</td>
                        <td><input type="hidden" name="x_cust_id" value="15855677" /></td>
                    </tr>
	              <tr>
                        <td>customer firstname *</td>
                        <td><input type="hidden" name="x_first_name" value="<?php echo utf8_decode($_POST["x_first_name"]); ?>" /></td>
                    </tr>
                    <tr>
                        <td>customer lastname *</td>
                        <td><input type="hidden" name="x_last_name" value="<?php echo utf8_decode($_POST["x_last_name"]); ?>" /></td>
                    </tr>

                    <tr>
                        <td>customer Address *</td>
                        <td><input type="hidden" name="x_address" value="<?php echo utf8_decode($_POST["x_address"]); ?>" /></td>
                    </tr>
                    <tr>
                        <td>customer city *</td>
                        <td><input type="hidden" name="x_city" value="<?php echo utf8_decode($_POST["x_city"]); ?>"/>
                    </tr>

                    <tr>
                        <td>customer state *</td>
                        <td><input type="hidden" name="x_state" value="<?php echo utf8_decode($_POST["x_state"]); ?>" /></td>
                    </tr>
			 <tr>
                        <td>customer country *</td>
                        <td><input type="hidden" name="x_country" value="Germany" /></td>
                    </tr>
		   <tr>
                        <td>customer zip *</td>
                        <td><input type="hidden" name="x_zip" value="<?php echo utf8_decode($_POST["x_zip"]); ?>" /></td>
                    </tr>
		 <tr>
                        <td>customer email *</td>
                        <td><input type="hidden" name="x_email" value="<?php echo $_POST["x_email"]; ?>" />
                        <?php
                        $x_login =  'asdf';
                        $hash_value =  'asdf';
                        $x_amount=$_POST['x_amount'];
                        //$x_trans_id=$_POST['x_invoice_num'];
                        $x_trans_id=$_POST["x_fp_timestamp"];
                        $stringer = $hash_value.$x_login.$x_trans_id.$x_amount;
						//$stringer ="asdfasdf".$x_trans_id.$x_amount;
						//$stringer=$ECWID_HASH.$merchant.$x_trans_id.$x_amount; 
						//$x_MD5_Hash =hash_hmac ("md5",$_POST['x_login']."^".$_POST['x_fp_sequence']."^".$_POST['x_fp_timestamp']."^".$_POST['x_amount']."^EUR","1");
						$x_MD5_Hash = md5($stringer); 
						?>
                        
                        <input type="hidden" name="x_relay_url" value="<?php echo $_POST["x_relay_url"]."?x_response_code=1&x_response_reason_code=1&x_trans_id=".$x_trans_id."&x_invoice_num=".$_POST['x_invoice_num']."&x_amount=".$_POST['x_amount']."&x_MD5_Hash=".$x_MD5_Hash; ?>" />
                        <input type="hidden" name="x_relay_url_c" value="<?php echo $_POST["x_relay_url"]."?x_response_code=2&x_response_reason_code=2&x_trans_id=".$x_trans_id."&x_invoice_num=".$_POST['x_invoice_num']."&x_amount=".$_POST['x_amount']."&x_MD5_Hash=".$x_MD5_Hash; ?>" />
                        <td>
                 </tr>
                 <tr>
                        <td>customer phone</td>
                        <td><input type="hidden" name="x_phone" value="<?php echo $_POST["x_phone"]; ?>" /><td>
                 </tr>
		 <tr>
                        <td>customer Fax *</td>
                        <td><input type="hidden" name="x_fax" value="" /></td>
                 </tr>
		 <tr>
                        <td>Currency *</td>
                        <td><input type="hidden" name="x_currency_code" value="EUR" /></td>
                 </tr>
                   
                 <tr>
                        <td class="articlesLeft">article_name</td>
                        <td><input type="hidden" name="x_line_item" value="ecwidshop<|>ecwidshopspass<|><|>1<|><?php echo $_POST["x_amount"]; ?><|>N" size="30" /></td>
                 </tr>
                         
    </table>
    <!--<input type="button" value="execute prepareOrder and open Payment Gateway"/>-->
    <input type="submit" value="execute prepareOrder and open Payment Layer"/>
    </div>
   
    </form>
  </body>
</html>
