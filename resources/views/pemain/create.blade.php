@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Create Pemain</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('pemain.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="Nama_pemain">Nama Pemain</label>
            <input type="text" name="Nama_pemain" class="form-control" required>
            @error('Nama_Pemain')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="Posisi">Posisi</label>
            <input type="text" name="posisi" class="form-control" required>
            @error('Posisi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="No_Punggung">No Punggung</label>
            <input type="text" name="No_Punggung" class="form-control" required>
            @error('No_Punggung')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="Asal_Klub">Asal Klub</label>
            <input type="text" name="Asal_Klub" class="form-control" required>
            @error('Asal_Klub')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>


       
        <button type="submit" class="btn btn-primary">Create pemain</button>
    </form>
</div>
@endsection
