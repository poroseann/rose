<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospital;

class MainController extends Controller
{
    public function search(Request $request) {
        //dd($request->all());die;

        $keyword = $request->keyword;

        $data['result'] = Hospital::where('hospital_name', 'LIKE', "%$keyword%")
                    ->orWhere('hospital_desc', 'LIKE', "%$keyword%")
                    ->orWhere('hospital_addr', 'LIKE', "%$keyword%")
                    ->orWhere('category', 'LIKE', "%$keyword%")
                    ->orWhere('level', 'LIKE', "%$keyword%")
                    ->get();

        return view('main_pages.search', $data);
    }

    public function getDetails($id) {
        $data = Hospital::where('id', $id)->get();

        return response()->json($data, 200);
    }

    public function getLevel1()
    {
        return view('main_pages.level1');
    }

    public function getLevel2()
    {
        return view('main_pages.level2');
    }

    public function getLevel3()
    {
        return view('main_pages.level3');
    }
}
