@extends('admin.layout.navbar')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Hapus Kegiatan</h1>
    <p>Apakah Anda yakin ingin menghapus kegiatan <strong>{{ $kegiatan->nama_kegiatan }}</strong>?</p>

    <form action="{{ route('kegiatan.destroy', $kegiatan->id_kegiatan) }}" method="POST">
        @csrf
        @method('DELETE')

        <button type="submit" class="bg-red-500 text-white px-4 py-2 mt-4 rounded">Ya, Hapus</button>
        <a href="{{ route('kegiatan.index') }}" class="bg-gray-500 text-white px-4 py-2 mt-4 rounded">Batal</a>
    </form>
@endsection
