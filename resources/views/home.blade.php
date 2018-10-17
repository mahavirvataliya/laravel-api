@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
     <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Groceries</div>
                <div class="card-body">
                    <ul class="list-group">
                        @foreach ($groceries as $grocery)
                            <li class="list-group-item">{{ $grocery->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
