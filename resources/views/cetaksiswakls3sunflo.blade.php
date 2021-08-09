<!DOCTYPE html>
<html>
<head>
	<title>Keterangan Tentang Diri Siswa</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
        h3 {
            color: black; 
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            font-size: 12pt;
        }
        h4 {
            color: black; 
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            text-decoration: underline;
            font-size: 10pt;
            line-height: 1px;
        }
        .foot1 {
            font-size: 8pt;
            text-align: center;
            font-weight: bold;
            font-family: Arial, Helvetica, sans-serif;
            color: black;
            line-height: 2px;
        }
        .foot2 {
            font-size: 6pt;
            text-align: center;
            font-family: Arial, Helvetica, sans-serif;
            color: black;
            line-height: 2px;
        }
        table,tr,th, td{
            /* border: 1pt solid black; */
            border-collapse: collapse;
        }
        th, td{
            padding: 3px;
            font-size: 10pt;
        }
	    /* th{
            color: black;
            font-size: 10pt;
        } */
        footer{
            position: fixed;
            bottom: 0px; 
            left: 0px; 
            right: 0px;
            height: 40px;
        }
	</style>
    
    <main>

    <h3>KETERANGAN TENTANG DIRI SISWA</h3>

    <table style="width:100%; padding-top:1em;  padding-bottom: 1em;">
        <tbody>
            @foreach ($siswa as $t)
        
            <tr>
                <td style="text-align: center;">1.</td>
                <td style="text-align: left;">Nama Siswa Lengkap</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->NAMA_SISWA}}</td>
            </tr>
            <tr>
                <td style="text-align: center;">2.</td>
                <td style="text-align: left;">Nomor Induk/NISN</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->NOMOR_INDUK}}/{{$t->NISN_SISWA}}</td>
            </tr>
            <tr>
                <td style="text-align: center;">3.</td>
                <td style="text-align: left;">Jenis Kelamin</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->JENIS_KELAMIN}}</td>
            </tr>
            <tr>
                <td style="text-align: center;">4.</td>
                <td style="text-align: left;">Tempat dan Tanggal Lahir</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->TEMPAT_TANGGAL_LAHIR}}</td>
            </tr>
            <tr>
                <td style="text-align: center;">5.</td>
                <td style="text-align: left;">Agama</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->AGAMA}}</td>
            </tr>
            <tr>
                <td style="text-align: center;">6.</td>
                <td style="text-align: left;">Anak ke</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->ANAK_KE}}</td>
            </tr>
            <tr>
                <td style="text-align: center;">7.</td>
                <td style="text-align: left;">Status dalam keluarga</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->STATUS_DALAM_KELUARGA}}</td>
            </tr>
            <tr>
                <td style="text-align: center;">8.</td>
                <td style="text-align: left;">Alamat Siswa</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->ALAMAT}}</td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: left;">Telepon</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->TELEPON}}</td>
            </tr>
            <tr>
                <td style="text-align: center;">9.</td>
                <td style="text-align: left;">Diterima di Sekolah ini</td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: left;">a. &nbsp;Di Kelas</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->DITERIMA_DIKELAS}}</td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: left;">b. &nbsp;Pada Tanggal</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->TANGGAL_DITERIMA_DIKELAS}}</td>
            </tr>
            <tr>
                <td style="text-align: center;">10.</td>
                <td style="text-align: left;">Asal Sekolah</td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: left;">a. &nbsp;Nama Sekolah</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->NAMA_SEKOLAH}}</td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: left;">b. &nbsp;Alamat</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->ALAMAT_SEKOLAH}}</td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: left;">c. &nbsp;Telepon</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->TELEPON_SEKOLAH}}</td>
            </tr>
            <tr>
                <td style="text-align: center;">11.</td>
                <td style="text-align: left;">Nama Orang Tua</td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: left;">a. &nbsp;Ayah</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->NAMA_AYAH}}</td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: left;">b. &nbsp;Ibu</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->NAMA_IBU}}</td>
            </tr>
            <tr>
                <td style="text-align: center;">12.</td>
                <td style="text-align: left;">Alamat Orang Tua</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->ALAMAT_ORTU}}</td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: left;">Telepon</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->TELEPON_AYAH}}/{{$t->TELEPON_IBU}}</td>
            </tr>
            <tr>
                <td style="text-align: center;">13.</td>
                <td style="text-align: left;">Pekerjaan Orang Tua</td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: left;">a. &nbsp;Ayah</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->PEKERJAAN_AYAH}}</td>
            </tr>
            <tr>
                <td></td>
                <td style="text-align: left;">b. &nbsp;Ibu</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->PEKERJAAN_IBU}}</td>
            </tr>
            <tr>
                <td style="text-align: center;">14.</td>
                <td style="text-align: left;">Nama Wali</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->NAMA_WALI}}</td>
            </tr>
            <tr>
                <td style="text-align: center;">15.</td>
                <td style="text-align: left;">Alamat Wali</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->ALAMAT_WALI}}</td>
            </tr>
            <tr>
                <td style="text-align: center;">16.</td>
                <td style="text-align: left;">Pekerjaan Wali</td>
                <td style="text-align: center;">:</td>
                <td style="text-align: left;">{{$t->PEKERJAAN_WALI}}</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="text-align: center;">Surabaya, {{ date('d M Y',strtotime($t->TANGGAL_DITERIMA_DIKELAS)) }}</td>
            </tr>
            
            <tr>
                <td colspan="3"></td>
                <td style="text-align: center;">Kepala Sekolah</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="text-align: center;"><u>Cahyo Iswahyudi, S.Pd</u></td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td style="text-align: center;">NBM. 1.074.100</td>
            </tr>
        @endforeach
            
        </tbody>
    </table>

    </main>

    <footer>
        <img src="{{ public_path('/logorapor.png') }}" style="width:4rem; float:right">
    </footer>
</body>
</html>