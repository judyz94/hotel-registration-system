<?php

namespace App\Http\Controllers;

use App\Models\RoomType;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RoomTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $types = RoomType::paginate(10);

        return view('types.index', compact( 'types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param RoomType $roomType
     * @return Application|Factory|View
     */
    public function create(RoomType $roomType)
    {
        $types = RoomType::all();

        return view('types.create', compact('types', 'roomType'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        RoomType::create($request->all());

        return redirect()->route('types.index')->with('info', 'Tipo de habitación creada satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param RoomType $roomType
     * @return Application|Factory|View
     */
    public function show(RoomType $roomType)
    {
        $types = RoomType::all();

        return view('types.show',  compact('types', 'roomType'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param RoomType $roomType
     * @return Application|Factory|View
     */
    public function edit(RoomType $roomType)
    {
        $types = RoomType::all();

        return view('types.edit',  compact('types', 'roomType'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param RoomType $roomType
     * @return RedirectResponse
     */
    public function update(Request $request, RoomType $roomType)
    {
        $roomType->update($request->all());

        return redirect()->route('types.index')->with('info', 'Tipo de habitación actualizada satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param RoomType $roomType
     * @return RedirectResponse
     */
    public function destroy(RoomType $roomType)
    {
        $roomType->delete();

        return redirect()->route('types.index')->with('info', 'Tipo de habitación eliminada satisfactoriamente.');
    }
}
