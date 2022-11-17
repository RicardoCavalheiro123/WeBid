@extends('layouts.app')

@section('content')
    <link href="{{asset('css/profile.css')}}" rel="stylesheet">
    <div class = "cover out2">
        <div class="prof d-flex">
            @include('partials.sidebar')
            <div class = "outside">
                <div class="spec d-flex flex-column ps-3 pe-3">
                    <div class = "stuf ms-3 mt-4 mb-4">
                        <p class ="h2 fw-bold"> My Details </p>
                        <p class ="h4"> Feel free to change any of your details right below! </p>
                    </div>
                    <div class = "forms">
                        <div class = "data ms-3 mb-4">
                            <label for="html" class = "fw-bold ms-0">First Name:</label><br>
                            <input type="text" class="formData ps-1" name = "name" value = "{{$user->firstname}}">
                        </div>
                        <div class = "data ms-3 mb-4">
                            <label for="html" class = "fw-bold ms-0">Last Name:</label><br>
                            <input type="text" class="formData ps-1" name = "name" value = "{{$user->lastname}}">
                        </div>
                        <div class = "data ms-3 mb-4">
                            <label for="html" class = "fw-bold ms-0">Email:</label><br>
                            <input type="text" class="formData ps-1" name = "name" value = "{{$user->email}}">
                        </div>
                        <div class = "data ms-3 mb-4">
                            <label for="html" class = "fw-bold ms-0">Username:</label><br>
                            <input type="text" class="formData ps-1" name = "name" value = "{{$user->username}}">
                        </div>
                        <div class = "data ms-3 mb-4">
                            <label for="html" class = "fw-bold ms-0">Phone Number:</label><br>
                            <input type="text" class="formData ps-1" name = "name" value = "{{$user->phonenumber}}">
                        </div>
                    </div>
                    <div>
                        <div class = "botao ps-0 ms-3 mb-4">
                            <a class = "save text-center" href = "">
                                <button>
                                    Save Changes
                                </button>
                            </a>
                        </div>
                    </div>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection