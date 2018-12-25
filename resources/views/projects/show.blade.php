@extends('layout')

@section('content')


<h2><a href="/projects/{{ $project->id }}/edit">{{ $project->title }}</a></h2>

{{ $project->description }}

@endsection