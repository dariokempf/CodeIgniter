<?php

namespace App\Controllers\Api\V1;

use CodeIgniter\RESTful\ResourceController;

class MailController extends ResourceController
{
    public function sendTodoEmail()
    {
        // Model-Methode aufrufen, um offene TODO-Aufgaben zu erhalten
        $openTodos = $this->Cars->getOpenTodos();

        // E-Mail-Inhalt vorbereiten
        $emailContent = 'Offene TODO-Aufgaben:' . PHP_EOL;
        foreach ($openTodos as $todo) {
            $emailContent .= '- ' . $todo['title'] . PHP_EOL;
        }

        // E-Mail versenden
        $email = \Config\Services::email();
        $email->setTo('empfänger@example.com');
        $email->setFrom('standard@adresse.com', 'Meine App');
        $email->setSubject('Offene TODO-Aufgaben');
        $email->setMessage($emailContent);

        if ($email->send()) {
            // Log bei erfolgreichem Versand
            log_message('info', 'E-Mail erfolgreich an empfänger@example.com gesendet');
        } else {
            // Log bei Fehler
            log_message('error', 'Fehler beim Versenden der E-Mail: ' . $email->printDebugger());
        }
    }
}



?>