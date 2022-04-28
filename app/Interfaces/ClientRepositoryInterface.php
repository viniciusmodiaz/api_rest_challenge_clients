<?php

namespace App\Interfaces;

interface ClientRepositoryInterface 
{
    public function getAllClients();
    public function getClientById($clientId);
    public function deleteClient($clinetId);
    public function createClient(array $clientDetails);
    public function updateClient($clientId, array $newDetails);
    public function getClientsEndNumber($clientNumber);
}