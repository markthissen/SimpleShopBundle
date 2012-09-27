<?php

namespace Trig\SimpleShopBundle\Entity;

use Doctrine\ORM\EntityRepository;

class VendorRepository extends EntityRepository {

    public function getCarsByVendorName($vName) {
        return $this->getEntityManager()
                ->createQuery('select c from Trig\SimpleShopBundle\Entity\Car c join c.vendor v where v.name = :vName')
                ->setParameter('vName', $vName)
                ->getResult();
    }

}

?>
