@extends('admin.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message')}}
                </div>
                @endif
                <div class="card-header">ADMIN Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in As An ADMIN!
                </div>
                <div class="col-md-12">
                    <span> Current Admins Number: </span> <strong>{{ $adminsData }}</strong>
                </div>
                <br>
                <div class="col-md-12">
                    <a href="{{ route('change.adminpassword') }}">Change Password</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection