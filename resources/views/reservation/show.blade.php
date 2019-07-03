@extends('layouts.layout')

@section('content')
    <b-container>
        <b-row class="justify-content-center">
            <b-col>
                <b-card header-tag="header" footer-tag="footer">
                    <em slot="header">
                        <b-row>
                            <b-col>
                                <i class="fa fa-hashtag"></i>{{$reservation->id}}
                            </b-col>
                            <b-col class="text-right">
                                <i class="fa fa-user"></i> {{$reservation->user->name}}
                            </b-col>
                        </b-row>
                    </em>
                    <b-card-body>
                        <h2>Title</h2>
                        <p>{{$reservation->title}}</p>
                        <h2>Date</h2>
                        <p>{{$reservation->date->format('d-m-Y')}}</p>
                        <h2>Start reservation</h2>
                        <p>{{$reservation->start}}</p>
                        <h2>End reservation</h2>
                        <p>{{$reservation->end}}</p>
                        <h2>Room</h2>
                        <p>[{{$reservation->section->room->name}}]: {{$reservation->section->name}}</p>
                        <br/>
                        <b-card no-body header="Description">
                            <b-card-body>
                                {{$reservation->description}}
                            </b-card-body>
                        </b-card>
                    </b-card-body>
                    <em slot="footer">
                            <b-button href="{{url('/reservations')}}" variant="dark"><i class="fa fa-backward"> back</i></b-button>
                            <b-button href="{{url('/reservations/'.$reservation->id.'/edit')}}" variant="primary"><i class="fa fa-edit"> edit</i></b-button>
                            <form action="{{url('/reservations/'.$reservation->id)}}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <b-button type="submit" onclick="return confirm('Are you sure you want to delete this?')" variant="danger"><i class="fa fa-remove"> delete</i></b-button>
                            </form>
                    </em>
                </b-card>
            </b-col>
        </b-row>
    </b-container>
@endsection