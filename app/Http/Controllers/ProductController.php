<?php

namespace App\Http\Controllers;

use App\Model\Product;
use Illuminate\Http\Request;

# Included by Christian, to resolve the import error
use App\Http\Resources\Product\ProductResource;
use App\Http\Resources\Product\ProductCollection;
use App\Http\Requests\ProductRequest;
use Symfony\Component\HttpFoundation\Response;
use App\Exceptions\ProductNotBelongsToUser;
use Auth;

class ProductController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */

	public function __construct()
	{
		// $this->middleware('auth:api')->except('index', 'show');
	}

	public function index()
	{
		return ProductCollection::collection(Product::paginate(10));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(ProductRequest $request)
	{
		$product = new Product;
		$product->name = $request->name;
		$product->subName = $request->subName;
		$product->price = $request->price;
		$product->detail = $request->description;
		$product->tag= $request->tag;
		// $product->stock = $request->stock;
		// $product->discount = $request->discount;

		$nameFile = null;
		if ($request->hasFile('image') && $request->file('image')->isValid()) {
			$name = uniqid(date('HisYmd'));
			$extension = $request->image->extension();
			$nameFile = "{$name}.{$extension}";
			$upload = $request->image->storeAs('categories', $nameFile);

			if (!$upload) {
				return redirect()
					->back()
					->with('error', 'Falha ao fazer upload')
					->withInput();
			}
		}

		$product->save();

		return response([
			'data' => new ProductResource($product)
		], Response::HTTP_CREATED);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  \App\Model\Product  $product
	 * @return \Illuminate\Http\Response
	 */
	public function show(Product $product)
	{
		#return $product;
		return new ProductResource($product);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  \App\Model\Product  $product
	 * @return \Illuminate\Http\Response
	 */
	public function edit(Product $product)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \App\Model\Product  $product
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, Product $product)
	{
		$this->ProductUserCheck($product);
		$request['detail'] = $request->description;
		unset($request['description']);
		$product->update($request->all());

		return response([
			'data' => new ProductResource($product)
		], Response::HTTP_CREATED);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  \App\Model\Product  $product
	 * @return \Illuminate\Http\Response
	 */
	public function destroy(Product $product)
	{
		$this->ProductUserCheck($product);
		$product->delete();
		return response(null, Response::HTTP_NO_CONTENT);
	}

	public function ProductUserCheck($product)
	{
			/*
			if (Auth::id() !== $product->user_id) {
				throw new ProductNotBelongsToUser;
			}
			 */
	}
}
