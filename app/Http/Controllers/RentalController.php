<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Receptionist;
use App\Models\Rental;
use App\Models\Room;
use App\Models\Status;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RentalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $rentals = Rental::with(['room', 'client', 'receptionist', 'status'])->paginate(10);

        return view('rentals.index', compact( 'rentals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Rental $rental
     * @return Application|Factory|View
     */
    public function create(Rental $rental)
    {
        $rooms = Room::all();
        $clients = Client::all();
        $receptionists = Receptionist::all();
        $statuses = Status::all();

        return view('rentals.create', compact('rooms', 'rental', 'clients', 'receptionists', 'statuses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        Rental::create($request->all());

        return redirect()->route('rentals.index')->with('info', 'Alquiler creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param Rental $rental
     * @return Application|Factory|View
     */
    public function show(Rental $rental)
    {
        $rooms = Room::all();
        $clients = Client::all();
        $receptionists = Receptionist::all();
        $statuses = Status::all();

        return view('rentals.show', compact('rooms', 'rental', 'clients', 'receptionists', 'statuses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Rental $rental
     * @return Application|Factory|View
     */
    public function edit(Rental $rental)
    {
        $rooms = Room::all();
        $clients = Client::all();
        $receptionists = Receptionist::all();
        $statuses = Status::all();

        return view('rentals.edit', compact('rooms', 'rental', 'clients', 'receptionists', 'statuses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Rental $rental
     * @return RedirectResponse
     */
    public function update(Request $request, Rental $rental)
    {
        $rental->update($request->all());

        return redirect()->route('rentals.index')->with('info', 'Alquiler actualizado satisfactoriamente.');
    }
}
