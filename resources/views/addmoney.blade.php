@extends('layouts.head')


@section('title')
    Deposit
@endsection


@section('content')
<section id="main-content">
      <section class="wrapper site-min-height">
      <h1>Welcome to you dashboard dear</h1>
        <div class="row mt">
          <div class="col-lg-12 form-awesome">
            <form method="post" action="" enctype="multipart/form-data">
                @csrf
                            <div class="form-group mb-3">
                                <input type="text" placeholder="" id="amount" class="form-control" name="amount" disabled/>
                                @if ($errors->has('amount'))
                                <span class="text-danger"> {{$errors->first('amount')}}</span>
                                @endif
                            </div>
                            <div class="form-group mb-3">
                                <input type="password" placeholder="" id="password" class="form-control" name="password" required autofocus />
                                @if ($errors->has('password'))
                                <span class="text-danger"> {{$errors->first('password')}}</span>
                                @endif
                            </div>
                            <div class="d-grid mx-auto">
                                <button type="submit" class="btn btn-dard btn-block" style="background-color:black; color:white">Add money</button>
                            </div>
            </form>
          </div>
        </div>
      </section>
</section>
@endsection