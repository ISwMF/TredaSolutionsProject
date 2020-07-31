<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // access
    $secretKey = '6LfePbgZAAAAAKE-wbKT2hcMHk0QzKVBOmeo390z';
    $captcha = $_POST['g-recaptcha-response'];

    if (!$captcha) {
        echo '<p class="alert alert-warning">Please check the the captcha form.</p>';
        exit;
    }
    $id_tienda = str_replace(array("\r", "\n"), array(" ", " "), strip_tags(trim($_POST["id_tienda"])));
    session_start();
    $_SESSION["id_actual"] = $id_tienda;
    header('Location: tienda/' . $id_tienda);
} else {
    # Not a POST request, set a 403 (forbidden) response code.
    http_response_code(403);
    echo '<p class="alert alert-warning">There was a problem with your submission, please try again.</p>';
}
