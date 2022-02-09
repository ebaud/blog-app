@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Liste des utilisateurs') }}</div>

                <div class="card-body">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>
                            <a href="{{ route('users.edit', $user->id) }}"><button class="btn btn-primary">Editer</button></a>
                            <a href="{{ route('users.destroy', $user->id) }}"><button class="btn btn-warning">Supprimer</button></a>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
