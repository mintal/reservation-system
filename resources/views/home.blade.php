@extends('layouts.layout')

@section('content')
        <b-row>
            <b-col>
                <div class="card">
                    <div class="card-header"><i class="fa fa-dashboard"></i> Dashboard</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        Welcome back {{auth()->user()->name}}!
                    </div>
                </div>
            </b-col>
        </b-row>
        <br/>
    <b-row>
        <b-col>
            <b-card header-tag="header">
                <em slot="header"><i class="fa fa-database"></i> Database info</em>
                <b-list-group>
                    <b-list-group-item class="d-flex justify-content-between align-items-center">
                        Total users
                        <b-badge variant="primary">{{\App\User::all()->count()}}</b-badge>
                    </b-list-group-item>
                    <b-list-group-item class="d-flex justify-content-between align-items-center">
                        Total reservations
                        <b-badge variant="primary">{{\App\Reservation::all()->count()}}</b-badge>
                    </b-list-group-item>
                </b-list-group>
            </b-card>
        </b-col>
    </b-row>
        <br/>
        <b-row>
            <b-col>
                <b-card header-tag="header">
                    <em slot="header"><i class="fa fa-address-book"></i> Reservation list</em>
                    @include('reservation.list')
                </b-card>
            </b-col>
        </b-row>
@endsection