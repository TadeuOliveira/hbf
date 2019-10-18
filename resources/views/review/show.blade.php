@extends('layouts.app')

@section('content')
  <h1>Show Review Page</h1>
  <p>Title: {{ $review->title }}</p>
  <p>Text: {{ $review->text }}</p>
  <p>{{ $review }}</p>
  @if (Auth::id() === $review->author->id)
    <button>
      <a href="{{ route('review.edit',['review'=>$review]) }}">Edit</a></button>
    <form action="{{ route('review.destroy',['review'=>$review]) }}"
      method="POST">
      @method('DELETE')
      @csrf
      <button>Delete</button>      
    </form>
  @endif
@endsection