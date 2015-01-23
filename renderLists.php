<?php
require_once("renderInner.php");

function renderUl($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("ul",$id, $class, $attributes, $innerRender); 
}

function renderOl($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("ol", $id, $class, $attributes, $innerRender); 
}

function renderLi($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("li", $id, $class, $attributes, $innerRender); 
}

function renderDl($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("dl", $id, $class, $attributes, $innerRender); 
}
function renderDt($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("dt", $id, $class, $attributes, $innerRender); 
}

function renderDd($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("dd", $id, $class, $attributes, $innerRender); 
}

function renderMenu($id, $class, $label, $type, $attributes, $innerRender){
  $attributes = addToAttributes("label", $label, $attributes);
  $attributes = addToAttributes("type", $type, $attributes);
  renderIdentifiableTag("menu",$id, $class, $attributes, $innerRender); 
}

function renderMenuItem($id, $class, $label, $icon, $onclick, $attributes){
  $attributes = addToAttributes("id", $id, $attributes);
  $attributes = addToAttributes("class", $class, $attributes); 
  $attributes = addToAttributes("label", $label, $attributes);
  $attributes = addToAttributes("icon", $icon, $attributes);
  $attributes = addToAttributes("onclick", $onclick, $attributes);

  renderStartTag("menuitem",$attributes); 
}

?>