<?php

namespace App\Http\Controllers;

use App\Poll;
use Illuminate\Http\Request;

class PollsController extends Controller
{
    public function index()
    {
        return response()->json(Poll::get(), 200);
    }

    public function show($id)
    {

        return response()->json(Poll::findOrFail($id), 200);
    }

    public function store(Request $request)
    {
        $poll_new = Poll::create($request->all());
        return response()->json($poll_new, 201);
    }
    public function update(Request $request,Poll $poll)
    {
        $poll->update($request->all());
        return response()->json($poll, 200);
    }
    public function delete(Request $request,Poll $poll)
    {
        $poll->delete();
        return response()->json(null, 204);
    }

}
