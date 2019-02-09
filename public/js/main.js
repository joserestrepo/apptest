  window.onload = function(){
    var contenedor = $("#contenedor_carga")
    contenedor.css("visibility","hidden")
    contenedor.css("opacity",'0.9')
}

  // Or with jQuery
$(document).ready(function(){

    $("#enviar").click(function(){
    })

    $(".btn.texto-azul.ml-3.sig").click(function(){
        var actual = $(this).parent().parent().parent()
        $(actual).fadeOut("slow",function(){
            $(actual).next().removeClass("collapse")
            $(actual).next().fadeIn()
            $(actual).addClass("collapse")
        })
    })

    $(".btn.texto-azul.atras").click(function(){
        var actual = $(this).parent().parent().parent()
        $(actual).fadeOut("slow",function(){
            $(actual).prev().removeClass("collapse")
            $(actual).prev().fadeIn()
            $(actual).addClass("collapse")
        })
    })


    $(".mas").on("click",function(event){
        event.preventDefault();
        var div = $(this)
        if($(this).children().attr("class") == "fas fa-plus"){
            $(this).children().removeClass("fa-plus").addClass("fa-minus")
            div.siblings().eq(5).fadeIn("slow",function(){
                $(this).removeClass("collapse")
            })
        }else{
            $(this).children().removeClass("fa-minus").addClass("fa-plus")
            div.siblings().eq(5).fadeOut("slow",function(){
                $(this).addClass("collapse")
            })
        }
    })

    $("#campo8-1").click(function(){
         $("#extra-8-1").removeClass("collapse") 
    })
    
    $("#campo8-2").click(function(){
        $("#extra-8-1").addClass("collapse")
    })

   
        var empresa = "";
        var postulante = "";
        var fechaNacimiento = "";
        var edad = "";
        var formacion = "";
        var puestoRequerido = "";
        var campo1 = "";
        var campo2 = "";
        var campo3 = "";
        var campo4 = "";
        var campo5 = "";
        var campo6 = "";
        var campo7 = "";
        var campo8 = "";
        var iSituacional = "";
        var iEstrucAIntelectual = "";
        var iEstucAEmocional = "";
        var iEstucALaboral = "";
        var iEstrucAsFaPerfil = "";
        var localidad = "";
        var calificacion = "";
    $("#enviar").click(function(){
        $('#loader').show();
        
       /* 
        $("input[name*='localidad2']").each(function(){
            if($(this).attr("checked")){
               console.log($(this).val())  
            }   
        })*/
        $("#verificarDatos").removeClass("collapse")
        $("#verificarDatos").siblings().each(function(){
            $(this).addClass("collapse")
        })
          
        $('#loader').delay(1000)
       
        $('#loader').hide(700,function(){
            //datos personales
            empresa = $("#empresa").val();
            postulante = $("#nombre").val();
            fechaNacimiento = $("#nacimiento").val();
            edad = $("#edad").val();
            formacion = $("#formacion").val();
            puestoRequerido = $("#puesto").val();
            //campo1
            if($("#campo1").val() == "Organico"){
                campo1 += "El evaluado señala su relación con el mundo en términos de calidez, sensibilidad y adaptabilidad"
            }

            if($("#campo1").val() == "Inorganico"){
                campo1 += "El entrevistado señala su relación con el mundo en términos de dureza y tendencia a que se le dificulte la adaptabilidad"
            }

            if($("#ExtraC1-1").prop("checked")){
                alert("nada")
                campo1 += ", persona que reconoce adecuadamente su individualidad e identidad"
            }
            
            if($("#ExtraC1-2").prop("checked")){
                campo1 += ", muestra indicios rasgos de inestabilidad, indecisión e inseguridad"
            }

            //campo2
            if($("#campo2").val() == "Cumple"){
                campo2 += "El evaluado tiene buena capacidad para relacionarse con otros, empatía y deseo o disposición afectiva a la interacción"
            }

            if($("#campo2").val() == "NO Cumple"){
                campo2 += "Se le dificulta relacionarse con otros, poca empatía y disposición afectiva a la interacción"
            }

            if($("#extrasC2-1").prop("checked")){
                campo2 += ", papel activo en las relaciones de interacción "
            }
            
            if($("#extrasC2-2").prop("checked")){
                campo2 += ", papel pasivo en la interacción"
            }

            //campo3
            if($("#campo3").val() == "Cumple"){
                campo3 += "Desarrollo, crecimiento sistemático, seguridad en sus metas y planeación, con aspiraciones y metas proyectadas hacia futuro, ambición y nivel de confianza "
            }

            if($("#campo3").val() == "NO Cumple"){
                campo3 += "poca ambición y bajo deseo de crecimiento sistemático, pocas metas proyectadas hacia futuro"
            }

            if($("#ExtrasC3-1").prop("checked")){
                campo3 += ", muestra iniciativa y determinación"
            }
            
            if($("#ExtrasC3-2").prop("checked")){
                campo3 += ", manejo emocional afectivo de las metas"
            }

            //campo4
            if($("#campo4-1").val() == "Inorganico estatico"){
                campo4 += "Enfrenta sus miedos, culpas y conflictos con realismo"
            }

            if($("#campo4-1").val() == "NO inorganico estatico"){
                campo4 += "Enfrenta sus miedos, culpas y conflictos con fantasia"
            }

            if($("#campo4-2").val() == "Fortaleza"){
                campo4 += "Capacidad de dimensionar en justa medida la amenaza de manera en que maximice "
            }

            if($("#campo4-2").val() == "NO fortaleza"){
                campo4 += "Minimice la ansiedad que le provoca"
            }

            if($("#ExtrasC4-1").prop("checked")){
                campo4 += ", Vivencia de sentimientos angustiantes "
            }
            
            if($("#ExtrasC4-2").prop("checked")){
                campo4 += ", Control, dominio y consistencia ante situaciones muy angustiantes"
            }

            //campop5
            if($("#campo5-1").prop("checked")){
                campo5 += "Orientada a enfrentar y superar obstáculos que además hace uso de los recursos para enfrentarse a resolver conflictos; dinamismo para enfrentarse a competir y a asumir riesgos  "
            }
            
            if($("#campo5-2").prop("checked")){
                campo5 += "Autoagresión y evasión de los conflictos "
            }

            if($("#campo5-3").prop("checked")){
                campo5 += "Persona con disminución de la fuerza para sobrepasar obstáculos o superar problemas lo que sugiere una baja tolerancia a la frustración"
            }
            
            if($("#ExtraC5").prop("checked")){
                campo5 += ", persona que emplea los instrumentos que le provee el medio para dar solución a los conflictos o problemas que puedan presentarse  "
            }

            //campo6
            if($("#campo6").val() == "complementarias y estén cerradas"){
                campo6 += "Pensamiento integrado, capacidad cognitiva es de actividad adaptativa y coordinada"
            }

            if($("#campo6").val() == "complementarias, pero no integradas"){
                campo6 += "Más baja su capacidad cognitiva adaptativa y coordinada, por el proceso de asociación que realiza entre funcionalidad y no integralidad"
            }

            if($("#campo6").val() == "Si no están relacionadas entre si"){
                campo6 += "Indican que hay dificultades en el pensamiento creativo e integrador de la evaluada capacidad cognitiva adaptativa y coordinada baja"
            }

            //campo7
            if($("#campo7-1").prop("checked")){
                campo7 += "Tolera o propicia la intimidad o cercanía en sus relaciones afectivas, la textura señala la capacidad de abrirse afectivamente, de entregarse en una relación de intimidad"
            }
            
            if($("#campo7-2").prop("checked")){
                campo7 += "Inmadurez sexual "
            }

            //campo8
            if($("#campo8-1").prop("checked")){
                campo8 += "Compromiso y seguimiento de los valores del entorno, si es así entonces el individuo es una persona que acata valores, reglas y normas del entorno social, así como un superyó adecuado"

                if($("#extra-8-1").prop("checked")){
                    campo8 += ", oposicionismo critico "
                }
            }
            
            if($("#campo8-2").prop("checked")){
                campo8 += "Baja sumisión y poco acatamiento de las normas y reglas del entorno social"
            }

            //iSituacional
            if($("#interSituacional").val() != "Escoge una opcion"){
                iSituacional = $("#interSituacional").val()
            }
            
            //INTERPRETACION ESTRUCTURAL
            if($("#claridez").prop("checked")){
                iEstrucAIntelectual +="Claridad de raciocinio, objetividad y organización"
            }

            //trazo
            if($("#trazo").val() == "Trazos rectos"){
                iEstrucAIntelectual +=", autoafirmación y masculinidad"
            }

            if($("#trazo").val() == "Los trazos curvos"){
                iEstrucAIntelectual +=", dependencia y emotividad asociado con la feminidad"
            }

            if($("#trazo").val() == "Las líneas entrecortadas o dentadas"){
                iEstrucAIntelectual +=", señal de mala adaptabilidad, irritabilidad, reacciones bruscas, propio de una emotividad mal controlada y hostilidad"
            }

            //amplitud
            if($("#amplitud").val() == "Las líneas amplias y expansivas, que llegan a salirse"){
                iEstucAEmocional +="Corresponde a personas extrovertidas"
            }

            if($("#amplitud").val() == "Si se presenta en todo el protocolo"){
                iEstucAEmocional +="Demasiada autoconfianza"
            }

            if($("#amplitud").val() == "Si son figuras diminutas que ocupan una pequeña parte"){
                iEstucAEmocional +="Indican desconfianza, temor y una tendencia a la introversión"
            }

            //Fuerza
            if($("#fuerza").val() == "Un trazo fuerte"){
                iEstucAEmocional +=", vitalidad, audacia"
                iEstrucAsFaPerfil +="Vitalidad, audacia, "
            }

            if($("#fuerza").val() == "Excesivamente enérgico (relieve en la hoja)"){
                iEstucAEmocional +=", violencia"
            }

            if($("#fuerza").val() == "Un trazo débil"){
                iEstucAEmocional +=", suavidad, timidez, incapacidad de afirmación y temor significativo al fracaso"
            }

            //calidad de la linea
            if($("#calidad-linea").val() == "Fluida, decidida y bien controlada"){
                iEstucAEmocional +=", control motor, seguridad"
            }

            if($("#calidad-linea").val() == "Líneas quebradas, indecisas o reforzadas (para darle continuidad al dibujo)"){
                iEstucAEmocional +=", se asocian con ansiedad e inseguridad"
            }

            if($("#calidad-linea").val() == "Las líneas que se destacan por ser fragmentadas o esbozados"){
                iEstucAEmocional +=", timidez, ansiedad, vacilación en la conducta y en el enfrentamiento ante situaciones nuevas"
            }

            //LA LINEA RECTA
            if($("#LineaRecta").prop("checked")){
                iEstrucAIntelectual += ", carácter firme, decidido, acostumbrado a abordar los problemas de manera simplificada atendiendo a la síntesis y esquemas, buena capacidad mental, no se deja influenciar fácilmente por lo sentimental, puede verse como rigidez de carácter y falta de consideración; falta de tacto en las relaciones humanas"
                iEstucAEmocional +=", carácter firme, decidido, acostumbrado a abordar los problemas de manera simplificada atendiendo a la síntesis y esquemas, buena capacidad mental, no se deja influenciar fácilmente por lo sentimental, puede verse como rigidez de carácter y falta de consideración; falta de tacto en las relaciones humanas"
            }

            //EL PUNTO
            if($("#elPunto").prop("checked")){
                iEstucAEmocional +=", perplejidad, duda, inseguridad o confusión a causa de su imprecisión"
                iEstucALaboral += "Perplejidad, duda, inseguridad o confusión a causa de su imprecisión"
            }

            //LA LINEA CURVA
            if($("#LineaCurva").prop("checked")){
                iEstrucAsFaPerfil += "comportamiento suave y empático en el que la palabra, el gesto, la acción tienen un aire conciliado, actitud tolerante y benévola y un animo optimista y sociable, ausencia de deseo o interés por cualquier esfuerzo activo a la dificultad para tomar iniciativa en la solución de los problemas vitales, se rinde más fácil ante la presión que ejercen los otros y se puede dejar influenciar negativamente"
                iEstucAEmocional += ", comportamiento suave y empático en el que la palabra, el gesto, la acción tienen un aire conciliado, actitud tolerante y benévola y un animo optimista y sociable, ausencia de deseo o interés por cualquier esfuerzo activo a la dificultad para tomar iniciativa en la solución de los problemas vitales, se rinde más fácil ante la presión que ejercen los otros y se puede dejar influenciar negativamente"
            }

            //CUADRADOS O RECTANGULOS
            if($("#CuadradosORecatngulos").prop("checked")){
                iEstucALaboral += ", disposición bien delimitada, capacidad de método, organización y síntesis, es decir la planificación, prudencia, seriedad, actividad, autodominio (control de nervios y emociones) constancia en los objetivos y en las posiciones tomadas, el evaluado no puede ir más allá de las rutinas adquiridas, de sus hábitos profesionales, de su sistema de vida. Presenta ciertos rasgos de carácter como la testarudez, insistencia, intransigencia y la terquedad"
                iEstrucAsFaPerfil += ", disposición bien delimitada, capacidad de método, organización y síntesis, es decir la planificación, prudencia, seriedad, actividad, autodominio (control de nervios y emociones) constancia en los objetivos y en las posiciones tomadas, el evaluado no puede ir más allá de las rutinas adquiridas, de sus hábitos profesionales, de su sistema de vida. Presenta ciertos rasgos de carácter como la testarudez, insistencia, intransigencia y la terquedad"
                
            }

            //LINEAS ONDULADAS
            if($("#LineasOnduladas").prop("checked")){
                iEstucAEmocional += ", una actitud alegre y no comprometida, a un suave balanceo que escapa a la formalidad a toda actitud firme y concreta, La actitud evasiva es su mecanismo de defensa frente a la angustia, ansiedad, los complejos de culpabilidad y la propensión al sobresalto, al desequilibrio emocional"
                iEstrucAsFaPerfil += ", una actitud alegre y no comprometida, a un suave balanceo que escapa a la formalidad a toda actitud firme y concreta, La actitud evasiva es su mecanismo de defensa frente a la angustia, ansiedad, los complejos de culpabilidad y la propensión al sobresalto, al desequilibrio emocional"
            }

            //LAS CUADRICULAS
            if($("#lasCuadriculas").prop("checked")){
                iEstrucAIntelectual += ", predisposición a la tensión y a la concentración. El exceso de análisis dificulta la claridad y minimiza la síntesis, carece de visión panorámica, o sea falta de iniciativa, decisión y de confianza en si mismo"
                iEstucAEmocional +=", Predisposición a la tensión y a la concentración. El exceso de análisis dificulta la claridad y minimiza la síntesis, carece de visión panorámica, o sea falta de iniciativa, decisión y de confianza en si mismo"
                iEstucALaboral += ", Predisposición a la tensión y a la concentración. El exceso de análisis dificulta la claridad y minimiza la síntesis, carece de visión panorámica, o sea falta de iniciativa, decisión y de confianza en si mismo"
            }

            //SOMBREADO
            if($("#sombreado").prop("checked")){
                iEstucAEmocional += "Asociado a estados de ansiedad o angustia "
            }

            //EXPANSION
            if($("#expansion").val() == "Tamaño del dibujo dentro del campo"){
                iEstucAEmocional +=",  los limites y respeto con el mundo y la capacidad de planeación"
            }

            if($("#expansion").val() == "Si dibuja en todo el campo"){
                iEstucAEmocional +=", imaginación, autoconfianza expansión o impulsividad"
            }

            if($("#expansion").val() == "Si dibuja limitadamente"){
                iEstucAEmocional +=", autocontrol, objetividad, prudencia, falta de autoconfianza"
            }

            //MOVIMIENTO
            if($("#sombreado").prop("checked")){
                localidad += ""
            }

            //LOCALIDAD
            if($("#localidad11").prop("checked")){
                localidad += "Actividad mental, imaginación y fantasía"        
            }

            if($("#localidad12").prop("checked")){
                localidad += "Emotivos y menos cerebrales, se caracteriza por la rutina, objetividad y equilibrio ante la fantasía y la realidad"        
            }

            if($("#localidad13").prop("checked")){
                localidad += "Contacto con la realidad"        
            }

            if($("#localidad21").prop("checked")){
                localidad += ", preferencia por el pasado, falta de adaptación al presente"        
            }

            if($("#localidad22").prop("checked")){
                localidad += ", Interés por el presente, lo inmediato y posee capacidad de observación"        
            }

            if($("#localidad23").prop("checked")){
                localidad += ", Interés por el futuro, sociable, autocontrolado, objetivo y posee capacidad de adaptación"        
            }

            //CALIFICACION
            calificacion = $("#calificacion").val()

            html = ""
            if(empresa == ""){
                empresa = "N.A."
            }
            if(postulante == ""){
                postulante = "N.A."
            }
            if(fechaNacimiento == ""){
                fechaNacimiento = "N.A."
            }
            if(edad == ""){
                edad = "N.A."
            }
            if(formacion == ""){
                formacion = "N.A."
            }
            if(puestoRequerido == ""){
                puestoRequerido = "N.A."
            }
            if(campo1 == ""){
                campo1 = "N.A."
            }
            if(campo2 == ""){
                campo2 = "N.A."
            }
            if(campo3 == ""){
                campo3 = "N.A."
            }
            if(campo4 == ""){
                campo4 = "N.A."
            }
            if(campo5 == ""){
                campo5 = "N.A."
            }
            if(campo6 == ""){
                campo6 = "N.A."
            }
            if(campo7 == ""){
                campo7 = "N.A."
            }
            if(campo8 == ""){
                campo8 = "N.A."
            }
            if(iSituacional == ""){
                iSituacional = "N.A."
            }
            if(iEstrucAIntelectual == ""){
                iEstrucAIntelectual = "N.A."
            }
            if(iEstrucAsFaPerfil == ""){
                iEstrucAsFaPerfil = "N.A."
            }
            if(iEstucAEmocional == ""){
                iEstucAEmocional = "N.A."
            }
            if(iEstucALaboral == ""){
                iEstucALaboral = "N.A."
            }
            if(localidad == ""){
                localidad = "N.A."
            }
            /*
            <h6 class="text-left"><strong>INTERPRETACION DE RESULTADOS TEST WARTEGG</strong></h6>
            <h6 class="text-left"><strong>FECHA DE APLICACION: 26 SEPTIEMBRE 2018</strong></h6> 
            <h6 class="text-left"><strong>POSTULANTE: RICHARD LAPEIRA CAIRES</strong></h6> */

            html += `
            <div class="alert-primary col-12 text-center fondo-oscuro texto-blanco">
                <h3>Prueba Wartegg</h3>
            </div>
            <div class="col-5 justify-content-center m-0 d-inline-block mt-3 p-3 border-right border-bottom">
                
                <div class="d-inline-block border text-center  p-3" id="areaIntelectual">
                    <h6 class="text-center">AREA INTELECTUAL</h6>
                    <p class="texto-pequeño text-left">• <strong>Interpretación evolutiva</strong>: No se encuentran grafismos que reflejen inmadurez cortical</p>
                    <p class="texto-pequeño text-left">• Campo6: ${campo6}</p>
                    <p class="texto-pequeño text-left">• Campo3: ${campo3}</p>
                    <p class="texto-pequeño text-left">• Interpretacion Estructural: ${iEstrucAIntelectual}</p>
                </div>
            </div>

            <div class="col-5 justify-content-center text-center  m-0 d-inline-block mt-3 p-3 border-bottom rodar ">
                <div class="d-inline-block border p-3" id="areaEmocional">
                    <h6 class="text-center">AREA EMOCIONAL</h6>
                    <p class="texto-pequeño text-left">• Campo1: ${campo1}</p>
                    <p class="texto-pequeño text-left">• Campo4: ${campo4}</p>
                    <p class="texto-pequeño text-left">• Campo7: ${campo7}</p>
                    <p class="texto-pequeño text-left">• Interpretacion Estructural: ${iEstucAEmocional}</p>
                    <p class="texto-pequeño text-left">• Localizacion: ${localidad}</p>
                </div>
            </div>
            <div class="col-5 justify-content-center text-center m-0 d-inline-block p-3 border-right ">
                <div class="d-inline-block border p-3" id="areaLaboral">
                    <h6 class="text-center">AREA LABORAL</h6>
                    <p class="texto-pequeño text-left">• Interpretacion Situacional: ${iSituacional}</p>
                    <p class="texto-pequeño text-left">• Campo2: ${campo2}</p>
                    <p class="texto-pequeño text-left">• Campo3: ${campo3}</p>
                    <p class="texto-pequeño text-left">• Campo5: ${campo5}</p>
                    <p class="texto-pequeño text-left">• Campo8: ${campo8}</p>
                    <p class="texto-pequeño text-left">• Interpretacion Estructural: ${iEstucALaboral}</p>
                </div>
            </div>

            <div class=" col-5 justify-content-center text-center  m-0 d-inline-block p-3 rodar border-left">
                <div class="d-inline-block border p-3" id="rasgosPsicopa">
                    <h6 class="text-center">ASPECTOS FAVORABLES PARA EL PERFIL</h6>
                    <p class="texto-pequeño text-left">• <strong>Interpretación evolutiva</strong>: No se encuentran grafismos que reflejen inmadurez cortical</p>
                    <p class="texto-pequeño text-left">• Campo2: ${campo2}</p>
                    <p class="texto-pequeño text-left">• Campo5: ${campo5}</p>
                    <p class="texto-pequeño text-left">• Campo8: ${campo8}</p>
                    <p class="texto-pequeño text-left">• Interpretacion Estructural: ${iEstrucAsFaPerfil}</p>
                </div>
            </div>
            <div class="p-3 mt-3">
                <p>CALIFICACION</p>    
                <label for="calificacion" class="bmd-label texto-negro">Seleccione si el aspirante aprobo o reprobo</label>
                <br>
                    <select class="form-control" id="calificacion">
                        <option>Escoge una opcion</option>
                        <option>APROBADO</option>
                        <option>REPROBADO</option>
                    </select> 
                
            </div>  
            <br>
            
            `   
            /* <div id="firma">
                <h6 class="text-left"><strong>CALIFICACION: ${calificacion}</strong></h6>
                <br><br><br>
                <p class="text-left"><strong>_______________________________ </strong></p>
                <h6 class="text-left"><strong>Ma Camila Rodriguez Arias</strong></h6> 
            </div>   */
         $('#contenedorLoader').hide();

         $("#contenedorDeLosDatos").append(html)   
        });
        

    })
    
    $('#btnimpri').click(function(){
        calificacion = $("#calificacion").val()
        window.location.href="resultados-"+empresa+"-"+postulante+"-"+fechaNacimiento+"-"+edad+"-"+formacion+"-"+puestoRequerido+"-"+campo1+"-"+campo2+"-"+campo3+"-"+campo4+"-"+campo5+"-"+campo6+"-"+campo7+"-"+campo8+"-"+iSituacional+"-"+iEstrucAIntelectual+"-"+iEstucAEmocional+"-"+iEstucALaboral+"-"+iEstrucAsFaPerfil+"-"+localidad+"-"+calificacion;
    })
})
