<!-- Arquivo enviar_email.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];
    
    $destinatario = "halexandrelordwilson@gmail.com";
    $assunto = "Mensagem do formulário de contato";
    $corpo = "Nome: $nome\nE-mail: $email\nMensagem:\n$mensagem";
    $headers = "From: $email";

    if (mail($destinatario, $assunto, $corpo, $headers)) {
        echo "E-mail enviado com sucesso!";
    } else {
        echo "Falha ao enviar o e-mail.";
    }
}
?>
