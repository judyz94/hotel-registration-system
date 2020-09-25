<?php

namespace App\Http\Controllers;

use App\Models\Receptionist;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ReceptionistController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $receptionists = Receptionist::paginate(10);

        return view('receptionists.index', compact( 'receptionists'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Receptionist $receptionist
     * @return Application|Factory|View
     */
    public function create(Receptionist $receptionist)
    {
        $receptionists = Receptionist::all();

        return view('receptionists.create', compact('receptionists', 'receptionist'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        Receptionist::create($request->all());

        return redirect()->route('receptionists.index')->with('info', 'Registrador creado satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param Receptionist $receptionist
     * @return Application|Factory|View
     */
    public function show(Receptionist $receptionist)
    {
        $receptionists = Receptionist::all();

        return view('receptionists.show',  compact('receptionists', 'receptionist'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Receptionist $receptionist
     * @return Application|Factory|View
     */
    public function edit(Receptionist $receptionist)
    {
        $receptionists = Receptionist::all();

        return view('receptionists.edit',  compact('receptionists', 'receptionist'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Receptionist $receptionist
     * @return RedirectResponse
     */
    public function update(Request $request, Receptionist $receptionist)
    {
        $receptionist->update($request->all());

        return redirect()->route('receptionists.index')->with('info', 'Registrador actualizado satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Receptionist $receptionist
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Receptionist $receptionist)
    {
        $receptionist->delete();

        return redirect()->route('receptionists.index')->with('info', 'Registrador eliminado satisfactoriamente.');
    }
}
