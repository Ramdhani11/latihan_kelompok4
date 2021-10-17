<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Prog II || Merancang template sederhana menggunakan Codeigniter</title>
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/stylebuku.css">
</head>

<body>
    <div id="wrapper">
        <header>
            <hgroup>
                <h1>RENTALBUKU.NET</h1>
                <h3>Membuat Template Sederhana Menggunakan CodeIgniter</h3>
            </hgroup>
            <nav>
                <ul>
                    <li><a href="<?= base_url() . "index.php/Web" ?>">Home</a></li>
                    <li><a href="<?= base_url() . "index.php/Web/about" ?>">About</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </header>