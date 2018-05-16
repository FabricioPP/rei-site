<head>
    <title>Serviços - Rei - Empresa de Criação e Desenvolvimento de Sites</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/reset.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/estilos.css" />
    <link rel="stylesheet" href="css/servicos.css" />
    <link rel="stylesheet" href="css/topButton.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
        <div id="myNavbar" class="topnav" style="z-index: 9">
            <h1>
                <a href="index.php" alt="Logo Rei - Empresa de Criação e Desenvolvimento de Sites!">
                    <img id="imgNav" src="images/reilogo3.png" />
                </a>
            </h1>


            <a id="linkHome" href="index.php" class="">Página Inicial</a>
            <a id="linkProdutos" class="active" href="#produtos">Serviços</a>
            <a id="linkSobre" class="" href="#sobre">Sobre</a>
            <a id="linkContato" class="" href="#contato">Contato</a>
            <div id="icone" class="icon" onclick="openNav()">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>
        </div>
    <div class="overlay" id="myNav">
        <div class="overlay-content" id="overlay-content">
            <a id="linkHome" class="active uppercase" href="index.php" onclick="openNav()">Página Inicial</a>
            <a id="linkProdutos" class="uppercase" href="#produtos" onclick="openNav()">Serviços</a>
            <a id="linkSobre" class="uppercase" href="#sobre" onclick="openNav()">Sobre</a>
            <a id="linkContato" class="uppercase" href="#contato" onclick="openNav()">Contato</a>
        </div>

    </div>