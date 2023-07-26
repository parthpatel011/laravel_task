@extends('layouts.app')
@section('content')
@section('title', $task->title)
<p>{{ $task->description }}</p>
@if ($task->long_description)
    <p>{{ $task->long_description }}</p>
@endif
<p>{{ $task->created_at }}</p>
<p>{{ $task->updated_at }}</p>

<form action="{{ route('tasks.destroy', ['task' => $task->id]) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit">Delete</button>
</form>
@endsection
