<?php

namespace App\Http\Controllers;

use App\Models\Talk;
use App\Http\Requests\StoreTalkRequest;
use App\Http\Requests\UpdateTalkRequest;

class TalkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Talk::where('type', '=', 1)
            ->select('id', 'message', 'type')
            ->get();
    }

    public function gindex()
    {
        return Talk::where('type', '=', 2)
            ->select('id', 'message', 'type')
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
     * @param  \App\Http\Requests\StoreTalkRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTalkRequest $request)
    {
        $welcome = Talk::create([
            'message' => $request->message,
            'type' => $request->type,
        ]);

        if ($welcome) {
            return response([
                'message' => 'Message Inserted'
            ], 200);
        }

        return response([
            'message' => 'Error Occured'
        ], 500);
    }

    public function gstore(StoreTalkRequest $request)
    {
        $welcome = Talk::create([
            'message' => $request->message,
            'type' => $request->type,
        ]);

        if ($welcome) {
            return response([
                'message' => 'Message Inserted'
            ], 200);
        }

        return response([
            'message' => 'Error Occured'
        ], 500);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Talk  $talk
     * @return \Illuminate\Http\Response
     */
    public function show(Talk $talk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Talk  $talk
     * @return \Illuminate\Http\Response
     */
    public function edit(Talk $talk)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTalkRequest  $request
     * @param  \App\Models\Talk  $talk
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTalkRequest $request, Talk $talk)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Talk  $talk
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $talk = Talk::destroy($id);
        if ($talk) {
            return response([
                'message' => 'Data Deleted'
            ]);
        }

        return response([
            'message' => 'Error Occured'
        ]);
    }

    public function gdestroy($id)
    {
        $talk = Talk::destroy($id);
        if ($talk) {
            return response([
                'message' => 'Data Deleted'
            ]);
        }

        return response([
            'message' => 'Error Occured'
        ]);
    }
}
