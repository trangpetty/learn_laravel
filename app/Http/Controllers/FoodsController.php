<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Foods;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use App\Rules\Uppercase;
use App\Http\Requests\CreateValidationRequest;

class FoodsController extends Controller
{
    public function index() {
        // $foods = DB::table("foods")
                // ->insert([
                //     'name' => 'sashimi',
                //     'desc'  => 'I love sashimi',
                //     'count' => 2
                // ]);
                // ->get();
                // ->where("id",'=',2)
                // ->delete();
        $foods = Foods::all();
        // $foods = Foods::where('name', '=', 'sushi')
        //         ->firstOrFail();
        //dd($foods);
        return view('foods.index',[
            'foods' => $foods
        ]);
    }

    public function create() {
        $categories = Category::all();
        return view('foods.create')->with('categories',$categories);
    }

    public function edit($id) {
        //dd($id);
        $food = Foods::find($id);
        //dd($food);
        return view('foods.edit')->with('food', $food);
    }

    public function update(CreateValidationRequest $request, $id) {
        $request->validated();
        $food = Foods::where('id', $id)
                ->update([
                    'name' => $request->input('name'),
                    'desc' => $request->input('desc'),
                    'count' => $request->input('count')
                ]);
        return redirect('/foods');
    }

    public function destroy($id) {
        //dd($id);
        $food = Foods::find($id);
        $food->delete();
        return redirect('/foods');
    }

    public function show($id) {
        //dd('THIS IS SHOW FUNCTION '.$id);
        $food = Foods::find($id);
        //$category = $food->category();
        $category = Category::find($food->categories_id);
        //$category = Category::all();
        $food->category = $category;
        //dd($food);
        //dd($category);
        return view('foods.show')->with('food',$food);
    }

    public function store(CreateValidationRequest $request) {
        //dd($request->all());
        //dd('this is store function');
        // $food = new Foods();
        // $food->name = $request->input('name');
        // $food->desc = $request->input('desc');
        // $food->count = $request->input('count');
        //dd($request);
        //dd($request->file('image_path')->isValid());//->isValid());
        $generatedImageName = 'image_path'.time().'-'.$request->name.'.'.$request->image_path->extension();
        //dd($generatedImageName);
        $request->image_path->move(public_path('images'),$generatedImageName);
        $food = Foods::create([
            'name' => $request->input('name'),
            'desc' => $request->input('desc'),
            'count' => $request->input('count'),
            'categories_id' => $request->input('category_id'),
            'image_path' => $generatedImageName
        ]);
        $request->validated();
        $food->save();
        // $category = Category::create([
        //     'name' => $request->input('name-cate'),
        //     'desc' => $request->input('desc-cate')
        // ]);
        // $category->save();
        return redirect('/foods');
    }
    
}
