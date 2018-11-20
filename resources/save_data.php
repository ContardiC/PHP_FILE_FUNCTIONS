<?php
/**
 * Created by Carlo Contardi
 * User: carlocontardi
 * Date: 20/11/2018
 * Time: 15:36
 */

$firstName=$_POST['firstName'];
$lastName=$_POST['lastName'];
$email=$_POST['email'];
$password=$_POST['password'];

$filePath="data/";
$fileName=$email.".csv";

$fp=fopen($filePath.$fileName,"w");
if($fp==null){
    echo "We're sorry, we can not save your data";
}else{
    fwrite($fp,$firstName.";".$lastName.";".md5($password)."\n");
    echo "Your data has been saved and the password has been encrypted";
}
fclose($fp);
