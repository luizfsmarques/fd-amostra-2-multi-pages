let pesquisa = document.querySelector("#input-pesquisa");
let registro = document.querySelectorAll(".accordion-item");
let quant = document.querySelectorAll("#quant");

let totalRegistros = document.getElementsByClassName('accordion-item').length;
let registrosPesquisados = 0;

// console.log(quant[0].innerText);

quant[0].innerText = totalRegistros;



pesquisa.addEventListener('input', function(e){

    let backspace = e.inputType;

    if( backspace ==="deleteContentBackward" ){

        if( pesquisa.value.length > 0 ){

            quant[0].innerText = totalRegistros;
            registrosPesquisados = 0;

            for(let i=0;i<registro.length;i++){
                registro[i].style.display = 'inline-block';
            registro[i].style.width = '100%';

            }

            for(let i=0;i<registro.length;i++){
    
                let stringContem = registro[i].innerText.toUpperCase();
                let stringContida = pesquisa.value.toUpperCase();

                if( !(stringContem.includes(stringContida)) ){
                    
                    registro[i].style.display = 'none';
                }else{
                    registrosPesquisados++;
                }
            }
    
        }
    
    }if( pesquisa.value.length > 0 ){

        quant[0].innerText = totalRegistros;
        registrosPesquisados = 0;

        for(let i=0;i<registro.length;i++){

            let stringContem = registro[i].innerText.toUpperCase();
            let stringContida = pesquisa.value.toUpperCase();

            if( !(stringContem.includes(stringContida)) ){
                
                registro[i].style.display = 'none';                
            }else{
                registrosPesquisados++;
            }
        }

        quant[0].innerText = registrosPesquisados;
        

    }else{

        for(let i=0;i<registro.length;i++){
            registro[i].style.display = 'inline-block';
            registro[i].style.width = '100%';
        }

        quant[0].innerText = totalRegistros;

    }

});