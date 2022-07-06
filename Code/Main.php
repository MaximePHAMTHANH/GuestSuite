<?php

include "Star_Html.php";


function GuestSuite($atts, $content=null) { 
       wp_register_style('GuestSuite_namespace', plugins_url('GuestSuite.css',__FILE__ ));
       wp_enqueue_style('GuestSuite_namespace'); 
       $attributes = shortcode_atts( array(
              'id' => '32620',
              'type' => 'header',
              'color' => '#FFBB00',
              'token' => '**********'
       ), $atts );
       $establishementData= EstablishementData($attributes['id'],$attributes['token']);
       //print_r($establishementData);
       $rate= round($establishementData->average_rate/2,1);
       $star_nb=Star_finder($rate);
       $star_html=Render_stars($star_nb,$attributes['color'],$attributes['type']);

       if ($attributes['type']=="debug"){       
              echo "Etablissement : ".$establishementData->establishment_name;
              echo "</br>";
              echo "Note Moyenne : ".$establishementData->average_rate;
              echo "</br>";
              echo "Note sur 5 : ".$rate;
              echo "</br>";
              echo "Nb d'avis : ".$establishementData->total_reviews;
              echo "</br>";
              return ;
       }
       elseif ($attributes['type']=="header"){
              echo Display_header($rate,$attributes,$star_html);  
              return;            
       }
       elseif ($attributes['type']=="footer"){
              echo Display_footer($rate,$establishementData->total_reviews,$attributes,$star_html);
              return ;              
       }
       else echo "Erreur de déclaration du Shortcode";

       return ;



}


function Display_header($rate,$attributes,$star_html){
       $displayed="
       <div class='GuestSuite_Header_Wrapper'>
              <div class='Header_Rate' style='color:".$attributes['color']."'> ".$rate."/5 ".$star_html."</div>
       </div>

       ";

       return $displayed;
}

function Display_footer($rate,$reviews,$attributes,$star_html){
       $displayed="
       <div class='GuestSuite_Header_Wrapper' itemprop='aggregateRating' itemscope itemtype='http://schema.org/AggregateRating'>
              <div class='Footer_Rate' style='color:".$attributes['color']."'>".$rate."<small><small>/5 </small></small></div>
              <div class='GuestSuite_Rating_Hidden' style='display:none' itemprop='ratingValue' >".$rate."</div>
              <div class='GuestSuite_Scale_Hidden' style='display:none' itemprop='bestRating' >5</div>
              <div class='GuestSuite_Worse_Rating_Hidden' style='display:none' itemprop='worstRating' >0</div>
              <div class='GuestSuite_Rating_Count_Hidden' style='display:none' itemprop='ratingCount' >".$reviews."</div>              
              <div class='Footer_Stars'>".$star_html."</div>
              <div class='Footer_Reviews' style='color:".$attributes['color']."'> Sur ".$reviews." Avis Guest Suite</div>
       </div>

       ";

       return $displayed;
}


function Star_finder($rate){
       $star_nb=round($rate*4);
       return $star_nb;
}




function Render_stars($star_nb,$color,$type){
       return Star_Html($star_nb,$color,$type);
}



function EstablishementData($id,$token){

       $guestappEstablishmentId = $id;
       $apcEnabled = extension_loaded('apc') && ini_get('apc.enabled');
       $identity = 'Guest Suite';

       $ctx = stream_context_create([
        'http' => [
            'timeout' => 60,
            ],]);

       $urlEstablishment = 'https://wire.guest-suite.com/rest/establishment.json?access_token='.$token.'&establishment_id_guestapp='.$guestappEstablishmentId;

       $json_init = '{ "establishment_name": "Erreur sur la paire Token API / Id de l établissement", "average_rate": 0, "total_reviews":0 }';
       $establishementData=json_decode($json_init);

       try {
       $dataEstablishment = null;
       if ($apcEnabled) {
            $dataEstablishment = apc_fetch($urlEstablishment);
            $dataEstablishment = $dataEstablishment ? $dataEstablishment : null;
       }

       if (is_null($dataEstablishment)) {
              $dataEstablishment = file_get_contents($urlEstablishment, 0, $ctx);
              if ($apcEnabled) {apc_add($urlEstablishment, $dataEstablishment, 4 * 60 * 60);}
       }

       if (empty($dataEstablishment)) {return $establishementData;}

       $establishementData = json_decode($dataEstablishment);
       
       } 
       catch (Exception $e) {}
       return $establishementData;

}


add_shortcode('GuestSuite', 'GuestSuite');  


?>
