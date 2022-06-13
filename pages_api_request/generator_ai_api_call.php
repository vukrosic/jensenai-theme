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
    $url = 'https://api.openai.com/v1/completions';



    $CHALLENGES_PROMPT = "Give me YouTube ideas:\n\n1. I went 1 week without talking\n\n2. I built an igloo out of snow\n\n3. I tied my shoes in every state\n\n4. I sorted 10 pounds of m&ms by color\n\n5. I ate a burger on every continent\n\n6. I flew using only balloons and leaf blowers\n\n7. I went around a Ferris wheel 1,000 times\n\n8. I broke the world record for most nails in a board\n\n9. I made the largest pizza in the world\n\n10. I pulled a real car with toy cars\n\n11. I made a real-life Mario kart\n\n12. I thought an old dog new tricks\n\n13. I spent a night in a 1,000-year-old house\n\n14. I went to McDonald's and ordered only healthy salads\n\n15. I rode every roller coaster in America\n\n16. I broke a window by shooting a rubber band 10,000 times at it\n\n17. I said \"Hi\" to every person on the subway\n\n18. I covered an entire house in sticky notes\n\n19. I won every prize at a theme park\n\n20. I cut down a tree using only plastic knives\n\n21. I read the longest English word out loud\n\n22. I searched 100 dumpsters and found this\n\n23. I made the world's biggest bubble\n\n24. I built a tiny house from scratch\n\n25. I ate the world’s largest slice of pizza\n\n26. I drove 1,000 miles for a $3 slice of pizza\n\n27. I discovered the world's longest pizza\n\n28. I spent 50 hours in solitary confinement\n\n29. I answered 100 questions in 100 seconds\n\n30. I lived in a box for a week\n\n31. I threw the world's biggest party and didn't invite anyone\n\n32. I made a wall of 1,000 duct tape rolls to stop a car\n\n33. I surprised David Dobrik with 100 David Dobriks\n\n34. I built a giant house using only legos\n\n35. I made a life-sized paper plane\n\n36. I bought one snickers bar from every Walmart in California\n\n37. I went through the same drive-thru 1,000 times\n\n38. I spent a night in an abandoned house\n\n39. I ran a marathon in the world's largest shoes\n\n40. I built a giant pyramid out of legos\n\n41. I walked around downtown with a giant balloon on my head\n\n42. I walked across America with 10,000 steps every day for 100 days\n\n43. I survived the world's biggest pillow fight\n\n44. I built a house out of the dirt\n\n45. I made the world's largest house of cards\n\n46. I drew my face using only my face\n\n47. I asked in every Walmart if they are selling girlfriends\n\n48. I ate a 3kg burrito\n\n49. I asked 100 strangers how much they weigh\n\n50. I broke a glass by screaming at it\n\n51. I built a mansion using only cardboard boxes\n\n52. I built a life-sized candy house\n\n53. I built a giant fort out of paper cups\n\n54";
    //Get Prompt
    switch ($generator)
    {
    case "CHALLENGES":
        $promptData = '{
            "model": "text-davinci-002",
            "prompt": '.json_encode($CHALLENGES_PROMPT).',
            "temperature": 0.75,
            "max_tokens": 300,
            "top_p": 1,
            "frequency_penalty": 0,
            "presence_penalty": 0,
            "stop": ["\n73"]
        }';
        $appendNumber = "73.";
        break;

    // case "Michael_Reeves":
    //     $promptData = '{
    //         "prompt": '.json_encode(MICHAEL_REEVES_PROMPT).',
    //         "temperature": 0.7,
    //         "max_tokens": 340,
    //         "top_p": 1,
    //         "frequency_penalty": 0,
    //         "presence_penalty": 0,
    //         "stop": ["\n50"]
    //     }';
    //     $appendNumber = "50.";
    //     break;

    // case "Kurzgesagt":
    //     $promptData = '{
    //         "prompt": '.json_encode(KURZGESAGT_PROMPT).',
    //         "temperature": 0.75,
    //         "max_tokens": 300,
    //         "top_p": 1,
    //         "frequency_penalty": 0,
    //         "presence_penalty": 0,
    //         "stop": ["\n71"]
    //     }';
    //     $appendNumber = "71.";
    //     break;

    // case "Real_Engineering":
    //     $promptData = '{
    //         "prompt": '.json_encode(REAL_ENGINEERING_PROMPT).',
    //         "temperature": 0.8,
    //         "max_tokens": 300,
    //         "top_p": 1,
    //         "frequency_penalty": 0,
    //         "presence_penalty": 0,
    //         "stop": ["\n75"]
    //     }';
    //     $appendNumber = "75.";
    //     break;

    // case "Wendover_Productions":
    //     $promptData = '{
    //         "prompt": '.json_encode(WENDOVER_PRODUCTIONS_PROMPT).',
    //         "temperature": 0.8,
    //         "max_tokens": 300,
    //         "top_p": 1,
    //         "frequency_penalty": 0,
    //         "presence_penalty": 0,
    //         "stop": ["\n75"]
    //     }';
    //     $appendNumber = "75.";
    //     break;

    // case "DOCUMENTARY":
    //     $promptData = '{
    //         "prompt": '.json_encode(DOCUMENTARY_PROMPT).',
    //         "temperature": 0.78,
    //         "max_tokens": 300,
    //         "top_p": 1,
    //         "frequency_penalty": 0,
    //         "presence_penalty": 0,
    //         "stop": ["\n73"]
    //     }';
    //     $appendNumber = "73.";
    //     break;

    // case "Practical_Psychology":
    //     $promptData = '{
    //         "prompt": '.json_encode(PRACTICAL_PSYCHOLOGY_PROMPT).',
    //         "temperature": 0.75,
    //         "max_tokens": 340,
    //         "top_p": 1,
    //         "frequency_penalty": 0,
    //         "presence_penalty": 0,
    //         "stop": ["\n55"]
    //     }';
    //     $appendNumber = "55.";
    //     break;

    // case "Minecraft_Mods":
    //     $promptData = '{
    //         "prompt": '.json_encode(MINECRAFT_MODS_PROMPT).',
    //         "temperature": 0.75,
    //         "max_tokens": 340,
    //         "top_p": 1,
    //         "frequency_penalty": 0,
    //         "presence_penalty": 0,
    //         "stop": ["\n55"]
    //     }';
    //     $appendNumber = "55.";
    //     break;

    // case "Lets_Game_It_Out":
    //     $promptData = '{
    //         "prompt": '.json_encode(LETS_GAME_IT_OUT_PROMPT).',
    //         "temperature": 0.75,
    //         "max_tokens": 400,
    //         "top_p": 1,
    //         "frequency_penalty": 0,
    //         "presence_penalty": 0,
    //         "stop": ["\n46"]
    //     }';
    //     $appendNumber = "46.";
    //     break;

    // case "Biaheza":
    //     $promptData = '{
    //         "prompt": '.json_encode(BIAHEZA_PROMPT).',
    //         "temperature": 0.8,
    //         "max_tokens": 340,
    //         "top_p": 1,
    //         "frequency_penalty": 0,
    //         "presence_penalty": 0.26,
    //         "stop": ["\n50"]
    //     }';
    //     $appendNumber = "50.";
    //     break;

    // case "SSSniperWolf":
    //     $promptData = '{
    //         "prompt": '.json_encode(SSSNIPERWOLF_PROMPT).',
    //         "temperature": 0.75,
    //         "max_tokens": 300,
    //         "top_p": 1,
    //         "frequency_penalty": 0.03,
    //         "presence_penalty": 0,
    //         "stop": ["\n54"]
    //     }';
    //     $appendNumber = "54.";
    //     break;

    // case "Beast_Reacts":
    //     $promptData = '{
    //         "prompt": '.json_encode(BEAST_REACTS_PROMPT).',
    //         "temperature": 0.78,
    //         "max_tokens": 300,
    //         "top_p": 1,
    //         "frequency_penalty": 0,
    //         "presence_penalty": 0,
    //         "stop": ["\n73"]
    //     }';
    //     $appendNumber = "73.";
    //     break;

    // case "Gadget_Review":
    //     $promptData = '{
    //         "prompt": '.json_encode(GADGET_REVIEW_PROMPT).',
    //         "temperature": 0.83,
    //         "max_tokens": 300,
    //         "top_p": 1,
    //         "frequency_penalty": 0,
    //         "presence_penalty": 0,
    //         "stop": ["\n85"]
    //     }';
    //     $appendNumber = "85.";
    //     break;
        
    // case "Andrew_Schulz":
    //     $promptData = '{
    //         "prompt": '.json_encode(ANDREW_SCHULZ_TOPICS_PROMPT).',
    //         "temperature": 0.75,
    //         "max_tokens": 150,
    //         "top_p": 1,
    //         "frequency_penalty": 0,
    //         "presence_penalty": 0,
    //         "stop": ["\n85"]
    //     }';
    //     $appendNumber = "22.";
    //     break;

    default:
    $promptData = '{
        "model": "text-davinci-002",
        "prompt": '.json_encode($CHALLENGES_PROMPT).',
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

    
    print_r($response);

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
    $OPENAI_API_KEY = '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';
    
    // OPTIONS:
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        "Content-Type: application/json",
        "Authorization: Bearer ".$OPENAI_API_KEY,
    ));

    // POST Method
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $promptData);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);

    //Maybe remove this on live website?
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);

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





