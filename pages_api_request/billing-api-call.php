<?php
/*
Template Name: Billing API Call
*/
?>



<?php




if(isset($_POST['promptTopic']))
{
    /*
    if(pmpro_hasMembershipLevel('1'))
    {
        getNumberOfIdeas($_POST['generator']);
    }
    else
    {
        echo "Please start your free trial."
    }*/
    
    
    generateStory('\"'.$_POST['promptTopic'].'\"');
}





function generateStory($promptTopic)
{

    // Documentation - https://developer.paypal.com/docs/api/subscriptions/v1/#plans_create


    //Declare API variables
    $method = "POST";
    $url = 'https://api-m.sandbox.paypal.com/v1/billing/plans';

    $promptData = '{
        "product_id": "JensenAI-ideas",
        "name": JensenAI ideas",
        "description": "Generate YouTube ideas with JensenAI",
        "status": "ACTIVE",
        "billing_cycles": [
          {
            "frequency": {
              "interval_unit": "MONTH",
              "interval_count": 1
            },
            "tenure_type": "REGULAR",
            "sequence": 3,
            "total_cycles": 12,
            "pricing_scheme": {
              "fixed_price": {
                "value": "10",
                "currency_code": "USD"
              }
            }
          }
        ],
        "payment_preferences": {
          "auto_bill_outstanding": true,
          "setup_fee": {
            "value": "0",
            "currency_code": "USD"
          },
          "setup_fee_failure_action": "CONTINUE",
          "payment_failure_threshold": 3
        },
        "taxes": {
          "percentage": "0",
          "inclusive": false
        }
      }';


    //print_r($promptData);



    //Call API
    $response = callAPI($method, $url, $promptData);

    
    //print_r($response);

    $responseArray = json_decode($response,true);
    $story = $responseArray["choices"][0]["text"];


    echo $story;

    insertIntoDatabase($promptTopic, $story);



    //echo $story;


    
    
    
        

}











function callAPI($method, $url, $promptData)
{
    $curl = curl_init();

    
    // OPTIONS:
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/json",
        "Authorization: Bearer ".$ACCESS_TOKEN,
    ));

    // POST Method
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $promptData);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

    //Maybe remove this on live website?
    //curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

    // EXECUTE:
    $result = curl_exec($curl);

    if (curl_errno($curl)) {
        echo curl_error($curl);
        //$error_msg = curl_error($curl);
    }
    //if(!$result){echo "Connection Failure";}
    curl_close($curl);
    return $result;

}















?>