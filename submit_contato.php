<?php

require_once "recaptchalib.php";
$secret = "6LdF5lcUAAAAAKHnNWBe9w_9Q9pq5aRUqNZyIPXp";
$response = null;
$reCaptcha = new ReCaptcha($secret);

if ($_POST["g-recaptcha-response"]) {
    $response = $reCaptcha->verifyResponse($_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]);
}



function pegaValor($valor) {
    return isset($_POST[$valor]) ? $_POST[$valor] : '';
}

function pegaCheck(){
    $tipo = $_POST['checkbox']; 
    $valores = ''; 
    foreach($tipo as $k => $v){ 
    $valores .= $v."\n"; 
    } 
    return $valores; 
}

function validaEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function enviaEmail($de, $assunto, $mensagem, $para, $email_servidor) {
    $headers = "From: $email_servidor\r\n" .
               "Reply-To: $de\r\n" .
               "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
  
    mail($para, $assunto, nl2br($mensagem), $headers);


}

// deu tudo certo?


if ($response != null && $response->success) {
    $email_servidor = "reisite.com.br";
    $para = "fabriciopatrocinio94@hotmail.com";
    $nome = pegaValor("nome");
    $de = pegaValor("email");
    $telefone = pegaValor("telefone");
    $empresa = pegaValor("empresa");
    $celular = pegaValor("celular");
    $msg = pegaValor("mensagem");
    $interesse = pegaCheck();
    $assunto = "Orçamento Site Rei";
    $mensagem = "Nome:".$nome."\nTelefone:".$telefone."\nEmail:".$de."\nCelular:".$celular."\nEmpresa:".$empresa."\n\nMensagem:".$msg."\n\nInteresse:".$interesse;

    if ($nome && validaEmail($de) && $mensagem) {
        enviaEmail($de, $assunto, $mensagem, $para, $email_servidor);
        $pagina = "contato_ok.php";
        header("location:$pagina");
    } else {
        $pagina = "contato_erro.php";
        header("location:$pagina");
    }
}else{
    $pagina = "contato_erro.php";
    header("location:$pagina");
    echo('Tem que colocar a captcha.');
}




?>