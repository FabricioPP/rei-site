var articSite = document.getElementById("articSite");
var articLoja = document.getElementById("articLoja");
var articSeo = document.getElementById("articSEO");
var articRefatora = document.getElementById("articRefatora");
var articSolucoes = document.getElementById("articSolucoes");
var principal = document.getElementById("principal");


setConfigPrincipal();



function abrirArtic(num){
    var servicos = document.getElementById("artServico");
    

    switch(num){
        case 1:
            if(articSite.style.display == "none" || articSite.style.display == ""){
                setArticDisplayNone();
                setConfigPrincipalParaUsarArtic();
                articSite.style.display = "block";
            }else{
                setConfigPrincipal();
            }
            break;
        case 2:
            if(articLoja.style.display == "none" || articLoja.style.display == ""){
                setArticDisplayNone();
                setConfigPrincipalParaUsarArtic();
                articLoja.style.display = "block";

            }else{
                setConfigPrincipal();
            }
            break;
        case 3:
            if(articSeo.style.display == "none" || articSeo.style.display == ""){
                setArticDisplayNone();
                setConfigPrincipalParaUsarArtic();
                articSeo.style.display = "block";

            }else{
                setConfigPrincipal();
            }
            break;   
        case 4:
            if(articRefatora.style.display == "none" || articRefatora.style.display == ""){
                setArticDisplayNone();
                setConfigPrincipalParaUsarArtic();
                articRefatora.style.display = "block";

            }else{
                setConfigPrincipal();
            }
            break; 
        case 5:
            if(articSolucoes.style.display == "none" || articSolucoes.style.display == ""){
                setArticDisplayNone();
                setConfigPrincipalParaUsarArtic();
                articSolucoes.style.display = "block";

            }else{
                setConfigPrincipal();
            }
            break; 
        default:
            setConfigPrincipal();

    }
}



function setArticDisplayNone(){
    articSite.style.display = "none";
    articLoja.style.display = "none";
    articSeo.style.display = "none";
    articRefatora.style.display = "none";
    articSolucoes.style.display = "none";
}

function setConfigPrincipal(){

    articSite.style.display = "none";
    articLoja.style.display = "none";
    articSeo.style.display = "none";
    articRefatora.style.display = "none";
    articSolucoes.style.display = "none";

    
    principal.style.paddingTop = 70;
    principal.style.backgroundColor = "#fff";

}

function setConfigPrincipalParaUsarArtic(){
    principal.style.paddingTop = 10;
    principal.style.backgroundColor = "rgb(67, 175, 221)";

}

