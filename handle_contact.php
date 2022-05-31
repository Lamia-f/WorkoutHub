<?php
include "validation_functions.php";

function myfputcsv($handle, $array, $delimiter = ',', $enclosure = '"', $eol = "\n") {
    $return = fputcsv($handle, $array, $delimiter, $enclosure);
    if($return !== FALSE && "\n" != $eol && 0 === fseek($handle, -1, SEEK_CUR)) {
        fwrite($handle, $eol);
    }
    return $return;
}
if(isset($_POST['submit']))  {

if (valid_empty_contact($_POST['firstname'], $_POST['lastname'], $_POST['email'], $_POST['topic'], $_POST['subject']) ) {
     

//$header=array();
$data=array();
 foreach (array_slice($_POST,0,count($_POST)-1) as $key => $value) {
     //$header[]=$key;
     $data[]=$value;
 }


$fp = fopen('contact.csv', 'a');
    //fputcsv($fp, $header);
    myfputcsv($fp, $data);
fclose($fp);
header("Location: contact.php?outsent=your message has been sent! Thank you!");
}
else header("Location: contact.php?outnotsent=Fields are requered! or invalid");

}


?>
