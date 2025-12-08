@extends('back.layout.navtemplate')

<style>
    *{
        overflow: hidden;
    }
    tr th{
        text-align: center
    }
    h2{
        margin-left: 25rem;
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

}

.absensi-form{
    
    justify-content: left;
    align-items: left;
    display: flex;

    width: 100%;
}

.absensi-wrapper{
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    width: 100%;
}
.radio-form{
    justify-content: right;
    align-items: right;
    margin-left: 2rem;
    flex-direction: column;
    width: 30rem;
}
.filter-container{
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
    display: block;
    margin: 5px 0;
    cursor: pointer;
}

button{
    border: none;
    color: rgb(255, 255, 255);
    background-color: rgb(0, 94, 0);
    padding: 2rem;
}

.table-scroll {
    max-height: 28.5rem;
    min-height: 28.5rem;
    overflow-y: auto;
    width: 70%;
    margin-left: 2rem;
    border: 1px solid #000000; /* opsional */
}

.absen-table {
    width: 100%;
    table-layout: fixed;
}

.absen-table th,
.absen-table td {
    width: 43%;
}

</style>

<div class="absensi-container">
<!-- absensi fitur -->
<h2>Absensi Siswa</h2>

<form id="absensiForm" class="absensi-form" action="/absensi" method="POST">
    @csrf
    <div class="absensi-wrapper">
    <div class="table-scroll">
    <table cellpadding="10" class="absen-table">
        <tr>
            <th>Nama</th>
            <th>Status</th>
        </tr>

        @foreach($siswa as $s)
        <tr>
            <td>{{ $s->name }}</td>
            <td>                
                @if($s->surat_izin)
                <a href="{{ asset('storage/'.$s->surat_izin) }}" target="_blank">
                    📄 Lihat Surat
                </a>
            @else
                <small style="color:gray">Tidak ada surat</small>
            @endif</td>
            <td>
                <select name="status[{{ $s->id }}]">
                    <option value="hadir">Hadir</option>
                    <option value="izin">Izin</option>
                    <option value="sakit">Sakit</option>
                    <option value="alfa">Alfa</option>
                </select>
            </td>
            
        </tr>
        @endforeach
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
</div>

<script>
function submitFilter(){
    document.getElementById('filterForm').submit();
}
</script>

</div>

<button type="submit" form="absensiForm">Simpan Absensi</button>





