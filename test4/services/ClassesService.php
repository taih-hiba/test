<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClassesService
 *
 * @author mosab
 */
include_once 'beans/Classes.php';
include_once 'connexion/Connexion.php';
include_once 'dao/IDao.php';

class ClassesService implements IDao {
    //put your code here
    private $connexion;
    
    function __construct() {
        $this->connexion = new Connexion();
    }

    
    public function create($o) {
        $query = "INSERT INTO Classes VALUES (NULL,?,?)";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getNom(),$o->getFiliere() )) or die('Error');
    
    }

    public function delete($id) {
        $query = "DELETE FROM Classes WHERE id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id)) or die("erreur delete");
    }

    public function findAll() {
        $query = "select classes.id,classes.nom,filiere.code from classes,filiere where filiere.id=classes.filiere;";
        $req = $this->connexion->getConnexion()->query($query);
        $f= $req->fetchAll(PDO::FETCH_OBJ);
        return $f;
    }
    
    

    public function findById($id) {
        $query = "select * from Classes where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        $fonction = new Classes($res->id,$res->nom, $res->filiere);
        return $fonction;
    }

     public function findByIdApi($id) {
        $query = "select * from Classes where id =?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($id));  
        $res=$req->fetch(PDO::FETCH_OBJ);
        return $res;
    }

    public function update($o) {
        $query = "UPDATE Classes SET filiere = ?,nom=? where id = ?";
        $req = $this->connexion->getConnexion()->prepare($query);
        $req->execute(array($o->getFiliere(),$o->getNom(), $o->getId())) or die('Error');       
    }

}
