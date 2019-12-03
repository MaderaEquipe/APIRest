<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Manager
 *
 * @author reinC
 */
abstract class Manager {

    protected $pdo;
    protected $pdoStatement;
    
    public function __construct(){
        /* @var $nom type Nom de la base de données*/
        $nom = _dbnom;
        /* @var $utilisateur type */
        $utilisateur = _dbutilisateur;
        /* @var $psw type */
        $psw = _dbpsw;
        /* @var $host type */
        $host = _dbhost;
        $this->pdo=new PDO("mysql:host=$host;dbname=$nom;charset=utf8",$utilisateur,$psw);
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        
    }
}
