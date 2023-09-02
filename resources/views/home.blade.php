@extends('layouts.main')
@section('data')

<div id="link_wrapper">
    <div class="shadow-lg p-3 mb-5 bg-body rounded">
 	
        <h3>Daftar Kehadiran Karyawan</h3>
        <table class="table table-hover">
            <thead>
                <th>No</th>
                <th>Nama Pegawai</th>
                <th>Masuk</th>
                <th>Pulang</th>
                <th>Tanggal</th> 
                <th>Foto</th>
                <!-- <th>Keterangan</th> -->
            </thead>

            {{-- {{$namalist}}  --}}
            @foreach ($dt as $isi)

            <tbody >
                <tr>
                    <td><p>{{$loop->iteration}}</p></td>
                    <td><p>{{$isi->nama}}</p></td>
                    <td><p>{{$isi->waktu}}</p></td>
                    <td><p>{{$isi->pulang_waktu}}</p></td>
                    <td><p>{{$isi->tanggal}}</p></td>
                    <td class="gambar"><img style="width:75px;height:70px;border-radius:5px; margin-top:auto;" src="data:image/jpeg;base64,{{ chunk_split(base64_encode( $isi->foto )) }}"></td>
                    <!-- <td><p>{{$isi->keterangan}}</p></td> -->
                </tr>
            </tbody>
            @endforeach 

        </table>
</div> 
@endsection



{{-- @extends('layouts.head.component') --}}

{{-- @include('layouts.navbarleft') --}}
{{-- @extends('layouts.nav') --}}
{{-- @extends('layout.autoload') --}}