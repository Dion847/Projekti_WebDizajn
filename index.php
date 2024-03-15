<?php include("header.php");?>
    <title>Flavor Haven Restaurant</title>
    <link rel="stylesheet" href="Css/Style.css">
</head>
<html>
<body>
    <main>
        <div class="bgfoto" id="bgfotoDiv" style="background-image: url(Css/burgeri1.jpg); background-size: 100% 100%;">
            <div class="text">
                <p>"Bite into joy with a burger."</p>
            </div>
        </div>
        <script>
            let i = 0;
            let bgfotoArray = ['Css/burgeri1.jpg', 'Css/burgeri2.jpg', 'Css/burgeri3.jpg'];
        
            function changeImg() {
                let bgfotoDiv = document.getElementById('bgfotoDiv');
        
                bgfotoDiv.style.backgroundImage = `url(${bgfotoArray[i]})`;
        
                if (i < bgfotoArray.length - 1) {
                    i++;
                } else {
                    i = 0;
                }
                setTimeout(changeImg, 2000);
            }
            window.onload = changeImg;
        </script>
    </main>
    <?php include("Footer.php");?>
</body>

</html>