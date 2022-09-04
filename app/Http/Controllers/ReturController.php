<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Retur;

class ReturController extends Controller
{
    public function index()
    {
        $returns = Retur::all();
        return view('Inventory_Apps.inven.tableReturnData', compact('returns'));
    }

    public function create()
    {
        return view('Inventory_Apps.inven.createReturn');
    }

    public function store(Request $request)
    {
        $returns = Retur::create($request->all());
        return redirect('retur')->with('Success', 'Successful Data added!');
    }

    public function show($id)
    {
        $returns = Retur::findOrFail($id);
        return view('Inventory_Apps.inven.createReturn', ['createReturn' => $returns]);
    }

    public function edit($id)
    {
        $returns = Retur::findOrFail($id);
        return view('Inventory_Apps.inven.editReturn', ['returns' =>$returns]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'return'              => 'required',
            'price'          => 'required',
            'date'             => 'required',
            'desc'              => 'required'
        ]);
        $returns = Retur::findOrFail($id);
        $returns->update([
            'return'              => $request->return,
            'price'          => $request->price,
            'date'             => $request->date,
            'desc'              => $request->desc
        ]);

        return redirect('retur');

    }

    public function destroy($id)
    {
        $returns = Retur::findOrFail($id);
        $returns->delete();

        return redirect('retur');
    }
}