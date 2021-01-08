<?php

namespace App\Http\Controllers\admin\immigration;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use App\ImmigrationCategories;

class ImmigrationCategoriesController extends Controller
{
    public function index()
    {
    	$categories = ImmigrationCategories::all();
		$category= null;
    	return view('admin.immigration.categories.index', compact("category", "categories"));
    }

    public function save_category(Request $request)
    {
    	try {

        	$country = new ImmigrationCategories();
        	$country->name= $request->name;

        	$country->save();
        	return redirect()->route('admin_immigrations_categories')->with('message', 'Category successfully added.');

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }


    public function delete_imm_category($id)
    {
        try {

            $data = ImmigrationCategories::find($id);

            if ($data == null) {
                return view('user.not_found');
            }

            $randomText = Str::random(4);

            return view('admin.immigration.categories.delete', compact("data", "randomText"));

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }

    public function delete_imm_category_post($id)
    {
        try {

            $data = ImmigrationCategories::find($id);

            if ($data == null) {
                return view('user.not_found');
            }

            $data->delete();

           return redirect()->route('admin_immigrations_categories')->with('message', 'Category successfully deleted.');

        } catch (Throwable $exception) {
            $exception->getMessage();
            return view('admin.error', compact("exception"));
        }
    }


    public function edit_category ($id)
    {
        try {

    		$category = ImmigrationCategories::find($id);
    		$categories = ImmigrationCategories::all();

        	return view('admin.immigration.categories.index', compact("category", "categories"));

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }


    public function update_category(Request $request, $id)
    {
    	try {

        	$country = ImmigrationCategories::find($id);
        	$country->name= $request->name;

        	$country->save();
        	return redirect()->route('admin_immigrations_categories')->with('message', 'Category successfully updated.');

	    } catch (Throwable $exception) {
	        $exception->getMessage();
			return view('admin.error', compact("exception"));
	    }
    }

}
