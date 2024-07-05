<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $whatsapp = $_POST["whatsapp"];
    $country = $_POST["country"];

    if (empty($name) || empty($email) || empty($whatsapp) || empty($country)) {
        http_response_code(400);
        echo "Todos os campos são obrigatórios.";
        exit;
    }
    
    echo "Inscrição realizada com sucesso!";
} else {
    http_response_code(405);
    echo "Método não permitido.";
}
?>

