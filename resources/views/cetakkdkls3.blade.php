<!DOCTYPE html>
<html>
<head>
	<title>Daftar Kompetensi Dasar Kelas 3</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
        h5 {color: darkslateblue; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;}
		table tr td,
		table tr th{
			font-size: 8.5pt;
		}
        @page { size: landscape; }
	</style>
    
    <h5>Daftar Kompetensi Dasar Kelas 3</h4>
    <br>
    <table id="datatable" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>ID Kompetensi Dasar</th>
                <th>Nama Mata Pelajaran</th>
                <th>Kompetensi Inti</th>
                <th colspan="7">Detail Kompetensi Dasar</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kompetensidasar as $k)
                <tr>
                    <td>{{$k->id_kd}}</td>
                    <td>{{$k->nama_mapel}}</td>
                    <td>{{$k->nama_ki}}</td>
                    <td>{{$k->detail_kd}}</td>
                    <td>{{$k->detail_kd1}}</td>
                    <td>{{$k->detail_kd2}}</td>
                    <td>{{$k->detail_kd3}}</td>
                    <td>{{$k->detail_kd4}}</td>
                    <td>{{$k->detail_kd5}}</td>
                    <td>{{$k->detail_kd6}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
 
</body>
</html>