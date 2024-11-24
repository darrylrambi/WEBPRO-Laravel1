<div>
    <h1>List data Mahasiswa</h1>
    
    <!-- show Nama -->
    @if (!session('Nama'))
        <h3>Nama mahasiswa tidak ada</h3>
    @else
        <h3>{{ session('Nama') }}</h3>
    @endif

    <!-- show NIM -->
    @if (!session('NIM'))
        <h3>Nama mahasiswa tidak ada</h3>
    @else
        <h3>{{ session('NIM') }}</h3>
    @endif

    <!-- tombol back ke input data mahasiswa -->
    <a href="{{ route('userInput') }}">Kembali</a>
</div>
