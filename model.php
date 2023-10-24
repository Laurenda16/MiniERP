<?php
class Database
{
    private $host = "mysql:dbname=ajax";
    private $user = "root";
    private $pswd = "";

    private function getconnexion()
    {
        try{
            return new PDO($this->host,$this->user,$this->pswd);
        }catch(PDOException $e){
            die('Erreur:' . $e->getMessage() );
        }
    }

    //creation des fonction du crud create read update and delete
    //Pour le crud
public function create(string $customer,string $cashier, int $amount, int $received, int $returned,string $state)
{
$q= $this->getconnexion()->prepare("INSERT INTO facture(customer, cashier,amount, received, returned, state) VALUE(:customer,:cashier,:amount,:received,:returned,:state)");
return $q->execute([
'customer' => $customer,
'cashier' => $customer,
'amount' => $amount,
'received' => $received,
'returned' => $returned,
'state' => $state,
]);
}
}
