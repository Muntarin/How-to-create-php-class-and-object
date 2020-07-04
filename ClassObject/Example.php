<?php
require_once './Pencilbox.php';


class Example extends PencilBox
{
    public $mobile = '01824736465';
    protected  $email = 'info@gmail.com';
    private  $location = 'Dhaka';

    public function one($name){
        echo $name;
        //echo 'In two';
        //echo $this->two();
        //echo $this->rem();not allow parents private method
        //echo  $this->country;not allow parents private property

    }
    public function two(){
        echo 'In two';

    }
    public function three(){
        echo 'In three';

    }
}