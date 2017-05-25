<?php
/**
 * Created by PhpStorm.
 * User: Trainer 402
 * Date: 5/21/2017
 * Time: 6:04 PM
 */

namespace App;


class Student
{
    public $name;
    public $studentID;

    public function setData($postArray){

        if(array_key_exists("Name",$postArray))
            $this->name = $postArray["Name"];

        if(array_key_exists("StudentID",$postArray))
            $this->studentID = $postArray["StudentID"];

    }


    public function getData(){

        $name = $this->name;
        $studentID = $this->studentID;
        $varList = array("name","studentID");

        $stdInfoArray = compact($varList);

        return $stdInfoArray;
    }
}