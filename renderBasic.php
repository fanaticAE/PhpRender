<?php
require_once("renderInner.php"); 


function renderDoctype($doctype){
  echo "<!DOCTYPE ".$doctype.">"; 
}

function renderHtml($attributes, $innerRender){
  renderSimpleTag("html", $attributes, $innerRender);  
}

function renderTitle($attributes, $innerRender){
  renderSimpleTag("title", $attributes, $innerRender); 
}

function renderBody($attributes, $innerRender){
  renderSimpleTag("body", $attributes, $innerRender); 
}

function renderH($HNumber, $id, $class, $attributes, $innerRender){
  renderIdentifiableTag("h".$HNumber, $id, $class, $attributes, $innerRender); 
}

function renderH1($id, $class, $attributes, $innerRender){
  renderH(1,$id, $class, $attributes, $innerRender); 
}

function renderH2($id, $class, $attributes, $innerRender){
  renderH(2,$id, $class, $attributes, $innerRender); 
}

function renderH3($id, $class, $attributes, $innerRender){
  renderH(3,$id, $class, $attributes, $innerRender); 
}

function renderH4($id, $class, $attributes, $innerRender){
  renderH(4,$id, $class, $attributes, $innerRender); 
}

function renderH5($id, $class, $attributes, $innerRender){
  renderH(5,$id, $class, $attributes, $innerRender); 
}

function renderH6($id, $class, $attributes, $innerRender){
  renderH(6,$id, $class, $attributes, $innerRender); 
}


function renderP($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("p", $id, $class, $attributes, $innerRender); 
}

function renderBr($attributes = null){
  renderContentlessTag("br", $attributes);
}

function renderHr($attributes = null){
  renderContentlessTag("hr", $attributes); 
}
?> 
