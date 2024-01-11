@extends('layouts.admin')
@section('content')
<div class="card">
    <div class="card-header">
        Form Tambah Data
</div>

<div class="card-body">
    <form id="form-edit" action="{{route('update', ['id' => $cars->id])}}" method = "post" enctype="multipart/form-date">
        @csrf
        <div class="form-group">
            <label for="nama_mobil">Nama Mobil</label>
            <input type="text" id="nama_mobil" name="nama_mobil" class="form-control" value="{{ $cars->nama_mobil }}">
        </div>  
    <div class="form-group">
        <label for="harga_sewa">Harga Sewa</label>
        <input type="number" id="harga_sewa" name="harga_sewa" class="form-control"  value="{{ $cars->harga_sewa }}">
    </div>
    <div class="form-group">
        <label for="bahan_bakar">Bahan Bakar</label>
        <input type="text" id="bahan_bakar" name="bahan_bakar" class="form-control"  value="{{ $cars->bahan_bakar }}">
    </div>
    <div class="form-group">
        <label for="jumlah_kursi">Jumlah Kursi</label>
        <input type="number" id="jumlah_kursi" name="jumlah_kursi" class="form-control"  value="{{ $cars->jumlah_kursi }}">
    </div>
    <div class="form-group">
        <label for="transmisi">Transmisi</label>
        <select name="transmisi" id="transmisi" class="form-control">
            <option selected>
                @if($cars->transmisi == 'manual')
                Manual
                @else
                Otomatic
                @endif
            </option>
            <option value="1"> Manual</option>
            <option value="0"> Otomatic</option>
        </select>
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select name="status" id="status" class="form-control" required>
            @if($cars->status == '1')
               <option value="1">Available</option>
            @else
            <option value="0">Not Available</option>
            @endif
            <option value="1">Available</option>
            <option value="0">Not Available</option>
        </select>
    </div>
    <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea name="deskripsi" class="form-control" id="deskripsi" cols="30" rows="5">{{$cars->deskripsi}}</textarea>
    </div>
    <div class="form-group">
        <label for="p3k">P3K</label>
        <select name="p3k" id="p3k" class="form-control">
            @if($cars->p3k == '1')
               <option value="1">Available</option>
            @else
            <option value="0">Not Available</option>
            @endif
            <option value="1">Available</option>
            <option value="0">Not Available</option>
        </select>
    </div>
    <div class="form-group">
        <label for="audio">Audio</label>
        <select name="audio" id="audio" class="form-control">
            @if($cars->audio == '1')
               <option value="1">Available</option>
            @else
                <option value="0">Not Available</option>
            @endif
            <option value="1">Available</option>
            <option value="0">Not Available</option>
        </select>
    </div>
    <div class="form-group">
        <label for="charger">Charger</label>
        <select name="charger" id="charger" class="form-control">
            @if($cars->charger == '1')
               <option value="1">Available</option>
            @else
                <option value="0">Not Available</option>
            @endif
            <option value="1">Available</option>
            <option value="0">Not Available</option>
        </select>
    </div>
    <div class="form-group">
        <label for="ac">AC</label>      
        <select name="ac" id="ac" class="form-control">
            @if($cars->ac == '1')
               <option value="1">Available</option>
            @else
                <option value="0">Not Available</option>
            @endif
            <option value="1">Available</option>
            <option value="0">Not Available</option>
        </select> 
    </div>
    <div class="form-group">
        <label for="gambar">Gambar</label>
        <input id="gambar" type="file" class="form-control" name="gambar" required>
    </div>
    <div class="form-group d-flex justify-content-center">
        <button id="btn-edit" type="submit" class="btn btn-primary px-5 mt-5">Edit</button>
    </div>
</form>
</div>
</div>
<script>
    document.getElementById('btn-edit').addEventListener('click', function(event) {
        const nama = document.getElementById('nama_mobil').value;
        const harga = document.getElementById('harga_sewa').value;
        const bahan_bakar = document.getElementById('bahan_bakar').value;
        const kursi = document.getElementById('jumlah_kursi').value;
        const status = document.getElementById('status').value;
        const transmisi = document.getElementById('transmisi').value;
        const deskripsi = document.getElementById('deskripsi').value;
        const p3k = document.getElementById('p3k').value;
        const audio = document.getElementById('audio').value;
        const charger = document.getElementById('charger').value;
        const ac = document.getElementById('ac').value;
        const gambar = document.getElementById('gambar').value;
    
        if(!nama || !harga || !bahan_bakar || !kursi || !gambar) {
            event.preventDefault();
            Swal.fire({
                title: "Error!",
                text: "Gagal Menambahkan Data",
                icon: "error"
            });
            console.log("ini transmisi" + transmisi)
            console.log("ini status" + status)
        } else {
            event.preventDefault();
            Swal.fire({
                title: "Success!",
                text: "Data Berhasil Ditambahkan",
                icon: "success"
            }).then(() => {
                window.location.href = "{{ route('index') }}";
                document.getElementById('form-edit').submit();
            });
        }
    });
</script>
@endsection