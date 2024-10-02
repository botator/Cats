<?php
$szam = 1;
?>
@extends('layout')
@section('content')
    <div class="container pb-2">
        <h1 class="text-center display-6 py-3">Authors</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Author name</th>
                    <th>Author's page</th>
                </tr>
                @foreach ($result as $row)
                    <tr>
                        <td>{{ $szam }}<?php $szam++;?></td>
                        <td>{{ $row->author }}</td>
                        <td>{{ $row->author_link }}</td>
                    </tr>
                @endforeach
            </thead>
        </table>
    </div>
@endsection
