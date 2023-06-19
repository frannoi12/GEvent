@extends ('layouts.base')

@section('content')
<a href="{{route('participants.create')}}">Ajouter</a>
    <table  border="2" class="table">
        <thead>
            <th>nom</th>
            <th>prenom</th>
            <th>adresse</th>
            <th>email</th>
            <th>editeur</th>
            <th>supprime</th>
        </thead>
        <tbody>
            @foreach($list_participant as $participant)
                <tr>
                    <td>{{$participant->user->nom}}</td>
                    <td>{{$participant->user->prenom}}</td>
                    <td>{{$participant->user->contact}}</td>
                    <td>{{$participant->user->email}}</td>
                    <td>
                        <form method="GET" action="{{ route("participants.edit",$participant->id) }}">
                            @csrf
                            @method("PUT")
                            <button type="submit">editer</button>
                        </form>
                    <td>
                        <form method="POST" action="{{ route("participants.destroy", $participant) }}">
                            @csrf
                            @method("DELETE")
                            <button type="submit">supprimer</button>
                        </form>
                </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection





