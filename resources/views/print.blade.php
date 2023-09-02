<script type="text/javascript">
    window.print()
    </script>
    
    <style type="text/css">
    #print {
        margin:auto;
        text-align:center;
        font-family:"Calibri", Courier, monospace;
        width:1000px;
        font-size:14px;
    }
    #print .title {
        margin:20px;
        text-align:right;
        font-family:"Calibri", Courier, monospace;
        font-size:12px;
    }
    #print span {
        text-align:center;
        font-family:"Trebuchet MS", Arial, Helvetica, sans-serif;   
        font-size:18px;
    }
    #print table {
        border-collapse:collapse;
        width:100%;
        margin:10px;
    }
    #print .table1 {
        border-collapse:collapse;
        width:90%;
        text-align:center;
        margin:10px;
    }
    #print table hr {
        border:3px double #000;   
    }
    #print .ttd {
        float:right;
        width:250px;
        background-position:center;
        background-size:contain;
    }
    #print table th {
        color:#000;
        font-family:Verdana, Geneva, sans-serif;
        font-size:12px;
    }
    #logo{
        width:111px;
        height:90px;
        padding-top:10px;   
        margin-left:10px;
    }

    h2,h3{
        margin: 0px 0px 0px 0px;
    }
    </style>

    <title>Laporan Cetak</title>
    <div id="print">
    <table class='table1'>
            
<!-- <td><img src='assets/img/kpb.jpg' height="100" width="200px"></td> -->
                <td>
<h2><i>CV. KARYA PUTRA BERSAMA</i></h2>
<p style="font-size:14px;"><i> Karawang</i></p>
    </td>
   
</table>
    
<table class='table'>   
<td><hr /></td>

</table>
<td><h3>Rekap Kehadiran Karawan</h3></td>
<tr>
<td>
<table border='1' class='table' width="90%">
<tr>
    <th>Nama Karyawan</th>
    <th>Masuk</th>
    <th>pulang</th>
    <th>Tanggal</th> 
    
    


</tr>
@foreach ($dt as $isi) 
<tr>
    <td><p>{{$isi->nama}}</p></td>
    <td><p>{{$isi->waktu}}</p></td>
    <td><p>{{$isi->pulang_waktu}}</p></td>
    <td><p>{{$isi->tanggal}}</p></td> 
    <!-- <td><p>{{$isi->keterangan}}</p></td>
    <!-- <td class="gambar"><img style="width:75px;height:70px;border-radius:5px; margin-top:auto;" src="data:image/jpeg;base64,{{ chunk_split(base64_encode( $isi->foto )) }}"></td> -->
</tr>
@endforeach 

</table>
</tr>
</table>
</div>
<div id="print">
<table width="450" align="right" class="ttd">
<tr>
<td width="100px" style="padding:20px 20px 20px 20px;" align="center">
<strong>Site Manager,</strong>
      <br><br><br><br>
<strong><u>TTD</u><br></strong><small></small>
</td>
</tr>
</table>
</div>


