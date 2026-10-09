<?php
    //Arrays para guardar mensajes y errores
    $duendeError = array();
    $duendeMensajero = array();

    //Patrón para usar en expresiones regulares (letras acentuadas y espacios)
    $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚüÜàèìòùÀÈÌÒÙ\s]+$/";
    $mess = $_POST['message'];

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!empty($_POST)) {
            echo "FORMULARIO RECIBIDO: <br>";
            echo "<p>====================</p>";

            print_r($_POST);
            echo "<hr/>";

            
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
                    if(preg_match($patron_texto, $_POST['surName']))
                        $duendeMensajero[] = "Apellidos: [".$_POST['surName']."]";
                    else
                        $duendeError[] = "Dudo que tu apellido tenga números";
                }

                //Teléfono
                if(empty($_POST['phone']))
                    $duendeError[] = "Debe especificar el teléfono";
                else {
                    if(is_numeric($_POST['phone'])){
                        $duendeMensajero[] = "Teléfono: [".$_POST['phone']."]";
                    }else {
                        $duendeError[] = "Según nuestra programación, no debería de tener letras, solo números, pero bueno";
                    }
                    
                }

                //Email
                $regex = "/^[a-zA-Z0-9._%-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}%/";
                if(empty($_POST['email']))
                    $duendeError[] = "Debe especificar el email";
                else {
                    if(filter_var($_POST['email'], FILTER_SANITIZE_EMAIL )){
                        $duendeMensajero[] = "Email:  [".$_POST['email']."]";
                    }else{
                        $duendeError[]="Uh-oh eso no es un correo electrónico :(";
                    }
                }
        }else{
            echo "<p>Datos incompletos</p>";
        }

        //Mostrar errores en el caso de que los haya
        if(count($duendeError) > 0){
            echo "<p>ERRORES ENCONTRADOS:</p>";
            for ($contador=0; $contador < count($duendeError); $contador++)
                echo $duendeError[$contador]."<br/>";
            
        }else{

            for($contador=0; $contador < count($duendeMensajero); $contador++)
                echo $duendeMensajero[$contador]."<br/>";
            echo "Mensaje:  ", $mess;
        }
        
    }else {
        echo "<p>No se ha enviado el formulario.</p>";
    }
    echo "<p><a href='index.php'> Volver al home</a></p>";
?>    