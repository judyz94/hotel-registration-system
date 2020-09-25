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
     * @param RoomType $type
     * @return Application|Factory|View
     */
    public function create(RoomType $type)
    {
        $types = RoomType::all();

        return view('types.create', compact('types', 'type'));
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
     * @param RoomType $type
     * @return Application|Factory|View
     */
    public function show(RoomType $type)
    {
        $types = RoomType::all();

        return view('types.show',  compact('types', 'type'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param RoomType $type
     * @return Application|Factory|View
     */
    public function edit(RoomType $type)
    {
        $types = RoomType::all();

        return view('types.edit',  compact('types', 'type'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param RoomType $type
     * @return RedirectResponse
     */
    public function update(Request $request, RoomType $type)
    {
        $type->update($request->all());

        return redirect()->route('types.index')->with('info', 'Tipo de habitación actualizada satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param RoomType $type
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(RoomType $type)
    {
        $type->delete();

        return redirect()->route('types.index')->with('info', 'Tipo de habitación eliminada satisfactoriamente.');
    }
}
