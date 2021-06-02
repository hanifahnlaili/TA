<!DOCTYPE html>
<html>
<head>
	<title>Daftar Ketentuan Belajar Minimal Kelas 3</title>
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
    
    <h5>Daftar Ketentuan Belajar Minimal Kelas 3</h4>
    <br>
    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID KBM</th>
                <th>Nama Mata Pelajaran</th>
                <th>Nilai KBM</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kbm as $k)
            <tr>
                <td>{{$k->id_kbm}}</td>
                <td>{{$k->nama_mapel}}</td>
                <td>{{$k->nilai_kbm}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
 
</body>
</html>