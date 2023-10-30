<form action="{{ route('penulis.update', $penuliss->id) }}" method="POST">
  @csrf
  @method('PUT')

  <div>
      Nama Penulis:
      <input type="text" name="name" value="{{ old('name', $penuliss->name) }}" />

      <br>

      @error('name')
          <p>{{ $message }}</p>
      @enderror
  </div>

  <div>
      Email:
      <input type="email" name="email" value="{{ old('email', $penuliss->email) }}" />

      <br>

      @error('email')
          <p>{{ $message }}</p>
      @enderror
  </div>

  <div>
      Alamat:
      <textarea name="address">{{ old('address', $penuliss->address) }}</textarea>

      <br>

      @error('address')
          <p>{{ $message }}</p>
      @enderror
  </div>

  <div>
      <input type="submit" value="Simpan">
  </div>
</form>
