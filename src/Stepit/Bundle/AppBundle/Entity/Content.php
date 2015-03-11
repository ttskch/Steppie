<?php

namespace Stepit\Bundle\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Knp\DoctrineBehaviors\Model\Timestampable\Timestampable;

/**
 * Content
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Stepit\Bundle\AppBundle\Entity\Repository\ContentRepository")
 */
class Content
{
    use Timestampable;

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
     * @ORM\Column(name="value", type="string", length=255)
     */
    private $value;

    /**
     * @var Matter
     *
     * @ORM\ManyToOne(targetEntity="Matter", inversedBy="contents")
     * @ORM\JoinColumn(name="matter_id", referencedColumnName="id", nullable=false)
     */
    private $matter;

    /**
     * @var Step
     *
     * @ORM\ManyToOne(targetEntity="Step", inversedBy="contents")
     * @ORM\JoinColumn(name="step_id", referencedColumnName="id", nullable=false)
     */
    private $step;


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
     * Set value
     *
     * @param string $value
     * @return Content
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param Matter $matter
     */
    public function setMatter($matter)
    {
        $this->matter = $matter;
    }

    /**
     * @return Matter
     */
    public function getMatter()
    {
        return $this->matter;
    }

    /**
     * @param Step $step
     */
    public function setStep($step)
    {
        $this->step = $step;
    }

    /**
     * @return Step
     */
    public function getStep()
    {
        return $this->step;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->value;
    }
}
