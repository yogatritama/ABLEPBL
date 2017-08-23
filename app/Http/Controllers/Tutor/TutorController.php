<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;
use App\Tutor;
use App\Test;
use App\Question;

class TutorController extends Controller
{
    public function index() {
        $user = Auth::guard('tutor')->user();
        $test = Test::where('id_user', $user->id)->get();
        $data = [
            'user' => $user,
            'test' => $test
        ];
        return view('tutor', $data);
    }

    public function createTest(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255|string'
        ]);
        if($validator->fails()) {
            return redirect()->back()->withInput()->with('status', 'Failed');
        }
        $user = Auth::guard('tutor')->user();
        $test = Test::create([
            'id_user' => $user->id,
            'name' => $request->name
        ]);
        return redirect()->back();
    }

    public function detailTest(Request $request) {
        $test = Test::where('id', $request->id)->get();
        if($test) {

        } else {
            return redirect()->back()->withInput()->with('status', 'Failed');
        }
        return view('detail_test');
    }
}
