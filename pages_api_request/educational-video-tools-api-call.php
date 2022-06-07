<?php
/*
Template Name: Educational Video Tools API Call
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


    //$promptTopic = "'Are you kidding me'";

    //Declare API variables
    $method = "POST";
    $url = 'https://api.openai.com/v1/engines/davinci-instruct-beta/completions';

    $promptData = '{
        "prompt": "Tell me what I should talk about in my video '.$promptTopic.'.",
        "temperature": 0.75,
        "max_tokens": 50,
        "top_p": 1,
        "frequency_penalty": 0,
        "presence_penalty": 0
    }';


    //print_r($promptData);



    //Call API
    $response = callAPI($method, $url, $promptData);

    
    //print_r($response);

    $responseArray = json_decode($response,true);
    $story = $responseArray["choices"][0]["text"];


    echo $story;

    insertIntoDatabase($promptTopic, $story);


    /*----------------------------------------CONTENT FILTER-------------------------------------*/

/*
    //Declare API variables
    $method = "POST";
    $urlFilter = 'https://api.openai.com/v1/engines/content-filter-alpha/completions';

    $promptDataFilter = '{
        "prompt": "<|endoftext|>['.$story.']\n--\nLabel:", 
        "temperature": 0, 
        "max_tokens": 1, 
        "top_p":0, 
        "logprobs": 10}';

    $filteredData = callAPI($method, $urlFilter, $promptDataFilter);


    $decodedData = json_decode($filteredData, true);
    if($decodedData["choices"][0]["text"] == 2)
    {
        echo "AI tried to display unsafe output";
    }
    else
    {
        echo $story;
    }
    print_r($promptDataFilter);
    echo $decodedData["choices"][0]["text"];


*/


    //echo $story;


    
    
    
        

}











function callAPI($method, $url, $promptData)
{
    $curl = curl_init();

    
    // OPTIONS:
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/json",
        "Authorization: Bearer ".OPENAI_API_KEY,
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



function insertIntoDatabase($promptTopic, $story)
{

    global $wpdb;
    $table = $wpdb->overldai_wp167 . 'documentaries';
    $tableData = array(
        'Idea' => $promptTopic,
        'Story' => $story
    );
    $format = array(
        '%s'
    );

    $wpdb->insert( $table, $tableData, $format );

    
}









?>





