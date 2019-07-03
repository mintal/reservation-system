<table class="table table-striped table-hover">
    <thead class="thead-light">
    <tr>
        <th>Title</th>
        <th>Date</th>
        <th>Start</th>
        <th>End</th>
        <th>location</th>
    </tr>
    </thead>
    <tbody>
    @foreach(\App\Reservation::all()->where('date', '>=', today()) as $reservation)
        <tr onclick="window.location='{{url('reservations/'.$reservation->id)}}'" style="cursor:pointer;">
            <td>{{$reservation->title}}</td>
            <td>{{$reservation->date->format('d M Y')}}</td>
            <td>{{$reservation->start}}</td>
            <td>{{$reservation->end}}</td>
            <td>[{{$reservation->section->room->name}}]: {{$reservation->section->name}}</td>
        </tr>
    @endforeach
    </tbody>
</table>