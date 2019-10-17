@extends('layouts.app')

@section('content')
  <h1>Index Review Page</h1>
  <ul>
    @foreach ($reviews as $review)
      <li>{{ $review->title }}</li>    
    @endforeach
    @can('create',App\Review::class)
      <button><a href="{{ route('review.create') }}">Create a review</a></button>
    @endcan
  </ul>
@endsection