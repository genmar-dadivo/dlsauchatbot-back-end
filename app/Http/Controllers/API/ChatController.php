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

    public function computeExam(Request $request)
    {
        $department = $request->department;
        $yes = $request->yes;
        $scoreHandler = [];
        $totalHandler = [];
        $resultHandler = [];

        if ($yes) {
            $group_id = Group::where('name', '=', $department)->pluck('id')->first();
            $questions = Question::where('group_id', '=', $group_id)
                ->whereIn('id', $yes)->select('course')->get();

            foreach ($questions as $question) {
                $qs = $question->course;
                if (str_contains($qs, '|')) {
                    $q = explode('|', $qs);
                    foreach($q as $question)
                    {
                        $scoreHandler[] = $question;
                    }
                }
                else {
                    $scoreHandler[] = $qs;
                }
                $getScore = array_count_values($scoreHandler);

            }

            $getTotals = array_unique($scoreHandler);
            foreach ($getTotals as $getTotal) {
                $getCount = Question::where('course', 'LIKE', '%' . $getTotal . '%')->count();
                $totalHandler[$getTotal] = $getCount;

                $resultHandler[] = $getTotal . ':' . ceil(($getScore[$getTotal] / $getCount) * 100);
            }


            // return [
            //     'q' => $getScore,
            //     // 'q' => array_count_values($scoreHandler),
            //     't' => $totalHandler,
            //     'r' => $resultHandler
            // ];

            return $resultHandler;
        }
        else {
            return [
                'score' => 0,
                'message' => 'No score',
            ];
        }
    }

    public function getResult()
    {
        return 1;
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
