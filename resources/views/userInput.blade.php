<div>
    <!-- Nothing worth having comes easy. - Theodore Roosevelt -->
    <h1>Input data Mahasiswa</h1>
    <form action="userInput" method="post">
        @csrf
        <input type="text" id="Nama" name="Nama" placeholder="Masukan Nama Mahasiswa">
        <br>
        <br>
        <input type="text" id="NIM" name="NIM" placeholder="Masukan NIM Mahasiswa">
        <br>
        <br>

        <button>Submit</button>
    </form>
</div>
