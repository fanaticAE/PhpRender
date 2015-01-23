<?php
require_once("renderInner.php"); 

function renderAbbr($id, $class, $title, $attributes, $innerRender){
  $attributes = addToAttributes("title", $title, $attributes); 
  renderIdentifiableTag("abbr",$id, $class, $attributes, $innerRender); 
}

function renderAddress($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("address",$id, $class, $attributes, $innerRender); 
}

function renderB($attributes, $innerRender){
  renderSimpleTag("b", $attributes, $innerRender); 
}

function renderBdi($attributes, $innerRender){
  renderSimpleTag("bdi", $attributes, $innerRender); 
}
function renderBdo($dir, $attributes, $innerRender){
  $attributes = addToAttributes("dir", $dir, $attributes); 
  renderSimpleTag("bdo", $attributes, $innerRender);
}
function renderBlockqoute($id, $class, $cite, $attributes, $innerRender){
  $attributes = addToAttributes("cite", $cite, $attributes);
  renderIdentifiableTag("blockqoute",$id, $class, $attributes, $innerRender); 
}

function renderCite($attributes, $innerRender){
  renderSimpleTag("cite",$attributes, $innerRender); 
}

function renderCode($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("code", $id, $attributes, $innerRender); 
}

function renderDel($attributes, $innerRender){
  renderSimpleTag("del", $attributes, $innerRender); 
}

function renderDfn($id, $class, $title, $attributes, $innerRender){
  $attributes = addToAttributes("title", $title, $attributes); 
  renderIdentifiableTag("dfn", $id, $class, $attributes, $innerRender); 
}

function renderEm($attributes, $innerRender){
  renderSimpleTag("em", $attributes, $innerRender); 
}

function renderI($attributes, $innerRender){
  renderSimpleTag("i", $attributes, $innerRender); 
}

function renderIns($attributes, $innerRender){
  renderSimpleTag("ins", $attributes,$innerRender); 
}

function renderKbd($attributes, $innerRender){
  renderSimpleTag("kbd", $attributes, $innerRender); 
}

function renderMark ($attributes, $innerRender){
  renderSimpleTag("mark", $attributes, $innerRender); 
}

function renderMeter($value, $attributes, $innerRender = null){
  $attributes = addToAttributes("value", $value, $attributes); 
  renderSimpleTag("meter", $attributes, $innerRender);
}

function renderPre($attributes, $innerRender){
  renderSimpleTag("pre", $attributes, $innerRender); 
}

function renderProgress($id, $class, $value, $max, $attributes, $innerRender = null){
  $attributes = addToAttributes("value", $value, $attributes);
  $attributes = addToAttributes("max", $value, $attributes);
  renderIdentifiableTag("progress", $id, $class, $attributes, $innerRender); 
}

function renderQ($attributes, $innerRender){
  renderSimpleTag("q", $attributes, $innerRender); 
}

function renderRp($attributes, $innerRender){
  renderSimpleTag("rp", $attributes, $innerRender); 
}

function renderRt($attributes, $innerRender){
  renderSimpleTag("rt", $attributes, $innerRender); 
}

function renderRuby($attributes, $innerRender){
  renderSimpleTag("ruby", $attributes, $innerRender); 
}

function renderS($attributes, $innerRender){
  renderSimpleTag("s", $attributes, $innerRender); 
}

function renderSamp($attributes, $innerRender){
  renderSimpleTag("samp", $attributes, $innerRender); 
}

function renderSmall($attributes, $innerRender){
  renderSimpleTag("small", $attributes, $innerRender); 
}

function renderStrong($attributes, $innerRender){
  renderSimpleTag("strong", $attributes, $innerRender); 
}

function renderSub($attributes, $innerRender){
  renderSimpleTag("sub", $attributes, $innerRender); 
}

function renderSup($attributes, $innerRender){
  renderSimpleTag("sup", $attributes, $innerRender); 
}

function renderTime($dateTime, $attributes, $innerRender = null){
  $attributes = addToAttributes("datetime", $dateTime, $attributes);
  renderSimpleTag("time", $attributes, $innerRender); 
}

function renderU($attributes, $innerRender){
  renderSimpleTag("u", $attributes, $innerRender); 
}
function renderVar($attributes, $innerRender){
  renderSimpleTag("var", $attributes, $innerRender);
}

function renderWbr($attributes =null){
  renderStartTag("wbr", $attributes); 
}


?> 