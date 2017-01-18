@extends('layouts.master')

@section('title', 'Home')

@section('content')
<div class="row">
    <img src="{{asset("/images/gamebanner.jpeg")}}" alt="Game Banner" class="img-responsive">
    <div class="col-md-10 col-md-offset-1">
        <div class="panel panel-default">
            <div class="panel-heading">Mission Statement</div>

            <div class="panel-body">
                <i class="fa fa-quote-left" aria-hidden="true"></i>
                Our goal is to make the kind of games that we would like to play and to help others see their game visions
                come to life. Games are the truest art form; they combine visual art, music, and creative
                writing all into one and then make it interactive. Games can teach, inspire, entertain, challenge and
                bring people together. We intend to make games that do all of these things and more.
                <i class="fa fa-quote-right" aria-hidden="false"></i>
            </div>
        </div>
    </div>
</div>
@endsection
