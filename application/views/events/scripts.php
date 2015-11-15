
<?php
$output= '<div id="events" class="tabsnav">' ;

foreach($maintabs as $key=>$value){

$output = $output . '<a href="#"  rel="'. $value->id . '">'. $value->menu_name .' </a>';

}
$output=$output.'</div>';
echo $output;
        

?>