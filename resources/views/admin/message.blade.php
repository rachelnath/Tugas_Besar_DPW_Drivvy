@extends('layouts.admin')
@section('content')
<div>
    <div class="card">
        <div class="card-header d-flex justify-content-between aign-items-center">
            <h3>Pesan Masuk</h3>

        </div>
        <div class = "card-body">
            <div class ="table-responsive">
                 <table class ="table table-bordered">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Subjek</th>
                        <th>Pesan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>  
                <tbody>
                    @forelse($contacts as $contact)
                    <tr>
                        <td> {{ $loop->iteration}}</td>
                        <td> {{$contact->nama_lengkap }}</td>
                        <td> {{$contact->email }}</td>
                        <td> {{$contact->subjek_email }}</td>
                        <td> {{$contact->pesan }}</td>
                        <td>
                            <a id="btn-delete" href="{{route('destroyMessage', $contact->id)}}" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">Pesan Kosong</td>
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