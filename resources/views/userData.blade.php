<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <h1>List data Mahasiswa</h1>
    
    <!-- show Nama -->
    <h3>{{ session('Nama') }}</h3>
    
    <!-- show NIM -->
    <h3>{{ session('NIM') }}</h3>

    <!-- tombol back ke input data mahasiswa -->
    <a href="{{ route('userInput') }}">Kembali</a>
</div>
