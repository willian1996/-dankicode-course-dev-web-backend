<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do meu web site"/>
    <meta name="keywords" content="palavras-chave,do,meu,site">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
    <title>Projeto 01</title>
</head>
<body>
<?php
//    echo $_GET['url'];
    
?>
    
    <header>
        <div class="center">
            <div class="logo left"><a href="index.php">Logomarca</a></div><!--logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="pages/contato.php">Contato</a></li>
                </ul>
            </nav><!--desktop-->
            <nav class="mobile right">
                <div class="botao-menu-mobile">
                    <i class="fas fa-bars"></i>
                
                </div>
                <ul>
                    <li><a href="index.php">Home</a></li>
                    <li><a href="">Sobre</a></li>
                    <li><a href="">Serviços</a></li>
                    <li><a href="pages/contato.php">Contato</a></li>
                </ul>
            </nav><!--mobile-->
        </div><!--center-->
        <div class="clear"></div><!--clear-->
    </header>
    <?php
    
    $url = isset($_GET['url'])?$_GET['url'] : 'home';
    
    
    if(file_exists('pages/'.$url.'.php')){
        include('pages/'.$url.'.php');
    }else{
        include('pages/404.php');
    }
    
    
    
    
    ?>
    <footer>
        <div class="center">
            <p>Todos os direitos reservas</p>
        </div><!--center-->
    </footer>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>