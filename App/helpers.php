<?php

function redirect($url){
    header("location:".$url);
    die();
}


function vd($variable){
    echo "<pre>";
    var_dump($variable);
    echo "</pre>";
    exit();
}


function user(){
    return $_SESSION['loginStatus'];
}



function view($template,$args=[]){
    return \Core\View::render($template,$args);
}



function uploadImage($name,$uploadAddress,$allow=[]){
    $md5 = md5(time().microtime().uniqid());
    $ext = explode('.',$_FILES[$name]['name']);
    $ext = end($ext);
    if(!in_array($ext,$allow)){
        return false;
    }
    $_SESSION['fileName'] = $md5.".".$ext;
    return move_uploaded_file($_FILES[$name]['tmp_name'],$uploadAddress.$md5.".".$ext);
}