@if($errors->any())
    <b-col>
        <b-alert variant="danger" show>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </b-alert>
    </b-col>
@endif