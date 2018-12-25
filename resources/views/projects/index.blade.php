@extends('layout')


@section('content')

<p>All Projects</p>
<p><a href="/projects/create">Create project</a></p>
<ul>
@foreach($projects as $project)

<li><a href="/projects/{{ $project->id}}">{{ $project->title }}</a></li>

@endforeach
</ul>

@endsection
