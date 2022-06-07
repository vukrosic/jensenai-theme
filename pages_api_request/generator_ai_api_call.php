<?php
/*
Template Name: Generator AI API Call
*/
?>



<?php




if(isset($_POST['generator']))
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
    
    
    getNumberOfIdeas($_POST['generator']);
}



function getNumberOfIdeas($generator)
{
    global $wpdb;
    $table = $wpdb->overldai_wp167 . $generator;
    $numOfIdeas = $wpdb->get_var("SELECT COUNT(*) FROM `$generator`");
    //echo "numOfIdeas = ".$numOfIdeas."\n";





    if($numOfIdeas < 100)
    {
        //updateIdeas($generator);
    }
}
    










function updateIdeas($generator)
{



    //Declare API variables
    $method = "POST";
    $url = 'https://api.openai.com/v1/engines/davinci/completions';


    //Get Prompt
    switch ($generator)
    {
    case "MrBeast":
        $promptData = '{
            "prompt": '.json_encode(MRBEAST_PROMPT).',
            "temperature": 0.75,
            "max_tokens": 300,
            "top_p": 1,
            "frequency_penalty": 0,
            "presence_penalty": 0,
            "stop": ["\n73"]
        }';
        $appendNumber = "73.";
        break;

    case "Michael_Reeves":
        $promptData = '{
            "prompt": '.json_encode(MICHAEL_REEVES_PROMPT).',
            "temperature": 0.7,
            "max_tokens": 340,
            "top_p": 1,
            "frequency_penalty": 0,
            "presence_penalty": 0,
            "stop": ["\n50"]
        }';
        $appendNumber = "50.";
        break;

    case "Kurzgesagt":
        $promptData = '{
            "prompt": '.json_encode(KURZGESAGT_PROMPT).',
            "temperature": 0.75,
            "max_tokens": 300,
            "top_p": 1,
            "frequency_penalty": 0,
            "presence_penalty": 0,
            "stop": ["\n71"]
        }';
        $appendNumber = "71.";
        break;

    case "Real_Engineering":
        $promptData = '{
            "prompt": '.json_encode(REAL_ENGINEERING_PROMPT).',
            "temperature": 0.8,
            "max_tokens": 300,
            "top_p": 1,
            "frequency_penalty": 0,
            "presence_penalty": 0,
            "stop": ["\n75"]
        }';
        $appendNumber = "75.";
        break;

    case "Wendover_Productions":
        $promptData = '{
            "prompt": '.json_encode(WENDOVER_PRODUCTIONS_PROMPT).',
            "temperature": 0.8,
            "max_tokens": 300,
            "top_p": 1,
            "frequency_penalty": 0,
            "presence_penalty": 0,
            "stop": ["\n75"]
        }';
        $appendNumber = "75.";
        break;

    case "Vox":
        $promptData = '{
            "prompt": '.json_encode(VOX_PROMPT).',
            "temperature": 0.78,
            "max_tokens": 300,
            "top_p": 1,
            "frequency_penalty": 0,
            "presence_penalty": 0,
            "stop": ["\n73"]
        }';
        $appendNumber = "73.";
        break;

    case "Practical_Psychology":
        $promptData = '{
            "prompt": '.json_encode(PRACTICAL_PSYCHOLOGY_PROMPT).',
            "temperature": 0.75,
            "max_tokens": 340,
            "top_p": 1,
            "frequency_penalty": 0,
            "presence_penalty": 0,
            "stop": ["\n55"]
        }';
        $appendNumber = "55.";
        break;

    case "Minecraft_Mods":
        $promptData = '{
            "prompt": '.json_encode(MINECRAFT_MODS_PROMPT).',
            "temperature": 0.75,
            "max_tokens": 340,
            "top_p": 1,
            "frequency_penalty": 0,
            "presence_penalty": 0,
            "stop": ["\n55"]
        }';
        $appendNumber = "55.";
        break;

    case "Lets_Game_It_Out":
        $promptData = '{
            "prompt": '.json_encode(LETS_GAME_IT_OUT_PROMPT).',
            "temperature": 0.75,
            "max_tokens": 400,
            "top_p": 1,
            "frequency_penalty": 0,
            "presence_penalty": 0,
            "stop": ["\n46"]
        }';
        $appendNumber = "46.";
        break;

    case "Biaheza":
        $promptData = '{
            "prompt": '.json_encode(BIAHEZA_PROMPT).',
            "temperature": 0.8,
            "max_tokens": 340,
            "top_p": 1,
            "frequency_penalty": 0,
            "presence_penalty": 0.26,
            "stop": ["\n50"]
        }';
        $appendNumber = "50.";
        break;

    case "SSSniperWolf":
        $promptData = '{
            "prompt": '.json_encode(SSSNIPERWOLF_PROMPT).',
            "temperature": 0.75,
            "max_tokens": 300,
            "top_p": 1,
            "frequency_penalty": 0.03,
            "presence_penalty": 0,
            "stop": ["\n54"]
        }';
        $appendNumber = "54.";
        break;

    case "Beast_Reacts":
        $promptData = '{
            "prompt": '.json_encode(BEAST_REACTS_PROMPT).',
            "temperature": 0.78,
            "max_tokens": 300,
            "top_p": 1,
            "frequency_penalty": 0,
            "presence_penalty": 0,
            "stop": ["\n73"]
        }';
        $appendNumber = "73.";
        break;

    case "Gadget_Review":
        $promptData = '{
            "prompt": '.json_encode(GADGET_REVIEW_PROMPT).',
            "temperature": 0.83,
            "max_tokens": 300,
            "top_p": 1,
            "frequency_penalty": 0,
            "presence_penalty": 0,
            "stop": ["\n85"]
        }';
        $appendNumber = "85.";
        break;
        
    case "Andrew_Schulz":
        $promptData = '{
            "prompt": '.json_encode(ANDREW_SCHULZ_TOPICS_PROMPT).',
            "temperature": 0.75,
            "max_tokens": 150,
            "top_p": 1,
            "frequency_penalty": 0,
            "presence_penalty": 0,
            "stop": ["\n85"]
        }';
        $appendNumber = "22.";
        break;

    default:
    $promptData = '{
        "prompt": '.json_encode(MRBEAST_PROMPT).',
        "temperature": 0.75,
        "max_tokens": 300,
        "top_p": 1,
        "frequency_penalty": 0,
        "presence_penalty": 0,
        "stop": ["\n73"]
    }';
    $appendNumber = "73.";
    }







    //Call API
    $response = callAPI($method, $url, $promptData);

    
    //print_r($response);

    $responseArray = json_decode($response,true);
    $ideasString = $responseArray["choices"][0]["text"];









    $ideasString = $appendNumber.$ideasString;
    //$ideasString = "54. ".$ideasString;
    $ideasArray = preg_split("/\r\n|\n|\r/", $ideasString);
    //print_r ($ideasArray);
    




    /*
    **Remove Numbers
    */
    $ideasWithoutNumber = array();
    for($i = 0; $i < count($ideasArray); $i++)
    {
        if($ideasArray[$i] == "")
        {
            continue;
        }

        array_push($ideasWithoutNumber, substr($ideasArray[$i], 4));    
    }
    

    /*
    **Remove Duplicates
    */
    $uniqueIdeas = array_unique($ideasWithoutNumber);
   

    //Remove bad ideas from Gadget Reivew
    if( $generator == 'Gadget_Review' )
    {
        /*
        **Remove Titles containing these words
        */
        
        $checkArray = array('air fryer', 'kitchen gadget', 'ice cube tray', 'pizza slicer', 'tea gadget', 'air purifier', 'light bulb', 'coffee maker',  'ice cream maker', 'coffee machine', 'trash cas', 'can opener', 'kitchen appliances', 'nonstick pan', 'lamp', 'cutting board', 'charger', 'blender', 'watches', 'waffle maker', 'water gun', 'rechargeable battery', 'rechargeable batteries', 'ice cream scoop', 'flashlight', 'headphones', 'space heater', 'ice cream maker', 'desktop fan', 'unusual microwave', 'ice cube molds', 'egg cooker', 'rice cooker', 'mixer', 'air purifier', 'humidifier', 'dog toy', 'water bottle', 'bluetooth', 'waffle maker', 'office gadget', 'tv antenna', 'indoor grill', 'sandwich gadgets', 'egg gadgets', 'pizza cutter');
        

        print_r($uniqueIdeas);


        for ( $i = 0; $i < count($uniqueIdeas); $i++ )
        {
            foreach ($checkArray as $query)
            {
                if (stripos($uniqueIdeas[$i], $query))
                { 
                    unset($uniqueIdeas[$i]);
                }
            }
        }


        print_r($uniqueIdeas);

    }



    

    foreach($ideasArray as $idea)
    {

        
        if($idea == "")
        {
            continue;
        }
        
        $number = substr($idea, 0, 2); //Get Number
        
        /*
        if($number != 11 && $number != 12 && $number != 13 && $number != 14 && $number != 15 && $number != 16)
        {
            continue;
        }
        */
        echo $idea;
        
        global $wpdb;
        $table = $wpdb->overldai_wp167 . strtolower($generator);
        $tableData = array(
            'Idea' => ucwords(substr($idea, 4))
        );
        $format = array(
            '%s'
        );

        $wpdb->insert( $table, $tableData, $format );

        $tableHistory = $wpdb->overldai_wp167 . strtolower($generator) . '_history';
        $wpdb->insert( $tableHistory, $tableData, $format );
    }
        

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













?>





