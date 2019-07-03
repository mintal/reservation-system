@extends('layouts.layout')
@php($fs = true)
@section('content')
    <b-container>
        <b-row class="justify-content-center">
            <b-col>
                <b-card header="Reservations of today" footer-tag="footer" title="Reservations" >
                    <dynamic-reservation-list></dynamic-reservation-list>
                </b-card>
            </b-col>
        </b-row>
    </b-container>
@endsection