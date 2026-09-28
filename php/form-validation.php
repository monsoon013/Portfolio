// variables
$errName = $errEmail = $errPhone = $errMess = "";
$name = $sur = $email = $phone = "";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["name"])){
        $errName = "Este campo no puede estar vacío"
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty)
}