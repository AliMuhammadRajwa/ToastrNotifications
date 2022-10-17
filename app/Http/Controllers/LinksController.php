<?php

namespace App\Http\Controllers;

use App\Models\Text;
use Illuminate\Http\Request;

class LinksController extends Controller
{
	public function index()
	{
		return view('addsomething');
	}

    public function store(Request $request)
    {
        $model = new Text();
        $model->text = $request->justarandomtext;
        $model->save();
        toastr()->success('Text Saved Successfully');
        return back();
    }

    public function fetch()
    {
        $models = Text::get();
        return view('viewsavedvalues',compact('models'));
    }

    public function delete($id)
    {
        Text::destroy($id);
        toastr()->warning('Text Deleted Successfully');
        return back();
    }

}
