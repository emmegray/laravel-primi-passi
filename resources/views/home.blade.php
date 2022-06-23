@extends('layout.main')

@section('home')
<div class="px-4 py-5 my-5 text-center">
    <img class="d-block mx-auto mb-4" src="https://66.media.tumblr.com/1adfc2f48dd1760306566d238e33c172/tumblr_pllfwhE6ED1s9a9yjo1_400.gif" >
    <h1 class="display-5 fw-bold">Hi there {{ $user }}!</h1>
    <div class="col-lg-6 mx-auto">
      <h3 class="mb-4">I am a {{ $age }} old {{ $job }} and my languages and tools are:</h3>
      <ul class="list-group list-group-flush">
      @foreach ($tools as $tool)
        <li class="list-group-item">{{$tool}}</li>
      @endforeach
      </ul>
      <h4>If you need contact me here:</h4>
      <a href="#" class="link-dark">{{ $email }}</a>
    </div>
  </div>
@endsection
