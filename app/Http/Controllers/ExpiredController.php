<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use App\Models\Expired;
use PDF;

class ExpiredController extends Controller
{
    public function index()
    {
        $expireds = Expired::all();
        return view('Inventory_Apps.inven.tableExpiredData', compact('expireds'));
    }

    public function exportR_pdf()
    {
    	$expireds = Expired::all();
        view()->share('expireds', $expireds);
    	$pdf = PDF::loadview('Inventory_Apps.inven.dataProduct',['expireds'=>$expireds]);           //('Inventory_Apps.inven.dataProduct', compact('outs'));                                   //('Inventory_Apps.inven.dataProduct',['product'=>$products]);
    	return $pdf->download('dataExpired.pdf');
    }

    public function create()
    {
        return view('Inventory_Apps.inven.createExpired');
    }

    public function store(Request $request)
    {
        $expireds = Expired::create($request->all());
        return redirect('expired')->with('Success', 'Successful Data added!');
    }

    public function show($id)
    {
        $expireds = Expired::findOrFail($id);
        return view('Inventory_Apps.inven.createExpired', ['createExpired' => $expireds]);
    }

    public function edit($id)
    {
        $expireds = Expired::findOrFail($id);
        return view('Inventory_Apps.inven.editExpired', ['expireds' =>$expireds]);
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'expired'              => 'required',
            'price'          => 'required',
            'desc'              => 'required'
        ]);
        $expireds = Expired::findOrFail($id);
        $expireds->update([
            'expired'              => $request->expired,
            'price'          => $request->price,
            'desc'              => $request->desc
        ]);

        return redirect('expired');

    }

    public function destroy($id)
    {
        $expireds = Expired::findOrFail($id);
        $expireds->delete();

        return redirect('expired');
    }
}