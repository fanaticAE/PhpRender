<?php

require_once("renderInner.php");

function renderImg($id, $class, $src, $alt, $attributes){
  $attributes = addToAttributes("id", $id, $attributes);
  $attributes = addToAttributes("class", $class, $attributes);
  $attributes = addToAttributes("src", $src, $attributes);
  $attributes = addToAttributes("alt", $alt, $attributes); 
  renderStartTag("img", $attributes); 
}

function renderMap($name, $attributes, $innerRender){
  $attributes = addToAttributes("name",$name, $attributes); 
  renderSimpleTag("map",$attributes,$innerRender);
}

function renderArea($attributes){
  renderStartTag("area", $attributes); 
}

function renderCanvas($id, $class, $attributes){
  renderIdentifiableTag("canvas", $id, $class, $attributes, null); 
}

function renderFigcaption($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("figcaption",$id,$class,$attributes,$innerRender); 
}

function renderFigure($id, $class,$attributes, $innerRender){
  renderIdentifiableTag("figure",$id,$class,$attributes,$innerRender); 
}

?>