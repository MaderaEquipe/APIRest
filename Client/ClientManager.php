<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ClientManager
 *
 * @author reinC
 */
class ClientManager extends Manager
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function read($id)
    {
        
        $this->pdoStatement = $this->pdo->prepare("SELECT * FROM Client WHERE IdClient = :IdClient");
        $this->pdoStatement->bindValue(':IdClient', $id, PDO::PARAM_INT);
        $this->pdoStatement->execute();
        
        $data   = $this->pdoStatement->fetch();
        $client = new Client($data);
        return $client;

    }
    
    
    public function add(Client &$client)
    {
        $this->pdoStatement = $this->pdo->prepare("INSERT INTO client(NomClient, PrenomClient, AdresseClient ,CodePostalClient ,VilleClient , MailClient, TelephoneClient) VALUES(:NomClient, :PrenomClient, :AdresseClient, :CodePostalClient, :VilleClient, :MailClient, :TelephoneClient)");
        $this->pdoStatement->bindValue('NomClient', $client->getNomClient(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue('PrenomClient', $client->getPrenomClient(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue('AdresseClient', $client->getAdresseClient(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue('CodePostalClient', $client->getCodePostalClient(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue('VilleClient', $client->getVilleClient(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue('MailClient', $client->getMailClient(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue('TelephoneClient', $client->getTelephoneClient(), PDO::PARAM_STR);
    
        $result = $this->pdoStatement->execute();
        
        if ($result) {
            $id     = $this->pdo->lastInsertId();
            $client = $this->read($id);
            return true;
        } else {
            return false;
        }
    }
    
    
    
    public function update($client)
    {
        $this->pdoStatement = $this->pdo->prepare("UPDATE client SET NomClient = :NomClient, PrenomClient = :PrenomClient,  AdresseClient = :AdresseClient, CodePostalClient = :CodePostalClient, VilleClient = :VilleClient, MailClient = :MailClient, TelephoneClient = :TelephoneClient WHERE IdClient = :IdClient");

        $this->pdoStatement->bindValue('NomClient', $client->getNomClient(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue('PrenomClient', $client->getPrenomClient(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue('AdresseClient', $client->getAdresseClient(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue('CodePostalClient', $client->getCodePostalClient(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue('VilleClient', $client->getVilleClient(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue('MailClient', $client->getMailClient(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue('TelephoneClient', $client->getTelephoneClient(), PDO::PARAM_STR);
        $this->pdoStatement->bindValue('IdClient', $client->getIdClient(), PDO::PARAM_INT);
        $this->pdoStatement->execute();
        
    }
    //   if($result){
    //       $id=$this->pdo->lastInsertId();
    //       $client=$this->lire($id);return true;}else{return false;}}
    
    public function delete($id)
    {
        $this->pdoStatement = $this->pdo->prepare("DELETE FROM Client WHERE IdClient = $id ");
        $this->pdoStatement->execute();
        //    $this->pdoStatement->fetch();
        //   if($result){
        //       $id=$this->pdo->lastInsertId();
        //       $client=$this->read($id);
        //         return true;
        //    }else{
        //         return false;
        //    }
        
    }
}
