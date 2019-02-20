@extends('layouts.main')

@section('content')

	<div class="title">Project Page</div>
	

		<div class="tile is-ancestor">
			<div class="tile is-horisontal">
				<div class="tile is-parent">
					<article class="tile is-child box">
						<div class="columns">
							<div class="column is-three-quarters">
								<h4>{{ $project->title }}</h4>
								<p>{{ $project->description}}</p>
							</div>
							<div class="column is-1 is-offset-2">
								<div class="is-centered">
									<a href="./{{ $project->id }}/edit" title="edit"><i class="fas fa-edit"></i></a>									
								</div>
							</div>
						</div>
						<div class="">
							@if ($project->tasks->count())
								<div class="columns m-4">
									<div class="column is-one-half">
										@foreach ($project->tasks as $task)
											<div>
												<div class="is-inline-flex">
													<form method="POST" action="../tasks/{{ $task->id }}">
														@method('PATCH')
														@csrf
														<label class="checkbox {{ $task->completed ? 'is-completed' : ''}}" for="completed">
															<input type="checkbox" name="completed" onchange="this.form.submit()" {{ $task->completed ? 'checked' : ''}}> {{ $task->description }}
														</label>										
													</form>											
												</div>
												<div class="is-inline-flex is-pulled-right mb-2">
													<form" method="POST" action="/projects/{{ $project->id }}/tasks">
														@method('DELETE')
														@csrf
														<button type="submit" class="button is-small "><i class="far fa-trash-alt"></i></button>
													</form>
												</div>													
											</div>

										@endforeach
									</div>
								</div>
							@endif
						</div>
						<div class="tile is-child box">
							<form method="POST" action="/projects/{{ $project->id }}/tasks">
								@csrf
								<div class="field">
									<label class="label" for="description">New Task</label>

									<div class="control">
										<input class="input" type="text" name="description" placeholder="New Task" required>
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
						<div style="margin: 1rem !important; width: 500px">
							<a class="button is-dark" href="./create">Create New</a>	
							<a class="button is-dark" href="./{{ $project->id }}/edit">Edit</a>	
							<form style="display: inline-flex !important" method="POST" action="/projects/{{ $project->id }}">
								@method('DELETE')
								@csrf
								<button class="button is-dark">Delete</button>
							</form>
						</div>
					</article>
				</div>						
			</div>
		</div>



@endsection