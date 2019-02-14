@extends('layouts.main')

@section('content')

<h2>This is the 57Scratch Project Creation Page</h2>
	@isset($project->id)
		@if($project->id)
			<form method="POST" action="/projects/{{ $project->id}}">
				@method('PATCH')
		@else
			<form method="POST" action="/projects">
		@endif
	@endisset
	@csrf
	<div class="field">
		<label class="label">Project</label>
		<input class="input" type="text" name="title" placeholder="Project Title" value="@isset($project->title){{ $project->title}} @endisset">
	</div>
	<div class="field">
		<label class="label">Description</label>
		<textarea class="textarea" name="description" placeholder="Project description">@isset($project->description){{ $project->description}} @endisset</textarea>
	</div>
	<div class="control">
		@isset($project->id)
			@if($project->id)
				<button class="button" type="Submit">Update Project</button>
			@else
				<button class="button" type="Submit">Create Project</button>
			@endif
		@endisset
	</div>

	<div class="field">
		@include ('partials.errors')
	</div>

</form>

@endsection