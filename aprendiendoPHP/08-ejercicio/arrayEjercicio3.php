<?php

function mayusculaSiEstaVacia($texto, $texto2) {
    if (empty($texto)) {
        if (empty($texto2)) {
            $texto = "Pone algun texto en minusculas";
        } else
            $texto = $texto2;
        return strtoupper($texto);
    }
}

var_dump($_POST);

if (isset($_POST['texto1']) && isset($_POST['texto2'])) {
    $texto1 = $_POST['texto1'];
    $texto2 = $_POST['texto2'];


    echo '<h1>' . mayusculaSiEstaVacia($texto1, $texto2) . '</h1>';
}

//