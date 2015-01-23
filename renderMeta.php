<?php
require_once("renderInner.php"); 

function renderHead($attributes,$innerRender){
  renderSimpleTag("head",$attributes,$innerRender); 
}

function renderMeta($attributes){
  renderStartTag("meta",$attributes); 
}

function renderBase($href, $target,$attributes, $innerRender){
  $attributes = addToAttributes("href",$href,$attributes);
  $attributes = addToAttributes("target",$target,$attributes);
  renderStartTag("base",$attributes); 
}


?> 