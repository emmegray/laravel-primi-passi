@extends('layout.main')

@section('about')
    <div class="px-4 py-5 my-5 row flex-lg-row-reverse align-items-center g-5">
      <div class="col-10 col-sm-8 col-lg-6">
        <img src="https://i.kym-cdn.com/photos/images/original/001/416/601/b46.gif" class="d-block mx-lg-auto img-fluid">
      </div>
      <div class="col-lg-6">
        <h1 class="display-5 fw-bold lh-1 mb-3">“Well, Hello Mr. Fancy Pants”</h1>
        <p class="lead">{{$text}}</p>

      </div>
    </div>
@endsection
