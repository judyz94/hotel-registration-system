<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Nationality;
use App\Models\Rental;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $clients = Client::with(['nationality'])->paginate(10);

        return view('clients.index', compact( 'clients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Client $client
     * @return Application|Factory|View
     */
    public function create(Client $client)
    {
        $nationalities = Nationality::all();

        return view('clients.create', compact('nationalities', 'client'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        Client::create($request->all());

        return redirect()->route('clients.index')->with('info', 'Cliente creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param Client $client
     * @param Rental $rentals
     * @return Application|Factory|View
     */
    public function show(Client $client, Rental $rentals)
    {
        $nationalities = Nationality::all();

        return view('clients.show',  compact('nationalities', 'client', 'rentals'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Client $client
     * @return Application|Factory|View
     */
    public function edit(Client $client)
    {
        $nationalities = Nationality::all();

        return view('clients.edit',  compact('nationalities', 'client'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Client $client
     * @return RedirectResponse
     */
    public function update(Request $request, Client $client)
    {
        $client->update($request->all());

        return redirect()->route('clients.index')->with('info', 'Cliente actualizado satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Client $client
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Client $client)
    {
        $client->delete();

        return redirect()->route('clients.index')->with('info', 'Cliente eliminado satisfactoriamente.');
    }
}
