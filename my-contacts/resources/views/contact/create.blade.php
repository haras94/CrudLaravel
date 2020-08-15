@extends('contact')

@section('main')
    <div class="row">
        <div class="col-md-8 offset-sm-2">
            <h2 class="display-6">Tambah Baru</h2>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 offset-sm-2">
            <form action="{{ url('/contacts') }}" method="post">
                @csrf

                    <div class="form-group">
                        <label for="nama">Full Name:</label>
                        <input class="form-control" type="text" name="nama" />
                    </div>

                    <div class="form-group">
                        <label for="phone">Phone:</label>
                        <input class="form-control" type="text" name="phone" />
                    </div>

                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input class="form-control" type="text" name="email" />
                    </div>

                    <div class="form-group">
                        <label for="address">Address:</label>
                        <textarea class="form-control" type="text" name="address"></textarea>
                    </div>
                    <button class= "btn btn-primary" type="submit">Simpan</button>

            </form>
        </div>
    </div>
@endsection