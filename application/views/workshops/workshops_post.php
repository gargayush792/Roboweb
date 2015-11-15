<?php
echo $post[0]->name;  //post is array but we need a pointer
echo $post[0]->content;
echo UPLOADPATH;
foreach ($pics as $filename) {
echo
	$filename->name  ;  //Site url has to be prefixed
}
?>