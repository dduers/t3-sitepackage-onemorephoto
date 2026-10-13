<?php

namespace Dduers\T3SitepackageOnemorephoto\Controller;

use Psr\Http\Message\ResponseInterface;
use TYPO3\CMS\Extbase\Http\ForwardResponse;
use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class ContactFormController extends ActionController
{

    public function showAction(): ResponseInterface
    {
        $this->view->assign('data', [
            'email' => 'daniel.duersteler@xsite.ch'
        ]);

        return $this->htmlResponse();
    }

    public function performAction(): ResponseInterface
    {
        return (new ForwardResponse('show'));
    }
}
