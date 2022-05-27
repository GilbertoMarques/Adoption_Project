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
                    <img src="bg.png" alt="">
                </div>

                <div class="slide">
                    <img src="bg1.png" alt="">
                </div>

                <div class="slide">
                    <img src="bg3.png" alt="">
                </div>

                <div class="slide">
                    <img src="bg2.png" alt="">
                </div>
            
              <div class="navigation-bar">
                <label for="radio1">Botão 1</label>
                <label for="radio2">Botão 2</label>
                <label for="radio3">Botão 3</label>
                <label for="radio4">Botão 4</label>
              </div>

            </div>

        </div>

    <script src="menu.js"></script>

</body>
</html>