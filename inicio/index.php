<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="icon" type="imagem/png" href="logo.png"/>
    <title>Início | Focinho Feliz</title>
</head>
<body>

    <header>
        <div class="container">

            <div class="logo">
                <img src="logo1.png" alt="logo1.png" style="width:120px;height:60px;object-fit:cover;object-position:50% 50%">
            </div>

            <div class="menu-section">

                <div class="menu-burguer">
                    <div class="one"></div>
                    <div class="two"></div>
                    <div class="three"></div>
                </div>

                <nav>
                    <ul>
                        <li><a href="#">Início</a></li>
                        <li><a href="#">Sobre</a></li>
                        <li><a href="#">Adotar</a></li>
                        <li><a href="#">Contato</a></li>
                        <li><a href="../login/logout.php">Sair</a></li>
                    </ul>
                </nav>

            </div>
        
        </div>
        
    </header>
  
        <div class="slider">

            <div class="slides">
                
                <input type="radio" name="radio-btn" id="radio1">
                <input type="radio" name="radio-btn" id="radio2">
                <input type="radio" name="radio-btn" id="radio3">
                <input type="radio" name="radio-btn" id="radio4">

                <div class="slide first">
                    <img src="bgn1.png" alt="">
                </div>

                <div class="slide">
                    <img src="bgn3.png" alt="">
                </div>

                <div class="slide">
                    <img src="bgn2.png" alt="">
                </div>

                <div class="slide">
                    <img src="bgn.png" alt="">
                </div>

                <div class="navigation-auto">
                    <div class="auto-btn1"></div>
                    <div class="auto-btn2"></div>
                    <div class="auto-btn3"></div>
                    <div class="auto-btn4"></div>
                </div>

            </div>
            
              <div class="navigation-bar">
                <label class="manual-btn" for="radio1"></label>
                <label class="manual-btn" for="radio2"></label>
                <label class="manual-btn" for="radio3"></label>
                <label class="manual-btn" for="radio4"></label>
              </div>

            </div>

        </div>

    <script src="menu.js"></script>

</body>
</html>