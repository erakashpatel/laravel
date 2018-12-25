@extends('layout')

@section('content')

<h1>Create New Project</h1>
<form method="POST" action="/projects">
		{{ csrf_field() }}
		<div class="field">
                <label class="label">Project Title</label>
    		<div class="control">
    			<input class="input {{ $errors->has('title') ? 'is-danger':''}}" type="text" name="title" placeholder="Project Title" value="{{ old('title') }}">
    		</div>
    	</div>
    	<div class="field">
                <label class="label">Project Description</label>
    		<div class="control">
    			<textarea name="description" class="textarea {{ $errors->has('description') ? 'is-danger':''}}" placeholder="Project Description">{{ old('description') }}</textarea>
    		</div>
    	</div>

   	   	<div class="field">
    		<div class="control">
    			<button class="btn  is-link " type="submit">Create Project</button>
    		</div>
    	</div>

        @if($errors->any())
            <div class="notification is-danger">
            
                <ul>
                    @foreach($errors->all() as $error)

                        <li>{{ $error }}</li>
                    
                    @endforeach
                
                </ul>
            
            </div>

        @endif
</form>


@endsection