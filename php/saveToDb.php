<?php
//Ini untuk koneksi Db
$user_name = "root";
$password  = "";
$database  = "weddingdp";
$host_name = "localhost";
 
$connect_db =   mysql_connect($host_name, $user_name, $password);
$find_db    =   mysql_select_db($database);
//Akhir koneksi Db

//Pertama ambil data kiriman dari form
$errorMSG = "";

// NAME
if (empty($_POST["name"])) {
    $errorMSG = "Name is required ";
} else {
    $name = $_POST["name"];
}

// EMAIL
if (empty($_POST["from"])) {
    $errorMSG .= "From is required ";
} else {
    $from = $_POST["from"];
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required ";
} else {
    $message = $_POST["message"];
}

//Kemudian dapat langsung kita simpan dengan query INSERT
$sql_simpan = mysql_query ("INSERT into guestbook (SendingName, FromColleague, WhisesMessage) VALUES ('$name', '$from', '$message')");
if($sql_simpan && $errorMSG == "") {
 echo "success";
} else {
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}
?>