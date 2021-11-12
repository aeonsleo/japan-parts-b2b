<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\CategoryField;
use Illuminate\Http\Request;

class CategoryFieldController extends Controller
{
    /**
     * Constructor
     */
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission:category-field-list')->only(['index']);
        $this->middleware('permission:category-field-create')->only(['create', 'store']);
        $this->middleware('permission:category-field-edit')->only(['edit', 'update']);
        $this->middleware('permission:category-field-delete')->only(['delete']);        
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoryFields = CategoryField::all();
        return view('admin.category-fields.index', compact('categoryFields'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('admin.category-fields.create', compact('categories'));
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
            'category_id' => 'required',
            'name' => 'required|string'
        ]);

        $categoryField = CategoryField::create([
            'category_id' => $request->category_id,
            'name' => $request->name
        ]);

        return redirect()->route('category-fields.create')
        ->with('success','Category field created successfully!');
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
    public function edit(CategoryField $categoryField)
    {
        $categories = Category::all();
        return view('admin.category-fields.edit', compact('categories', 'categoryField'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoryField $categoryField)
    {
        $request->validate([
            'name' => 'required|string',
            'category_id' => 'required|numeric'
        ]);

        $categoryField->name = $request->name;
        $categoryField->category_id = $request->category_id;

        $categoryField->save();

        return redirect()->route('category-fields.index')
        ->with('success','Category field updated successfully!');
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
