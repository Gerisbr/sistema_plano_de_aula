<?php

if (isset($_GET['docente']) && $_GET['docente'] != '') {
    $reserva = [];
    $reserva['docente'] = $_GET['docente'];

    if (isset($_GET['cursos'])) {
        $reserva['cursos'] = $_GET['cursos'];
    } else {
        $reserva['cursos'] = '';    
    }
if (isset($_GET['uc'])) {
        $reserva['uc'] = $_GET['uc'];
    } else {
        $reserva['uc'] = '';    
    }

    if (isset($_GET['resumodeatividade'])) {
        $reserva['resumodeatividade'] = $_GET['resumodeatividade'];
    } else {
        $reserva['resumodeatividade'] = '';    
    }

    if (isset($_GET['computador'])) {
        $reserva['computador'] = $_GET['computador'];
    } else {
        $reserva['computador'] = '';
    }

    if (isset($_GET['papelaria'])) {
        $reserva['papelaria'] = $_GET['papelaria'];
    } else {
        $reserva['papelaria'] = '';
}

if (isset($_GET['datashow'])) {
    $reserva['datashow'] = $_GET['datashow'];
} else {
    $reserva['datashow'] = '';

 }
    if (isset($_GET['kitmake'])) {
        $reserva['kitmake'] = $_GET['kitmake'];
    } else {
        $reserva['kitmake'] = '';

    }
    if (isset($_GET['dataum'])) {
        $reserva['dataum'] = $_GET['dataum'];
    } else {
        $reserva['dataum'] = '';
    }
}

    

  include "conexao.php";

    if (isset($reserva)) {
   
        $sqlInserir = "INSERT INTO tb_reservado (
        docente,
        cursos,
        uc,
        resumodeatividade,
        computador,
        papelaria,
        datashow,
        kitmake,
        dataum
        )
        VALUES(
        '{$reserva['docente']}',
        '{$reserva['cursos']}',
        '{$reserva['uc']}',
        '{$reserva['resumodeatividade']}',
        '{$reserva['computador']}'
        '{$reserva['papelaria']}'
        '{$reserva['datashow']}'
        '{$reserva['kitmake']}'
        '{$reserva['dataum']}'
      
    );";


        mysqli_query($conexao, $sqlInserir);
    }
   
    include "template.php";
    
     ?>
