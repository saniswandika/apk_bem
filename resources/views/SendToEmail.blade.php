<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
</style>
</head>
<body>
<div>
    <h2>Hari/tanggal kunjungan</h2>
    <p>{{$data['tanggal']}}</p>
</div>
<div>
    <h2>status pembayaran</h2>
    <p>{{$data['status']}}</p>
</div>
<div>
    <h2>password login</h2>
    <p>{{$data['password']}}</p>
</div>
<h2>Hallo {{$data['name']}}</h2>
<p>Terima kasih telah mendaftar sebagai pengunjung Kawasan Konservasi Penyu
    Pantai Pangumbahan. Data anda telah kami catat dan disimpan. dengan  password Login <b>{{$data['password']}}</b>, harap mengingat atau catat ID tersebut untuk mendapatkan
    E-Tiket.</p>
   
    <p>Berikut informasi terkait pendaftaran anda :</p>
    1. Kunjungan berjumlah {{$data['jumlah_pengunjung']}} orang


<table style="width:100%">
  <tr>
    <th>tgl masuk</th>
 
    <th>No Hp</th>
    <th>jml pengunjung</th>
   
  </tr>
  <tr style="height:35px; text-align:center;">
    <td>{{$data['tanggal']}}</td>
 
  <td>{{$data['No_Hp']}}</td>
  <td>{{$data['jumlah_pengunjung']}}</td>
  </tr>
  <tr style="height:50px; text-align:center;">
    <th>total biaya masuk kawasan</th>
    <td colspan="3">RP.{{$data['total_bayar']}}</td>
  </tr>
</table>
<p>2. Biaya kunjungan sebesar <b> Rp. {{$data['total_bayar']}}</b> dibayarkan melalui transfer ke Rekening Bank BNI cabang Sukabumi dengan <b>nomor rekening 888888888 atas nama Konservasi Penyu Pantai Pangumbahan</b></p>
<p>3. Setelah melakukan pembayaran, silahkan Login pada halaman ini untuk melakukan konfirmasi pembayaran</p>
<p>4. Jika <b style="color:red;">24 jam </B> setelah pendaftaran anda tidak melakukan pembayaran, atau sudah membayar tetapi tidak melakukan konfirmasi pembayaran. Maka pendaftaran secara otomatis dibatalkan</p>
<p>5. Pemeriksaan bukti transfer biaya pendaftaran melalui bank akan kami lakukan setelah kami menerima informasi konfirmasi pembayaran</p>
</body>
</html>