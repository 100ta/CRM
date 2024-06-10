<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Http\Requests\StoreItemRequest;
use App\Http\Requests\UpdateItemRequest;
use Inertia\Inertia;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Item::select('id','name','price','is_selling')->get();
        return Inertia::render('Items/Index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return Inertia::render('Items/Create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreItemRequest $request)
    {
        Item::create([
            'name'=>$request->name,
            'memo'=>$request->memo,
            'price'=>$request->price,
        ]);
    }

    public function show(Item $item)
    {
        return Inertia::render('Items/Show',['item'=>$item]);
    }

    public function edit(Item $item)
    {
        return Inertia::render('Items/Edit',['item'=>$item]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateItemRequest $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Item $item)
    {
        //
    }
}
