        var tipos_1 = new Array("-");

        var tipos_2 = new Array("-","Fondos","Tacos","Plataformas","Zuecos");

        var tipos_3 = new Array("-","Pinet","LX");
    
        function cambiar_tipo(){ 

            var tipo;
            tipo = document.form_contacto.tipo[document.form_contacto.tipo.selectedIndex].value;
            if (tipo != 0) { 
         
               tipos=eval("tipos_" + tipo);
         
               num_tipos = tipos.length ;
         
               document.form_contacto.tipos.length = num_tipos;
         
         
               for(i=0;i<num_tipos;i++){ 
                  document.form_contacto.tipos.options[i].value=num_tipos[i] ;
                  document.form_contacto.tipos.options[i].text=num_tipos[i] ;
               }	
         
            }else{ 
         
               document.form_contacto.tipos.length = 1 ;
               document.form_contacto.tipos[0].options[i].value = "-" ;
               document.form_contacto.tipos[0].options[i].text = "-" ;
            } 
            document.form_contacto.tipos.options[0].selected = true;
         }