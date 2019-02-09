<div class="container col-12 pt-5 pb-5 fondo" >
    <div class="collapse container col-6 p-0 pt-5 justify-content-center mt-5 text-center fondo-blanco" id="verificarDatos">
        <div id="contenedorLoader">
                <div id="loader" class="lds-ring"><div></div><div></div><div></div><div></div></div>
        </div>
        <div id="contenedorDeLosDatos"></div>
        <button type="submit" class="btn btn-primary" id="btnimpri">imprimir</button>
    </div>
    <div class="container mt-5 justify-content-center col-7 sombreado fondo-negro"></div>

    <div class="container p-0 pt-5 justify-content-center col-7 text-right fondo-blanco border" id="cinta">
        <div class="alert-primary col-12 text-center fondo-oscuro texto-blanco">
            <h3>Prueba Wartegg</h3>
        </div>
        <div class="collapse p-5" id="datos">
            <div class="col-12">
                <div class="form-group col-12 text-left">
                    <label for="empresa" class="bmd-label-floating texto-negro">EMPRESA</label>
                    <input type="text" class="form-control" id="empresa">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group col-12 text-left">
                    <label for="nombre" class="bmd-label-floating texto-negro">POSTULANTE</label>
                    <input type="text" class="form-control" id="nombre">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group col-12 text-left">
                    <label for="nacimiento" class="bmd-label-floating texto-negro">FECHA DE NACIMIENTO</label>
                    <input type="date" class="form-control" id="nacimiento">
                </div>
            </div>
            <div class="col-12">
                <div class="form-group col-12 text-left">
                    <label for="edad" class="bmd-label-floating texto-negro">EDAD</label>
                    <input type="number" class="form-control" id="edad">
                </div>
            </div>
            <div class="col-12 text-right">
                <div class="form-group col-12 text-left">
                    <label for="formacion" class="bmd-label-floating texto-negro">FORMACION</label>
                    <input type="text" class="form-control" id="formacion">
                </div>
            </div>
            <div class="col-12 text-right">
                <div class="form-group col-12 text-left">
                    <label for="puesto" class="bmd-label-floating texto-negro">PUESTO REQUERIDO</label>
                    <input type="text" class="form-control" id="puesto">
                </div>
            </div>
            <div class="col-12 p-0 mb-3">
                    <div class="col-6 d-inline-block text-right p-0">
                        <button class="btn texto-azul ml-3 sig" id="">Siguiente</button>
                    </div>
                </div>
        </div>
    
        <div class="collapse text-left pl-5 pr-5" id="test">
            <div class="form-group col-12">
                    <label for="campo1" class="label texto-negro">CAMPO 1:  Percepción de sí mismo en relación con el mundo</label>
                    <br>
                    <label for="campo1" class="label texto-negro">El dibujo es:</label>
                    <br>    
                    <select class="form-control" id="campo1">
                        <option>Escoge una opcion</option>
                        <option>Organico</option>
                        <option>Inorganico</option>
                    </select>
                    <a href="" class="mas"><i class="fas fa-plus"> Extras</i></a>
                    <div class="collapse">
                        <label for="" class="bmd-label texto-negro">Punto como:</label>
                        <br>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="ExtraC1-1"><p class="texto-negro">centro del dibujo,<br>redondo,
                                                                    <br> central,
                                                                    <br> relativamente pequeño y
                                                                    <br> unico</p> 
                            </label>
                        </div> <!-- cierre checkbox -->
                            <label for="" class="bmd-label texto-negro" >Si el punto esta:</label>
                            <br>
                        <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="ExtraC1-2" value="opcion2"> <p class="texto-negro">difuminado o multiplicado</p>    
                                </label>
                        </div><!-- cierre checkbox -->
                    </div><!-- cierre collapse -->
            </div><!-- cierre campo 1 -->
            <div class="form-group col-12">
                    <label for="campo2" class="bmd-label texto-negro">CAMPO 2: Relaciones interpersonales</label>
                    <br>
                    <label for="campo2" class="bmd-label texto-negro">Diga si el dibujo cumple con lo siguiente: <br>
                    es orgánico,curvo,con extremos redondeados, <br> ubicado fuera del centro y por lo general una figura humana
                    <br>    
                    </label>
                    <br>
                    <select class="form-control mt-5" id="campo2">
                        <option>Escoge una opcion</option>
                        <option>Cumple</option>
                        <option>NO cumple</option>
                    </select>
                    <a href="" class="mas"><i class="fas fa-plus">Extras</i></a>
                    <div class="collapse">
                        <label for="" class="bmd-label texto-negro" >Si hay:</label>
                        <br>
                        <div class="radio">
                            <label>
                            <input type="radio" name="extrasC2" id="extrasC2-1" value="option1">
                            <p class="texto-negro">movilidad</p> 
                            </label>
                        </div><!-- cierre radio -->
                        <div class="radio">
                            <label>
                            <input type="radio" name="extrasC2" id="extrasC2-2" value="option2">
                            <p class="texto-negro">estatico</p> 
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                            <input type="radio" name="extrasC2" id="extrasC2-3" value="option3" checkeds>
                            <p class="texto-negro">Ninguna de las anteriores</p> 
                            </label>
                        </div>
                    </div>
            </div> <!-- cierre campo 2 -->
            <div class="form-group col-12">
                    <label for="" class="bmd-label texto-negro">CAMPO 3:  Ambiciones y proyección hacia el futuro</label>
                    <br>
                    <label for="campo3" class="bmd-label texto-negro">Diga si el dibujo cumple con lo siguiente: <br>
                    es Inorgánico, líneas rectas, equidistantes y en aumento ascendente<br>    
                    </label>
                    <br>
                    <select class="form-control mt-3" id="campo3">
                        <option>Escoge una opcion</option>
                        <option>Cumple</option>
                        <option>NO cumple</option>
                    </select>
                    <a href="" class="mas"><i class="fas fa-plus ">Extras</i></a>
                    <div class="collapse">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="ExtraC3-1"><p class="texto-negro">En forma de escalon</p> 
                                </label>
                            </div>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" id="ExtraC3-2"> <p class="texto-negro">Si utiliza curvas o dibuja algo orgánico </p>    
                                </label>
                            </div>
                    </div>
            </div> <!-- cierre campo 3 -->
            <div class="form-group col-12">
                    <label for="campo4" class="bmd-label texto-negro">CAMPO 4: Manejo de miedos y ansiedades</label>
                    <br>
                    <label for="campo4" class="bmd-label texto-negro">El dibujo es:</label>
                    <br>
                    <div class="form-group">
                    <select class="form-control mb-4" id="campo4-1">
                            <option>Escoge una opcion</option>
                            <option>Inorganico estatico</option>
                            <option>NO inorganico estatico</option>
                        </select> 
                        <label for="campo4" class="bmd-label texto-negro">Refleja:</label>
                        <br>
                    <select class="form-control" id="campo4-2">
                            <option>Escoge una opcion</option>
                            <option>Fortaleza</option>
                            <option>NO fortaleza</option>
                        </select> 
                    </div>
                    
                    <a href="" class="mas"><i class="fas fa-plus">Extras</i></a>
                    <div class="collapse">
                        <br>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="ExtraC4-1"><p class="texto-negro">Si multiplica muchos cuadrados blancos o negros</p> 
                            </label>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" id="ExtraC4-2"> <p class="texto-negro">Si lo enmarca en un cuadro de ajedrez o un edificio</p>    
                            </label>
                        </div>
                    </div>
            </div> <!-- cierre campo 4 -->
            <div class="form-group col-12">
                    <label for="" class="label">CAMPO 5: Resolución de conflictos</label>
                    <br>
                    <label for="campo5-1" class="bmd-label texto-negro mt-2">El dibujo es:</label>
                    <br>
                    <div class="mt-4"> 
                        <div class="radio">
                            <label>
                                <input type="radio" name="campo5" id="campo5-1">
                                <p class="texto-negro"> inorgánico, que la línea inferior traspase la superior, que sea ascendente hacia la derecha, rectilíneo, opuestamente orientados y ubicación periférica </p> 
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="campo5" id="campo5-2" >
                                <p class="texto-negro">descendente</p> 
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="campo5" id="campo5-3" >
                                <p class="texto-negro">algo que no mantiene la oposición entre las líneas </p> 
                            </label>
                        </div>
                    </div>
                    <a href="" class="mas"><i class="fas fa-plus">Extras</i></a>
                    <div class="collapse">
                        <div class="checkbox mt-2">
                            <label>
                                <input type="checkbox" id="ExtraC5"> <p class="texto-negro">Herramienta</p>    
                            </label>
                        </div>
                    </div>
            </div> <!-- cierre campo 5 -->
            <div class="form-group col-12">
                    <label for="" class="label texto-negro">CAMPO 6: Tipo de pensamiento y valoración de su capacidad intelectual</label>
                    <br>
                    <label for="campo6" class="bmd-label texto-negro mt-2">Se espera un dibujo donde las lineas sean:</label>
                    <br>
                    <select class="form-control mt-3" id="campo6">
                        <option>Escoge una opcion</option>
                        <option>complementarias y estén cerradas</option>
                        <option>complementarias, pero no integradas</option>
                        <option>Si no están relacionadas entre si</option>
                    </select>
            </div> <!-- cierre campo 6 -->
            <div class="form-group col-12">
                    <label for="campo7" class="label texto-negro">CAMPO 7: Capacidad de entrega en la relación afectiva, sensibilidad y sexualidad</label>
                    <br> 
                    <label for="" class="bmd-label texto-negro mt-2">Se espera que el dibujo siga el patrón del puntiado con función real:</label>
                    <br><br>
                        <div class="radio">
                            <label>
                                <input type="radio" name="campo7" id="campo7-1">
                                <p class="texto-negro"> que se vea puntiado y que en la vida real exista, debe ser orgánico y que inspire delicadeza y textura  </p> 
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="campo7" id="campo7-2">
                                <p class="texto-negro">Si ignora el estimulo </p> 
                            </label>
                        </div>
            </div> <!-- cierre campo 7 -->
            <div class="form-group col-12">
                    <label for="" class="label texto-negro">CAMPO 8: Adaptación al medio</label>
                    <br>
                    <label for="campo8" class="bmd-label texto-negro mt-2">Se espera que el dibujo siga el patrón del puntiado con función real:</label>
                    <br><br>
                        <div class="radio">
                            <label>
                                <input type="radio" name="campo8" id="campo8-1">
                                <p class="texto-negro">orgánico que brinde protección, que el resto del dibujo está en la parte inferior del estímulo </p> 
                            </label>
                        </div>
                        <div class="collapse checkbox mt-2" id="extra-8-1">
                            <label>
                                <input type="checkbox" id="ExtraC5"> <p class="texto-negro">algunos trazos por encima del </p>    
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="campo8" id="campo8-2" value="option2">
                                <p class="texto-negro">Si domina por encima del estímulo</p> 
                            </label>
                        </div>    
            </div> <!-- cierre campo 8 -->
            <div class="form-group col-12">
                    <label for="interSituacional" class="bmd-label texto-negro">INTERPRETACION SITUACIONAL</label>
                    <br>
                    <select class="form-control" id="interSituacional">
                        <option>Escoge una opcion</option>
                        <option>RIGIDA: Orden normal 1,2,3,4,5,6,7,8</option>
                        <option>RIGIDA INVERTIDA: Reversa 8,7,6,5,4,3,2,1</option>
                        <option>RIGIDA INVERTIDA INCOMPLETA: 9,7,6,5,1,2,3,4,5</option>
                        <option>ORDENADO: Dos saltos en secuencia rígida 1,2,5,6,3,4,7,8</option>
                        <option>DESORDENADA: Tres a cinco saltos en el orden rígido</option>
                        <option>CAOTICA_ No hay estructura en su proceder</option>
                    </select>
            </div> <!-- cierre interpretacion situacional -->
                <div class="col-12 p-0 mb-3">
                    <div class="text-left col-5 d-inline-block p-0 text-left">
                        <button class="btn texto-azul atras" id="atras">Atras</button>
                    </div>
                    <div class="col-6 d-inline-block text-right p-0">
                        <button class="btn texto-azul ml-3 sig" id="">Siguiente</button>
                    </div>
            </div>
        </div> 

        <div class="collapse text-left pl-5 pr-5" >
            <div class="form-group col-12">
                <label for="claridez">CLARIDEZ</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="claridez"><p class="texto-negro">Si tiene claridez hazle el check a este campo.</p> 
                    </label>
                </div>

                <label for="trazo" class="bmd-label texto-negro">TRAZO</label>
                <br>
                <select class="form-control" id="trazo">
                    <option>Escoge una opcion</option>
                    <option>Trazos rectos</option>
                    <option>Los trazos curvos</option>
                    <option>Las líneas entrecortadas o dentadas</option>
                </select>
                <br>
                <label for="amplitud" class="bmd-label texto-negro">AMPLITUD</label>
                <br>
                <select class="form-control" id="amplitud">
                    <option>Escoge una opcion</option>
                    <option>Las líneas amplias y expansivas, que llegan a salirse</option>
                    <option>Si se presenta en todo el protocolo</option>
                    <option>Si son figuras diminutas que ocupan una pequeña parte</option>
                </select>
                <br>
                <label for="fuerza" class="bmd-label texto-negro">FUERZA</label>
                <br>
                <select class="form-control" id="fuerza">
                    <option>Escoge una opcion</option>
                    <option>Un trazo fuerte</option>
                    <option>Excesivamente enérgico (relieve en la hoja)</option>
                    <option>Un trazo débil</option>
                </select>
                <br>
                <label for="calidad-linea" class="bmd-label texto-negro">CALIDAD DE LA LINEA</label>
                <br>
                <select class="form-control" id="calidad-linea">
                    <option>Escoge una opcion</option>
                    <option>Fluida, decidida y bien controlada</option>
                    <option>Líneas quebradas, indecisas o reforzadas (para darle continuidad al dibujo)</option>
                    <option>Las líneas que se destacan por ser fragmentadas o esbozados</option>
                </select>
                <br>
                <label for="elPunto">El PUNTO</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="elPunto"><p class="texto-negro">Si tiene punto hazle el check a este campo.</p> 
                    </label>
                </div>
                <br>
                <label for="LineaRecta" class="bmd-label texto-negro">LA LINEA RECTA</label>
                <br>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="LineaRecta"><p class="texto-negro">Si tiene linea recta hazle el check a este campo.</p> 
                    </label>
                </div>
                <br>
                <label for="LineaCurva" class="bmd-label texto-negro">LA LINEA CURVA</label>
                <br>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="LineaCurva"><p class="texto-negro">Si tiene linea curva hazle el check a este campo.</p> 
                    </label>
                </div>
                <br>
                <label for="CuadradosORecatngulos" class="bmd-label texto-negro">CUADRADOS O RECTANGULOS</label>
                <br>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="CuadradosORecatngulos"><p class="texto-negro">Si tiene cuadrados o rectangulos hazle el check a este campo.</p> 
                    </label>
                </div>
                <br>
                <label for="LineasOnduladas" class="bmd-label texto-negro">LINEAS ONDULADAS</label>
                <br>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="LineasOnduladas"><p class="texto-negro">Si tiene linea onduladas hazle el check a este campo.</p> 
                    </label>
                </div>
                <br>
                <label for="lasCuadriculas" >LAS CUADRICULAS</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="lasCuadriculas"><p class="texto-negro">Si tiene cuadriculas hazle el check a este campo.</p> 
                    </label>
                </div>
                <br>
                <label for="sombreado">SOMBREADO</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="sombreado"><p class="texto-negro">Si tiene sombreado hazle el check a este campo.</p> 
                    </label>
                </div>
                <br>
                <label for="expansion" class="bmd-label texto-negro">EXPANSION</label>
                <br>
                <select class="form-control" id="expansion">
                    <option>Escoge una opcion</option>
                    <option>Tamaño del dibujo dentro del campo</option>
                    <option>Si dibuja en todo el campo</option>
                    <option>Si dibuja limitadamente</option>
                </select>
                <br>
                <label for="movimiento">MOVIMIENTO</label>
                <div class="checkbox">
                    <label>
                        <input type="checkbox" id="movimiento"><p class="texto-negro">Si tiene movimiento hazle el check a este campo.</p> 
                    </label>
                </div>
                <br>
                <div class="text-left col-5 d-inline-block p-0 text-left">
                    <button class="btn texto-azul atras" id="atras">Atras</button>
                </div>
                <div class="col-6 d-inline-block text-right p-0">
                    <button class="btn texto-azul ml-3 sig" id="">Siguiente</button>
                </div>
            </div>
        </div>

        <div class="text-left pl-5 pr-5" >
            <div class="form-group col-12">
                <label for="localidad">Localidad</label>
                <div class="radio">
                        <label>
                            <input type="radio" name="localidad1" id="localidad11">
                            <p class="texto-negro">Arriba</p> 
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="localidad1" id="localidad12">
                            <p class="texto-negro">Central</p> 
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="localidad1" id="localidad13">
                            <p class="texto-negro">Abajo</p> 
                        </label>
                    </div>

                    <br>

                    <div class="radio">
                        <label>
                        <input type="radio" name="localidad2" id="localidad21">
                        <p class="texto-negro">Izquierda</p> 
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="localidad2" id="localidad22">
                        <p class="texto-negro">Central</p> 
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                        <input type="radio" name="localidad2" id="localidad23">
                        <p class="texto-negro">Derecha</p> 
                        </label>
                    </div>
                    <br>
                <p>CALIFICACION</p>    
                <label for="calificacion" class="bmd-label texto-negro">Seleccione si el aspirante aprobo o reprobo</label>
                <br>
                <select class="form-control" id="calificacion">
                    <option>Escoge una opcion</option>
                    <option>APROBADO</option>
                    <option>REPROBADO</option>
                </select>
                <br>
                        <div class="text-left col-5 d-inline-block p-0 text-left">
                            <button class="btn texto-azul atras">Atras</button>
                        </div>
                        <div class="col-6 d-inline-block text-right p-0">
                            <button class="btn texto-azul ml-3" id="enviar">Enviar</button>

                        </div>
                        
        </div>
    </div>
    
</div>

