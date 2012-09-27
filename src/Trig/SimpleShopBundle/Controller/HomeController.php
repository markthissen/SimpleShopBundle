<?php

namespace Trig\SimpleShopBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    public function mainAction() {
        return $this->render('TrigSimpleShopBundle:Home:main.html.twig', array(
                    'vendors' => $this->_getVendors(),
                    'cars' => $this->_getCars()
                ));
    }

    public function vendorsAction($slug, $cars) {
         $vendors = $this->_getVendors();
         $vendor = $this->getDoctrine()->getRepository('TrigSimpleShopBundle:Vendor')
                ->findOneBy(array('slug' => $slug));
         if("none" !== $cars){
             $carsByVendor = $this->getDoctrine()->getRepository('TrigSimpleShopBundle:Car')
                     ->findCarsByVendorName($vendor->getName());
             return $this->render('TrigSimpleShopBundle:Home:vendor.cars.html.twig', 
                     array('cars' => $carsByVendor));
         }
        if ("none" === $slug) {
            $vendorIds = array();
            foreach ($vendors as $vendor) {
                $vendorIds[$vendor->getId()] = $vendor;
            }
            $randomVendor = $this->getDoctrine()->getRepository('TrigSimpleShopBundle:Vendor')
                    ->findOneBy(array('id' => array_rand($vendorIds)));
            return $this->render('TrigSimpleShopBundle:Home:vendors.html.twig', array(
                        'vendors' => $vendors,
                        'randomVendor' => $randomVendor
                    ));
        } else {
            return $this->render('TrigSimpleShopBundle:Home:vendor.html.twig', array(
                        'vendors' => $vendors,
                        'mainVendor' => $vendor
                    ));
        }
    }

    public function carsAction($slug) {
        $cars = $this->_getCars();
        if ("none" === $slug) {
            $carIds = array();
            foreach ($cars as $car) {
                $carIds[$car->getId()] = $car;
            }
            $randomCar = $this->getDoctrine()->getRepository('TrigSimpleShopBundle:Car')
                    ->findOneBy(array('id' => array_rand($carIds)));
            return $this->render('TrigSimpleShopBundle:Home:cars.html.twig', array(
                        'cars' => $cars,
                        'randomCar' => $randomCar
                    ));
        } else {
            $car = $this->getDoctrine()->getRepository('TrigSimpleShopBundle:Car')
                    ->findOneBy(array('slug' => $slug));
            return $this->render('TrigSimpleShopBundle:Home:car.html.twig', array(
                        'cars' => $cars,
                        'mainCar' => $car
                    ));
        }
    }

    protected function _getVendors() {
        return $this->getDoctrine()->getRepository("TrigSimpleShopBundle:Vendor")
                        ->findAll();
    }

    protected function _getCars() {
        return $this->getDoctrine()->getRepository("TrigSimpleShopBundle:Car")
                        ->findAll();
    }

}
