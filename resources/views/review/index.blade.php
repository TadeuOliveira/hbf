@extends('layouts.app')

@section('content')
  <h1>Index Review Page</h1>
  <ul>
    @foreach ($reviews as $review)
      <a href="{{ route('review.show',compact('review')) }}">
        <li>{{ $review->title }}</li>
      </a>    
    @endforeach
    @can('create',App\Review::class)
      <button><a href="{{ route('review.create') }}">Create a review</a></button>
    @endcan
  </ul>
@endsection