<?php
namespace Model;

class Item
{
    private $id;
    private $title;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param $id
     * @return Item
     */
    public function setId($id): Item
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param $title
     * @return Item
     */
    public function setTitle($title):Item
    {
        $this->title = $title;
        return $this;
    }
}
