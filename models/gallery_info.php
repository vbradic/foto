<?php
class GalleryInfo {
    
    public $id;
    public $name;
    public $head_image_path;
    public $description;
    
    function __construct($id, $name, $head_image_path, $description){
        
        $this->id = $id;
        $this->name = $name;
        $this->head_image_path = $head_image_path;
        $this->description = $description;
    }
    
    public static function allGaleries(){
        
        $list = [];
        $db = Db::getInstance();
        $req = $db->prepare('SELECT * FROM gallery_info');
        $req->execute();
        
        foreach($req->fetchAll() as $gallery_info) {
            $list[] = new GalleryInfo($gallery_info['id'], $gallery_info['name'], $gallery_info['head_image_path'], $gallery_info['description']);
        }
        
        return $list; 
    }
    
    public static function lastSixGaleries(){
        
        $list = [];
        $db = Db::getInstance();
        $req = $db->prepare('SELECT * FROM gallery_info ORDER BY id DESC LIMIT 6');
        $req->execute();
        
        foreach($req->fetchAll() as $gallery_info) {
            $list[] = new GalleryInfo($gallery_info['id'], $gallery_info['name'], $gallery_info['head_image_path'], $gallery_info['description']);
        }
        
        return $list;
    }
    
    
}
    
    