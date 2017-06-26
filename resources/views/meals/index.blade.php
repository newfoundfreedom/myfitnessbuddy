@extends('layouts.app')

@section('content')

    <h4>All Meals</h4>
    <hr>

    @if(count($meals) > 1)
        <ul class="list-group">
            @foreach($meals as $meal)
                <li class="list-group-item"><a href="/meals/{{$meal->id}}">{{$meal->name}}</a>
                    <span class="pull-right">{{$meal->created_at}}</span>
                </li>
            @endforeach
        </ul>
    @else
        <p>No Meals found</p>
    @endif

@endsection
