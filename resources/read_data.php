<?php
/**
 * Created by Carlo Contardi
 * User: carlocontardi
 * Date: 20/11/2018
 * Time: 16:02
 */
$email=$_POST['email'];

$filePath="data/";
$fileName=$email.".csv";

$fp=fopen($filePath.$fileName,"r");
if($fp==null) {
    echo "The file associated with the specified email address could not be found";
}else{
    $data=fread($fp,filesize($filePath.$fileName));
    $array=explode(";",$data);
    for($i=0;$i<2;$i++){
        echo $array[$i]."<br/>";
    }
}
