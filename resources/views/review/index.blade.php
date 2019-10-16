@extends('layouts.app')

@section('content')
  <h1>Index Review Page</h1>
  <ul>
    @foreach ($reviews as $review)
      <li>{{ $review }}</li>    
    @endforeach
    
  </ul>
@endsection