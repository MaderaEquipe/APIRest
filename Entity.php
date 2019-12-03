<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Entity
 *
 * @author reinC
 */
abstract class Entity {

    protected function __construct($data = NULL) {
        if (is_array($data)) {
            $this->hydrate($data);
        }
    }

    protected function hydrate(array $data) {
        var_dump($data);
        foreach ($data as $key => $value) {
            // On récupère le nom du setter correspondant à l'attribut.
            $method = 'set' . ucfirst($key);

            echo $value;
            

            // Si le setter correspondant existe.
            if (method_exists($this, $method)) {
                // On appelle le setter.
                $this->$method($value);
            }
        }
    }

}
