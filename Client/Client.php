<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Client
 *
 * @author reinC
 */
class Client extends Entity {
    
    private $IdClient;
    private $NomClient;
    private $PrenomClient;
    private $AdresseClient;
    private $CodePostalClient;
    private $VilleClient;
    private $MailClient;
    private $TelephoneClient;

    
    function __construct($data = NULL) {
        if(is_array($data)){
            parent::__construct($data);   
        }
    }
    
    function setIdClient($IdClient) {
        if(is_integer(intval($IdClient))){
            $this->IdClient = $IdClient;
        }
        
    }

    function setNomClient($NomClient) {
        if(strlen($NomClient) <= 25){
            $this->NomClient = $NomClient;
        }else{
            echo "Votre nom est trop grand, il doit contenir 25 caractères";
        }
       
    }

    function setPrenomClient($PrenomClient) {
        if(strlen($PrenomClient)<=50){
             $this->PrenomClient = $PrenomClient;

        } else {
            echo "Votre prénom est trop grand, il doit contenir 50 caractères";    
        }
    }

    function setAdresseClient($AdresseClient) {
        if(strlen($AdresseClient)<=50){
            $this->AdresseClient = $AdresseClient;
        } else {
            echo "Votre adresse est trop grande, elle doit contenir 50 caractères";
        }
        
    }


    function setCodePostalClient($CodePostalClient) {
        if(strlen($CodePostalClient) <= 15){
            $this->CodePostalClient = $CodePostalClient;
        } else {
            echo "Votre code psotale est trop grand, il doit contenir 15 caractères";
        }

        
    }

    function setVilleClient($VilleClient) {
        if(strlen($VilleClient)<= 30){
            $this->VilleClient = $VilleClient;
        } else {
            echo "Votre nom de ville est trop grande, elle doit contenir 30 caractères";
        }
        
    }

    function setTelephoneClient($TelephoneClient) {
        if(strlen($TelephoneClient)<= 25){
             $this->TelephoneClient = $TelephoneClient;
        } else {
            echo "Votre numéro de téléphone est trop grand, il doit contenir 25 caractères";
        }
       
    }


    function setMailClient($MailClient) {
        if(strlen($MailClient)<=50){
            $this->MailClient = $MailClient;
        }else{
            echo "Votre email est trop grand, il doit contenir 50 caractères";
        }
        
    }


    function getIdClient() {
        return $this->IdClient;
    }

    function getNomClient() {
        return $this->NomClient;
    }

    function getPrenomClient() {
        return $this->PrenomClient;
    }

    function getAdresseClient() {
        return $this->AdresseClient;
    }


    function getCodePostalClient() {
        return $this->CodePostalClient;
    }

    function getVilleClient() {
        return $this->VilleClient;
    }

    function getTelephoneClient() {
        return $this->TelephoneClient;
    }


    function getMailClient() {
        return $this->MailClient;
    }

    
}
