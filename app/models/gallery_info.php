<?php
class GalleryInfo {
    
    public $id;
    public $name;
    public $head_image_path;
    public $description_header;
    public $description_paragraph;
    
    function __construct($id, $name, $head_image_path, $description_header, $description_paragraph){
        
        $this->id = $id;
        $this->name = $name;
        $this->head_image_path = $head_image_path;
        $this->description_header = $description_header;
        $this->description_paragraph = $description_paragraph;
    }
    
    public static function saveGalleryInfo($name, $head_image_path, $description_header, $description_paragraph) {
        
        $db = Db::getInstance();
        $req = $db->prepare('INSERT INTO gallery_info (name , head_image_path, description_header, description_paragraph)
                             VALUES (?,?,?,?)');
        $req->bindParam(1, $name,PDO::PARAM_STR);
        $req->bindParam(2, $head_image_path,PDO::PARAM_STR);
        $req->bindParam(3, $description_header,PDO::PARAM_STR);
        $req->bindParam(4, $description_paragraph,PDO::PARAM_STR);
        
        $req->execute();
    }
    
    public static function allGaleries(){
        
        $list = [];
        $db = Db::getInstance();
        $req = $db->prepare('SELECT * FROM gallery_info ORDER BY id DESC');
        $req->execute();
        
        foreach($req->fetchAll() as $gallery_info) {
            $list[] = new GalleryInfo($gallery_info['id'], $gallery_info['name'], $gallery_info['head_image_path'], $gallery_info['description_header'], $gallery_info['description_paragraph']);
        }
        
        return $list; 
    }
    
    public static function lastSixGaleries(){
        
        $list = [];
        $db = Db::getInstance();
        $req = $db->prepare('SELECT * FROM gallery_info ORDER BY id DESC LIMIT 6');
        $req->execute();
        
        foreach($req->fetchAll() as $gallery_info) {
            $list[] = new GalleryInfo($gallery_info['id'], $gallery_info['name'], $gallery_info['head_image_path'], $gallery_info['description_header'], $gallery_info['description_paragraph']);
        }
        
        return $list;
    }
    
    public static function galleryDescription($name) {
        $list = [];
        $db = Db::getInstance();
        $req = $db->prepare('SELECT * FROM gallery_info WHERE name = :name ');
        $req->execute(array('name' => $name));
        
        foreach($req->fetchAll() as $gallery_info) {
            $list[] = new GalleryInfo($gallery_info['id'], $gallery_info['name'], $gallery_info['head_image_path'], $gallery_info['description_header'], $gallery_info['description_paragraph']);
        }
        
        return $list;
    }
    
    
}
    
    