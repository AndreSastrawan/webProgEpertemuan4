<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Web</title>

    <link rel="stylesheet" href="style.css">

    <style>
        .sembunyi{
            display: ;
        }
        .kotak-info{
            background-color: #fff;
            padding: 16px;
            margin: 12px;
            border: 2px solid #cbd5e1;
            border-radius: 6px;
            
        }
    </style>
</head>
<body>

<h2> Contoh text </h2>
<div class="flex-center">
<div class="kartu-profile">
    <h2>Andre</h2>
    <p>web instiki</p>
    <button onclick="info()" class="btn-detaiL">info lengkap</button>
</div>
</div>  

<div class="kotak-info sembunyi">
    <h1> informasi detail</h1>
</div>
    <script>
        function inpo(){
            alert("tombol lengkap di ke click");
        }
    </script>
</body>
</html>