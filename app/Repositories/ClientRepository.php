<?php

namespace App\Repositories;

use App\Interfaces\ClientRepositoryInterface;
use App\Models\Cliente;
use Illuminate\Support\Facades\DB;

class ClientRepository implements ClientRepositoryInterface 
{
    public function getAllClients() 
    {
        return Cliente::all();
    }

    public function getClientById($clientId) 
    {
        return Cliente::findOrFail($clientId);
    }

    public function deleteClient($clientId) 
    {
        Cliente::destroy($clientId);
    }

    public function createClient(array $clientDetails) 
    {
        return Cliente::create($clientDetails);
    }

    public function updateClient($clientId, array $newDetails) 
    {
        return Cliente::whereId($clientId)->update($newDetails);
    }

    public function getClientsEndNumber($clientNumber){

        return DB::select('SELECT * FROM clientes WHERE RIGHT(placa_do_carro, 1) =  :clientNumber', ['clientNumber' => $clientNumber]);
    }
}