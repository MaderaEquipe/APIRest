<?php


require '../ini.php';

use \Jacwright\RestServer\RestException;


class ClientControlleur
{
    /**
     * Returns a JSON string object to the browser when hitting the root of the domain
     *
     * @url GET /
     */
    public function test()
    {
        return "Hello World  ca marche";
    }

    /**
     * Logs in a user with the given username and password POSTed. Though true
     * REST doesn't believe in sessions, it is often desirable for an AJAX server.
     *
     * @url POST /login
     */
    public function login()
    {
        $username = $_POST['username'];
        $password = $_POST['password']; //@todo remove since it is not needed anywhere
        return array("success" => "Logged in " . $username);
    }

    /**
     * Gets the user by id or current user
     *
     * @url GET /Client/$id
     * @url GET /Client/current
     */
    public function getUser($id = null)
    {
        // if ($id) {
        //     $user = User::load($id); // possible user loading method
        // } else {
        //     $user = $_SESSION['user'];
        // }

        return array("id" => $id, "name" => null); // serializes object into JSON
    }

    /**
     * Saves a user to the database
     *
     * @url POST /users
     * @url PUT /users/$id
     */
    public function saveUser($id = null, $data)
    {
        // ... validate $data properties such as $data->username, $data->firstName, etc.
        // $data->id = $id;
        // $user = User::saveUser($data); // saving the user to the database
        $user = array("id" => $id, "name" => null);
        return $user; // returning the updated or newly created user object
    }

    /**
     * Get Charts
     * 
     * @url GET /charts
     * @url GET /charts/$id
     * @url GET /charts/$id/$date
     * @url GET /charts/$id/$date/$interval/
     * @url GET /charts/$id/$date/$interval/$interval_months
     */
    public function getCharts($id=null, $date=null, $interval = 30, $interval_months = 12)
    {
        echo "$id, $date, $interval, $interval_months";
    }

    /**
     * Throws an error
     * 
     * @url GET /error
     */
    public function throwError() {
        throw new RestException(401, "Empty password not allowed");
    }
}
  
  
//  
//$clientManager = new ClientManager();
//$list=$clientManager->getClient();
//foreach($list as $value){
//    $listeClient=array(
//  'NomClient' => $value->getNomClient(),
//  'PrenomClient' => $value->getPrenomClient(),
//  'Adresse1Client' => $value->getAdresse1Client(),
//  'Adresse2Client' => $value->getAdresse2Client(),
//  'CodePostaleClient' => $value->CodePostaleClient(),
//  'VilleClient' =>$value->getVilleClient(),
//  'TelephoneBureauClient' => $value->getTelephoneBureauClient(),
//  'TelephoneMobileClient' => $value->getTelephoneMobileClient(),
//  'MailClient' => $value->getMailClient(),
//  'BudgetMaxRemboursementClient' => $value->getBudgetMaxRemboursementClient(),
//        
//    );
//    echo json_encode($listeClient);
//}
//    
////Création d'un tableau pour $client
//$client= new Client([
//  'NomClient' => 'Xavier',
//  'PrenomClient' => 'Salaberria',
//  'Adresse1Client' => '52 Rue Emile Guichenné',
//  'Adresse2Client' => '52 Rue Emile Guichenné',
//  'CodePostaleClient' => "64000",
//  'VilleClient' => "Pau",
//  'TelephoneBureauClient' => "05 59 40 60 80",
//  'TelephoneMobileClient' => "06 70 40 65 77",
//  'MailClient' => "xavier.salaberria@greta-sud-aquitaine.academy",
//  'BudgetMaxRemboursementClient' => 10.10,
//    
//
//]);

////Affiche tableau $client
//
//
//
////$clientManager = new ClientManager();
////$client = $clientManager->read(2);
////$client->setNomClient("toto");
////$clientManager->update($client);
//////Ajout d'un client avec fonction add()
//////$clientManager->delete(10);
//////Lire un client avec la fonction read() à l'aide de l'id
//////$client2=$clientManager->read(4);
//
//
//JsonClient($client);
//
//function JsonClient($client){
////    $listeClient=[];
//foreach($client as $value){
//    $listeClient=array(
//  'NomClient' => $value->getNomClient(),
//  'PrenomClient' => $value->getPrenomClient(),
//  'Adresse1Client' => $value->getAdresse1Client(),
//  'Adresse2Client' => $value->getAdresse2Client(),
//  'CodePostaleClient' => $value->CodePostaleClient(),
//  'VilleClient' =>$value->getVilleClient(),
//  'TelephoneBureauClient' => $value->getTelephoneBureauClient(),
//  'TelephoneMobileClient' => $value->getTelephoneMobileClient(),
//  'MailClient' => $value->getMailClient(),
//  'BudgetMaxRemboursementClient' => $value->getBudgetMaxRemboursementClient(),
//        
//    );
//    echo json_encode($listeClient);
//    
//    
//    }
//echo "bonjour";
//$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
//
//echo json_encode($arr);
//}
//
//
//    $listeClient=array(
//  'NomClient' => $value->getNomClient(),
//  'PrenomClient' => $value->getPrenomClient(),
//  'Adresse1Client' => $value->getAdresse1Client(),
//  'Adresse2Client' => $value->getAdresse2Client(),
//  'CodePostaleClient' => $value->CodePostaleClient(),
//  'VilleClient' =>$value->getVilleClient(),
//  'TelephoneBureauClient' => $value->getTelephoneBureauClient(),
//  'TelephoneMobileClient' => $value->getTelephoneMobileClient(),
//  'MailClient' => $value->getMailClient(),
//  'BudgetMaxRemboursementClient' => $value->getBudgetMaxRemboursementClient(),
//        
//    );
//   
//?>