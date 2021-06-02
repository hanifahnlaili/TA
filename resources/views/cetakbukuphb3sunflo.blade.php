<!DOCTYPE html>
<html>
<head>
	<title>Daftar Nilai Buku Penghubung Kelas 3 Sunflower</title>
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
    
    <h5>Daftar Nilai Buku Penghubung Kelas 3 Sunflower</h4>
    <br>
    <table id="datatable" class="table table-bordered" style="width:100%">
        <thead>
            <tr>
            <th>ID Nilai Buku Penghubung</th>
            <th>Nama Siswa</th>
            <th>Nilai Guru Spiritual</th>
            <th>Nilai Guru Sosial</th>
            <th>Nilai Orang Tua Spiritual</th>
            <th>Nilai Orang Tua Sosial</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bukuphb as $b)
            <tr>
            <td>{{$b->id_nbp}}</td>
            <td>{{$b->nama_siswa}}</td>
            <td>{{$b->guru_spiritual}}</td>
            <td>{{$b->guru_sosial}}</td>
            <td>{{$b->ortu_spiritual}}</td>
            <td>{{$b->ortu_sosial}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
 
</body>
</html>