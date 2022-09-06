<?php

class Box{
    public $height;
    public $width;
    public $length;

    public function__construct($w,$h,$l){
        $this->width = $w; 
        $this->height = $w; 
        $this->lenght = $w;
    }

    public function setHeight($height){
        if($height>0){
            $this->height=$height;
        }
    }

    public function volume(){
        return $this->height * $this->width * $this->length;
    }

    public function__tostring(){
        return"box w: $this->width, h: $this->height, l: $this->lenght 
    }
}


$box1 = new Box();
$box1->setHigth(-20);
$box1->width=10;
$box1->length=10;
var_dump($box1);
