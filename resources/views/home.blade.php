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
                    @if (Cookie::get('role') != null)
                        @if(!empty(Auth::user()->getRoleNames()))
                            @foreach(Auth::user()->getRoleNames() as $v)
                                <label class="badge badge-success">{{ $v }}</label>
                            @endforeach
                        @endif
                     @else
                         {{'Perdí la coockie'}}
                   @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
