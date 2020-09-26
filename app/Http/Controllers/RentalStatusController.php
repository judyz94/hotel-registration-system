<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RentalStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $statuses = Status::paginate(10);

        return view('statuses.index', compact( 'statuses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Status $status
     * @return Application|Factory|View
     */
    public function create(Status $status)
    {
        $statuses = Status::all();

        return view('statuses.create', compact('statuses', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        Status::create($request->all());

        return redirect()->route('statuses.index')->with('info', 'Estatus creado satisfactoriamente.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Status $status
     * @return Application|Factory|View
     */
    public function edit(Status $status)
    {
        $statuses = Status::all();

        return view('statuses.edit',  compact('statuses', 'status'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Status $status
     * @return RedirectResponse
     */
    public function update(Request $request, Status $status)
    {
        $status->update($request->all());

        return redirect()->route('statuses.index')->with('info', 'Estatus actualizado satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Status $status
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Status $status)
    {
        $status->delete();

        return redirect()->route('statuses.index')->with('info', 'Estatus eliminado satisfactoriamente.');
    }
}
