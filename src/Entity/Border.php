<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Border
 *
 * @ORM\Table(name="border", indexes={@ORM\Index(name="IDX_C7F56B77CF908BAF", columns={"ridefrom"}), @ORM\Index(name="IDX_C7F56B77F0CB1F1", columns={"rideto"})})
 * @ORM\Entity
 */
class Border
{
    /**
     * @var string
     *
     * @ORM\Column(name="pkey", type="guid", nullable=false, options={"default"="uuid_generate_v4()"})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="border_pkey_seq", allocationSize=1, initialValue=1)
     */
    private $pkey = 'uuid_generate_v4()';

    /**
     * @var \Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ridefrom", referencedColumnName="pkey")
     * })
     */
    private $ridefrom;

    /**
     * @var \Country
     *
     * @ORM\ManyToOne(targetEntity="Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rideto", referencedColumnName="pkey")
     * })
     */
    private $rideto;


}