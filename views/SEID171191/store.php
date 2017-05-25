<?php

require_once ("../../vendor/autoload.php");

$objStudent = new \App\Student();
$objCourse = new \App\Course();

$objStudent->setData($_POST);
$objCourse->setData($_POST);

$studentInfoArray = $objStudent->getData();
$courseInfoArray = $objCourse->getData();



if(filesize("result.txt")==0){
    file_put_contents("result.txt","Student Result Sheet\n");
}

file_put_contents("result.txt","***********************\n",FILE_APPEND);
file_put_contents("result.txt","Name: ".$studentInfoArray["name"]."\n",FILE_APPEND);
file_put_contents("result.txt","Student ID: ".$studentInfoArray["studentID"]."\n",FILE_APPEND);
file_put_contents("result.txt","***********************\n",FILE_APPEND);
file_put_contents("result.txt","Subject    Mark     Grade\n",FILE_APPEND);
file_put_contents("result.txt","=======   ======    =====\n",FILE_APPEND);
file_put_contents("result.txt","Bangla    ". $courseInfoArray["banglaMark"].printSpaces($courseInfoArray["banglaMark"]).$objCourse->mark2Grade($courseInfoArray["banglaMark"])."\n",FILE_APPEND);
file_put_contents("result.txt","English   ".$courseInfoArray["englishMark"].printSpaces($courseInfoArray["englishMark"]).$objCourse->mark2Grade($courseInfoArray["englishMark"])."\n",FILE_APPEND);
file_put_contents("result.txt","Math      ".$courseInfoArray["mathMark"].printSpaces($courseInfoArray["mathMark"]).$objCourse->mark2Grade($courseInfoArray["mathMark"])."\n",FILE_APPEND);
file_put_contents("result.txt","ICT       ".$courseInfoArray["ictMark"].printSpaces($courseInfoArray["ictMark"]).$objCourse->mark2Grade($courseInfoArray["ictMark"])."\n",FILE_APPEND);



file_put_contents("result.txt","***********************\n",FILE_APPEND);


function printSpaces($mark){
   $space ="";

   for($i=1;$i<=(12-strlen($mark));$i++)
       $space .=" ";

   return $space;
}



header("Location: view.php");