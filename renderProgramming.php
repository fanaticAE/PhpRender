<?php

require_once("renderInner.php");

function renderScript($src,$type, $attributes,$innerRender = null){
  $attributes = addToAttributes("src",$src,$attributes);
  $attributes = addToAttributes("type",$type,$attributes);
  renderSimpleTag("script",$attributes,$innerRender); 
}

function renderNoscript($attributes, $innerRender){
  renderSimpleTag("noscript",$attributes,$innerRender); 
}
function renderEmbed($src, $attributes){
  $attributes = addToAttributes("src",$src,$attributes); 
  renderStartTag("embed",$attributes); 
}


function renderObject($data, $attributes, $innerRender = null){
  $attributes = addToAttributes("data",$data,$attributes); 
  renderSimpleTag("object",$attributes);
}

function renderParam($name,$value,$attributes){
  $attributes= addToAttributes("name",$name,$attributes);
  $attributes= addToAttributes("value",$value,$attributes);
  renderStartTag("param", $attributes); 
}




?>