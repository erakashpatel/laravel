
 @extends('layout')



@section('content')
       		<p>Update project</p>
          
                    <form method="POST" action="/projects/{{ $project->id }}" style="margin-bottom: 5px;">

                    {{ method_field('PATCH') }}
                    {{ csrf_field() }}
                    	<div class="field">
                    			<label class="label">Project Title</label>
                    		<div class="control">
                    			<input class="input  {{ $errors->has('title')?'is-danger':''}}" type="text" name="title" placeholder="Project Title" value="{{ $project->title }}" >
                    		</div>
                    	</div>
                    	<div class="field">
                  			<label class="label">Project Description</label>
                    		<div class="control">
                    			<textarea class="textarea {{ $errors->has('description')?'is-danger':''}} " name="description" placeholder="description" >{{ $project->title }}</textarea>
                    		</div>
                    	</div>


                    	<div class="field">
                  			<div class="control">
                    			<button type="submit" class="button is-link">Update Project</button>
                    		</div>
                    	</div>
                   
           
 </form>

<form method="POST" action="/projects/{{ $project->id }}">
{{ method_field('DELETE') }}

{{ csrf_field() }}
<button class="is-danger button" type="submit" >Delete Project</button>
</form>
<br>
 @if($errors->any())
            <div class="notification is-danger">
                    <ul>

                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    

                    @endforeach

                    </ul>
            </div>
            
            @endif

@endsection
