<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Confirm;

class ConfirmController extends Controller
{
    public function index()
    {
        $confirms = Confirm::all();
        return view('Inventory_Apps.website.dashboardInven', compact('confirm'));
    }

    public function create()
    {
        return view('Inventory_Apps.website.dashboardInven');
    }

    public function store(Request $request)
    {
        $confirms = Confirm::create($request->all());
        return redirect('confirm')->with('Success', 'Successful Data added!');
    }

    public function destroy($id)
    {
        $confirms = Confirm::findOrFail($id);
        $confirms->delete();

        return redirect('confirm');
    }
}