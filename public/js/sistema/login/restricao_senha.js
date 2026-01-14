let inputSenha = document.querySelector('#inputSenhaNova');
let inputRepetirSenha = document.querySelector('#inputRepetirSenha');
let btnForm = document.querySelector('#btn-form');
let instrucaoChar = document.querySelector('#instrucao-caracteres');
let instrucaoMaiuscula = document.querySelector('#instrucao-maiuscula');
let instrucaoNumero = document.querySelector('#instrucao-numero');
let instrucaoEspecial = document.querySelector('#instrucao-especial');
let letras = [
    'a','b','c','d','e','f','g','h','i','j',
    'k','l','m','n','o','p','q','r','s','t',
    'v','x','w','y','z','ç'
];
let numeros = ['0','1','2','3','4','5','6','7','8','9'];
let especiais = ['!','@','#','$','%','¨','&','*','(',')','_','-','+','=','.',',',';'];
let statusRestricaoCaracteres = false;
let statusRestricaoMaiuscula = false;
let statusRestricaoNumero = false;
let statusRestricaoEspecial = false;
let statusRestricaoSenhasIguais = false;

function verificaQuantCaracteres (valor){
    let result = false;
    if(valor.length>=8){
        result = true;
    }
    return result;
}

function verificaMaiuscula(valor){
    let possui = false;
    for(let i=0;i<letras.length;i++){

        if(valor.includes(letras[i].toUpperCase())){
            possui = true;
        }
    }
    return possui;
}

function verificaNumero(valor){
    let possui = false;
    for(let i=0;i<numeros.length;i++){

        if(valor.includes(numeros[i].toUpperCase())){
            possui = true;
        }
    }
    return possui;
}

function verificaEspecial(valor){
    let possui = false;
    for(let i=0;i<especiais.length;i++){

        if( valor.includes(especiais[i]) ){
            possui = true;
        }
    }
    return possui;
}


function verificaSenhas(){
    let iguais = false;
    if(inputSenha.value===inputRepetirSenha.value){
        iguais = true;
    }
    return iguais;
}

inputSenha.addEventListener('input',function(e){

    let valor = inputSenha.value;
    
    statusRestricaoCaracteres = verificaQuantCaracteres(valor);
    statusRestricaoMaiuscula = verificaMaiuscula(valor);
    statusRestricaoNumero = verificaNumero(valor);
    statusRestricaoEspecial = verificaEspecial(valor);
    statusRestricaoSenhasIguais = verificaSenhas();

    if( statusRestricaoCaracteres ){
        instrucaoChar.style.color = 'green';
    }else{
        instrucaoChar.style.color = '#AA1F2B';
    }

    if( statusRestricaoMaiuscula ){
        instrucaoMaiuscula.style.color = 'green';
    }else{
        instrucaoMaiuscula.style.color = '#AA1F2B';
    }

    if( statusRestricaoNumero ){
        instrucaoNumero.style.color = 'green';
    }else{
        instrucaoNumero.style.color = '#AA1F2B';
    }

    if( statusRestricaoEspecial ){
        instrucaoEspecial.style.color = 'green';
    }else{
        instrucaoEspecial.style.color = '#AA1F2B';
    }

    if( statusRestricaoSenhasIguais){
        inputRepetirSenha.style.boxShadow = '1px 1px 8px green';
    }else{
        inputRepetirSenha.style.boxShadow = '1px 1px 8px #AA1F2B';
    }
    
    if(  statusRestricaoCaracteres && statusRestricaoMaiuscula && statusRestricaoNumero && statusRestricaoEspecial )
    {
        inputSenha.style.boxShadow = '1px 1px 8px green';
    }
    else
    {
        inputSenha.style.boxShadow = '1px 1px 8px #AA1F2B';
    }

    if(  statusRestricaoCaracteres && statusRestricaoMaiuscula && statusRestricaoNumero && statusRestricaoEspecial &&  statusRestricaoSenhasIguais)
    {
        btnForm.style.visibility = 'visible';
    }
    else
    {
        btnForm.style.visibility = 'hidden';
    }

});

inputRepetirSenha.addEventListener('input',function(e){

    statusRestricaoSenhasIguais = verificaSenhas();

    if( statusRestricaoSenhasIguais){
        inputRepetirSenha.style.boxShadow = '1px 1px 8px green';
    }else{    
        inputRepetirSenha.style.boxShadow = '1px 1px 8px #AA1F2B';
    }        



    if(  statusRestricaoCaracteres && statusRestricaoMaiuscula && statusRestricaoNumero && statusRestricaoEspecial &&  statusRestricaoSenhasIguais)
    {
        btnForm.style.visibility = 'visible';
    }
    else
    {
        btnForm.style.visibility = 'hidden';
    }

});

