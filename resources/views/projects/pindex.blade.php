@extends('layouts.main')

@section('content')

	<div class="title">Project Page</div>	

		<div class="tile is-ancestor">
			<div class="tile is-horisontal">
				@foreach($projects as $project)
					<div class="tile is-parent">
						<article class="tile is-child box">
							<a class="navbar-item" href="projects/{{ $project->id }}"><h4>{{ $project->title }}</h4></a>
							<p>{{ $project->description}}</p>
							@if ($project->tasks->count())
								@foreach ($project->tasks as $task)
									<div>
										<form method="POST" action="/completed-tasks/{{ $task->id }}">
											@if ($task->completed)
												@method('DELETE')
											@endif
											@csrf
											<label class="checkbox {{ $task->completed ? 'is-completed' : ''}}" for="completed">
												<input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
												{{ $task->description }}												
											</label>
											
										</form>
									</div>

								@endforeach
							@endif
						</article>				
					</div>						
				@endforeach	
			</div>

		</div>

	<a class="navbar-item" href="projects/create">Create</a>

@endsection