@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <h1>Lasts Entries</h1>
            @foreach ($entries as $entry)
            <div class="card mt-4 mb-4">
                <div class="card-header btn-light">
                    {{$entry->id}}. {{$entry->title}}
                </div>

                <div class="card-body">
                        <p>{{$entry->content}}</p>
                </div>
                <div class="card-footer">
                    Author: 
                <a href="{{url('usuario/'.$entry->user_id)}}">
                    {{$entry->user->name}}
                </a>
                </div>
            </div>
            @endforeach
            {{$entries->links()}}
        </div>
    </div>
</div>
@endsection
