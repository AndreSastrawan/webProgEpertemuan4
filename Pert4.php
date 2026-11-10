    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Belajar Web</title>

        <link rel="stylesheet" href="style.css">

        <style>
            .sembunyi{
                display: none; 
            }
            .kotak-info{
                background-color: #fff;
                padding: 16px;
                margin: 12px;
                border: 2px solid #cbd5e1;
                border-radius: 6px;
                
            }
            .btn-close{
                position: relative;
                top: 8px;
                right: 10px;
                border: none;
                background: none;
                font-size: 18px;
                font-weight: bold;
                cursor: pointer;
                color: #463b3b;
            }
            .btn-close:hover{
                color: #f10000;
            } 
        </style>
    </head>
    <body>

    <h2> Contoh text </h2>  
    <div class="flex-center">
    <div class="kartu-profile">
        <h2>Andre</h2>
        <p>web instiki</p>
        <button id="btndetail" onclick="info()" class="btn-detaiL">info lengkap</button>
    </div>
    </div>  

    <div class="kotak-info sembunyi" id="infobox">
        <button onclick="tutupdetail()" class="btn-close">&times;</button>
        <h1> informasi detail</h1>
    </div>

        <script>
            function info (){
            // alert("tombol lengkap di ke click");
            let info=document.getElementById("infobox");
            let btndetail=document.getElementById("btndetail");

            info.style.display = "block";
            btndetail.style.display = "none"
            }et
    function tutupdetail (){    
            // alert("tombol lengkap di ke click");
            let info=document.getElementById("infobox");
            let btndetail=document.getElementById("btndetail");

            info.style.display = "none";
            btndetail.style.display = "inline-block"
            }
        </script>
    </body>
    </html>