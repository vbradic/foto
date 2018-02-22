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
            require_once('app/models/gallery_image.php');
            $controller = new GalleryController();
            break;
            
        case 'video':
            $controller = new VideoController();
    }
    
    $controller->{ $action }();
}

$controllers = array('home' => ['home'], 'gallery' => ['all_galleries', 'gallery'], 'video' => ['all_videos']);

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