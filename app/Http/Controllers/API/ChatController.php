<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Group;
use App\Models\Question;
use App\Models\Talk;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class ChatController extends Controller
{
    public function welcome()
    {
        $talk = Talk::inRandomOrder()
            ->where('type', '=', 1)
            ->pluck('message')
            ->first();

        return [
            'message' => $talk
        ];
    }

    public function setName(Request $request)
    {
        $talk = Talk::inRandomOrder()
            ->where('type', '=', 2)
            ->pluck('message')
            ->first();
        $name = ucwords($request->name);
        $minutes = 60;

        $talk = str_replace('$name', $name, $talk);

        return [
            'n_cookie' => setcookie('test', $name, time() + (86400 * 30), "/"),
            'message' => $talk,
        ];
    }

    public function setReady()
    {
        return [
            'message' => "Are you ready to take the exam?",
            'is_question' => 'yes'
        ];
    }

    public function getCourses()
    {
        return Group::all()->pluck('name');
    }

    public function takeExam($course)
    {
        $group_id = Group::where('name', '=', $course)->pluck('id')->first();
        $questions = Question::where('group_id', '=', $group_id)
            ->select('*')
            ->get();
        $questions->makeHidden(['created_at', 'updated_at']);
        return $questions;

    }

    public function index()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
