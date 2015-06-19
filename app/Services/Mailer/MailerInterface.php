<?php namespace AP\Services;

/**
 * Class MailInterface
 * @package AP\Services
 * @author Phillip Madsen
 */
interface MailInterface {

    public function send($view, $email, $subject, $data = array());
    public function queue($view, $email, $subject, $data = array());
}

