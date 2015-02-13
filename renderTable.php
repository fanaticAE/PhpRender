<?php

function renderTable($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("table", $id, $class, $attributes, $innerRender);
}

function renderCaption($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("caption", $id, $class, $attributes, $innerRender); 
}

function renderTh($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("th", $id, $class, $attributes, $innerRender); 
}
function renderTr($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("tr", $id, $class, $attributes, $innerRender); 
}
function renderTd($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("td", $id, $class, $attributes, $innerRender); 
}
function renderThead($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("thead", $id, $class, $attributes, $innerRender); 
}
function renderTbody($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("tbody", $id, $class, $attributes, $innerRender); 
}
function renderTfoot($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("tfoot", $id, $class, $attributes, $innerRender);
}

function renderCol($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("col", $id, $class, $attributes, $innerRender); 
}

function renderColgroup($id, $class, $attributes, $innerRender){
  renderIdentifiableTag("colgroup", $id, $class, $attributes, $innerRender); 
}





?> 