<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Importar el modelo Item
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $item = new Item($request->all());
        $item->save();
        return redirect()->route('items.index');
    }

    // Asegúrate de implementar los métodos edit, update y destroy
}
