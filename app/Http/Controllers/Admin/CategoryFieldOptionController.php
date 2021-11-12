<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryField;
use App\Models\CategoryFieldOption;
use Illuminate\Http\Request;

class CategoryFieldOptionController extends Controller
{
    /**
     * Constructor
     */
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:category-field-options-list')->only(['index']);
        $this->middleware('permission:category-field-options-create')->only(['create', 'store']);
        $this->middleware('permission:category-field-options-edit')->only(['edit', 'update']);
        $this->middleware('permission:category-field-options-delete')->only(['delete']);               
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryFieldOptions = CategoryFieldOption::all();
        
        return view('admin.category-field-options.index', compact('categoryFieldOptions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoryFields = CategoryField::all();
        return view('admin.category-field-options.create', compact('categoryFields'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'category_field_id' => 'required|numeric'
        ]);

        CategoryFieldOption::create([
            'name' => $request->name,
            'category_field_id' => $request->category_field_id
        ]);

        return redirect()->route('category-field-options.create')
        ->with('success','Category field option created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(CategoryFieldOption $categoryFieldOption)
    {
        $categoryFields = CategoryField::all();

        return view('admin.category-field-options.edit', compact('categoryFields', 'categoryFieldOption'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryFieldOption $categoryFieldOption)
    {
        $request->validate([
            'name' => 'required|string',
            'category_field_id' => 'required|numeric'
        ]);

        $categoryFieldOption->name = $request->name;
        $categoryFieldOption->category_field_id = $request->category_field_id;
        $categoryFieldOption->save();

        return redirect()->route('category-field-options.index')
        ->with('success','Category field option updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
