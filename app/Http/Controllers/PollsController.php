<?php

namespace App\Http\Controllers;

use App\Poll;
use Illuminate\Http\Request;
use Validator;
use App\Http\Resources\Poll as PollResource;

class PollsController extends Controller
{
    public function index()
    {
        return response()->json(Poll::get(), 200);
    }

    public function show($id)
    {
        /*$poll = Poll::find($id);
        if (is_null($poll)) {
            return response()->json(null, 404);
        }*/
        //return response()->json(Poll::findOrFail($id), 200);


        //$response = new PollResource(Poll::findOrFail($id), 200);
        //return response()->json($response, 404);
        /*$poll=Poll::with('questions')->findOrFail($id);
        $response = new PollResource($poll, 200);
        return response()->json($response, 404);*/
        $poll=Poll::with('questions')->findOrFail($id);
        $response['poll']=$poll;
        $response['questions']=$poll->questions;
        return  response()->json($response,200);
    }

    public function store(Request $request)
    {
        $rules = ['title' => 'required|max:10'];
        $validator = Validator::make($request->all(), $rules);
        //dd($validator->fails());
        if ($validator->fails()) {
            return response()->json($validator->errors(), 404);
        }
        $poll_new = Poll::create($request->all());
        return response()->json($poll_new, 201);
    }

    public function update(Request $request, Poll $poll)
    {
        $poll->update($request->all());
        return response()->json($poll, 200);
    }

    public function delete(Request $request, Poll $poll)
    {
        $poll->delete();
        return response()->json(null, 204);
    }

    public function errors()
    {
        return response()->json(['msg' => 'Esto es esparta'], 501);
    }
    public  function  questions(Request $request,Poll $poll){
        $questions=$poll->questions;
        return response()->json($questions,200);
    }
}
