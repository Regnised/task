<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * products
 */
class products
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $pname;

    /**
     * @var string
     */
    private $pnameRu;

    /**
     * @var string
     */
    private $fullname;

    /**
     * @var string
     */
    private $partnumber;

    /**
     * @var string
     */
    private $manufacturer;

    /**
     * @var integer
     */
    private $kod;

    /**
     * @var integer
     */
    private $garant;

    /**
     * @var float
     */
    private $cena_dyler;

    /**
     * @var float
     */
    private $cena_gurt;

    /**
     * @var float
     */
    private $cena_dribnyj_gurt;

    /**
     * @var float
     */
    private $cena_rozdrib;

    /**
     * @var integer
     */
    private $ostatok_lviv;

    /**
     * @var integer
     */
    private $ostatok_kyyiv;

    /**
     * @var integer
     */
    private $ostatok_odesa;

    /**
     * @var string
     */
    private $productcategory;

    /**
     * @param string $productcategory
     */
    public function setProductcategory($productcategory)
    {
        $this->productcategory = $productcategory;
    }

    /**
     * @return string
     */
    public function getProductcategory()
    {
        return $this->productcategory;
    }

    /**
     * @param int $ostatok_odesa
     */
    public function setOstatokOdesa($ostatok_odesa)
    {
        $this->ostatok_odesa = $ostatok_odesa;
    }

    /**
     * @return int
     */
    public function getOstatokOdesa()
    {
        return $this->ostatok_odesa;
    }

    /**
     * @param int $ostatok_kyyiv
     */
    public function setOstatokKyyiv($ostatok_kyyiv)
    {
        $this->ostatok_kyyiv = $ostatok_kyyiv;
    }

    /**
     * @return int
     */
    public function getOstatokKyyiv()
    {
        return $this->ostatok_kyyiv;
    }

    /**
     * @param int $ostatok_lviv
     */
    public function setOstatokLviv($ostatok_lviv)
    {
        $this->ostatok_lviv = $ostatok_lviv;
    }

    /**
     * @return int
     */
    public function getOstatokLviv()
    {
        return $this->ostatok_lviv;
    }

    /**
     * @param float $cena_rozdrib
     */
    public function setCenaRozdrib($cena_rozdrib)
    {
        $this->cena_rozdrib = $cena_rozdrib;
    }

    /**
     * @return float
     */
    public function getCenaRozdrib()
    {
        return $this->cena_rozdrib;
    }

    /**
     * @param float $cena_dribnyj_gurt
     */
    public function setCenaDribnyjGurt($cena_dribnyj_gurt)
    {
        $this->cena_dribnyj_gurt = $cena_dribnyj_gurt;
    }

    /**
     * @return float
     */
    public function getCenaDribnyjGurt()
    {
        return $this->cena_dribnyj_gurt;
    }

    /**
     * @param float $cena_gurt
     */
    public function setCenaGurt($cena_gurt)
    {
        $this->cena_gurt = $cena_gurt;
    }

    /**
     * @return float
     */
    public function getCenaGurt()
    {
        return $this->cena_gurt;
    }

    /**
     * @param float $cena_dyler
     */
    public function setCenaDyler($cena_dyler)
    {
        $this->cena_dyler = $cena_dyler;
    }

    /**
     * @return float
     */
    public function getCenaDyler()
    {
        return $this->cena_dyler;
    }

    /**
     * @param int $garant
     */
    public function setGarant($garant)
    {
        $this->garant = $garant;
    }

    /**
     * @return int
     */
    public function getGarant()
    {
        return $this->garant;
    }

    public function setKod($kod)
    {
        $this->kod = $kod;
    }

    public function getKod()
    {
        return $this->kod;
    }


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set pname
     *
     * @param string $pname
     * @return products
     */
    public function setPname($pname)
    {
        $this->pname = $pname;
    
        return $this;
    }

    /**
     * Get pname
     *
     * @return string 
     */
    public function getPname()
    {
        return $this->pname;
    }

    /**
     * Set pnameRu
     *
     * @param string $pnameRu
     * @return products
     */
    public function setPnameRu($pnameRu)
    {
        $this->pnameRu = $pnameRu;
    
        return $this;
    }

    /**
     * Get pnameRu
     *
     * @return string 
     */
    public function getPnameRu()
    {
        return $this->pnameRu;
    }

    /**
     * Set fullname
     *
     * @param string $fullname
     * @return products
     */
    public function setFullname($fullname)
    {
        $this->fullname = $fullname;
    
        return $this;
    }

    /**
     * Get fullname
     *
     * @return string 
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set partnumber
     *
     * @param string $partnumber
     * @return products
     */
    public function setPartnumber($partnumber)
    {
        $this->partnumber = $partnumber;
    
        return $this;
    }

    /**
     * Get partnumber
     *
     * @return string 
     */
    public function getPartnumber()
    {
        return $this->partnumber;
    }

    /**
     * Set manufacturer
     *
     * @param string $manufacturer
     * @return products
     */
    public function setManufacturer($manufacturer)
    {
        $this->manufacturer = $manufacturer;
    
        return $this;
    }

    /**
     * Get manufacturer
     *
     * @return string 
     */
    public function getManufacturer()
    {
        return $this->manufacturer;
    }
}
