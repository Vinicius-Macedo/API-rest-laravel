<?php

namespace App\Services;

class LinksGenerator
{
    /**
     * Guarda os links do hateoas
     * 
     * @var array
     */
    private $links = [];

    /**
     * Adiciona um link
     * 
     * @param string $type
     * @param string $url
     * @param string $rel
     * @return void
     */
    private function add(string $type, string $url, string $rel): void
    {
        $this->links[] = [
            'type' => $type,
            'url' => $url,
            'rel' => $rel,
        ];
    }

    /**
     * Adiciona um link do tipo GET
     * 
     * @param string $url
     * @param string $rel
     * @return void
     */
    public function get(string $url, string $rel): void
    {
        $this->add('GET', $url, $rel);
    }

    /**
     * Adiciona um link do tipo POST
     * 
     * @param string $url
     * @param string $rel
     * @return void
     */
    public function post(string $url, string $rel): void
    {
        $this->add('POST', $url, $rel);
    }

    /**
     * Adiciona um link do tipo PUT
     * 
     * @param string $url
     * @param string $rel
     * @return void
     */
    public function put(string $url, string $rel): void
    {
        $this->add('PUT', $url, $rel);
    }

    /**
     * Adiciona um link do tipo DELETE
     * 
     * @param string $url
     * @param string $rel
     * @return void
     */
    public function delete(string $url, string $rel): void
    {
        $this->add('DELETE', $url, $rel);
    }

    /**
     * Retorna os links
     * 
     * @return array
     */
    public function getLinks(): array
    {
        return $this->links;
    }

    /**
     * Retorna um array com os links
     * 
     * @return array
     */
    public function toArray(): array
    {
        return $this->getLinks();
    }
}
