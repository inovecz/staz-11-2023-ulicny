@extends('layouts.app')
@section('content')
<div class="container mt-2">
    <div class="text-sm">
        <span style="margin-left: 17px;">users - {{ $user->id }}</span>
        <a href=http://127.0.0.1:8000/users/ class="btn btn-link text-sm btn-sm" role="button" aria-pressed="true" style="margin-bottom: 2px;">Späť</a>
    </div>
</div>
<div class="container mt-2">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Detail klienta
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            ID
                        </div>
                        <div class="col-6">
                            {{ $user->id }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            Meno
                        </div>
                        <div class="col-6">
                            {{ $user->name }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            Email
                        </div>
                        <div class="col-6">
                            {{ $user->email }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            Phone Number
                        </div>
                        <div class="col-6">
                            {{ $user->phone_number }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            Verification
                        </div>
                        <div class="col-6">
                            {{ $user->verification }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            Request name
                        </div>
                        <div class="col-6">
                            {{ $user->request}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            Request message
                        </div>
                        <div class="col-6">
                            {{ $user->request_message}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            Atached file
                        </div>
                        <div class="col-6">
                            {{ $user->file}}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6"> 
                            {!! Form::model($user, ['url' => $user->getDeletePostLink()]) !!}
                            {!! Form::hidden('id') !!}
                            <button type="button1" class="btn btn-danger btn-sm">Delete</button>
                            {!! Form::close() !!}
                        </div>
                        <div class="col-6 text-right"> 
                            <a href="{{$user->getEditLink()}}">aaaaa</a>
                        </div>
                    </div>
                    
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection