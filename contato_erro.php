<?php
    $addCss = '<style>
                    body{
                        background-color:  rgb(67, 175, 221);
                    }
                    .container{
                        background-color:  white;
                        margin: auto;
                        margin-top: 80px;
                        margin-bottom: 10px;
                        padding-bottom: 20px;
                        max-width: 90%;
                    }
                    h1{
                        color: red;
                        text-align: center;
                    }
                    @media(min-width: 640px){
                        footer{
                            position: fixed;
                            bottom: 0;
                        }
                    }
                </style>';
    $title = '<title>Error! - Algo não deu certo - Rei - Empresa de Criação e Desenvolvimento de Sites</title>';
    $page = 'contato';
    include 'cabecalho.php' ?>
    <div class="container">
        <h1>Error</h1>
            
        <hr>
            
        <p>Houve um erro no envio do e-mail.</p>

        <a href="contato.php">Tentar novamente.</a>
    </div>

<?php include 'rodape.php' ?>