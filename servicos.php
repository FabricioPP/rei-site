<!Doctype php>
<php>

    <?php
        $title = '<title>Serviços</title>';
        $addCss = '<link rel="stylesheet" href="css/servicos.css" />';
        $page = 'servicos'; 
        include 'cabecalho.php' ?>
        <!-- ___________**********!!IMPORTANTE!!*************_____________
        @@@@
        @@@@@@@@@@@@@@@@@@@@
        @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
        @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
        @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
                                ARRUMAR OS TEXTOS DOS ARTICLES,
                                    URGENTEEEEEEEEE!!!!!!
        @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
        @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
        @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
        @@@@@@@@@@@@@@@@@@
        @@@@
    -->
        <!-- Section dos Articles
         Todos estão com display none, e será mudado através do JS abrirServico.js    
    -->
        <section>
            <!-- Article do Site -->
            <article id="articSite" class="article">
                <div id="artServico" class="servicos">
                    <figure class="servicos-figure">
                        <img id="articImg" src="images/sites_servicos.png" alt="Imagem com Notebook, Celular, e Tablet com o site da empresa na tela"
                        />
                    </figure>
                    <div class="texto-servicos">
                        <h3>Criação de Websites</h3>

                        <p>
                            Desenvolvemos
                            <strong>websites personalizados</strong> com as melhores tecnologias que há no mercado atualmente.
                        </p>

                        <p>
                            Desenvolvemos websites de acordo com as necessidades de cada cliente, analisámos cada caso, para obtermos informações e desenvolver
                            um site com
                            <strong>melhores resultados</strong>.
                        </p>

                        <p>
                            Websites completamente responsivos, é um único site que roda tanto em tablet, como também em celulares e desktop sem complicações
                            de ter que usar 2 links.
                        </p>

                        <h3>
                            Por que é importante ter um site?
                        </h3>

                        <p>
                            Independente do tipo de produto ou serviço que você venda, uma coisa é certa
                            <strong>seu público está na internet</strong>. E ter um site é a forma mais simples de ser encontrado
                            hoje na internet.
                        </p>

                        <p>
                            Se uma pessoa estiver curiosa sobre seu nicho ou sua empresa com certeza ela procurá-la na internet.
                        </p>
                        <p>
                            Segundo uma pesquisa feita pelo Google,
                            <a href="http://g1.globo.com/economia/noticia/2016/10/vendas-pela-internet-devem-dobrar-ate-2021-diz-pesquisa-do-google.html">a quantidade de vendas na internet deve dobrar dentro dos próximos anos</a>. Portanto, o seu
                            negócio não pode estar de fora do mundo digital.
                        </p>

                        <h3>Como a nossa empresa cria seu site</h3>

                        <p>
                            Desenvolvemos seu site com o máximo de profissionalismo, e com as melhores tecnologias da atualidade. Site completamente
                            responsivo que adapta a qualquer tela, desde aparelhos móveis a computadores pessoais. Desenvolvemos
                            usando tecnologias como: HTML5, CSS3, Javascript, Bootstrap, Jquery, PHP, MySQL, PostgreSQL e
                            outras.
                        </p>

                        <p style="text-align: center;">
                            <strong>Desenvolvemos além de sites, soluções completas para sua empresa como.</strong>
                        </p>

                    </div>
                    <div class="btn-center">
                        <button type="button" id="btnOrcamento" class="btn btn-success">
                            <a href="contato.php?orcar=1">Faça seu orçamento</a>
                        </button>
                    </div>

                </div>
            </article>
            <!-- Fim Article do Site -->

            <!-- Article da Loja Virtual -->
            <article id="articLoja" class="article">
                <div id="artServico" class="servicos">
                    <figure class="servicos-figure">
                        <img id="articImg" src="images/lojas_virtuais_servicos.png" alt="Imagem com Notebook, Celular, e Tablet com o site da empresa na tela"
                        />
                    </figure>
                    <div class="texto-servicos">
                        <h3>Lojas Virtuais(E-commerce)</h3>

                        <p>
                            Desenvolvemos sua
                            <strong>loja virtual</strong> com o melhor que há no mercado atualmente.
                        </p>
                        <p>
                            Tecnologias como Java EE, PHP, WooCommerce e outras.
                        </p>
                        <p>
                            A loja virtual tem várias opções de pagamento (cartão; boleto; avista; MercadoPago), calculo de frete, controle de estoque,
                            além de
                            <strong>suporte completo e atualizações com melhorias</strong>.
                        </p>

                        <h3>Por que ter uma loja virtual?</h3>

                        <p>
                            Sua empresa pode ser fora de série, possuir o melhor atendimento do mercado e oferecer um produto de altíssima qualidade.
                            Mas de que adiantaria tudo isso se as pessoas
                            <strong>não encontrassem o que você faz</strong>?
                        </p>

                        <p>
                            Ter uma
                            <strong>loja virtual</strong> é a melhor forma para você vender seus produtos pela internet. As vendas
                            na internet só tendem a crescer mais e mais, uma pesquisa feita pela Google, diz que
                            <a href="http://g1.globo.com/economia/noticia/2016/10/vendas-pela-internet-devem-dobrar-ate-2021-diz-pesquisa-do-google.html">a quantidade de vendas na internet deve dobrar dentro dos próximos anos</a>.
                        </p>

                        <p>
                            Segundo uma pesquisa feita pelo Comitê Gestor da internet no Brasil, as
                            <a href="https://www.terra.com.br/noticias/dino/aumento-do-lucro-do-e-commerce-salva-comercio-em-meio-a-crise,87d60f3cb3631e14233715cf18392ccaqmmbsn67.html">vendas online tiveram aumento de 7,4%</a> de aumento de lucro, enquanto as lojas físicas tiveram
                            queda de 7,4%.
                        </p>

                        <p>
                            Além de vender seus produtos pela internet, uma loja virtual também pode ser a porta de entrada para novos clientes presenciais.
                            As pessoas só de verem o que você está vendendo e seus preços faz surgir o interesse em obter
                            seus produtos. Além disso é um ótimo meio para seus clientes saberem sobre promoções e outras
                            informações sobre sua empresa.
                        </p>

                    </div>
                    <div class="btn-center">
                        <button type="button" id="btnOrcamento" class="btn btn-success">
                            <a href="contato.php?orcar=2">Faça seu orçamento</a>
                        </button>
                    </div>

                </div>
            </article>
            <!-- Fim Article Loja Virtual -->

            <!-- Article da SEO -->
            <article id="articSEO" class="article">
                <div id="artServico" class="servicos">
                    <figure class="servicos-figure">
                        <img id="articImg" src="images/seo_servicos.png" alt="Imagem com Notebook, Celular, e Tablet com o site da empresa na tela"
                        />
                    </figure>
                    <div class="texto-servicos">
                        <h3>O que é SEO?</h3>

                        <p>
                            SEO do inglês
                            <strong>Search Engine Optimization(Otimização para mecanismo de Busca)</strong>. É um conjunto de estratégias
                            para
                            <strong>otimização de sites</strong>, blogs e páginas na web.
                        </p>

                        <p>
                            Porém so ter um site não garante que você estará nas primeiras opções dos mecanismos de buscas, por isso é tao importante
                            fazer essas otimizações.
                        </p>

                        <p>
                            Essas otimizações visam alcançar bons rankings orgânicos para aumentar o tráfego e autoridade para um site ou blog. Com a
                            nossa otimização de sites você irá aparecer
                            <strong>nas primeiras páginas dos buscadores, como por exemplo o Google,</strong> e consequentemente
                            você irá obter mais tráfego no seu site ou loja virtual.
                        </p>
                    </div>
                    <div class="btn-center">
                        <button type="button" id="btnOrcamento" class="btn btn-success">
                            <a href="contato.php?orcar=3">Faça seu orçamento</a>
                        </button>
                    </div>

                </div>
            </article>
            <!-- Fim Article SEO -->

            <!-- Article da Refatoração -->
            <article id="articRefatora" class="article">
                <div id="artServico" class="servicos">
                    <figure class="servicos-figure">
                        <img id="articImgRefatora" src="images/refatora_servicos.png" alt="Imagem com Notebook, Celular, e Tablet com o site da empresa na tela"
                        />
                    </figure>
                    <div class="texto-servicos">
                        <h3>Por que refatorar o seu site?</h3>
                        <p>
                            Geralmente, sites mais antigos foram feitos com tecnologias já ultrapassadas e uma simples refatoração pode fazer o seu site
                            mudar da água para o vinho. Também pode haver problemas com o design do seu site e nós da Rei
                            podemos modificá-lo e deixar-lo com o seu estilo.
                        </p>
                        <p>
                            Se você estiver infeliz com seu site atual, nós podemos fazer uma análise e estudarmos as melhores possibilidade de refatorar
                            o seu site ou até mesmo construir um do zero.
                        </p>


                    </div>
                    <div class="btn-center">
                        <button type="button" id="btnOrcamento" class="btn btn-success">
                            <a href="contato.php?orcar=4">Faça seu orçamento</a>
                        </button>
                    </div>

                </div>
            </article>
            <!-- Fim Article Refatoraçao -->

            <!-- Article da Soluçoes WEB -->
            <article id="articSolucoes" class="article">
                <div id="artServico" class="servicos">
                    <figure class="servicos-figure">
                        <img id="articImg" src="images/solucoes_servicos.jpg" alt="Imagem com Notebook, Celular, e Tablet com o site da empresa na tela"
                        />
                    </figure>
                    <div class="texto-servicos">
                        <h3>O que pode ser feito no meu negócio?</h3>

                        <p>
                            Com um <strong>sistema web</strong> seu négocio só tende a ganhar. Nós da Rei trabalhamos com o desenvolvimento de sistemas web completos
                            para gestão de negócios, sistemas de gerenciamento de conteúdo, sistemas de apoio estratégico
                            a tomada de decisão, sistemas de autenticação de usuário para sistemas corporativos e aplicativos
                            Android com troca de informação via internet com o sistema web.
                        </p>

                        <p>
                            Um sistema web também permite que o seu negócio tenha uma análise mais precisa sobre os clientes,
                            produtos e informações. Termo este conhecido dentro da área de TI como <strong>Business Intelligence(BI)</strong>, inteligência de
                            negócios, que refere ao processo de coleta, organização, análise, compartilhamento e monitoramento de informações. 
                        </p>

                        <h3>Benefícios de um sistema web.</h3>

                        <ul>
                            <li>Rápido retorno de investimento</li>
                            <li>Melhoria no fluxo de informação</li>
                            <li>Automatização de tarefas repetitivas</li>
                            <li>Informações ativas e onlines 24h por dia 7 dias na semana</li>
                        </ul>

                    </div>
                    <div class="btn-center">
                        <button type="button" id="btnOrcamento" class="btn btn-success">
                            <a href="contato.php?orcar=5">Faça seu orçamento</a>
                        </button>
                    </div>

                </div>
            </article>
            <!-- Fim Article Soluções WEB -->
        </section>
        <!-- Fim Section Articles -->

        <section class="principal" id="principal">
            <h4 style="font-weight: bold;">Serviços</h4>
            <div class="texto">
                <h2 style="color: darkblue">
                    <strong>Conheça nossos serviços.</strong>
                </h2>
                <p>Fazemos desde a criação de sites profissionais e responsivos até sistemas completos para que seu negócio
                    decole na internet. Solicite já um orçamento.
                </p>

                <button type="button" id="btnOrcamento" class="btn btn-success">
                    <a href="contato.php">Faça seu orçamento</a>
                </button>
            </div>
        </section>

        <!-- Começo Section dos Cards de serviços -->
        <section class="section_cards">
            <div class="container-cards-servicos">
                <!-- Card Site -->
                <div class="card-servicos">
                    <div class="img-box">
                        <a href="#" onclick="abrirArtic(1)">
                            <img class="img-default" src="images/site_card2.png" />
                        </a>
                        <a href="#" onclick="abrirArtic(1)">
                            <img class="img-hover" src="images/site_card3.png" />
                        </a>
                    </div>

                    <div class="texto-card-servicos">
                        <a href="#" onclick="abrirArtic(1)">
                            <h4>Criação de Site</h4>
                            <p>Sites desenvolvidos com as tecnologias mais atuais.
                            </p>
                        </a>
                    </div>
                </div>
                <!-- fim Card Site -->
                <!-- Card Loja Virtual -->
                <div class="card-servicos">
                    <div class="img-box">
                        <a href="#" onclick="abrirArtic(2)" />
                        <img class="img-default" src="images/lojavirtual_card2.png" />
                        </a>
                        <a href="#" onclick="abrirArtic(2)">
                            <img class="img-hover" src="images/lojavirtual_card3.png" />
                        </a>
                    </div>

                    <div class="texto-card-servicos">
                        <a href="#" onclick="abrirArtic(2)">
                            <h4>Criação de Lojas Virtuais</h4>
                            <p>Crie uma loja virtual e venda para todo o Brasil.
                            </p>
                        </a>
                    </div>
                </div>
                <!-- Fim Card Loja Virtual -->
                <!-- Card Otimização Seo -->
                <div class="card-servicos">
                    <div class="img-box">
                        <a href="#" onclick="abrirArtic(3)">
                            <img class="img-default" src="images/seo_card2.png" />
                        </a>
                        <a href="#" onclick="abrirArtic(3)">
                            <img class="img-hover" src="images/seo_card3.png" />
                        </a>
                    </div>

                    <div class="texto-card-servicos">
                        <a href="#" onclick="abrirArtic(3)">
                            <h4>Otimização de SEO</h4>
                            <p>Apareça no Google e expanda sua marca.
                            </p>
                        </a>
                    </div>
                </div>
                <!-- Fim Card Otimização Seo -->
                <!-- Card Refatoraçao Site -->
                <div class="card-servicos clear">
                    <div class="img-box">
                        <a href="#" onclick="abrirArtic(4)">
                            <img class="img-default" src="images/refatoracao_card.png" />
                        </a>
                        <a href="#" onclick="abrirArtic(4)">
                            <img class="img-hover" src="images/refatoracao_card2.png" />
                        </a>
                    </div>

                    <div class="texto-card-servicos">
                        <a href="#" onclick="abrirArtic(4)">
                            <h4>Refatoração e Manutenção de Sites</h4>
                            <p>Fazemos a refatoração de seu site e deixamos ele com a sua cara.
                            </p>
                        </a>
                    </div>
                </div>
                <!-- Fim Card Refatoração Sites -->
                <!-- Card Sistemas Web -->
                <div class="card-servicos">
                    <div class="img-box">
                        <a href="#" onclick="abrirArtic(5)">
                            <img class="img-default" src="images/solucoes_web_card3.png" />
                        </a>
                        <a href="#" onclick="abrirArtic(5)">
                            <img class="img-hover" src="images/solucoes_web_card2.png" />
                        </a>
                    </div>

                    <div class="texto-card-servicos">
                        <a href="#" onclick="abrirArtic(5)">
                            <h4>Sistemas Web</h4>
                            <p>Faça a tecnologia trabalhar para você.
                            </p>
                        </a>
                    </div>
                </div>
                <!-- Fim Card Sistemas Web -->

            </div>

        </section>
        <!-- Fim Section dos Cards de Serviços -->
        <!-- Switch com os valores e chama o java script com a funçao certa de abrir os articles -->
        <?php
        $addScript = '<script src="js/abrirServico.js"></script>';
        $val;

        if(isset($_GET['val'])){
            $val = $_GET['val'];
            
        }else
        {
            $val = 0;
           
        }
        switch ($val){
            case 0:
                break;
            case 1:
                $addScript .= '<script>
                    abrirArtic(1);
                </script>';
                break;
            case 2:
                $addScript .= '<script>
                    abrirArtic(2);
                </script>';
                break;
            case 3:
                $addScript .= '<script>
                    abrirArtic(3);
                </script>';
                break;
            case 4:
                $addScript .= '<script>
                    abrirArtic(4);
                </script>';
                break;
            case 5:
                $addScript .= '<script>
                    abrirArtic(5);
                </script>';
                break;    
        }
    
                        ;
    include 'rodape.php'
    ?>
</php>