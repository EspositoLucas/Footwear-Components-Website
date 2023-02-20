let $tipo_articulo = document.getElementById('tipo_articulo')
let $caracteristicas = document.getElementById('caracteristica')
let $tipo_carac = document.getElementById('tipo')
let $material = document.getElementById('material')
let $fleje = document.getElementById('art_fleje')

let articulos = ['Plantilla', 'Fondos','Suela']

let caracteristicas = ["Plantilla Doble. P/A. C/Plano"," Plantilla Doble. P/A. C/Acero",
"Plantilla Doble Larga. P/A. C/Plano","Plantilla Doble Larga. P/A. C/Acero",
"Plantilla Doble Planta. P/A. C/Plano","Plantilla Simple. C/Plano",
"Plantilla Doble S/C. P/A","TEXANA/RODADO","RODADO/CUEROFLEX","Pinet","LX"]

let tipos = ['-', "Fondos","Tacos","Plataformas","Zuecos","Pinet","LX"]

let materiales = ['-','Goma','Grupon','Cueoroflex','Eva','Rodado','Madera']

let flejes = ['MUESTRA','Escala plat-170','-','-']

function mostrar_opciones(arreglo, lugar) {
    let elementos = '<option value="" disable>--Seleccione--</option>'

    for(let i = 0; i < arreglo.length; i++) {
        elementos += '<option value="' + arreglo[i] +'">' + arreglo[i] +'</option>'
    }

    lugar.innerHTML = elementos
}

mostrar_opciones(articulos, $tipo_articulo)

function recortar(array, inicio, fin, lugar) {
    let recortar = array.slice(inicio, fin)
    mostrar_opciones(recortar, lugar)
}

$tipo_articulo.addEventListener('change', function() {
    let valor = $tipo_articulo.value

    switch(valor) {
        case 'Plantilla':
            recortar(caracteristicas, 0, 7, $caracteristicas)

        break
        case 'Fondos':
            recortar(caracteristicas, 7, 9, $caracteristicas)
        break
        case 'Suela':
            recortar(caracteristicas, 9, 11, $caracteristicas)
        break
    }

    $tipo_carac.innerHTML = ''
    $material.innerHTML = ''
})

$tipo_articulo.addEventListener('change', function() {
    let valor = $tipo_articulo.value

    if(valor == 'Plantilla') {
        recortar(tipos, 0, 1, $tipo_carac)
    } else if(valor == 'Fondos') {
        recortar(tipos, 1, 5, $tipo_carac)
    } else if(valor == 'Suela') {
        recortar(tipos, 5, 7, $tipo_carac)
    }
})

$tipo_articulo.addEventListener('change', function() {
    let valor = $tipo_articulo.value

    if(valor == 'Plantilla') {
        recortar(materiales, 0, 1, $material)
    } else if(valor == 'Fondos') {
        recortar(materiales, 1, 4, $material)
    } else if(valor == 'Suela') {
        recortar(materiales, 4, 7, $material)
    }
})

$tipo_articulo.addEventListener('change', function() {
    let valor = $tipo_articulo.value

    if(valor == 'Plantilla') {
        recortar(flejes, 0, 2, $fleje)
    } else if(valor == 'Fondos') {
        recortar(flejes, 2,3, $fleje)
    } else if(valor == 'Suela') {
        recortar(flejes, 3, 4, $fleje)
    }
})