<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class ProductController extends Controller
{
    public static $products = [
        ['id' => '1', 'name' => 'TV', 'description' => 'Best TV', 'price' => '500'],
        ['id' => '2', 'name' => 'iPhone', 'description' => 'Best iPhone', 'price' => '1500'],
        ['id' => '3', 'name' => 'Chromecast', 'description' => 'Best Chromecast', 'price' => '50'],
        ['id' => '4', 'name' => 'Glasses', 'description' => 'Best Glasses', 'price' => '100'],
    ];

    public function index(): View
    {
        $viewData = [];
        $viewData['title'] = 'Products - Online Store';
        $viewData['subtitle'] = 'List of products';
        $viewData['products'] = self::$products;

        return view('product.index')->with('viewData', $viewData);
    }

    public function show(string $id): View|RedirectResponse
    {
        $index = (int) $id - 1;

        if (!isset(self::$products[$index])) {
            return redirect()->route('home.index');
        }

        $product = self::$products[$index];

        $viewData = [];
        $viewData['title'] = $product['name'] . ' - Online Store';
        $viewData['subtitle'] = $product['name'] . ' - Product information';
        $viewData['product'] = $product;

        return view('product.show')->with('viewData', $viewData);
    }

    public function create(): View
    {
        $viewData = [];
        $viewData['title'] = 'Create product';

        return view('product.create')->with('viewData', $viewData);
    }

    public function save(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'price' => 'required',
        ]);

        // dd($request->all()); // Puedes desmarcar si necesitas depurar el formulario

        return back();
    }
}



