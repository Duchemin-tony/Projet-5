<?php
namespace App\Contact;

use Framework\Renderer\RendererInterface;
use Framework\Session\FlashService;
use Psr\Http\Message\ServerRequestInterface;

class ContactAction
{
    /**
    * @var RendererInterface
    */
    private $renderer;
    /**
    * @var string
    */
    private $to;

    /**
    * @var FlashService
    */
    private $flashService;

    /**
    * @var \Swift_Mailer
    */
    private $mailer;

    public function __construct(
    	string $to,
    	RendererInterface $renderer,
    	FlashService $FlashService,
    	\Swift_mailer $mailer
    )
    {
    	$this->renderer = $renderer;
    	$this->to = $to;
    	$this->flashService = $flashService;
    	$this->mailer = $mailer;
    }

    public function __invoke(SeverRequestInterface $request): string
    {
    	if ($request->getMethod() === 'GET') {
    		return $this->renderer->render('@contact/contact');
    	}
    	$validator = (new Validator($request->getParsedBody()))
    		->required('name', 'email', 'content')
    		->length('name', 5)
    		->email('email')
    		->length('content', 10);
    	if ($validator->isValid())
    	{

    	} else {
    		
    	}
    }

}