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
                        color: green;
                        text-align: center;
                    }
                    @media(min-width: 640px){
                        footer{
                            position: fixed;
                            bottom: 0;
                        }
                    }
                </style>';
    $title = '<title>Orçamento feito com Sucesso! - Rei - Empresa de Criação e Desenvolvimento de Sites</title>';
    $page = 'contato';
    include 'cabecalho.php' ?>
    <div class="container">
        <h1>Sucesso</h1>
            
        <hr>
            
        <p>O orçamento foi enviado com sucesso.</p>
        
        <p>Dentro de alguns minutos chegará a resposta em seu e-mail com o orçamento.</p>

        <p>Desde já agradecemos o seu contato.</p>

        <a href="index.php">Voltar para página inicial.</a>
    </div>
<?php include 'rodape.php' ?>