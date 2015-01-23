<?php
require_once("renderInner.php");

function renderIframe($src, $attributes, $innerRender = null){
  $attributes = addToAttributes("src", $src, $attributes);
  renderSimpleTag("iframe",$attributes, $innerRender); 
}


?>