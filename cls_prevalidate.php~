<?php
class Prevalidate
{
   // this is order details variable
   private $order_amount;
   private $order_currencyCode;
   private $order_containsDigitalGoods;

   // this is customer details variable
   private $customer_id;  
   private $customer_company;   
   private $customer_gender;
   private $customer_firstname;
   private $customer_lastname;
   private $customer_street;                
   private $customer_houseNumber;        
   private $customer_postcode;            
   private $customer_city;               
   private $customer_country;              
   private $customer_dateOfBirth;         
   private $customer_email;               
   private $customer_phone;    
   
   // this is customer delivery details variable   
   private $deliveryAddress_company; 
   private $deliveryAddress_gender; 
   private $deliveryAddress_firstname; 
   private $deliveryAddress_lastname; 
   private $deliveryAddress_street;
   private $deliveryAddress_houseNumber; 
   private $deliveryAddress_postcode;        
   private $deliveryAddress_city;
   private $deliveryAddress_country;


   //to set the values
   public function setValue($arr)
   {
       //this is order details variable
       $this->order_amount                   = $arr["order_amount"];
       $this->order_currencyCode             = $arr["order_currencyCode"];
       $this->order_containsDigitalGoods     = $arr["order_containsDigitalGoods"];

       $this->customer_company               = $arr["customer_company"];
       $this->customer_gender                = $arr["customer_gender"];
       $this->customer_firstname             = $arr["customer_firstname"];
       $this->customer_lastname              = $arr["customer_lastname"]; 
       $this->customer_street                = $arr["customer_street"];
       $this->customer_houseNumber           = $arr["customer_houseNumber"];
       $this->customer_postcode              = $arr["customer_postcode"];
       $this->customer_city                  = $arr["customer_city"];
       $this->customer_country               = $arr["customer_country"];
       $this->customer_dateOfBirth           = $arr["customer_dateOfBirth"];
       $this->customer_email                 = $arr["customer_email"]; 
       $this->customer_phone                 = $arr["customer_phone"]; 

       $this->deliveryAddress_company        = $arr["deliveryAddress_company"]; 
       $this->deliveryAddress_gender         = $arr["deliveryAddress_gender"]; 
       $this->deliveryAddress_firstname      = $arr["deliveryAddress_firstname"]; 
       $this->deliveryAddress_lastname       = $arr["deliveryAddress_lastname"]; 
       $this->deliveryAddress_street         = $arr["deliveryAddress_street"];
       $this->deliveryAddress_houseNumber    = $arr["deliveryAddress_houseNumber"]; 
       $this->deliveryAddress_postcode       = $arr["deliveryAddress_postcode"]; 
       $this->deliveryAddress_city           = $arr["deliveryAddress_city"]; 
       $this->deliveryAddress_country        = $arr["deliveryAddress_country"];
   }
  
  
   //insert the values to table
   public function insertData()
   {

         //this function is used to store the details of customer with order details
         $insert = "INSERT INTO `customer`
                                        (

                                              `order_amount`,
                                              `order_currencyCode`,
                                              `order_containsDigitalGoods`,
                                              `customer_company`,
                                              `customer_gender`,
                                              `customer_firstname`,
                                              `customer_lastname`,
                                              `customer_street`,
                                              `customer_houseNumber`,
                                              `customer_postcode`,
                                              `customer_city`,
                                              `customer_country`,
                                              `customer_dateOfBirth`,
                                              `customer_email`,
                                              `customer_phone`,
                                              `deliveryAddress_company`,
                                              `deliveryAddress_gender`,
                                              `deliveryAddress_firstname`,
                                              `deliveryAddress_lastname`,
                                              `deliveryAddress_street`,
                                              `deliveryAddress_houseNumber`,
                                              `deliveryAddress_postcode`,
                                              `deliveryAddress_city`,
                                              `deliveryAddress_country`
                                        )
                                       VALUES
                                       (
                                               '".$this->order_amount."',
                                               '".$this->order_currencyCode."',
                                               '".$this->order_containsDigitalGoods."', 
                                               '".$this->customer_company."',             
					       '".$this->customer_gender."',              
					       '".$this->customer_firstname."',           
					       '".$this->customer_lastname."',             
					       '".$this->customer_street."',              
					       '".$this->customer_houseNumber."',          
					       '".$this->customer_postcode."',             
					       '".$this->customer_city."',                
					       '".$this->customer_country."',              
					       '".$this->customer_dateOfBirth."',        
					       '".$this->customer_email."',                
					       '".$this->customer_phone."',                
					       '".$this->deliveryAddress_company."',       
					       '".$this->deliveryAddress_gender."',          
					       '".$this->deliveryAddress_firstname."',      
					       '".$this->deliveryAddress_lastname."',      
					       '".$this->deliveryAddress_street."',        
					       '".$this->deliveryAddress_houseNumber."',     
					       '".$this->deliveryAddress_postcode."',        
					       '".$this->deliveryAddress_city."',           
					       '".$this->deliveryAddress_country."'       
                                      );
                    ";
         mysql_query($insert);
         return mysql_insert_id();
   }


   public function setValueOrder($arr1) 
   {
       $this->order_amount                   = $arr1["order_amount"];
       $this->order_currencyCode             = $arr1["order_currencyCode"];
       $this->order_containsDigitalGoods     = $arr1["order_containsDigitalGoods"];
       $this->customer_id    		     = $arr1["customer_id"];
   }

   // this function is used to insert the data in order table
   public function insertOrderData()
   {
		

          $inserorderdata = "INSERT INTO `order`
                                      
                                      (
                                              `order_amount`,
                                              `order_currencyCode`,
                                              `order_containsDigitalGoods`,
                                              `customer_id`

                                      )
                                      VALUES
                                      (
                                               '".$this->order_amount."',
                                               '".$this->order_currencyCode."',
                                               '".$this->order_containsDigitalGoods."', 
                                               '".$this->customer_id."'

                                      );
                                      
                       ";
          mysql_query($inserorderdata);
          return mysql_insert_id();
    }

    public function getCustomerDetails($id)
    {
	  $select_output = "SELECT * FROM `customer` Where customer_id = $id";
	  $mysql_Query = mysql_query($select_output);
	  $collection  = array ();
	  while ($row = mysql_fetch_assoc($mysql_Query))
	  {
		 array_push($collection,$row);
	  }
	  return $collection;
     }
 
 }
?>
