<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Employe
 *
 * @author mosab
 */
class Classes {

    private $id;
    private $nom;
    private $filiere;
    
    function __construct($id, $nom, $filiere) {
        $this->id = $id;
        $this->nom = $nom;
        $this->filiere = $filiere;
    }
    
    function getId() {
        return $this->id;
    }

    function getNom() {
        return $this->nom;
    }

    function getFiliere() {
        return $this->filiere;
    }

    

    function setId($id) {
        $this->id = $id;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setFiliere($filiere) {
        $this->filiere = $filiere;
    }

    


    
}
