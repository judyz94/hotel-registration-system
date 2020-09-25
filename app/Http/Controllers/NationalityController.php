<?php

namespace App\Http\Controllers;

use App\Models\Nationality;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NationalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $nationalities = Nationality::paginate(10);
        //DB::table('nationalities')->simplePaginate(10);

        return view('nationalities.index', compact( 'nationalities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Nationality $nationality
     * @return Application|Factory|View
     */
    public function create(Nationality $nationality)
    {
        $nationalities = Nationality::all();

        return view('nationalities.create', compact('nationalities', 'nationality'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        Nationality::create($request->all());

        return redirect()->route('nationalities.index')->with('info', 'Nacionalidad creada satisfactoriamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param Nationality $nationality
     * @return Application|Factory|View
     */
    public function show(Nationality $nationality)
    {
        $nationalities = Nationality::all();

        return view('nationalities.show',  compact('nationalities', 'nationality'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Nationality $nationality
     * @return Application|Factory|View
     */
    public function edit(Nationality $nationality)
    {
        $nationalities = Nationality::all();

        return view('nationalities.edit',  compact('nationalities', 'nationality'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Nationality $nationality
     * @return RedirectResponse
     */
    public function update(Request $request, Nationality $nationality)
    {
        $nationality->update($request->all());

        return redirect()->route('nationalities.index')->with('info', 'Nacionalidad actualizada satisfactoriamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Nationality $nationality
     * @return RedirectResponse
     * @throws \Exception
     */
    public function destroy(Nationality $nationality)
    {
        $nationality->delete();

        return redirect()->route('nationalities.index')->with('info', 'Nacionalidad eliminada satisfactoriamente.');
    }
}
