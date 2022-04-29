@extends('layouts.app')

@section('content')

@include('template.sidebar')

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <img src="{{ asset('img/mr-robot.jpg') }}" alt="" srcset="">
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h1 class="text-center">Welcome to Patricia Project</h1>

                    <br>

                    <h3>DISCLAIMER</h3>
                    <p class="text-uppercase">This program was created for educational purpose only.</p>
                    <p>The use of this program is COMPLETE RESPONSIBILITY of the END-USER. Developers assume NO liability and are NOT responsible for any misuse or damage caused by this program.</p>
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
