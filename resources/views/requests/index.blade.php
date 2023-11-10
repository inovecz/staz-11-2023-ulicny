@extends('layouts.app')

@section('content')
<head>

<div class="container">
    <div class="row mt-5">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Request Name</th>
                            <th scope="col"><a href="{{ route('requests.create') }}" class="btn btn-success" role="button" aria-pressed="true" style="width: 48px;">+</a></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($requests as $request)
                            <tr>
                                <th scope="row">{{ $request->id }}</th>
                                <td>{{ $request->request }}</td>
                                <td><a href="{{ $request->getViewLink() }}" class="btn btn-secondary" role="button" aria-pressed="true">👀</a></td>
                                
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection