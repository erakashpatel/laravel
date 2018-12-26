@extends('layout')

@section('content')


<h2 class="title"><a href="/projects/{{ $project->id }}/edit">{{ $project->title }}</a></h2>

{{ $project->description }}
<br>
<div class="box">
@if($project->tasks->count())
<div class="tasks">
		@foreach($project->tasks as $task)
			<div>
				<form method="POST" action ="/complated-tasks/{{ $task->id }}">

				@if($task->complated)
					@method('DELETE')
				@endif

				@csrf
					<label for="complated" class="checkbox {{ $task->complated ? 'is-complated':''}}">
						<input type="checkbox" name="complated"  onchange="this.form.submit();" {{ $task->complated ? 'checked':'' }}> 
						{{ $task->description }}
					</label>
				</form>
			</div>
		@endforeach

</div>
@endif
</div>
<div class="box">
<form method="POST" action="/projects/{{ $project->id }}/tasks">
		@csrf
		<div class="field">
                <label class="label" for="description">New Task</label>
    		<div class="control">
    			<input class="input" type="text" name="description" placeholder="New task" value="{{ old('description') }}">
    		</div>
    	</div>

    	<div class="field">
    		<div class="control">
    				<button type="submit" class="btn  is-link " >Create Task</button>
    		</div>
    	</div>

    	   @include('errors')
</form>
</div>
@endsection