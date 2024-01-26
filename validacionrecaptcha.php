<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST["g-recaptcha-response"])) {
            $gSecret = "6LciLFspAAAAAD4hOy3B8jBqrWz1fC08uq0hzuKu"; // Reemplaza con tu clave secreta del reCAPTCHA
            $uResponse = $_POST["g-recaptcha-response"];
            $gUrl = "https://www.google.com/recaptcha/api/siteverify";
            $forResponse = file_get_contents($gUrl . "?secret=" . $gSecret . "&response=" . $uResponse);
            $gObjectResponse = json_decode($forResponse);

            if ($gObjectResponse->success) {
                // Aquí puedes agregar el código para procesar el formulario y enviar correos, etc.
                echo "Listo para enviar";
            } else {
                $error_message = "Error de validación del reCAPTCHA";
            }
        }
    }
?>
