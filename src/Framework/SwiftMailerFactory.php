<?php
namespace Framework;

use Psr\Container\ContainerInterface;

class SwiftMailerFactory
{

    public function __invoke(ContainerInterface $container): \Swift_Mailer
    {
        $transport = new \Swift_SmtpTransport('localhost', 1025);
        return new \Swift_Mailer($transport);
    }
}
