<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

header('Content-Type: application/json');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name    = strip_tags(trim($_POST["mrs_name"] ?? ''));
    $email   = filter_var(trim($_POST["mrs_email"] ?? ''), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["mrs_message"] ?? '');

    if (empty($name) || empty($message) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo json_encode(["status" => "error", "message" => "Preencha todos os campos corretamente."]);
        exit;
    }

    $mail = new PHPMailer(true);

    try {
        // Configurações SMTP
        $mail->isSMTP();
        $mail->Host       = 'siqueirajr.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = 'todomundo@siqueirajr.com';
        $mail->Password   = 'Alfa@123-15';
        $mail->SMTPSecure = 'tls'; // ou 'ssl'
        $mail->Port       = 587;   // 465 para SSL, 587 para TLS

        // Remetente e destinatário
        $mail->setFrom('todomundo@siqueirajr.com', 'Formulário SJR Holding');
        $mail->addAddress('antoniofsiqueirajr@gmail.com', 'Antonio Siqueira');

        // Conteúdo do e-mail
        $mail->isHTML(true);
        $mail->Subject = 'Nova mensagem do site - SJR Holding';
        $mail->Body    = "
            <strong>Nome:</strong> {$name}<br>
            <strong>E-mail:</strong> {$email}<br>
            <strong>Mensagem:</strong><br>
            <p>{$message}</p>
        ";

        $mail->send();
        echo json_encode(["status" => "success", "message" => "Mensagem enviada com sucesso."]);
    } catch (Exception $e) {
        http_response_code(500);
        echo json_encode(["status" => "error", "message" => "Erro ao enviar: {$mail->ErrorInfo}"]);
    }
} else {
    http_response_code(403);
    echo json_encode(["status" => "error", "message" => "Método não permitido."]);
}
