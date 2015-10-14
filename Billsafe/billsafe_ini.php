<?php

/**
 * This is a sample configuration file for the BillSAFE SDK
 *
 * Note: You may as well provide your API credentials at runtime
 * using the setCredentials() function! In this case you can leave
 * the ini file untouched.
 */

//isLiveMode MUST be set to false for testing and debugging!
$ini['isLiveMode'] = false;

//Enter your API credentials provided by BillSAFE:
$ini['merchantId']             = xxx;
$ini['merchantLicenseSandbox'] = 'xxx';// 
$ini['merchantLicenseLive']    = 'xxx';// 
$ini['applicationSignature']   = 'xxx';// 
$ini['applicationVersion']     = '1000-00-00';// 



//Set this to true if your data is utf-8 encoded.
//Set this to false if your data is latin-1 encoded.
//The encoding of the response object will be affected accordingly.
$ini['isUtf8Mode'] = false;

//API version
$ini['apiVersion'] = 208;

//Payment Gateway version
$ini['gatewayVersion'] = 200;
