@extends('layouts.app')

@section('content')
<div class="container spark-screen">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">

            <div class="panel panel-default">
                <div class="panel-heading">Welcome</div>

                <div class="panel-body">

                    @if (Session::has('status'))
                        <h3>{{ Session::get('status') }}</h3>
                    @endif


                    Your Application's Landing Page.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
