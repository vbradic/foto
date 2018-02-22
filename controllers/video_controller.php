<?php 
class VideoController {
    
    function __construct() {}
    
    public function all_videos() {
        
        require_once('app/views/video_gallery.php');
    }
}