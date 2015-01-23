<?php
require_once("renderInner.php");

function renderAudio($id, $class, $mode, $attributes, $innerRender){
  if($mode = null)
    $mode = ""; 
  renderIdentifiableTag("audio ".$mode,$id, $class, $attributes, $innerRender); 
}
function renderSource($src, $type, $attributes){
  $attributes = addToAttributes("src", $src, $attributes);
  $attributes = addToAttributes("type", $type, $attributes);
  renderStartTag("source", $attributes, $innerRender); 
}

function renderVideo($id, $class, $mode, $attributes, $innerRender){
  if($mode = null)
    $mode = "";
  renderIdentifiableTag("video ".$mode, $id, $class, $attributes, $innerRender); 
}

function renderTrack($src, $attributes){
  $attributes = addToAttributes("src", $src, $attributes); 
  renderStartTag("track", $attributes); 
}




?>