<?php

/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2014 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController {

    public function indexAction() {
        // $mapper = $this->getServiceLocator()->get('mapper_commentaires');
//        die(var_dump($mapper->findById(1)));
        return new ViewModel();
    }

    public function homeAction() {
//        $response = $this->getResponse();
//        $response->getContent(true);
        return new ViewModel();
    }

}
