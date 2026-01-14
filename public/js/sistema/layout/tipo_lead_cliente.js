let pf = document.querySelector("#pessoa-fisica");
let pj = document.querySelector("#pessoa-juridica");
let pfInputTexto = document.querySelector("#box-cpf");
let pjInputTexto = document.querySelector("#box-cnpj");


pf.addEventListener('click', ()=>{

    pfInputTexto.style.display = "inline-block";
    pjInputTexto.style.display = "none";

});

pj.addEventListener('click', ()=>{

    pfInputTexto.style.display = "none";
    pjInputTexto.style.display = "inline-block";

});