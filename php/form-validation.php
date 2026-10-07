<?php
    //Arrays para guardar mensajes y errores
    $duendeError = array();
    $duendeMensajero = array();

    //Patrón para usar en expresiones regulares (letras acentuadas y espacios)
    $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚüÜàèìòùÀÈÌÒÙ\s]+$/";

    if(!empty($_POST)) {
        echo "FORMULARIO RECIBIDO: <br>";
        echo "<p>====================</p>";

        if (empty($_POST['userName']))
            $duendeError[] = "Debe especificar el nombre";
        else {
            //Comprobar mediante un expresión regular que solo contiene letras y espacios.
            if(preg_match($patron_texto, $_POST['userName']))
                $duendeMensajero[] = "Nombre: [".$_POST['userName']."]";
            else
                $duendeError[] = "El nombre sólo puede contener letras y espacios";
        }

        //Apellidos
        if(empty($_POST['surName']))
            $duendeError[] = "Debe especificar los apellidos";
        else {
            if(preg_match($patron_texto, $_POST['userName']))
                $duendeMensajero[] = "Apellidos: [".$_POST['userName']."]";
            else
                $duendeError[] = "Los apellidos sólo pueden contener letras y espacios";
        }

        //Teléfono
        if(empty($_POST['phone']))
            $duendeError[] = "Debe especificar el teléfono";
        else {
            if(preg_match($))
        }
    }
?>    