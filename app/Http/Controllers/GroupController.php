<?php

namespace App\Http\Controllers;

use App\Models\Group;
use App\Http\Requests\StoreGroupRequest;
use App\Http\Requests\UpdateGroupRequest;
use App\Models\Question;
use Illuminate\Http\Client\Request;
use PhpParser\Node\Stmt\GroupUse;

class GroupController extends Controller
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

    public function filter($group)
    {
        $id = Group::where('name', '=', $group)->pluck('id')->first();
        return $questions = Question::where('group_id', '=', $id)
                ->select('id', 'group_id', 'course', 'question')
                ->get();
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
     * @param  \App\Http\Requests\StoreGroupRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGroupRequest $request)
    {
        $name = Group::create([
            'name' => $request->name,
        ]);

        if ($name) {
            return response([
                'message' => 'Group Inserted'
            ], 200);
        }

        return response([
            'message' => 'Error Occured'
        ], 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function show(Group $group)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function edit(Group $group)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateGroupRequest  $request
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Group $group)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Group  $group
     * @return \Illuminate\Http\Response
     */
    public function destroy($group)
    {
        $id = Group::where('name', '=', $group)
            ->select('id')
            ->get();
        $dg = Group::destroy($id);
        if ($dg) {
            return response([
                'message' => 'Data Deleted'
            ]);
        }

        return response([
            'message' => 'Error Occured'
        ]);
    }
}
