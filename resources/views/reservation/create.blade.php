@extends('layouts.layout')

@section('content')
    <b-row class="justify-content-center">
        <b-col>
            <b-card header="Create reservation" footer-tag="footer">
                <b-form action="{{url('/reservations')}}" method="POST">
                    @csrf
                    <b-form-group id="title" label="Title" label-for="title">
                        <b-input max="255" name="title" value="{{old('title')}}"></b-input>
                    </b-form-group>
                    <b-form-group label="Date" label-for="date">
                        <date-time-picker date-type="date" data-id="date" data-value="{{old('date')}}" date-format="yyyy-MM-dd"></date-time-picker>
                    </b-form-group>
                    <b-form-group  label="Start time" label-for="start" >
                        <date-time-picker date-type="time" data-id="start" data-value="{{old('start')}}" date-format="HH:mm"></date-time-picker>
                    </b-form-group>
                    <b-form-group label="End time" label-for="end">
                        <date-time-picker date-type="time" data-id="end" data-value="{{old('end')}}" date-format="HH:mm"></date-time-picker>
                    </b-form-group>
                    <b-form-group label="Room" label-for="room">
                        <select class="custom-select" name="section_id" required>
                            @foreach(App\Section::all() as $section)
                                <option value="{{$section->id}}" {{old('section_id') == $section->id ? 'selected' : ''}}>[{{$section->room->name}}] {{$section->id}}-{{$section->name}}</option>
                            @endforeach
                        </select>
                    </b-form-group>
                    <b-form-group id="desc" label="Description" label-for="description">
                        <b-textarea max="255" name="description" value="{{old('description')}}"></b-textarea>
                    </b-form-group>
                    <b-button type="submit" variant="primary"><i class="fa fa-save"> save</i></b-button>
                </b-form>
                <em slot="footer">
                    <b-button href="{{url('/reservations')}}" variant="dark"><i class="fa fa-backward"> back</i></b-button></em>
                <br/>
                @include('layouts/error')
            </b-card>
        </b-col>
    </b-row>
@endsection