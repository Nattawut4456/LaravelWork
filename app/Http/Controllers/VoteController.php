<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vote;
use App\Models\Content;

class VoteController extends Controller
{
    public function index(){
        $contents = Content::all();
        $votes = Vote::query();
        return view('vote.index',['contents'=>$contents,'votes'=>$votes]);
    }
    public function like($id){
        $vote = new Vote;
        $vote->vote = true;
        $vote->content_id = $id;
        $vote->save();
    }

    public function dislike($id){
        $vote = new Vote;
        $vote->vote = false;
        $vote->content_id = $id;
        $vote->save();
    }
}
