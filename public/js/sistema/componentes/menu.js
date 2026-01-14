let boxFecharMenu = document.querySelector('#box-fechar-menu');
let boxAbrirMenu = document.querySelector('#box-abrir-menu');
let fecharMenu = document.querySelector('#btn-fechar-menu');
let abrirMenu = document.querySelector('#btn-abrir-menu');
let boxLinksMenu = document.querySelector('#box-links-menu');
let linksMenu = document.getElementsByClassName('link-menu-fechado');
let linkAbrirMenu = document.querySelector('#abrir-menu');
let linkSair = document.querySelector('#link-sair');
let textosLink = document.getElementsByClassName("texto-link-menu");
let menu = document.querySelector('#menu');
let sombraMenu = document.querySelector('#sombra-menu');
let sombraMenuParag = document.querySelector('#sombra-menu p');
let boxConteudo = document.querySelector('#box-conteudo');

fecharMenu.addEventListener('click', ()=>{

    menu.style.display = "inline-block";
    menu.style.width = "45px";
    menu.style.padding = "10px 0 0 0px";

    sombraMenu.style.width = '25px';
    sombraMenuParag.style.display = 'none';

    boxFecharMenu.style.display = "none";

    boxAbrirMenu.style.display = "flex";
    boxAbrirMenu.style.height = "120px";
    boxAbrirMenu.style.position = "relative";
    boxAbrirMenu.style.left = "23px";

    boxLinksMenu.style.width = '100%';
    boxLinksMenu.style.marginBottom = '50px';

    for( let i=0;i<linksMenu.length;i++ ){
        linksMenu[i].style.position = "relative";
        linksMenu[i].style.left = "7px";
        linksMenu[i].style.marginBottom = "10px";
    }

    for( let i=0;i<textosLink.length;i++ ){
        textosLink[i].style.display = "none";
    }
    
    linkSair.style.border = "unset";
    linkSair.style.bottom = "0px";
    
});

abrirMenu.addEventListener('click', ()=>{

    menu.style.display = "flex";
    menu.style.width = "220px";
    menu.style.padding = "10px 0 0 25px";

    sombraMenu.style.width = '240px';
    sombraMenuParag.style.display = 'flex';

    boxFecharMenu.style.display = "flex";

    boxAbrirMenu.style.display = "none";

    boxLinksMenu.style.width = '100%';
    boxLinksMenu.style.marginBottom = '0px';

    for( let i=0;i<linksMenu.length;i++ ){
        linksMenu[i].style.position = "relative";
        linksMenu[i].style.left = "0px";
        linksMenu[i].style.marginBottom = "0px";
    }

    for( let i=0;i<textosLink.length;i++ ){
        textosLink[i].style.display = "flex";
    }
    
    linkSair.style.borderTop = "1px solid #DCDCDC";
    linkSair.style.bottom = "40px";

});
