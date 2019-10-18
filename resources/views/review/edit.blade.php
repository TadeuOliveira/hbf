@extends('layouts.app')

@section('content')
  <h1>This is the edit page</h1>
  <form action="{{ route('review.update',compact('review')) }}"
  method="POST" 
  style="display:flex;flex-direction: column;padding: 0px 50px">
  @method('PATCH')
  @include('review.form')
@endsection