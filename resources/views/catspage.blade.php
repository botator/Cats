@extends('layout')
@section('content')
    <div class="container pb-2">
        <h1 class="text-center display-6 py-3">{{$result->title}}</h1>
        <div class="row">
            <div class="col">
                <img class="img-fluid" src="../img/{{$result->id}}.jpg" alt="">
            </div>
            <div class="col">
                <table class="table border">
                    <tr>
                        <th class="border">Stock image page</th>
                        <td ><a target="_blank" href="https://{{$result->site}}">{{$result->site}}</a></td>
                    </tr>
                    <tr>
                        <th class="border">Direct link to the pic</th>
                        <td ><a target="_blank" href="https://{{$result->direct_link}}" >{{$result->direct_link}}</a></td>
                    </tr>
                    <tr>
                        <th class="border">Author</th>
                        <td >{{$result->author}}</td>
                    </tr>
                    <tr>
                        <th class="border">Author's page</th>
                        <td ><a target="_blank" href="https://{{$result->author_link}}">{{$result->author_link}}</a></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
@endsection
