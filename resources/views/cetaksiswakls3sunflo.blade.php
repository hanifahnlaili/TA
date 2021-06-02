<!DOCTYPE html>
<html>
<head>
	<title>Daftar Siswa Kelas 3 Sunflower</title>
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
    
    <h5>Daftar Siswa Kelas 3 Sunflower</h4>
    <br>
    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
        <thead>
        <tr>
            <th>Nomor Induk</th>
            <th>Nama Siswa</th>
            <th>NISN Siswa</th>
            <th>Kelas</th>
            <th>Tahun Pelajaran</th>
        </tr>
        </thead>
        <tbody>
            @foreach($siswa as $t)
            <tr>
            <td>{{$t->nomor_induk}}</td>
            <td>{{$t->nama_siswa}}</td>
            <td>{{$t->nisn_siswa}}</td>
            <td>{{$t->nama_kelas}}</td>
            <td>{{$t->tapel}}
                @if ( ( $t -> semester ) == 1 ) 
                    Ganjil
                @else
                    Genap
                @endif
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
 
</body>
</html>