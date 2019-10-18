@extends('layouts.app')

@section('content')
  <h1>Create Review Page</h1>
  <form action="{{ route('review.store') }}" 
  method="POST" 
  style="display:flex;flex-direction: column;padding: 0px 50px">
    
    @include('review.form')
@endsection