<?php
namespace FeedReader\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class FeedReaderController extends AbstractActionController{
    
    public function indexAction() {        
        $feed = $this->getServiceLocator()->get("FR");
        $dados['noticias'] = $feed->getNoticias();
        return new ViewModel($dados);
    }   
}