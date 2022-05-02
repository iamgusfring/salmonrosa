@extends('layouts.app')

@section('content')

@include('template.sidebar')

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Linkedin') }}</div>

                
                    
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>email</th>
                            <th>password</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataLinkedin as $dataL)
                        <tr>
                            <td>{{ $dataL->username }}</td>
                            <td>{{ $dataL->password }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                
            </div>
        </div>
    </div>
</div>

@endsection
