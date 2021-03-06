@extends('layouts.masters.main')

@section('page-content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (Auth::guest())
                        You are NOT LOGGED IN
                    @else
                        You are logged in!
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
