
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projek elektronik</title>
    <link rel="stylesheet" href="hias.css" type="text/css">
    <link rel='shortcut icon' href='gambar/lopo.jpeg' type='image/x-icon' />
</head>

<div id="isi" style="height: 100% auto; position: absolute;">
<?php
		error_reporting(0);
	    //follow request
	    //tangkap request,lalu simpan kedalam variable
	    $hal = $_REQUEST['hal'];
	    //cek apakah ada atau  tidak request di url
	    if(!empty($hal)) {
		    //arahkan ke file tujuan
		    include_once $ar_menu[$hal];
	    }
	    else {
		    //arahkan ke halaman home
		    include_once $ar_menu['home'];
		    }
		    ?>
            