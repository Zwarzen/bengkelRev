<?php 
//get time

//date_default_timezone_get('Asia/Jakarta');

session_start();

//koneksi
/**
	Author : Risang Daniswara;
	Initial State : $con;
	Final State : echo mysqli_connect_error();
	Date : 25/07/2019;
	Ver : Bootstrap 3;
*/

$con =mysqli_connect('localhost','root','','db_bengkel');
if(mysqli_connect_error()) {
    echo mysqli_connect_error();
}

//fungsi base_url
/**
	Author : Risang Daniswara;
	Initial State : base_url;
	Final State : return $base_url;
	Date : 25/07/2019;
	Ver : Bootstrap 3;
*/
function base_url($url = null){
    $base_url = "https://localhost/bengkel";
    if($url != null){    
        return $base_url."/".$url;
    }
    else{
        return $base_url;
    }
}
?>