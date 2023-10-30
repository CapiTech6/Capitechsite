<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar os dados do formulário
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    // Você pode adicionar validações e processamento adicional aqui, como enviar um e-mail ou salvar os dados em um banco de dados.

    // Exemplo: Enviar um e-mail de confirmação
    $to = "seuemail@example.com";
    $subject = "Nova mensagem de contato de $nome";
    $message = "Nome: $nome\n";
    $message .= "E-mail: $email\n";
    $message .= "Mensagem:\n$mensagem";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Obrigado por entrar em contato! Recebemos sua mensagem.";
    } else {
        echo "Desculpe, houve um erro ao processar sua mensagem.";
    }
} else {
    // Redirecionar para a página de formulário se não for uma solicitação POST
    header("Location: seuformulario.html");
}
?>
