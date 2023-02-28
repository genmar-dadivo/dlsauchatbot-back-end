<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Http\Requests\StoreQuestionRequest;
use App\Http\Requests\UpdateQuestionRequest;
use App\Models\Group;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQuestionRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionRequest $request)
    {
        $group = $request->group;
        $gid = Group::where('name', '=', $group)->pluck('id')->first();

        $question = Question::create([
            'group_id' => $gid,
            'course' => $request->course,
            'question' => $request->question,
        ]);

        if ($question) {
            return response([
                'message' => 'Question Inserted'
            ], 200);
        }

        return response([
            'message' => 'Error Occured'
        ], 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return $question = Question::where('id', '=', $id)->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionRequest  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionRequest $request, Question $question)
    {
        $question = Question::findorfail($request->id);
        $gid = Group::where('name', '=', $request->group_id)->pluck('id')->first();
        $question->update([
            'group_id' => $gid,
            'course' => $request->course,
            'question' => $request->question,
        ]);
        if ($question) {
            return response()->json([
                'message' => 'Question Updated',
            ]);
        }

        return response()->json([
            'error' => 'Error Occured',
        ], 401);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Question::destroy($id);
        if ($delete) {
            return response([
                'message' => 'Data Deleted'
            ]);
        }

        return response([
            'message' => 'Error Occured'
        ]);
    }
}
