let btnAtualizaPermissao = document.getElementsByClassName('bi-pencil-square');
let atualizaPermissao = document.getElementsByClassName('atualiza-permissao');
let fecharAtualizaPermissao = document.getElementsByClassName('bi-x-lg');

for(let i=0;i<btnAtualizaPermissao.length;i++){

    btnAtualizaPermissao[i].addEventListener('click', ()=>{
        
        for(let j=0;j<atualizaPermissao.length;j++){

            if( i==j ){
                atualizaPermissao[j].style.display = "flex";        
            }

        }
    });

}

for(let i=0;i<fecharAtualizaPermissao.length;i++){

    fecharAtualizaPermissao[i].addEventListener('click', ()=>{
        
        for(let j=0;j<atualizaPermissao.length;j++){

            if( i==j ){
                atualizaPermissao[j].style.display = "none";
            }

        }
    });

}
