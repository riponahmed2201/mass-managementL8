<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\FoodCategory;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Brian2694\Toastr\Facades\Toastr;

class FoodCategoryController extends Controller
{
    public function index()
    {
        $foodCategories = FoodCategory::orderBy('id','desc')->get();
        return view('backend.foodCategory.index', compact('foodCategories'));
    }

    public function create()
    {
        return view('backend.foodCategory.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'food_category_name' => 'required|unique:food_categories',
            'photo' => 'required',
        ]);

        //Image Upload
        $singleFile = $request->file('photo');
        $photo = '';

        if ($singleFile) {
            $i = 0;
            $fileEx = $singleFile->getClientOriginalExtension();
            $fileName = date('Ymdhis_').$i. '.'.$fileEx;
            Image::make($singleFile)
                ->resize(400,400)
                ->save(public_path('uploads/foodCategoryName/').$fileName );
            $photo = $fileName;
        }

        try {
            $foodCategory = new FoodCategory();
            $foodCategory->food_category_name = $request->food_category_name;
            $foodCategory->photo = $photo;
            if ($foodCategory->save())
            {
//                Toastr::success('Post Successfully Saved :)','Success');
//                return back();
                return back()->with('success','Food category successfully created.');
            }
        }catch (\Exception $exception){
            return back()->with('error','Something Error Found, Please try again.');
        }
    }

    public function edit($id)
    {
        $foodCategory = FoodCategory::findOrFail($id);
        return view('backend.foodCategory.edit', compact('foodCategory'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'food_category_name' => 'required|unique:food_categories',
        ]);

        try {
            $foodCategory = FoodCategory::findOrFail($id);

            //Image Upload
            $imageFile = $request->file('photo');

            if ($imageFile)
            {
                $i = 0;
                $singleFileEx = $imageFile->getClientOriginalExtension();
                $fileName = date('Ymdhis_').$i. '.'.$singleFileEx;

                Image::make($imageFile)
                    ->resize(500,500)
                    ->save(public_path('uploads/foodCategoryName/').$fileName );

                if ($foodCategory->photo)
                {
                    if(file_exists('uploads/foodCategoryName/'.$foodCategory->photo) AND !empty($foodCategory->photo))
                    {
                        unlink('uploads/foodCategoryName/'.$foodCategory->photo);
                    }
                }
                $foodCategory->photo = $fileName;
            }
            else{
                $foodCategory->photo = $foodCategory->photo;
            }

            $foodCategory->food_category_name = $request->food_category_name;
            if ($foodCategory->save())
            {
                return redirect()->route('food.category.index')->with('success','Food category successfully updated.');
            }
        }catch (\Exception $exception){
            return back()->with('error','Something Error Found, Please try again.');
        }
    }

    public function destroy($id){
        $foodCategory = FoodCategory::findOrFail($id);
        if($foodCategory){
            if(file_exists('uploads/foodCategoryName/'.$foodCategory->photo) AND !empty($foodCategory->photo)){
                unlink('uploads/foodCategoryName/'.$foodCategory->photo);
            }
            $foodCategory->delete();
            return redirect()->back()->with('success','Food category successfully deleted.');
        }else{
            return redirect()->back()->with('failed','Something Error Found !, Please try again.');
        }
    }
}
