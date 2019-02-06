@extends('layouts.app')

@section('content')
    <h1>User overview</h1>

    <table class="table" style="width: 50vw;">
        <tr>
            <th scope="col"><i class="fa fa-id-badge" aria-hidden="true"></i></th>
            <th scope="col">Naam</th>
            <th scope="col">Email</th>
            <th scope="col">Super Admin</th>
        </tr>
    @foreach ($users as $user)
        <tr>
            <td scope="row">{{ $user->id }}</td>
            <td>{{ $user->name }}</td>
            <td>{{ $user->email }}</td>
            <td>
            @if ($user->is_admin === 1)
                <i class="fas fa-check"></i>
            @endif
            </td>
        </tr>
    @endforeach
    </table>
    {{ $users->links() }}
@endsection