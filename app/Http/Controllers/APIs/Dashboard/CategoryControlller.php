<?php

namespace App\Http\Controllers\APIs\Dashboard;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\APIs\BaseController;
use App\Http\Resources\Category as CategoryRequest;

class CategoryControlller extends BaseController
{
    public function index ( Request $request ) {
        $categories = Category::all();
        return $this->sendResponse(CategoryRequest::collection($categories),
        'all categories retrive succcesfully');
    }
    
    public function store ( Request $request) {
        // dd(12312);
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required|unique:categories,name'
        ]);
// dd($validator);
        if($validator->fails()) {
            return $this->sendError('please validate error', $validator->errors()) ;
        }

        $category  = Category::create([
            'name' => $request->name,
        ]);
        dd($category);

        return $this->sendResponse(new CategoryRequest($category), 'category added successfully');
    }
   
    public function update (Request $request, Category $category) {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
             Rule::unique('categories', 'name')->ignore($category),
        ]);

        if($validator->fails()) {
            return $this->sendError('please validate error', $validator->errors()) ;
        }
        $category->name = $request->name;
        $category->save();
        // dd($category);

        return $this->sendResponse(new CategoryRequest($category), 'category updated successfully');

    }

    public function delete ( Request $request, Category $category) {
        $category->delete();
        return $this->sendResponse(new CategoryRequest($category), 'category deleted successfully');
    }
}
