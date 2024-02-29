@extends('layout')

@section('content')
<h1>{{$heading}}</h1>
@if(count($listings) == 0)
    <p>No listings found</p>
@endif    

@foreach ($listings as $listing)
    <h3>
        <a href="/{{$listing['id']}}">
            {{$listing['title']}}
        </a>
    </h3>
    <p>{{$listing['description']}}</p>
@endforeach     
@endsection
