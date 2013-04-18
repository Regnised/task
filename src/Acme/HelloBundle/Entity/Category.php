<?php

namespace Acme\HelloBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 */
class Category
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $name_ru;



    /**
     * @var string
     */
    private $parentcat;

    /**
     * @var integer
     */
    private $kod;

    /**
     * @param int $kod
     */
    public function setKod($kod)
    {
        $this->kod = $kod;
    }

    /**
     * @return int
     */
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
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name_ru
     */
    public function setNameRu($name_ru)
    {
        $this->name_ru = $name_ru;
    }

    /**
     * @return string
     */
    public function getNameRu()
    {
        return $this->name_ru;
    }

    /**
     * @param string $parentcat
     */
    public function setParentcat($parentcat)
    {
        $this->parentcat = $parentcat;
    }

    /**
     * @return string
     */
    public function getParentcat()
    {
        return $this->parentcat;
    }

}
