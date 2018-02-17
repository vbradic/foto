<?php

function call($controller, $action) {
    
    require_once('controllers/' . $controller . '_controller.php');
    
    switch($controller) {
        
        case 'home':
            require_once('app/models/gallery_info.php');
            $controller = new HomeController();
            break;
            
        case 'gallery':
            require_once('app/models/gallery_info.php');
            $controller = new GalleryController();
    }
    
    $controller->{ $action }();
}

$controllers = array('home' => ['home'], 'gallery' => ['all_galleries']);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}
?>