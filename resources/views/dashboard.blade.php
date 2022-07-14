@extends('layouts.head')


@section('title')
    Dashboard
@endsection

{{$data = Auth::user();}}

@section('content')
<section id="main-content">
      <section class="wrapper site-min-height">
      <h2 style="font-size:200%; text-align:center">Welcome to your dashboard dear</h2>
        <div class="row mt">
          <div class="col-lg-12">
            
          </div>
        </div>
      </section>
</section>
@endsection