<!DOCTYPE html>
<html>
<head>
	<title>Daftar Presensi Siswa Kelas 3 Sunflower</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
        h5 {color: darkslateblue; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;}
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
    
    <h5>Daftar Presensi Siswa Kelas 3 Sunflower</h4>
    <br>
    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
    <thead>
        <tr>
        <th>ID Presensi</th>
        <th>Nama Siswa</th>
        <th>Tahun Pelajaran</th>
        <th>Sakit</th>
        <th>Ijin</th>
        <th>Absen</th>
         </tr>
    </thead>
    <tbody>
        @foreach($presensi as $p)
        <tr>
        <td>{{$p->id_presensi}}</td>
        <td>{{$p->nama_siswa}}</td>
        <td>{{$p->tapel}}
            @if ( ( $p -> semester ) == 1 ) 
                Ganjil
            @else
                Genap
            @endif
        </td>
        <td>{{$p->sakit}}</td>
        <td>{{$p->ijin}}</td>
        <td>{{$p->absen}}</td>
        </tr>
        @endforeach
    </tbody>
    </table>
 
</body>
</html>