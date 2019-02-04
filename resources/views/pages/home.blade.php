@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="margin-top:15px;">
                <div class="card-header" style="color:#379; font-weight:bold">Edit profile:</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Profile name: {{ Auth::user()->name }}</p>
                    <p>Profile image: <button>select</button></p> 
                    <p>Profile description: <input type="text"></p>
                    <p>Profile activity: <span style="color:green; font-weight:bold;">Active</span></p>
                    <p>Role: <span style="color:black">guest</span><a href="#" style="float:right;color:black">Update</a></p>

                </div>
            </div>

            <div class="card" style="margin-top:15px; width:50% !important; float:left">
                <div class="card-header" style="color:#379; font-weight:bold">Profile info:</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p>Name: {{ Auth::user()->name }}</p>
                    <p>Type: "Guest"</p> 
                    <p>Desc: "none"</p>
                </div>
            </div>

            <div class="card" style="margin-top:15px; width:50% !important;float:left">
                    <div class="card-header" style="color:#379; font-weight:bold">Profile image:</div>
    
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                            <img style="width:115px;height:115px;" src={{}} alt="you dont have profile image!">
                    </div>
                </div>

        </div>
    </div>
</div>
@endsection
