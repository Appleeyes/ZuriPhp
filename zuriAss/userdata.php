<?php
if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $data = [$name, $email, $dob, $gender, $country];
    
    $filename = fopen('userdata.csv', 'a');

    if($filename){
        echo "file opened successfully,";
        
        if(fputcsv($filename, $data)){
            echo "File is written,";
        }else{
            echo "File could not be written...";
        }
       
    } 

        
}else{
    echo 'no data';
}



     
?>