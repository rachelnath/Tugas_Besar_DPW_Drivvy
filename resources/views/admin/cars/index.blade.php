@extends('layouts.admin')
@section('content')
<div>
    <div class="card">
        <div class="card-header d-flex justify-content-between aign-items-center">
            <h3>Daftar Mobil</h3>
            <a href="{{ route('create') }}" class="btn btn-primary">Tambah Data</a>
        </div>
        <div class = "card-body">
            <div class ="table-responsive">
                 <table class ="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Mobil</th>
                        <th>Gambar Mobil</th>
                        <th>Harga Sewa</th>
                        <th>Status Mobil</th>
                        <th>Aksi</th>
                    </tr>
                </thead>  
                <tbody>
                    @forelse($cars as $car)
                    <tr>
                        <td> {{ $loop->iteration}}</td>
                        <td> {{$car->nama_mobil }}</td>
                        <td>
                            <img src="{{ URL('frontend/assets/Mobil/' . $car->gambar . '') }}" width="200" alt="">
                        </td>
                        <td>Rp. {{number_format($car->harga_sewa, 0, ',' , '.')}}</td>
                        <td>
                            @if($car->status == '1')
                            Available
                            @else
                            Not Available
                            @endif
                        </td>
                        <td>
                            <a href="{{route('edit', $car->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            <a id="btn-delete" href="{{route('destroy', $car->id)}}" type="submit" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">Data Kosong</td>
                    </tr>
                    @endforelse 
                </tbody>
                </table>    
            </div>
             </div>
        </div>
    </div>
    <script>
        document.getElementById('btn-delete').addEventListener('click', function(event) {
            event.preventDefault();
            Swal.fire({
                title: 'Confirmatiion!',
                text: 'Yakin ingin hapus?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Delete',
                cancelButtonText: 'Cancel'
             }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = event.target.href
                }
            });
        })
    </script>
@endsection