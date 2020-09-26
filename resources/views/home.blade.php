@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Main Modules</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row text-center">
                        <div class="col-sm-4">
                            <a href="/management">
                                <h4>Management</h4>
                                <img width="50px" src="{{asset('images/management.svg')}}"/>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/supervisor">
                                <h4>Supervisor</h4>
                                <img width="50px" src="{{asset('images/supervisor.svg')}}"/>
                            </a>
                        </div>
                        <div class="col-sm-4">
                            <a href="/report">
                                <h4>Report</h4>
                                <img width="50px" src="{{asset('images/report.svg')}}"/>
                            </a>   
                        </div>
                    </div>
                
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
