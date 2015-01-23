<?php
/*
 *This file contains the render functions
 */

function renderIdentifiableTag($tagname, $id = null, $class = null, $attributes = null, $innerRender = null){
  $attributes = addToAttributes("id", $id, $attributes);
  $attributes = addToAttributes("class", $class, $attributes); 
  renderSimpleTag($tagname, $attributes, $innerRender); 
}

function renderSimpleTag($tagname, $attributes = null, $innerRender = null){
  renderStartTag($tagname, $attributes);
  if($innerRender != null)$innerRender();
  renderEndTag($tagname); 
}

function renderStartTag($tagname, $attributes = null){
  echo "<".$tagname." ";
  renderAttributes($attributes); 
  echo " >"; 
}
function renderEndTag($tag){
  echo "</" .$tag . ">"; 
}

function renderContentlessTag($tagname, $attributes = null){
  echo "<".$tagname;
  renderAttributes($attributes); 
  echo "/>"; 
}

function renderAttributes($attributes){
 if($attributes != null)
    foreach($attributes as $key => $value)
      renderAttribute($key, $value); 
}


function addToAttributes($ident, $value, $attributes){
  if($attributes == null)
    $attributes = array();
  if($value != null)
    $attributes[$ident] = $value; 
  return $attributes; 
}


function renderAttribute($name, $value){
  echo $name . "=\"" . $value . "\" "; 
}






?>