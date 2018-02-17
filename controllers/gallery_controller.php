<?php
class GalleryController {
    
    function __construct() {}
    
    public function all_galleries() {
        
        $gallery_info_list = GalleryInfo::allGaleries();
        require_once('app/views/all_galleries.php');
    }
}