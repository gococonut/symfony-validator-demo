<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Author
{
    /**
     * @Assert\NotBlank
     */
    private $name;

    /**
     * @Assert\Date
     *
     * @var string A "Y-m-d" formatted value
     */
    protected $birthday;

    public function __construct($name = null, $birthday = null)
    {
        $this->name = $name;
        $this->birthday = $birthday;
    }
}
