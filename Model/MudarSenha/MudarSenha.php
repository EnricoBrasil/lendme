<?php
ini_set("SMTP", "localhost");
ini_set("smtp_port", "25");
$destinatario = $_POST['destinatario'];

// Assunto do email
$assunto = "Código de mundança de senha";
$codigo = rand(0000,9999);
// Mensagem do email
$mensagem = ("Seu código para mudar a senha é: ".$codigo);

// Cabeçalhos do email
$headers = "From: joao.moraes@ba.senac.br";
$headers .= "\r\nContent-Type: text/plain; charset=UTF-8";

// Enviar email
if(mail($destinatario, $assunto, $mensagem, $headers)) {
    $data["status"] = "Email enviado com sucesso!";
    $data["codigo"] = $codigo;
} else {
    $data["status"] = "Erro ao enviar o email.";

}


echo json_encode($data);
?>