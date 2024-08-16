<?php
// Enable error reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include the Composer autoloader
require_once __DIR__ . '/../vendor/autoload.php';

// Load environment variables
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../'); // Adjust path if necessary
$dotenv->safeLoad();

// Print environment variables for debugging
print_r($_ENV);

if (isset($_POST['send-email'])) {
    $mail = new PHPMailer(true);

    try {
        // Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Detailed debug output
        $mail->isSMTP();
        $mail->Host       = $_ENV['SMTP_HOST'] ?? 'default_host';
        $mail->SMTPAuth   = true;
        $mail->Username   = $_ENV['SMTP_USERNAME'] ?? '';
        $mail->Password   = $_ENV['SMTP_PASSWORD'] ?? '';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $mail->Port       = $_ENV['SMTP_PORT'] ?? 587;

        // Recipients
        $mail->setFrom('ian@crmsg4.cloud', 'crmsg4.cloud');
        $mail->addAddress($_POST['recipient']);

        // Content
        $mail->isHTML(true);
        $mail->Subject = $_POST['subject'];
        $mail->Body    = '
            <html>
            <head>
                <style>
                    /* Tailwind CSS styles */
                    .bg-sky-100 { background-color: #e0f2fe; }
                    .container { max-width: 1000px; margin: auto; padding: 20px; border-radius: 8px; background-color: #ffffff; }
                    .text-center { text-align: center; }
                    .text-start { text-align: start; }
                    .text-gray-800 { color: #1f2937; }
                    .text-gray-600 { color: #4b5563; }
                    .text-gray-400 { color: #9ca3af; }
                    .font-semibold { font-weight: 600; }
                    .text-xl { font-size: 1.25rem; }
                    .py-4 { padding-top: 1rem; padding-bottom: 1rem; }
                    .px-6 { padding-left: 1.5rem; padding-right: 1.5rem; }
                    .my-4 { margin-top: 1rem; margin-bottom: 1rem; }
                    .my-10 { margin-top: 5rem; margin-bottom: 5rem; }
                    .border-b { border-bottom: 1px solid #e5e7eb; }
                </style>
            </head>
            <body class="bg-sky-100">
                <div class="container class="bg-sky-100 my-10">
                    <div class="text-center py-4 border-b">
                        <img src="https://drive.google.com/uc?export=view&id=1v0JiTD5iemAKoRxw0nMjejQf41i5DyLe" alt="Logo" style="max-width: 150px;">
                    </div>
                    <h1 class="text-xl font-semibold text-gray-800 my-4">Hello, ' . htmlspecialchars($_POST['recipient-name']) . '!</h1>
                    <p class="text-gray-600">' . htmlspecialchars($_POST['message']) . '</p>
                    <div class="text-center my-4 text-gray-400">
                        <p>Thank you for using our serv!</p>
                    </div>
                </div>
            </body>
            </html>';


        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
