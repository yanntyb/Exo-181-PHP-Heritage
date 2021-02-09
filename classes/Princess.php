<?php


class Princess extends Personnage
{
    private $saved;
    public function __construct()
    {
        parent::__construct();
        $this->x = 450;
        $this->y = 450;
        $this->saved = false;
    }
}