@php
    use app\Models\Vote;
@endphp
@extends('master')

@section('title','Vote List')

@section('content')

<h1>Vote List</h1>
<table class="table table-bordered ">
    <thead>
        <tr>
            <th>Content ID</th>
            <th>Like</th>
            <th>Dislike</th>
        </tr>
    </thead>
    <tbody>
@foreach ($contents as $content)

    <tr>
        <td>{{$content->id}}</td>
        <td>{{Vote::where('content_id',$content->id)->where('vote',true)->count()}}</td>
        <td>{{Vote::where('content_id',$content->id)->where('vote',false)->count()}}</td>
    </tr>
@endforeach
    </tbody>
</table>
