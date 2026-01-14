let btnFiltro = document.querySelector('#btn-filtro');
let filtro = document.querySelector('.filtro');
let filtroStatus = false;
let inputSelect = document.querySelector('#select-periodo');
let boxSelectMes = document.querySelector('#box-select-mes');
let boxSelectAno = document.querySelector('#box-select-ano');

inputSelect.addEventListener('change', (e) => {

    let periodo = inputSelect.value;

    if (periodo == "ano") {
        boxSelectMes.style.display = "none";
    } else {
        boxSelectMes.style.display = "inline-block";
    }
});

btnFiltro.addEventListener('click', (e) => {

    if (!filtroStatus) {

        const larguraJanela = window.innerWidth;

        if (larguraJanela >= 1200) {
            filtro.style.display = "flex";
            filtroStatus = true;
        } else {
            filtro.style.display = "inline-block";
            filtroStatus = true;
        }

    } else {
        filtro.style.display = "none";
        filtroStatus = false;
    }
});
