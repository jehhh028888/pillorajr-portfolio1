@extends('layouts.app')
<link rel="stylesheet" type="text/css" href="{{ asset('css/dashboard.css') }}">
@section('content')
<div class="container">
    <div class="border-end" id="sidebar-wrapper">
        <div class="list-group list-group-flush">
            <div class="profile">
                @if(Auth::user()->avatar)
                    <p align="center"><img src = "{{ asset('/storage/images/'.Auth::user()->avatar )}}" alt="avatar" class="avatar"></p>
                @else
                    <p align="center"><img src="{{ asset('assets/pics/default.jpg')}}"></p>
                @endif 

                <p align="center">{{ Auth::user()->name }}</p>
            </div>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" id="active" href="/dashboard/home">Home</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/dashboard/skill">Skills</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/dashboard/education">Education</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/dashboard/experience">Experience</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/dashboard/portfolio">Portfolio</a>
            <a class="list-group-item list-group-item-action list-group-item-light p-3" href="/dashboard/contact">Contact</a>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
                <div class="card-body">
                   

                    
                    <p>Do you want to upload an avatar?</p>    
                    

                    <form action="/upload" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="file" name="image" />
                        <input type="submit" value="Upload" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
