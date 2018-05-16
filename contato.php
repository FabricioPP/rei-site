    <?php 
        $title = '<title>Contato - Faça seu orçamento</title>';
        $addCss = '<link href="css/contatos.css" rel="stylesheet" />';
        $page = 'contato';
        include 'cabecalho.php';

        $orcar;
        if(isset($_GET["orcar"])){
            $orcar = $_GET["orcar"];
        }else{
            $orcar = 1;
        }
    ?>

    <div class="container-form">
        <h3 style="text-align: center; color: darkblue;">Solicite seu orçamento</h3>
        <hr>
        <form action="submit_contato.php" method="post">
            <label for="fNome">Nome</label>
            <input type="text" id="fNome" name="nome" placeholder="Ex.: José da Silva Santos" required>

            <label for="fEmail">E-mail</label>
            <input type="email" id="fEmail" name="email" placeholder="Ex.: seuemail@email.com.br" required>

            <label for="fEmpresa">Empresa</label>
            <input type="text" id="fEmpresa" name="empresa" placeholder="Ex.: XYZ Empresa de Produtos Agrículas" required>

            <label for="fTelefone">Telefone</label>
            <input type="tel" id="fTelefone" name="telefone" placeholder="Ex.: (99) 9999-9999" required>

            <label for="fCelular">Celular</label>
            <input type="tel" id="fCelular" name="celular" class="sp_celphones" placeholder="Ex.: (99) 9-9999-9999">

            <div class="container-check">
                <label>Qual seu interesse</label>
                <div id="fCheckBox" class="form-check">
                    <input type="checkbox" id="checkbox1" class="form-check-input" name="checkbox[]" value="Site" <?php if($orcar == 1) { echo 'checked';} ?>>
                    <label class="form-check-label" for="checkbox1">Site</label>
                </div>

                <div id="fCheckBox" class="form-check">
                    <input type="checkbox" id="checkbox2" class="form-check-input" name="checkbox[]" value="Loja Virtual" <?php if($orcar == 2) { echo 'checked';} ?>>
                    <label class="form-check-label" for="checkbox2">Loja Virtual</label>
                </div>

                <div id="fCheckBox" class="form-check">
                    <input type="checkbox" id="checkbox3" class="form-check-input" name="checkbox[]" value="Seo" <?php if($orcar == 3) { echo 'checked';} ?>>
                    <label class="form-check-label" for="checkbox3">Otimização de SEO</label>
                </div>

                <div id="fCheckBox" class="form-check">
                    <input type="checkbox" id="checkbox4" class="form-check-input" name="checkbox[]" value="Solucoes" <?php if($orcar == 4) { echo 'checked';} ?>>
                    <label class="form-check-label" for="checkbox4">Refatoração de Sites</label>
                </div>

                <div id="fCheckBox" class="form-check">
                    <input type="checkbox" id="checkbox4" class="form-check-input" name="checkbox[]" value="Solucoes" <?php if($orcar == 5) { echo 'checked';} ?>>
                    <label class="form-check-label" for="checkbox4">Sistemas Web</label>
                </div>
            </div>

            <label for="fMensagem">Mensagem</label>
            <textarea id="fMensagem" name="mensagem" placeholder="Digite sua Mensagem..." style="height:190px"></textarea>

            <div class="g-recaptcha captcha" 
            data-sitekey="6LdF5lcUAAAAAN-rFT5d5JPlcALLApbQAnz7MXAI" 
            style="@media screen and (max-height: 575px){ #rc-imageselect, .g-recaptcha {transform:scale(0.77);
                -webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;} }
                @media screen and (max-width: 640px){ #rc-imageselect, .g-recaptcha {transform:scale(0.77);
                -webkit-transform:scale(0.77);transform-origin:0 0;-webkit-transform-origin:0 0;} }"></div>

            <br/>
            <input type="submit" value="Enviar" id="btnSubmit">

            
        </form>
    </div>
        <div class="container-fluid">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-12 col-md-4 col-lg-3 contato" align="center">
                        <h4>Horário de funcionamento:</h4>
                        <p>
                            De segunda a sábado:
                            <br/>das 08:00 às 18:00
                        </p>
                    </div>

                    <div class="col-sm-12 col-md-4 col-lg-3 contato" align="center">
                        <h4>Endereço:</h4>
                        <p>
                            Rua das Hortências, 75
                            <br/>Bairro Costa do Sol
                            <br/>Paraguaçu-MG
                            <br/>CEP: 37120-000
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-4 col-lg-3 contato" align="center">
                        <h4>Telefone:</h4>
                        <p>
                            (35) 98443-4914
                            <br/>(35) 99918-2975
                        </p>
                    </div>
                </div>
            </div>
        </div>
    <?php $addScript = '<script src="js/jquery.mask.js"></script>
                        <script src="https://www.google.com/recaptcha/api.js"></script>
                        ';
    include 'rodape.php'
    ?>