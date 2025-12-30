@extends('back.layout.navtemplate')

<style>
    body{
        overflow: hidden;
    }
    tr th{
        text-align: center
    }
    h2{
        margin-left: 30rem;
    }
.absensi-container{
    margin: 0;
    margin-top: 5rem;
    display: flex;
    flex-direction: column;
    overflow: hidden;
}

.absen-table{
    justify-content: left;
    align-items: left;
    margin-left: 2rem;
    flex-direction: column;
    width: 70%;

    overflow: hidden;
}

.absensi-form{
    
    justify-content: left;
    align-items: left;
    display: flex;
 overflow: hidden;
    width: 100%;
}

.absensi-wrapper{
    overflow: hidden;
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    width: 100%;
}
.radio-form{
    overflow: hidden;
    justify-content: right;
    align-items: right;
    margin-left: 2rem;
    flex-direction: column;
    width: 30rem;
}
.filter-container{
    overflow: hidden;
    border: 1px solid #ccc;
    padding: 15px;
    border-radius: 10px;
    min-width: 180px;
    justify-content: right;
    align-items: right;
    width: 25%;   
    margin-left: auto; 
}

.filter-group label{
    overflow: hidden;
    display: block;
    margin: 5px 0;
    cursor: pointer;
}

button{
    overflow: hidden;
    border: none;
    color: rgb(255, 255, 255);
    background-color: rgb(19, 190, 56);
    padding: 2rem;
}

.table-scroll {
    overflow: hidden;
    max-height: 28.5rem;
    min-height: 28.5rem;
    overflow-y: auto;
    width: 70%;
    margin-left: 2rem;
    border: 1px solid #000000; /* opsional */
}

.absen-table {
    overflow: hidden;
    width: 100%;
    table-layout: fixed;
}

.absen-table th,
.absen-table td {
    padding: 10px;
}

/* kolom NO (kolom ke-1) */
.absen-table th:nth-child(1),
.absen-table td:nth-child(1) {
    width: 60px;       /* kecilin */
    text-align: center;
}

/* kolom NAMA (kolom ke-2) */
.absen-table th:nth-child(2),
.absen-table td:nth-child(2) {
    width: 50%;
}

/* kolom STATUS (kolom ke-3) */
.absen-table th:nth-child(3),
.absen-table td:nth-child(3) {
    width: 20%;
}

.tombol-absen a{
    text-decoration: none;
    background-color: rgb(90, 213, 74);
    padding: 0.5rem;
    border-radius: 10%;
    color: rgb(255, 255, 255);
    

}
.tombol-absen a:hover{

    color: rgb(255, 255, 255);

}

</style>

<div class="absensi-container">
<!-- absensi fitur -->
<h2>Data Absensi Siswa</h2>

<form id="absensiForm" class="absensi-form" action="/data_absen" method="POST">
    @csrf
    <div class="absensi-wrapper">

        <div style="margin-left:2rem; margin-bottom:10px;">
            <form method="GET">
                <label><b>Pilih Tanggal:</b></label><br>
                <input type="date" name="tanggal" value="{{ request('tanggal') ?? date('Y-m-d') }}" onchange="this.form.submit()">
            </form>
        </div>


    <div class="table-scroll">
    <table cellpadding="10" class="absen-table">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Status</th>
            <th>Surat</th>
            
        </tr>

        @forelse($siswa as $s)
        <tr>
            <td>{{ $loop->iteration }}</td> 
            <td>{{ $s->name }}</td>
         @php
    $absen = $s->absensi
        ->where('tanggal', request('tanggal') ?? date('Y-m-d'))
        ->first();
@endphp

<td>
    @if($absen)
        <span style="font-weight:bold;">
            {{ strtoupper($absen->status) }}
        </span>
    @else
        <small style="color:gray;">Belum diabsen</small>
    @endif
</td>

<td>
    @if($absen && $absen->surat)
        <a href="{{ asset('storage/'.$absen->surat) }}" target="_blank">
            📄 Lihat Surat
        </a>
    @else
        <small style="color:gray;">Tidak ada surat</small>
    @endif
</td>

@empty
<tr>
        <td colspan="3" style="text-align:center;color:gray;">
        Belum ada data absensi untuk hari ini
        </td>
        </tr>
            
        </tr>
   
        
@endforelse
    </table> 
    </div>   
</form>

<!-- radio filter -->
<div class="filter-container">
    <form class="radio-form" id="filterForm" method="GET" action="">
        <div class="filter-group">
            <p><b>Filter Kelas</b></p>
            <label>
                <input type="radio" name="kelas" value="" onchange="submitFilter()" {{ request('kelas')=='' ? 'checked' : '' }}>
                Semua
            </label>
            <label>
                <input type="radio" name="kelas" value="X" onchange="submitFilter()" {{ request('kelas')=='X' ? 'checked' : '' }}>
                X
            </label>
            <label>
                <input type="radio" name="kelas" value="XI" onchange="submitFilter()" {{ request('kelas')=='XI' ? 'checked' : '' }}>
                XI
            </label>
            <label>
                <input type="radio" name="kelas" value="XII" onchange="submitFilter()" {{ request('kelas')=='XII' ? 'checked' : '' }}>
                XII
            </label>
        </div>

        <div class="filter-group">
            <p><b>Filter Jurusan</b></p>
            <label>
                <input type="radio" name="jurusan" value="" onchange="submitFilter()" {{ request('jurusan')=='' ? 'checked' : '' }}>
                Semua
            </label>
            <label>
                <input type="radio" name="jurusan" value="PPLG" onchange="submitFilter()" {{ request('jurusan')=='PPLG' ? 'checked' : '' }}>
                PPLG
            </label>
            <label>
                <input type="radio" name="jurusan" value="TJKT" onchange="submitFilter()" {{ request('jurusan')=='TJKT' ? 'checked' : '' }}>
                TJKT
            </label>
        </div>
    </form>


        <div class="tombol-absen">
            <a href="/absensi">Absen harian</a>
            <a href="/data_absen">Lihat absen</a>
        </div>
</div>
<script>
function submitFilter(){
    document.getElementById('filterForm').submit();
}

function setAllStatus() {
    const value = document.getElementById('selectAllStatus').value;
    const allSelects = document.querySelectorAll('.status-select');

    allSelects.forEach(select => {
        if(value !== '') {
            select.value = value;
        }
    });
}
</script>

</div>







