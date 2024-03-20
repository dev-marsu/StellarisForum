<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $para = 'seu_email@example.com'; // Substitua pelo seu endereço de email
    $assunto = 'Mensagem do formulário de contato';
    $corpo_mensagem = "De: $nome\n";
    $corpo_mensagem .= "Email: $email\n";
    $corpo_mensagem .= "Mensagem: $mensagem\n";

    // Enviar email
    if (mail($para, $assunto, $corpo_mensagem)) {
        echo 'Mensagem enviada com sucesso!';
    } else {
        echo 'Ocorreu um erro ao enviar a mensagem.';
    }
}
?>
