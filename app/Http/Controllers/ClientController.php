<?php

namespace App\Http\Controllers;

// use App\Interfaces\ClientRepositoryInterface;
use App\Interfaces\ClientRepositoryInterface;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ClientController extends Controller 
{
    private $clientRepository;

    public function __construct(ClientRepositoryInterface $clientRepository) 
    {
        $this->clientRepository = $clientRepository;
    }

    public function index(): JsonResponse 
    {
        return response()->json([
            'data' => $this->clientRepository->getAllClients()
        ]);
    }

    public function store(Request $request): JsonResponse 
    {
        $clientDetails = $request->only([
            'nome',
            'telefone',
            'cpf',
            'placa_do_carro'
        ]);


        return response()->json(
            [
                'data' => $this->clientRepository->createClient($clientDetails)
            ],
            Response::HTTP_CREATED
        );
    }

    public function showEndPlate(Request $request): JsonResponse 
    {
        $clientNumber = $request->route('numero');
        
        return response()->json([
            'data' => $this->clientRepository->getClientsEndNumber($clientNumber)
        ]);
    }

    public function show(Request $request): JsonResponse 
    {
        $clientId = $request->route('id');

        return response()->json([
            'data' => $this->clientRepository->getClientById($clientId)
        ]);
    }

    public function update(Request $request): JsonResponse 
    {
        $clientId = $request->route('id');
        $clientDetails = $request->only([
            'nome',
            'telefone',
            'cpf',
            'placa_do_carro'
        ]);

       $client_id = $this->clientRepository->updateClient($clientId, $clientDetails);
       
       $client = $this->clientRepository->getClientById($client_id);

        return response()->json([
            'data' => $client 
        ]);
    }

    public function destroy(Request $request): JsonResponse 
    {
        $clintId = $request->route('id');
        $this->clientRepository->deleteClient($clintId);

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }
}