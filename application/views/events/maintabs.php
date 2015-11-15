<?php
$result = array();
$result['result']['data'] = array();
$result['result']['link'] = array(); //the div in which subtabs are going to be placed
foreach($maintabs as $value){
array_push($result['result']['data'] , array(
              'id' =>  $value->id ,
              'name' =>$value->menu_name ,
              'link' => $tabid, //subtab id of the tabs that will be loaded or the id of the clicked tab
              
        ));
}
array_push($result['result']['link'],$tabid);
echo json_encode($result);
?>



