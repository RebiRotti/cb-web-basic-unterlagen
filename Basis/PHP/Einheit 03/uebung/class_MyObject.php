<?php


class MyObject {
    private $mail;
    public $name;

    public function setMail($value) {
        $this->mail = $value;
    }
    public function getMail() {
        return $this->mail;
    }
}