<?php

namespace App\Http\Controllers\Mahasiswa;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;
use App\Test;
use App\Question;
use App\HipotesisTutor;
use App\ProcessHipotesisTutor;
use App\MoreInformationTutor;

class MahasiswaController extends Controller
{
    public function index() {
        $user = Auth::guard('tutor')->user();
        $test = Test::where('id_user', $user->id)->get();
        if(count($test) > 0) {
            for($num = 0; $num < count($num); $num++) {
                $count = Question::where('id_test', $test[$num]->id)->count();
                $test[$num]->question = $count;
            }
        }
        $data = [
            'test' => $test
        ];
        return view('tutor.index', $data);
    }
}
