<?php

namespace Gajdaw\AngazeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Department
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Department
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="shortcut", type="string", length=255)
     */
    private $shortcut;

    /**
     * @var string
     *
     * @ORM\Column(name="tmp", type="string", length=255)
     */
    private $tmp;

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
     * @return Department
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
     * Set shortcut
     *
     * @param string $shortcut
     * @return Department
     */
    public function setShortcut($shortcut)
    {
        $this->shortcut = $shortcut;

        return $this;
    }

    /**
     * Get shortcut
     *
     * @return string
     */
    public function getShortcut()
    {
        return $this->shortcut;
    }

    /**
     * Set tmp
     *
     * @param string $tmp
     * @return Department
     */
    public function setTmp($tmp)
    {
        $this->tmp = $tmp;

        return $this;
    }

    /**
     * Get tmp
     *
     * @return string
     */
    public function getTmp()
    {
        return $this->tmp;
    }
}
