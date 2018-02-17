<?php
class HomeController {
    
    function __construct() {}
    
    public function home() {
        
        $gallery_info_list = GalleryInfo::lastSixGaleries();
        require_once('app/views/home.php');
    }
}