<?php
class PencilBox{

    public $name="Muntarin";
    public $city="Dhaka";
    public $country="Bangladesh";


    function add(){
        echo 'In add';
    }
    function sub(){
        echo 'In sub';
    }
    function rem(){
        echo 'In rem';
    }

}
//echo $name;
//add();
$pencilbox=new PencilBox;
//echo $pencilbox->name;
$pencilbox->add();


