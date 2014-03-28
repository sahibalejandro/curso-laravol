<?php
class ProductsController extends BaseController
{
    public function home()
    {
        $products = Product::all();
        return View::make('products.list')->with('products', $products);
    }

    public function detail($id)
    {
        $Product = Product::findOrFail($id);
        return View::make('products.detail')->with('Product', $Product);
    }

    public function add($id)
    {
        
    }
}