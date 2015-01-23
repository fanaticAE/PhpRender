<?php
require_once("renderInner.php");

function renderStyle($attributes, $innerRender){
  renderSimpleTag("style",$attributes,$innerRender); 
}

function renderDiv($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("div", $id, $class,$attributes, $innerRender); 
}
function renderSpan($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("span", $id, $class, $attributes, $innerRender); 
}

function renderHeader($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("header",$id, $class, $attributes, $innerRender);
}

function renderHgroup($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("hgroup",$id, $class, $attributes, $innerRender); 
}

function renderFooter($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("footer",$id, $class, $attributes, $innerRender); 
}

function renderMain($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("main", $id,$class, $attributes, $innerRender); 
}
function renderSection($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("section", $id,$class, $attributes, $innerRender); 
}
function renderArticle($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("article", $id, $class, $attributes, $innerRender); 
}


function renderAside($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("aside", $id,$class, $attributes, $innerRender); 
}
function renderDetails($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("details", $id,$class, $attributes, $innerRender); 
}
function renderDialog($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("dialog", $id,$class, $attributes, $innerRender); 
}
function renderSummary($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("summary", $id,$class, $attributes, $innerRender); 
}


?> 