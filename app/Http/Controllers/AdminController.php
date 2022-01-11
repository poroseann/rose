<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Hospital;

class AdminController extends Controller
{
    public function index() {
        return view('admin_pages.index');
    }

    public function hospitalList() {

        $data['hospitals'] = Hospital::get();
        return view('admin_pages.hospital_list', $data);
    }

    public function createNew() {
        return view('admin_pages.create_new');
    }

    public function save(Request $request) {

        if ($request->file('file')) {
            $imagePath = $request->file('file');
            $imageName = $imagePath->getClientOriginalName();

            // $path = $request->file('file')->storeAs('uploads', $imageName, 'public');
            $imagePath->move(public_path('images'), $imageName);
        }

        $hospital = array(
            'hospital_name' => $request->hospital_name,
            'hospital_desc' => $request->desc,
            'hospital_addr' => $request->hospital_addr,
            'category' => $request->hospital_category,
            'map_link' => $request->hospital_link,
            'picture' => $imageName,
            'level' => $request->hospital_lvl,
            'is_delete' => 1
        );

        // dd($request->all());die;
        $result = Hospital::create($hospital);

        if($result) {
            return redirect()->back()->with(['msg' => 'You add new Hospital.']);
        }
    }
}
