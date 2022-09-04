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

    public function total($price)
    {
        $total_products = Product::count();
        $total_assets = Product::count($price);
        return view('Inventory_Apps.website.dashboardInven', compact('total_products','total_assets'));
        //return view('Inventory_Apps.website.dashboardInven')->with('price',$total_assets);
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
            'desc'          => 'required',
        ]);
        $products = Product::findOrFail($id);
        $products->update([
            'product'       => $request->product,
            'price'         => $request->price,
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