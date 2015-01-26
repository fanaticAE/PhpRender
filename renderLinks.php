<?php
require_once("renderInner.php");

function renderA($id, $class, $href, $attributes, $innerRender){
  $attributes = addToAttributes("href", $href, $attributes);
  renderIdentifiableTag("a", $id, $class, $attributes, $innerRender); 
}
function renderLink($rel, $type, $href, $attributes = null){
  $attributes = addToAttributes("rel", $rel, $attributes);
  $attributes = addToAttributes("type", $type,$attributes);
  $attributes = addToAttributes("href", $href,$attributes);
  
  renderContentlessTag("link", $attributes); 
}

function renderNav($id, $class, $innerRender){
  renderIdentifiableTag("nav",$id, $class, $attributes, $innerRender); 
}

?> 