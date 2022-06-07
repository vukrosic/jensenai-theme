<?php
/*
Template Name: Generator Return Idea
*/
?>





<?php



if(isset($_POST['generator']))
{
    /*
    if(!pmpro_hasMembershipLevel('1'))
    {
        echo "Please start your free trial. If this is a mistake, contact us at contact@jensenai.com";
    }
    else
    {
        returnIdea();
    }*/
    
    returnIdea();
}




function returnIdea()
{
    /*if ( !wp_verify_nonce( $_POST['iKWBhTkXK29p'], 'iKWBhTkXK29p' ))                NONCE
    {
        die();
    }*/



    global $wpdb;
    $table = $wpdb->overldai_wp167 . strtolower($_POST['generator']);

    $result = $wpdb->get_results ( "SELECT `ID`,`idea` FROM  $table ORDER BY RAND() LIMIT 1" );

    $array = json_decode(json_encode($result), true);

    echo($array[0]['idea']);

    $wpdb->delete( $table, array( 'ID' => $array[0]['ID'] ) );
}








    
    
?>