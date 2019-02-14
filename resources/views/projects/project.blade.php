@extends('layouts.main')

@section('content')

	<div class="title">Project Page</div>
	

		<div class="tile is-ancestor">
			<div class="tile is-horisontal">
					<div class="tile is-parent">
						<article class="tile is-child box">
							<h4>{{ $project->title }}</h4>
							<p>{{ $project->description}}</p>
							@if ($project->tasks->count())
								@foreach ($project->tasks as $task)
									<div>
										<form method="POST" action="../tasks/{{ $task->id }}">
											@method('PATCH')
											@csrf
											<label class="checkbox {{ $task->completed ? 'is-completed' : ''}}" for="completed">
												<input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}>
												{{ $task->description }}												
											</label>
											
										</form>
									</div>

								@endforeach
							@endif
							<div class="tile is-child box">
								<form method="POST" action="/projects/{{ $project->id }}/tasks">
									@csrf
									<div class="field">
										<label class="label" for="description">New Task</label>

										<div class="control">
											<input class="input" type="text" name="description" placeholder="New Task">
										</div>
									</div>
									<div class="field">
										<div class="control">
											<button class="button is-link" type="submit">Add Task</button>
										</div>
									</div>
									@include('partials.errors')
								</form>
								
							</div>
						</article>				
					</div>						
			</div>

		</div>

	<a class="navbar-item" href="./create">Create</a>

@endsection