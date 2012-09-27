<?php

namespace Trig\SimpleShopBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * Trig\SimpleShopBundle\Entity\Vendor
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Trig\SimpleShopBundle\Entity\VendorRepository")
 */
class Vendor {

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(length=255, type="string" )
     *
     * @var strin $slug
     */
    private $slug;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var string $address
     *
     * @ORM\Column(name="address", length=255)
     */
    private $address;

    /**
     * @ORM\OneToMany(targetEntity="Car", mappedBy="Vendor")
     */
    private $cars;

    /**
     * @ORM\Column(name="logo", length=255)
     * @var string $logo
     */
    protected $logo;


    public function __construct() {

        $this->cars = new ArrayCollection();
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name) {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Add cars
     *
     * @param Trig\SimpleShopBundle\Entity\Car $cars
     * @return Category
     */
    public function addCar(\Trig\SimpleShopBundle\Entity\Car $cars) {
        $this->cars[] = $cars;

        return $this;
    }

    /**
     * Remove cars
     *
     * @param Trig\SimpleShopBundle\Entity\Car $cars
     */
    public function removeCar(\Trig\SimpleShopBundle\Entity\Car $cars) {
        $this->cars->removeElement($cars);
    }

    /**
     * Get cars
     *
     * @return Doctrine\Common\Collections\Collection 
     */
    public function getCars() {
        return $this->cars;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Vendor
     */
    public function setDescription($description) {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set address
     *
     * @param string $address
     * @return Vendor
     */
    public function setAddress($address) {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string 
     */
    public function getAddress() {
        return $this->address;
    }

    /**
     * Set logo
     *
     * @param string $logo
     * @return Vendor
     */
    public function setLogo($logo) {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string 
     */
    public function getLogo() {
        return $this->logo;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Vendor
     */
    public function setSlug($slug) {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug() {
        return $this->slug;
    }

}