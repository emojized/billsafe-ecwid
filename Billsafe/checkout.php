<?php
include "billsafe.php";

$ ParamsIn = array (
'Order_number'          => '' ,
'Order_currencyCode'    => 'EUR' ,
'Customer_id'           => '' ,
'Customer_gender'       => 'm' ,
'Customer_firstname'    => 'Paul' ,
'Customer_lastname'     => 'positive' ,
'Customer_street'       => 'fairy tale road' ,
'Customer_houseNumber'  => '15a ' ,
'Customer_postcode'     => '49084 ' ,
'Customer_city'         => 'Osnabrück' ,
'Customer_country'      => 'DE' ,
'Customer_dateOfBirth'  => '1987-12-20 ' ,
'Customer_email'        => 'paul@billsafe.de' ,
'Customer_phone'        => '' ,
'Product'               => 'invoice' ,
'Url_return'            => ' http://www.meinshop.de/shopseite.php ' ,
'Url_cancel'            => ' http://www.meinshop.de/abbruchseite.php ' ,
'Url_image'             => '' ,
'ArticleList_0_number'       => '1046 ' ,
'ArticleList_0_name'         => 'Description' ,
'ArticleList_0_description'  => 'Product Description' ,
'ArticleList_0_type'         => 'goods' , / / goods represents article
'ArticleList_0_quantity'     => '2 ' , / / Number
'ArticleList_0_netPrice'     => '10 .00 ' , / / important:. as decimal separator
'ArticleList_0_tax'          => '19 ' , / / VAT rate (VAT amount)
'ArticleList_1_number'       => '1035 ' ,
'ArticleList_1_name'         => 'Description' ,
'ArticleList_1_description'  => 'Product Description' ,
'ArticleList_1_type'         => 'goods' ,
'ArticleList_1_quantity'     => '1 ' ,
'ArticleList_1_netPrice'     => '20 .00 ' ,
'ArticleList_1_tax'          => '19 ' ,
'ArticleList_2_number'       => 'Shipping' ,
'ArticleList_2_name'         => 'Returns' ,
'ArticleList_2_description'  => '' ,
'ArticleList_2_type'         => 'shipment' , / / shipment is Dfor Returns
'ArticleList_2_quantity'     => '1 ' ,
'ArticleList_2_netPrice'     => '4 .95 ' ,
'ArticleList_2_tax'          => '19 ' ,
'Order_amount'               => '53 .49 ' , / / total amount incl.MwSt.
'Order_taxAmount'            => '8 .54 '  / / Tax amount
);

$ BillsafeApiKeys = array (
 'Merchant_id'            => '48184' ,
 'Merchant_license'       => 'b209af54da6e75c4d7bd0082c822c0c3' ,
 'Application_signature'  => 'ecd220ae0c37aa684c1ca98625dfc098' ,
 'Application_version'    => '1000-00-00 ' ,
 'SdkSignature'           => 'BillSAFE SDK' ,
 'Format'                 => 'XML'
);
$ ParamsOut = array ( "token" );
 
$ BillsafeApiCall  = new  DhBillsafeRequest ();
$ BillsafeApiCall -> _keys = $ billsafeApiKeys ;
$ BillsafeApiCall -> _requestId = "prepareOrder" ;
$ BillsafeApiCall -> _paramsIn = $ paramsIn ;
$ BillsafeApiCall -> _paramsOut = $ paramsOut ;
$ BillsafeApiCall -> call bill safe ();
$ Output = $ billsafeApiCall -> handleResponse ();
 
if ( $ output [ 'error' ]) {
  foreach ( $ output [ 'error' ] as  $ oeSet ) {
    echo  $ oeSet ;
}}
else {
 echo  "Token:" . $ output [ 'token' ];
}

?>