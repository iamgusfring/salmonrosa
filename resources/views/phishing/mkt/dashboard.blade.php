@extends('layouts.app')

@section('content')

@include('template.sidebar')

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mkt') }}
                <p><strong>Share this link: </strong><a href="{{ route('mkt') }}" target="_blank" rel="noopener noreferrer">{{ route('mkt') }}</a></p>
                </div>

                
                    
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr>
                            <th>username</th>
                            <th>password</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($dataMkt as $dataM)
                        <tr>
                            <td>{{ $dataM->username }}</td>
                            <td>{{ $dataM->password }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                
            </div>
        </div>
    </div>
</div>

@endsection
