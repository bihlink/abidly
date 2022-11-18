<?php
$reqUrl = parse_url($_SERVER['REQUEST_URI']);

if(isset($reqUrl['path'])){
  $file = $reqUrl['path'];
  if($file == '/'){
    $file = '/index';
  }
} else {
  $file = '/index';
}

if(!file_exists(__DIR__.'/..'.$file.'.php')){
  include '404.php';
  exit;
} else {
  require_once __DIR__.'/..'.$file.'.php';
}
