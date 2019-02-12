<?php 
    $_SESSION['empresa'] = $_POST['empresad'];
    $_SESSION['postulante'] = $_POST['postulanted'];
    $_SESSION['fechaNacimiento'] = $_POST['fechaNacimientod'];
    $_SESSION['edad'] = $_POST['edadd'];
    $_SESSION['formacion'] = $_POST['formaciond'];
    $_SESSION['puesto'] = $_POST['puestod'];
    $_SESSION['campo1'] = $_POST['campo1d'];
    $_SESSION['campo2'] = $_POST['campo2d'];
    $_SESSION['campo3'] = $_POST['campo3d'];
    $_SESSION['campo4'] = $_POST['campo4d'];
    $_SESSION['campo5'] = $_POST['campo5d'];
    $_SESSION['campo6'] = $_POST['campo6d'];
    $_SESSION['campo7'] = $_POST['campo7d'];
    $_SESSION['campo8'] = $_POST['campo8d'];
    $_SESSION['iSituacional'] = $_POST['iSituacionald'];
    $_SESSION['iEstrucAIntelectual'] = $_POST['iEstrucAIntelectuald'];
    $_SESSION['iEstrucAsFaPerfil'] = $_POST['iEstrucAsFaPerfild'];
    $_SESSION['iEstucAEmocional'] = $_POST['iEstucAEmocionald'];
    $_SESSION['iEstucALaboral'] = $_POST['iEstucALaborald'];
    $_SESSION['localidad'] = $_POST['localidadd'];
    $_SESSION['calificacion'] = $_POST['calificaciond'];
    echo $_SESSION['campo6'];
    return 'valido';
?>