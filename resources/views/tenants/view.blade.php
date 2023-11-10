@extends('layouts.app')
@section('content')
<div class="container mt-2">
    <div class="text-sm">
        <span style="margin-left: 17px;">Tenants - {{ $tenant->id }}</span>
        <a href=http://127.0.0.1:8000/tenants/ class="btn btn-link text-sm btn-sm" role="button" aria-pressed="true" style="margin-bottom: 2px;">Späť</a>
    </div>
</div>
<div class="container mt-2">
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Detail Tenanta
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            ID
                        </div>
                        <div class="col-6">
                            {{ $tenant->id }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            Name
                        </div>
                        <div class="col-6">
                            {{ $tenant->firm_name }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            Password
                        </div>
                        <div class="col-6">
                            {{ $tenant->password }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6"> 
                            {!! Form::model($tenant, ['url' => $tenant->getDeletePostLink()]) !!}
                            {!! Form::hidden('id') !!}
                            <button type="button1" class="btn btn-danger btn-sm">Delete</button>
                            {!! Form::close() !!}
                        </div>
                        <div class="col-6 text-right"> 
                            <a href="{{ $tenant->getEditLink() }}" class="btn btn-success btn-sm" role="button" aria-pressed="true" style="width: 48px;">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection