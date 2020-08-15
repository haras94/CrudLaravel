@extends('contact')

@section('main')
<a href="{{ url("contacts/create")}}" class="btn btn-success mb-1">Add New</a>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <!-- <th>id</th> -->
                        <th>nama</th>
                        <th>email</th>
                        <th>phone</th>
                        <th>address</th>
                        <th colspan="2">action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contacts as $contact)
                    <tr>
                        <!-- <td>{{$contact->id}}</td> -->
                        <td>{{$contact->nama}}</td>
                        <td>{{$contact->phone}}</td>
                        <td>{{$contact->email}}</td>
                        <td>{{$contact->address}}</td>
                        <td><a class="btn btn-primary" href="{{ url("contacts/{$contact->id}/edit") }}">Edit</td>
                        <td>
                            <form action="{{ url("contacts/{$contact->id}") }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
