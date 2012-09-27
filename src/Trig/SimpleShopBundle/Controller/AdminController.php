<?php

namespace Trig\SimpleShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class AdminController extends Controller{

    /**
     * index action
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginAction() {
        return $this->render('TrigSimpleShopBundle:Admin:login.html.twig');
    }

    /**
     * index action
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction() {
        return new Response($this->getRequest()->getBaseUrl(), 200);
    }

    /**
     * index action
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addCategoryAction() {
        return new Response($this->getRequest()->getBaseUrl(), 200);
    }

    /**
     * remove action
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function removeCategoryAction() {
        return new Response($this->getRequest()->getBaseUrl(), 200);
    }

    /**
     * add product action
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function addProductAction() {
        return new Response($this->getRequest()->getBaseUrl(), 200);
    }

    /**
     * remove product action
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function removeProductAction() {
        return new Response($this->getRequest()->getBaseUrl(), 200);
    }

    /**
     * logout action
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function logoutAction() {
        return new Response($this->getRequest()->getBaseUrl(), 200);
    }

}

?>
