<?php
/**
 * Created by PhpStorm.
 * User: Trainer 402
 * Date: 5/21/2017
 * Time: 6:04 PM
 */

namespace App;


class Course
{

    public $banglaMark;
    public $englishMark;
    public $mathMark;
    public $ictMark;

    public function setData($postArray){

        if(array_key_exists("Bangla",$postArray))
            $this->banglaMark = $postArray["Bangla"];

        if(array_key_exists("English",$postArray))
            $this->englishMark = $postArray["English"];


        if(array_key_exists("Math",$postArray))
            $this->mathMark = $postArray["Math"];

        if(array_key_exists("ICT",$postArray))
            $this->ictMark = $postArray["ICT"];


    }


    public function getData(){

        $banglaMark = $this->banglaMark;
        $englishMark = $this->englishMark;
        $mathMark = $this->mathMark;
        $ictMark = $this->ictMark;

        $varList = array("banglaMark","englishMark","mathMark","ictMark");

        $courseArray = compact($varList);

        return $courseArray;
    }


    public function mark2Grade($mark){

        if($mark >= 80) return "A+";
        elseif($mark >=70) return "A";
        elseif($mark >=60) return "A-";
        elseif($mark >=50) return "B";
        elseif($mark >=40) return "C";
        elseif($mark >=30) return "D";
        else return "F";
    }


}