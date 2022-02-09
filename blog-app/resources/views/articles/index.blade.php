@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Liste des articles') }}</div>

                <div class="card-body">
                    <table class="table">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($articles as $article)
                            <tr>
                            <th scope="row">{{ $article->id }}</th>
                            <td>{{ $article->title }}</td>
                            <td>{{ $article->content }}</td>
                            <td>
                            <a href="{{ route('articles.edit', $article->id) }}"><button class="btn btn-primary">Editer</button></a>
                            <a href="{{ route('articles.destroy', $article->id) }}"><button class="btn btn-warning">Supprimer</button></a>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
