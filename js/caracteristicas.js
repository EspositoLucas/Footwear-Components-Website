
var opt_1=new Array("-","Plantilla Doble. P/A. C/Plano"," Plantilla Doble. P/A. C/Acero",
"Plantilla Doble Larga. P/A. C/Plano","Plantilla Doble Larga. P/A. C/Acero",
"Plantilla Doble Planta. P/A. C/Plano","Plantilla Simple. C/Plano",
"Plantilla Doble S/C. P/A");
var opt_2 =new Array("-","TEXANA/RODADO","RODADO/CUEROFLEX");

var opt_3 = new Array("-","Pinet","LX");

var tipos_1 = new Array("-");

var tipos_2 = new Array("-","Fondos","Tacos","Plataformas","Zuecos");

var tipos_3 = new Array("-","Pinet","LX");

// var opt_4 = new Array("-","Goma","Grupon","Cueoroflex");

function cambiar_caracteristica(){ 
var tipo;
tipo = document.form_contacto.tipo[document.form_contacto.tipo.selectedIndex].value;
if (tipo != 0) { 
caracteristicas=eval("opt_" + tipo);
tipos=eval("tipos_"+ tipo)

num_caracteristicas = caracteristicas.length ;
num_tipos = tipos.length ;

document.form_contacto.opt.length = num_caracteristicas;
document.form_contacto.tipos.length = num_tipos;

for(i=0;i<num_caracteristicas;i++){ 
 document.form_contacto.opt.options[i].value=caracteristicas[i] ;
 document.form_contacto.opt.options[i].text=caracteristicas[i] ;
}	

  for(i=0;i<num_tipos;i++){ 
     document.form_contacto.tipos.options[i].value=num_tipos[i] ;
     document.form_contacto.tipos.options[i].text=num_tipos[i] ;
  }

}else{ 
document.form_contacto.opt.length = 1 ;
document.form_contacto.opt[0].options[i].value = "-" ;
document.form_contacto.opt[0].options[i].text = "-" ;

  document.form_contacto.tipos.length = 1 ;
  document.form_contacto.tipos[0].options[i].value = "-" ;
  document.form_contacto.tipos[0].options[i].text = "-" ;
} 
document.form_contacto.opt.options[0].selected = true;
document.form_contacto.tipos.options[0].selected = true;

// cambiar_tipo();

}
