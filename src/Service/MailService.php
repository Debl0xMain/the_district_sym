<?php

namespace App\Service;


use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Bridge\Twig\Mime\TemplatedEmail;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Mailer\Transport\TransportInterface;
use Symfony\Component\Mime\Email;


class MailService
{
    private $mailer;

    public function __construct(MailerInterface $mailer){
        $this->mailer = $mailer;
    }

    public function sendMail($expediteur, $destinataire, $sujet, $message){

        $email = (new Email())
        ->from($expediteur)
        ->to($destinataire)
        ->subject($sujet)
        ->text($message);

        $this->mailer->send($email);

    }
}