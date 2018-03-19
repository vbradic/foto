<?php

class SlideImage
{

    public $id;

    public $img_path;

    public $slide_place;

    function __construct($id, $img_path, $slide_place)
    {
        $this->id = $id;
        $this->img_path = $img_path;
        $this->slide_place = $slide_place;
    }
    
    public static function saveSlideImage($img_path, $slide_place) {
        
        $list = [];
        $db = Db::getInstance();
        $req = $db->prepare('INSERT INTO slide_image (img_path , slide_place) 
                             VALUES (?,?)');
        $req->bindParam(1, $img_path,PDO::PARAM_STR);
        $req->bindParam(2, $slide_place,PDO::PARAM_STR);
        
        $req->execute();
    }

    public static function getSlideImagesBySlidePlace($slide_place)
    {
        $list = [];
        $db = Db::getInstance();
        $req = $db->prepare('SELECT * FROM slide_image WHERE slide_place = :slide_place ');
        $req->execute(array(
            'slide_place' => $slide_place
        ));
        
        foreach ($req->fetchAll() as $slide_image) {
            $list[] = new SlideImage($slide_image['id'], $slide_image['img_path'], $slide_image['slide_place']);
        }
        
        return $list;
    }
}