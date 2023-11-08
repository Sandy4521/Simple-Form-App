<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Events\ProductCreated;
// use App\Events\FormSaved;


class ProductController extends Controller
{
    // Method invoked when accessing the /form route
    public function __invoke()
    {
        DB::table('forms')->get();

        return view('products.create');
    }

    //Method to display a list of records in the 'products.index' view
    public function index()
    {
        $forms = DB::table('forms')->get();
        //Retrieves all records from the 'forms' table and passes them to the 'products.index' view
        return view('products.index', ['forms' => $forms]);
    }

    public function insert(Request $request)
    {
        //Validate data of the form
        $request->validate([
            'item_type' => ['required'],
            'item_code' => ['required'],
            'item_name' => ['required'],
            'description' => ['required'],
        ]);

        //Save data in the data base
        $forms = new Form();
        $forms->item_type = $request->input('item_type');
        $forms->item_code = $request->input('item_code');
        $forms->item_name = $request->input('item_name');
        $forms->description = $request->input('description');
        $forms->save();

        event(new ProductCreated($forms->toArray()));

        return redirect()->route('products.index')->with('status', 'Successfully saved data.');
    }

    // Edit the form 
    public function edit($id)
    {
        $forms = Form::find($id);
        return view('products.edit', compact('forms'));
    }

    //Update the form
    public function update(Request $request, $id)
    {
        $forms = Form::find($id);
        $forms->item_type = $request->input('item_type');
        $forms->item_code = $request->input('item_code');
        $forms->item_name = $request->input('item_name');
        $forms->description = $request->input('description');
        $forms->update();

        session()->flash('status', 'Successfully update data.');
        return redirect()->route('products.index');
    }

    //Delete data from the form 
    public function delete($id)
    {
        $forms = Form::find($id);
        $forms->delete();

        session()->flash('status', ' Data Deleted Successfully.');
        return redirect()->route('products.index');
    }
    //Store the data 
    public function store(Request $request)
    {
        $data = $request->validate([
            'item_type' => ['required'],
            'item_code' => ['required'],
            'item_name' => ['required'],
            'description' => ['required'],
        ]);
        Form::create($data);


        session()->flash('status', 'Successfully saved data.');
        return redirect()->route('products.index');
    }
}
