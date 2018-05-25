<?php

namespace AppBundle\Entity;

use Ramsey\Uuid\Uuid;

class Chain
{
    private $id;
    private $createdAt;
    private $url;

    public function __construct(string $url)
    {
        $this->id = Uuid::uuid4()->toString();
        $this->createdAt = new \DateTime();
        $this->url = $url;
    }

    public function id(): string
    {
        return $this->id;
    }

    public function url(): string
    {
        return $this->url;
    }
}
