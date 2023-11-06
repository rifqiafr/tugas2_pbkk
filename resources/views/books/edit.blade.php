@extends('layouts.master')
@section('title', $book->title . ' - Edit Buku')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between">
                <h1 class="subheader">Edit Buku</h1>

                <a href="{{ route('books.show', $book) }}" class="btn btn-primary btn-rounded btn-sm btn-30">Kembali</a>
            </div>

            <form action="{{ route('books.update', $book) }}" method="post">
                @csrf
                @method('PUT')

                <div class="card mt-3">
                    <div class="card-body">
                        <h4 class="semibold">Data Buku</h4>

                        <div class="form-group mb-3">
                            <label for="title" class="mb-2">Judul</label>
                            <input type="text" name="title" value="{{ old('title', $book->title) }}" id="title"
                                class="form-control form-control-lg @error('title') is-invalid @enderror"
                                required="required">

                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group mb-3">
                            <label for="author" class="mb-2">Penulis</label>
                            <select name="author_id" id="author" class="form-control form-control-lg">
                                <option selected disabled>Pilih Penulis</option>
                                @foreach ($authors as $author)
                                    <option value="{{ $author->id }}" @if (old('author_id', $book->author_id)) selected @endif>
                                        {{ $author->name }}</option>
                                @endforeach
                            </select>

                            @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="description" class="mb-2">Deskripsi</label>
                            <textarea name="description" id="description"
                                class="form-control form-control-lg @error('description') is-invalid @endif">{{ old('description', $book->description) }}</textarea>

                            @error('description')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer
                                d-flex justify-content-end">
                            <input type="submit" value="Simpan" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
@endsection
