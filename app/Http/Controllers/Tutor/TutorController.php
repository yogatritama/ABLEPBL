<?php

namespace App\Http\Controllers\Tutor;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Validator;
use App\Test;
use App\Question;
use App\HipotesisTutor;
use App\ProcessHipotesisTutor;
use App\MoreInformationTutor;

class TutorController extends Controller
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

    public function createTest(Request $request) {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255|string'
        ]);
        if($validator->fails()) {
            return redirect()->route('tutor.index')->withInput()->with('status', 'Failed');
        }
        $user = Auth::guard('tutor')->user();
        $test = Test::create([
            'id_user' => $user->id,
            'name' => $request->name
        ]);
        return redirect()->route('tutor.index');
    }

    public function detailTest($id) {
        $test = Test::where('id', $id)->get();
        if(count($test) > 0) {
            $data = [
                'test' => $test
            ];
            //return view('tutor.detail_test', $data);
            return redirect()->route('tutor.index')->withInput()->with('status', 'Developed');
        } else {
            return redirect()->route('tutor.index')->withInput()->with('status', 'NotFound');
        }
    }

    public function createQuestion($id) {
        $test = Test::where('id', $id)->get();
        $question = Question::where('id_test', $id)->count();
        if($question > 0) {
            return redirect()->route('tutor.index')->withInput()->with('status', 'Full');
        }
        $data = [
            'id' => $id,
            'name' => $test[0]->name
        ];
        return view('tutor.create_question', $data);
    }

    public function saveQuestion($id, Request $request) {
        $validator = Validator::make($request->all(), [
            'question1' => 'required',
            'question2' => 'required',
            'hipotesis1' => 'required',
            'hipotesis2' => 'required',
            'prosesHipotesis1' => 'required',
            'prosesHipotesis2' => 'required',
            'moreInformation1' => 'required',
            'moreInformation2' => 'required'
        ]);
        if($validator->fails()) {
            return redirect()->route('tutor.test.question.create', $id)->withInput()->with('status', 'Failed');
        }
        $hipotesis1 = $request->hipotesis1;
        $hipotesis1 = explode('<br />', $hipotesis1);
        for($num = 0; $num < count($hipotesis1); $num++) {
            $hipotesis1[$num] = explode(" | ", $hipotesis1[$num]);
        }
        $hipotesis2 = $request->hipotesis2;
        $hipotesis2 = explode('<br />', $hipotesis2);
        for($num = 0; $num < count($hipotesis2); $num++) {
            $hipotesis2[$num] = explode(" | ", $hipotesis2[$num]);
        }
        $prosesHipotesis1 = $request->prosesHipotesis1;
        $prosesHipotesis1 = explode('<br />', $prosesHipotesis1);
        for($num = 0; $num < count($prosesHipotesis1); $num++) {
            $prosesHipotesis1[$num] = explode(" | ", $prosesHipotesis1[$num]);
        }
        $prosesHipotesis2 = $request->prosesHipotesis2;
        $prosesHipotesis2 = explode('<br />', $prosesHipotesis2);
        for($num = 0; $num < count($prosesHipotesis2); $num++) {
            $prosesHipotesis2[$num] = explode(" | ", $prosesHipotesis2[$num]);
        }
        $moreInformation1 = $request->moreInformation1;
        $moreInformation1 = explode('<br />', $moreInformation1);
        for($num = 0; $num < count($moreInformation1); $num++) {
            $moreInformation1[$num] = explode(" | ", $moreInformation1[$num]);
        }
        $moreInformation2 = $request->moreInformation2;
        $moreInformation2 = explode('<br />', $moreInformation2);
        for($num = 0; $num < count($moreInformation2); $num++) {
            $moreInformation2[$num] = explode(" | ", $moreInformation2[$num]);
        }
        $question = Question::create([
            'id_test' => $id,
            'text' => $request->question1
        ]);
        for($num = 0; $num < count($hipotesis1); $num++) {
            HipotesisTutor::create([
                'id_pertanyaan' => $question->id,
                'isian' => $hipotesis1[$num][0],
                'status' => $hipotesis1[$num][1]
            ]);
        }
        for($num = 0; $num < count($prosesHipotesis1); $num++) {
            ProcessHipotesisTutor::create([
                'id_pertanyaan' => $question->id,
                'isian' => $prosesHipotesis1[$num][0],
                'status' => $prosesHipotesis1[$num][1]
            ]);
        }
        for($num = 0; $num < count($moreInformation1); $num++) {
            MoreInformationTutor::create([
                'id_pertanyaan' => $question->id,
                'isian' => $moreInformation1[$num][0],
                'status' => $moreInformation1[$num][1]
            ]);
        }
        $question = Question::create([
            'id_test' => $id,
            'text' => $request->question2
        ]);
        for($num = 0; $num < count($hipotesis2); $num++) {
            HipotesisTutor::create([
                'id_pertanyaan' => $question->id,
                'isian' => $hipotesis2[$num][0],
                'status' => $hipotesis2[$num][1]
            ]);
        }
        for($num = 0; $num < count($prosesHipotesis2); $num++) {
            ProcessHipotesisTutor::create([
                'id_pertanyaan' => $question->id,
                'isian' => $prosesHipotesis2[$num][0],
                'status' => $prosesHipotesis2[$num][1]
            ]);
        }
        for($num = 0; $num < count($moreInformation2); $num++) {
            MoreInformationTutor::create([
                'id_pertanyaan' => $question->id,
                'isian' => $moreInformation2[$num][0],
                'status' => $moreInformation2[$num][1]
            ]);
        }
        return redirect()->route('tutor.index')->withInput()->with('status', 'Success');
    }
}
