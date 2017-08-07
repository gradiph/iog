<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
    {
        return view('admin.product.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();
		$success = true;

		$filename = $request->code . date('_YmdHis') . '.jpg';
		$path = $request->image->storeAs('public/product', $filename);
		if(!$path)
		{
			$success = false;
			$error = "path";
		}

		$product = Product::create([
			'code' => $request->code,
			'name' => $request->name,
			'detail' => $request->detail,
			'qty' => $request->qty,
			'price' => $request->price,
			'image' => $filename,
		]);
		if(!$product)
		{
			$success = false;
			$error = "product";
		}

		if($success)
		{
			DB::commit();
			return redirect()->route('products.index')->with([
				'alert_type' => 'alert-success',
				'alert_messages' => 'Product ' . $request->code . ' is created.',
			]);
		}
		else
		{
			DB::rollBack();
			return redirect()->route('products.index')->with([
				'alert_type' => 'alert-danger',
				'alert_messages' => 'Creating product ' . $request->code . ' is failed. Error code: ' . $error,
			]);
		}
    }

    public function show(Product $product)
    {
        return view('admin.product.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        DB::beginTransaction();
		$success = true;

		if($request->hasFile('image'))
		{
			$filename = $request->code . date('_YmdHis') . '.jpg';
			$path = $request->image->storeAs('public/product', $filename);
			if(!$path)
			{
				$success = false;
				$error = "path";
			}

			$product->image = $filename;
		}
		$product->code = $request->code;
		$product->name = $request->name;
		$product->detail = $request->detail;
		$product->qty = $request->qty;
		$product->price = $request->price;
		if(!$product->save())
		{
			$success = false;
			$error = "product";
		}

		if($success)
		{
			DB::commit();
			return redirect()->route('products.index')->with([
				'alert_type' => 'alert-success',
				'alert_messages' => 'Product ' . $request->code . ' is updated.',
			]);
		}
		else
		{
			DB::rollBack();
			return redirect()->route('products.index')->with([
				'alert_type' => 'alert-danger',
				'alert_messages' => 'Editing product ' . $request->code . ' is failed. Error code: ' . $error,
			]);
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        if($product->delete())
		{
			return redirect()->route('products.index')->with([
				'alert_type' => 'alert-success',
				'alert_messages' => 'Product ' . $product->code . ' is deleted.',
			]);
		}
		else
		{
			return redirect()->route('products.index')->with([
				'alert_type' => 'alert-danger',
				'alert_messages' => 'Deleting product ' . $product->code . ' is failed.',
			]);
		}
    }

	public function datalist(Request $request)
	{
		session(['product_search' => $request->has('oksearch') ? $request->search : session('product_search', '')]);

		$products = Product::where('code', 'like', '%' . session('product_search') . '%')
			->orWhere('name', 'like', '%' . session('product_search') . '%')
			->orWhere('price', 'like', '%' . session('product_search') . '%')
			->orWhere('detail', 'like', '%' . session('product_search') . '%')
			->orderBy('name', 'asc')
			->paginate(8);

		return view('admin.product.list')->with([
			'products' => $products,
		]);
	}
}
