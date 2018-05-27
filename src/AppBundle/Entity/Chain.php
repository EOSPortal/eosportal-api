<?php

namespace AppBundle\Entity;

class Chain
{
    private $id;
    private $createdAt;
    private $url;
    private $chainId;
    private $enabled;
    private $nodes;

    public function __construct(string $url, string $chainId)
    {
        $this->url = $url;
        $this->chainId = $chainId;
        $this->createdAt = new \DateTime();
        $this->enabled = true;
        $this->nodes[] = $url;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function url(): string
    {
        return $this->url;
    }

    public function chainId(): string
    {
        return $this->chainId;
    }

    public function createdAt(): \DateTime
    {
        return $this->createdAt;
    }

    public function nodes(): array
    {
        return $this->nodes;
    }

    public function addNode(string $node)
    {
        if (!in_array($node, $this->nodes)) {
            $this->nodes[] = $node;
        }
    }

    public function enabled(): bool
    {
        return $this->enabled;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id(),
            'url' => $this->url(),
            'chainId' => $this->chainId(),
            'createdAt' => $this->createdAt()->getTimestamp(),
            'nodes' => $this->nodes(),
        ];
    }
}
