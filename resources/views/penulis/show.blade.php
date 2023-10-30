<h4>DATA PENULIS</h4>
<br>

Nama Penulis: {{ $penuliss->name }}
<br>
Email: {{ $penuliss->email }}
<br>
Alamat: {{ $penuliss->address }}
<br>
<br>
<a href="{{ route('penulis.index', $penuliss->id) }}">Kembali</a>
