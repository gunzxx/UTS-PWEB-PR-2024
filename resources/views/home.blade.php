@extends('layouts.home')

@section('content')
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Telepon</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($contacts as $key => $contact)
                    <tr>
                        {{-- {{dd($contact);}} --}}
                        <td>{{$key+1}}</td>
                        <td>{{ $contact['name'] }}</td>
                        <td>{{ $contact['email'] }}</td>
                        <td>{{ $contact['phone'] }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection