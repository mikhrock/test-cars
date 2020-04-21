<?php

namespace App\TestTask\CarBundle\EventListener;

use Symfony\Contracts\EventDispatcher\Event;

class CarBuilderListener
{
    private $mailer;

    public function __construct()
    {
        $transport = (new \Swift_SmtpTransport('maildev', 25));
        $this->mailer = new \Swift_Mailer($transport);
    }

    public function onProducedAction(Event $event): void
    {
        $carPart = $event->getCarPart();

        $message = (new \Swift_Message('Car Part Produced'))
            ->setFrom('send@example.com')
            ->setTo('recipient@example.com')
            ->setBody("Part {$carPart} has been successfully produced.")
        ;

        $this->mailer->send($message);
    }
}