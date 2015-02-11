<?php
require_once("renderInner.php");

function renderForm($id, $class, $action, $method, $attributes, $innerRender){
  $attributes = addToAttributes("action", $action, $attributes);
  $attributes = addToAttributes("method", $method, $attributes);
  renderIdentifiableTag("form",$id, $class, $attributes, $innerRender); 
}

function renderInput($id, $class, $type, $name, $attributes){
  $attributes = addToAttributes("id", $id, $attributes);
  $attributes = addToAttributes("class", $class, $attributes);
  $attributes = addToAttributes("type", $type, $attributes);
  $attributes = addToAttributes("name", $name, $attributes);
  renderStartTag("input", $attributes); 
}

function renderTextarea($id, $class, $name, $attributes, $innerRender){
  $attributes = addToAttributes("name", $name, $attributes);
  renderIdentifiableTag("textarea",$id, $class, $attributes, $innerRender); 
}

function renderButton($id, $class, $type, $attributes = null, $innerRender = null){
  $attributes = addToAttributes("type",$type,$attributes);
  renderIdentifiableTag("button", $id, $class, $attributes, $innerRender); 
}

function renderSelect($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("select",$id, $class, $attributes, $innerRender); 
}

function renderOptgroup($id, $class, $label, $attributes, $innerRender){
  $attributes = addToAttributes("label", $label, $attributes);
  renderIdentifiableTag("optgroup", $id, $class, $attributes, $innerRender); 
}

function renderOption($id, $class, $value, $attributes, $innerRender){
  $attributes = addToAttributes("value",$value, $attributes);
  renderIdentifiableTag("option",$id, $class, $attributes, $innerRender); 
}

function renderLabel($id, $class, $for, $attributes, $innerRender){
  $attributes = addToAttributes("for", $for, $attributes);
  renderIdentifiableTag("label", $for,$attributes); 
}

function renderFieldset($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("fieldset", $id, $class, $attributes, $innerRender); 
}

function renderLegend($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("legend", $id, $class, $attributes, $innerRender); 
}

function renderDatalist($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("datalist", $id, $class, $attributes, $innerRender); 
}

function renderKeygen($id, $class, $name, $attributes){
  $attributes= addToAttributes("id",$id,$attributes);
  $attributes= addToAttributes("class",$class,$attributes);
  $attributes= addToAttributes("name",$class,$attributes);
  renderStartTag("keygen",$attributes); 
}

function renderOutput($id, $class, $name, $for, $attributes, $innerRender){
  $attributes = addToAttributes("name", $name,$attributes);
  $attributes = addToAttributes("for",$for,$attributes);
  renderIdentifiableTag("output",$id,$class,$attributes,$innerRender); 
}


?> 