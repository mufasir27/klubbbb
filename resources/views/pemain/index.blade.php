@extends('layouts.app')

@section('content')
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">User Data</h6>
        <a href="{{ route('pemain.create') }}" class="btn btn-success float-right">Add User</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pemain</th>
                        <th>Posisi</th>
                        <th>NO Punggung</th>
                        <th>Asal Klub</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pemains as $item)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ $item->Nama_pemain }}</td>
                        <td>{{ $item->posisi}}</td>
                        <td>{{ $item->No_Punggung}}</td>
                        <td>{{ $item->Asal_Klub}}</td>
                        <td>
                            <a href="{{ route('pemain.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('pemain.destroy', $item->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
