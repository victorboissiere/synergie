@extends('admin.layouts.header')
@section('page')
    <br>
    <h4>Utilisateurs (en cours)</h4>
    <br>
    <a href="{{ route('userCreate')  }}">Ajouter un utilisateur</a>
    <br>
    @include('utilities.forms.validation')
    <br>
    <table>
        <tr>
            <td>ID</td>
            <td>Nom/Pr�nom</td>
            <td>Email</td>
            <td>Actions</td>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    <a href="#">Modifier</a>
                    <a href="{{ route('userDelete', $user->id) }}">Supprimer (no warning yet)</a>
                </td>
            </tr>
        @endforeach
    </table>
    {!! $users->render() !!}
@endsection