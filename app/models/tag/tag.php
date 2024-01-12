<?php
class Tag {
    private $idTag;
    private $tagName;

    public function __construct($idTag,$tagName) {
        $this->idTag = $idTag;
        $this->tagName = $tagName;
    }

    public function getIdTag() {
        return $this->idTag;
    }

    public function getTagName() {
        return $this->tagName;
    }
}
