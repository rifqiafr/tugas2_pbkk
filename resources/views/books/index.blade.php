<head>
  <!-- ... kode lainnya ... -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<h3 class="mt-4">DAFTAR BUKU</h3> 
<h4 class="mt-4">Silahkan Menambah Daftar Buku</h4> 

<a href="{{ route('books.create') }}" class="btn btn-success mt-4">Tambah</a>


@if (session()->has('pesan'))
    <div class="alert alert-success">
        {{ session()->get('pesan') }}
    </div>
@endif

@foreach ($books as $book)
    <div class="card mt-4">
        <div class="card-body">
            <h5 class="card-title">Judul: {{ $book->title }}</h5>
            <h6 class="card-subtitle mb-2 text-muted">Penulis: {{ $book->author }}</h6>
            <p class="card-text">Deskripsi: {{ $book->description }}</p>
            <a href="{{ route('books.show', $book->id) }}" class="btn btn-primary">Lihat</a>
            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-secondary">Edit</a>

            <form action="{{ route('books.destroy', $book->id) }}" method="post" class="d-inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
@endforeach






