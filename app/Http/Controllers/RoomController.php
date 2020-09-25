<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\RoomType;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $rooms = Room::with(['type'])->paginate(10);

        return view('rooms.index', compact( 'rooms'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Room $room
     * @return Application|Factory|View
     */
    public function create(Room $room)
    {
        $types = RoomType::all();

        return view('rooms.create', compact('types', 'room'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        Room::create($request->all());

        return redirect()->route('rooms.index')->with('info', 'Habitación creada satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param Room $room
     * @return Application|Factory|View
     */
    public function show(Room $room)
    {
        $types = RoomType::all();

        return view('rooms.show',  compact('types', 'room'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Room $room
     * @return Application|Factory|View
     */
    public function edit(Room $room)
    {
        $types = RoomType::all();

        return view('rooms.edit',  compact('types', 'room'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Room $room
     * @return RedirectResponse
     */
    public function update(Request $request, Room $room)
    {
        $room->update($request->all());

        return redirect()->route('rooms.index')->with('info', 'Habitación actualizada satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Room $room
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Room $room)
    {
        $room->delete();

        return redirect()->route('rooms.index')->with('info', 'Habitación eliminada satisfactoriamente.');
    }
}
