@extends('layouts.layout')

@section('content')
    <b-container>
        <b-row class="justify-content-center">
            <b-col>
                <b-card header="Reservations" footer-tag="footer" title="A list of current reservations" >
                    @include('reservation.list')
                    <em slot="footer">
                        <b-button href="{{url('/reservations/create')}}" variant="primary"><i class="fa fa-plus"></i> create</b-button>
                    </em>
                </b-card>
            </b-col>
        </b-row>
    </b-container>
@endsection