@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit User</h1>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('pemain.update', $pemain->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="Nama_pemain">Nama Pemain</label>
            <input type="text" name="Nama_pemain" class="form-control" value="{{ old('Nama_pemain', $pemain->Nama_pemain) }}" required>
            @error('Nama_pemain')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="Posisi">Posisi</label>
            <input type="text" name="posisi" class="form-control" value="{{ old('posisi', $pemain->posisi) }}" required>
            @error('Posisi')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="No_punggung">No Punggung</label>
            <input type="text" name="No_Punggung" class="form-control">
            @error('No_Punggung')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="Asal_Klub">Asal Klub</label>
            <input type="text" name="Asal_Klub" class="form-control">
            @error('Asal_Klub')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>

        

        <button type="submit" class="btn btn-primary">Update pemain</button>
    </form>
</div>
@endsection
