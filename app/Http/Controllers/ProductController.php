<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Product;
use PDF;


class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('Inventory_Apps.inven.tableProductData', compact('products'));
    }


    public function create()
    {
        return view('Inventory_Apps.inven.createProduct');
    }

    public function store(Request $request)
    {
        $products = Product::create($request->all());
        return redirect('product')->with('Success', 'Successful Data added!');
        $products->save();
    }

    public function show($id)
    {
        $products = Product::findOrFail($id);
        return view('Inventory_Apps.inven.createPr', ['createProduct' => $products]);
    }

    public function edit($id)
    {
        $products = Product::findOrFail($id);
        return view('Inventory_Apps.inven.editProduct', ['products' =>$products]);
    }

    public function update(Request $request, $id)
    {
        
        $this->validate($request, [
            'product'       => 'required',
            'price'         => 'required',
            'quantity'         => 'required',
            'desc'          => 'required',
        ]);
        $products = Product::findOrFail($id);
        $products->update([
            'product'       => $request->product,
            'price'         => $request->price,
            'quantity'      => $request->quantity,
            'desc'          => $request->desc
        ]);

        return redirect('product');

    }

    public function destroy($id)
    {
        $products = Product::findOrFail($id);
        $products->delete();

        return redirect('product');
    }

}