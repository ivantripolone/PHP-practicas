<?php

function mostrarError($errores, $campo) {
    $alerta = '';
    if (isset($errores[$campo]) && !empty($campo)) {
        $alerta = "<div class= 'alerta alerta-error'>" . $errores[$campo] . '</div>';
    }

    return $alerta;
}

function borrarErrores() {
    $borrado = false;

    if (isset($_SESSION['errores'])) {
        $_SESSION['errores'] = null;
        unset($_SESSION['errores']);
        $borrado = true;
    }
    if (isset($_SESSION['erroresEntrada'])) {
        $_SESSION['erroresEntrada'] = null;
        unset($_SESSION['erroresEntrada']);
    }

    if (isset($_SESSION['completo'])) {
        $_SESSION['completo'] = null;
        unset($_SESSION['completo']);
    }

    return $borrado;
}

function conseguirCategoria($db) {
    $sql = "SELECT * FROM categorias ORDER BY id ASC LIMIT 7;";
    $categorias = mysqli_query($db, $sql);
    $result = array();
    if ($categorias && mysqli_num_rows($categorias)) {
        $result = $categorias;
    };

    return $result;
}

function conseguirEntradas($db, $limit = 4, $idC = 'c.id', $idE = 'e.id') {
    $sql = "SELECT e.usuario_id, e.id ,e.fecha,e.categoria_id,e.titulo,e.descripcion, c.nombre AS categoria FROM entrada e,categorias c WHERE e.id = $idE AND e.categoria_id = $idC AND e.categoria_id = c.id ORDER BY e.fecha DESC LIMIT $limit;";
    $entradas = mysqli_query($db, $sql);
    $result = 0;
    if ($entradas && mysqli_num_rows($entradas)) {
        $result = $entradas;
    };

    return $result;
}

function cantDeEntradas($db) {

    $sql = "SELECT count(id) as cantEntradas FROM entrada";
    $cantEntradas = mysqli_query($db, $sql);
    $result = array();
    if ($cantEntradas && mysqli_num_rows($cantEntradas)) {
        $result = mysqli_fetch_assoc($cantEntradas)['cantEntradas'];
    };

    return $result;
}
