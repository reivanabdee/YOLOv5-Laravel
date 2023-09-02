@extends('layouts.main')
@section('data')
<div id="link_wrapper">
<!-- <script>var pfHeaderImgUrl = '';var pfHeaderTagline = '';var pfdisableClickToDel = 0;var pfHideImages = 0;var pfImageDisplayStyle = 'right';var pfDisablePDF = 0;var pfDisableEmail = 0;var pfDisablePrint = 0;var pfCustomCSS = '';var pfBtVersion='1';(function(){var js, pf;pf = document.createElement('script');pf.type = 'text/javascript';if('https:' == document.location.protocol){js='https://pf-cdn.printfriendly.com/ssl/main.js'}else{js='http://cdn.printfriendly.com/printfriendly.js'}pf.src=js;document.getElementsByTagName('head')[0].appendChild(pf)})();</script><a href="http://www.printfriendly.com" style="color:#6D9F00;text-decoration:none;" class="printfriendly" onclick="window.print();return false;" title="Printer Friendly and PDF"><img style="border:none;-webkit-box-shadow:none;box-shadow:none;margin:0 6px"  src="http://cdn.printfriendly.com/pf-print-icon.gif" width="16" height="15" alt="Print Friendly Version of this page" />Print <img style="border:none;-webkit-box-shadow:none;box-shadow:none;margin:0 6px"  src="http://cdn.printfriendly.com/pf-pdf-icon.gif" width="12" height="12" alt="Get a PDF version of this webpage" />PDF</a> -->
    <a class="mb-1" href="{{'print'}}" role="button">Print | PDF</a>
    <div class="shadow-lg p-3 bg-body rounded">
 	
        <h3>Laporan Kehadiran Karyawan</h3>
        <table class="table table-hover table-sm table-responsive ">
            <thead>
                <!-- <th>No</th> -->
                <th>Nama Pegawai</th>
                <th>Masuk</th>
                <th>Pulang</th>
                <th>Tanggal</th>
                <!-- <th>Keterangan</th> -->
                

            </thead>

            {{-- {{$namalist}}  --}}
            @foreach ($dt as $isi)

            <tbody >
                <tr class="">
                   
                    <td><p>{{$isi->nama}}</p></td>
                    <td><p>{{$isi->waktu}}</p></td>
                    <td><p>{{$isi->pulang_waktu}}</p></td>
                    <td><p>{{$isi->tanggal}}</p></td>
                    <!-- <td><p>{{$isi->keterangan}}</p></td> -->
                    <!-- <td class="gambar"><img style="width:75px;height:70px;border-radius:5px; margin-top:auto;" src="data:image/jpeg;base64,{{ chunk_split(base64_encode( $isi->foto )) }}"></td> -->
                </tr>
            </tbody>
            @endforeach 

        </table>
</div>
 
@endsection