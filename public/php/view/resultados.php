<div class="container col-12 pt-1 fondo" >
    <div class="container p-0 justify-content-center col-11 texto-blanco mt-5 text-center" id="resultados">
        <h6 class="text-center"><strong>INTERPRETACION DE RESULTADOS TEST WARTEGG</strong></h6>
        <h6 class="text-left"><strong>EMPRESA: <?php echo $_SESSION['empresa']; ?></strong></h6> 
        <h6 class="text-left"><strong>POSTULANTE: <?php echo $_SESSION['postulante']; ?></strong></h6> 
        <h6 class="text-left"><strong>FECHA DE APLICACION: <?php echo $_SESSION['fechaNacimiento']; ?></strong></h6> 
        <h6 class="text-left"><strong>EDAD: <?php echo $_SESSION['edad']; ?></strong></h6> 
        <h6 class="text-left"><strong>FORMACION: <?php echo $_SESSION['formacion']; ?></strong></h6> 
        <h6 class="text-left"><strong>PUESTO: <?php echo $_SESSION['puesto']; ?></strong></h6> 
    </div>
    <div class="container text-center texto-blanco">
        <div class="col-5 justify-content-center m-0 d-inline-block mt-3 p-3 border-right border-bottom">
                <div class="d-inline-block border text-center  p-3" id="areaIntelectual">
                    <h6 class="text-center">AREA INTELECTUAL</h6>
                    <p class="texto-pequeño text-left">• <strong>Interpretación evolutiva</strong>: No se encuentran grafismos que reflejen inmadurez cortical</p>
                    <p class="texto-pequeño text-left">• Campo6: <?php echo $_SESSION['campo6']; ?></p>
                    <p class="texto-pequeño text-left">• Campo3: <?php echo $_SESSION['campo3'];?></p>
                    <p class="texto-pequeño text-left">• Interpretacion Estructural: <?php echo $_SESSION['iEstrucAIntelectual'];?></p>
                </div>
            </div>

            <div class="col-5 justify-content-center text-center  m-0 d-inline-block mt-3 p-3 border-bottom rodar ">
                <div class="d-inline-block border p-3" id="areaEmocional">
                    <h6 class="text-center">AREA EMOCIONAL</h6>
                    <p class="texto-pequeño text-left">• Campo1: <?php echo $_SESSION['campo1'];?></p>
                    <p class="texto-pequeño text-left">• Campo4: <?php echo $_SESSION['campo4'];?></p>
                    <p class="texto-pequeño text-left">• Campo7: <?php echo $_SESSION['campo7'];?></p>
                    <p class="texto-pequeño text-left">• Interpretacion Estructural: <?php echo $_SESSION['iEstucAEmocional'];?></p>
                    <p class="texto-pequeño text-left">• Localizacion: <?php  echo $_SESSION['localidad'];?></p>
                </div>
            </div>
            <div class="col-5 justify-content-center text-center m-0 d-inline-block p-3 border-right ">
                <div class="d-inline-block border p-3" id="areaLaboral">
                    <h6 class="text-center">AREA LABORAL</h6>
                    <p class="texto-pequeño text-left">• Interpretacion Situacional: <?php  echo $_SESSION['iSituacional'];?></p>
                    <p class="texto-pequeño text-left">• Campo2: <?php echo $_SESSION['campo2'];?></p>
                    <p class="texto-pequeño text-left">• Campo3: <?php echo $_SESSION['campo3'];?></p>
                    <p class="texto-pequeño text-left">• Campo5: <?php echo $_SESSION['campo5'];?></p>
                    <p class="texto-pequeño text-left">• Campo8: <?php echo $_SESSION['campo8'];?></p>
                    <p class="texto-pequeño text-left">• Interpretacion Estructural: <?php echo $_SESSION['iEstucALaboral'];?></p>
                </div>
            </div>

            <div class=" col-5 justify-content-center text-center  m-0 d-inline-block p-3 rodar border-left">
                <div class="d-inline-block border p-3" id="rasgosPsicopa">
                    <h6 class="text-center">ASPECTOS FAVORABLES PARA EL PERFIL</h6>
                    <p class="texto-pequeño text-left">• <strong>Interpretación evolutiva</strong>: No se encuentran grafismos que reflejen inmadurez cortical</p>
                    <p class="texto-pequeño text-left">• Campo2: <?php echo $_SESSION['campo2'];?></p>
                    <p class="texto-pequeño text-left">• Campo5: <?php echo $_SESSION['campo5'];?></p>
                    <p class="texto-pequeño text-left">• Campo8: <?php echo $_SESSION['campo8'];?></p>
                    <p class="texto-pequeño text-left">• Interpretacion Estructural: <?php echo $_SESSION['iEstrucAsFaPerfil'];?></p>
                </div>
            </div>
            <div id="firma">
                <h6 class="text-left"><strong>CALIFICACION: <?php echo $_SESSION['calificacion']; ?></strong></h6>
                <br><br><br>
                <p class="text-left"><strong>_______________________________ </strong></p>
                <h6 class="text-left"><strong>Ma Camila Rodriguez Arias</strong></h6> 
            </div>  

    </div>
            
</div>
