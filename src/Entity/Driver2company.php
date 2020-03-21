<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Driver2company
 *
 * @ORM\Table(name="driver2company", indexes={@ORM\Index(name="IDX_C1AED845C3423909", columns={"driver_id"}), @ORM\Index(name="IDX_C1AED845979B1AD6", columns={"company_id"})})
 * @ORM\Entity
 */
class Driver2company
{
    /**
     * @var string
     *
     * @ORM\Column(name="pkey", type="guid", nullable=false, options={"default"="uuid_generate_v4()"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="driver2company_pkey_seq", allocationSize=1, initialValue=1)
     */
    private $pkey = 'uuid_generate_v4()';

    /**
     * @var \Driver
     *
     * @ORM\ManyToOne(targetEntity="Driver")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="driver_id", referencedColumnName="pkey")
     * })
     */
    private $driver;

    /**
     * @var \Company
     *
     * @ORM\ManyToOne(targetEntity="Company")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="company_id", referencedColumnName="pkey")
     * })
     */
    private $company;


}