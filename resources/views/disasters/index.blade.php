@extends('beranda')

@section('content')
    <h2>Data History Bencana</h2>

    <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#inputDataModal">
        Input Data
    </button>

     <!-- Alert for success message -->
     @if(session('success'))
     <div class="alert alert-success alert-dismissible fade show" role="alert">
         {{ session('success') }}
         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>
    @endif
    

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">Bencana</th>
                <th scope="col">Kelurahan</th>
                <th scope="col">Alamat</th>
                <th scope="col">Waktu</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($disasters as $disaster)
                <tr>
                    <td>{{ $disaster->bencana }}</td>
                    <td>{{ $disaster->kelurahan }}</td>
                    <td>{{ $disaster->alamat }}</td>
                    <td>{{ $disaster->waktu }}</td>
                    <td>
                        <!-- Tambahkan tombol-tombol aksi seperti edit, hapus, dll -->
                        <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#detailModal{{ $disaster->id }}">
                            Detail
                        </button>
                        <!-- Modal Detail -->
                        <div class="modal fade" id="detailModal{{ $disaster->id }}" tabindex="-1" aria-labelledby="detailModalLabel{{ $disaster->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="detailModalLabel{{ $disaster->id }}">Detail Data Bencana</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <p><strong>Jenis Bencana:</strong> {{ $disaster->bencana }}</p>
                                        <p><strong>Kelurahan:</strong> {{ $disaster->kelurahan }}</p>
                                        <p><strong>Lokasi:</strong> {{ $disaster->alamat }}</p>
                                        <p><strong>Waktu:</strong> {{ $disaster->waktu }}</p>
                                        <p><strong>Penyebab:</strong> {{ $disaster->penyebab }}</p>
                                        <p><strong>Jumlah Kerugian:</strong> {{ $disaster->kerugian }}</p>
                                        <p><strong>Korban Luka:</strong> {{ $disaster->luka }}</p>
                                        <p><strong>Korban Meninggal:</strong> {{ $disaster->meninggal }}</p>

                                    </div>
                                </div>
                            </div>
                        </div>                        
                        <form action="{{ route('disasters.destroy', $disaster->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>

                        <!-- Sesuaikan link dan aksi yang diperlukan -->
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

 <!-- Modal -->
 <div class="modal fade" id="inputDataModal" tabindex="-1" aria-labelledby="inputDataModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="inputDataModalLabel">Input Data Bencana</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!-- Form input data bencana -->
                <form action="{{ route('disasters.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="bencana" class="form-label">Jenis Bencana</label>
                        <select class="form-select" id="bencana" name="bencana" required>
                            <option value="" selected disabled>Pilih Jenis Bencana</option>
                            <option value="Gempa">Gempa</option>
                            <option value="Banjir">Banjir</option>
                            <option value="Pohon Tumbang">Pohon Tumbang</option>
                            <option value="Kebakaran Hutan">Kebakaran Hutan</option>
                            <option value="Longsor">Longsor</option>
                            <option value="Orang Tenggelam">Orang Tenggelam</option>
                            <option value="Angin Badai">Angin Badai / Puting Beliung</option>
                            <option value="Abrasi Pantai">Abrasi Pantai</option>
                            <option value="Kekeringan">Kekeringan</option>
                            <!-- Tambahkan opsi bencana lainnya sesuai kebutuhan -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="kelurahan" class="form-label">Kelurahan</label>
                        <select class="form-select" id="kelurahan" name="kelurahan" required>
                            <option value="" selected disabled>Pilih Kelurahan</option>
                            <option value="Anduring">Anduring</option>
                            <option value="Balai Gadang">Balai Gadang</option>
                            <option value="Batang Arau">Batang Arau</option>
                            <option value="Batu Gadang">Batu Gadang</option>
                            <option value="Binuang Kampung Dalam">Binuang Kampung Dalam</option>
                            <option value="Dadok Tunggul Hitam">Dadok Tunggul Hitam</option>
                            <option value="Ganting Parak Gadang">Ganting Parak Gadang</option>
                            <option value="Gurun Laweh">Gurun Laweh</option>
                            <option value="Gurun Laweh Nan XX">Gurun Laweh Nan XX</option>
                            <option value="Ikur Koto">Ikur Koto</option>
                            <option value="Jati">Jati</option>
                            <option value="Jati Baru">Jati Baru</option>
                            <option value="Jati Gaung">Jati Gaung</option>
                            <option value="Jati Rawang">Jati Rawang</option>
                            <option value="Kampung Jao">Kampung Jao</option>
                            <option value="Kampung Olo">Kampung Olo</option>
                            <option value="Kampung Pondok">Kampung Pondok</option>
                            <option value="Kampung Seberang Padang">Kampung Seberang Padang</option>
                            <option value="Kampung Tengah">Kampung Tengah</option>
                            <option value="Kapalo Koto">Kapalo Koto</option>
                            <option value="Koto Lua">Koto Lua</option>
                            <option value="Koto Panjang Ikua Koto">Koto Panjang Ikua Koto</option>
                            <option value="Kubu Dalam">Kubu Dalam</option>
                            <option value="Lolong Belanti">Lolong Belanti</option>
                            <option value="Lubuk Begalung">Lubuk Begalung</option>
                            <option value="Lubuk Lintah">Lubuk Lintah</option>
                            <option value="Lubuk Minturun">Lubuk Minturun</option>
                            <option value="Lubuk Paraku">Lubuk Paraku</option>
                            <option value="Padang Besi">Padang Besi</option>
                            <option value="Padang Pasir">Padang Pasir</option>
                            <option value="Palinggam">Palinggam</option>
                            <option value="Parak Karakah">Parak Karakah</option>
                            <option value="Parak Laweh">Parak Laweh</option>
                            <option value="Parak Rumbio">Parak Rumbio</option>
                            <option value="Pasa Gadang">Pasa Gadang</option>
                            <option value="Pasa Lalang">Pasa Lalang</option>
                            <option value="Pasa Usang">Pasa Usang</option>
                            <option value="Pegambiran Ampalu Nan XX">Pegambiran Ampalu Nan XX</option>
                            <option value="Pengambiran Ampalu">Pengambiran Ampalu</option>
                            <option value="Pisang">Pisang</option>
                            <option value="Purus">Purus</option>
                            <option value="Rawang">Rawang</option>
                            <option value="Sungai Bangek">Sungai Bangek</option>
                            <option value="Sungai Sapih">Sungai Sapih</option>
                            <option value="Tabing Banda Gadang">Tabing Banda Gadang</option>
                            <option value="Tanah Sirah Piai">Tanah Sirah Piai</option>
                            <option value="Tanjung Aur">Tanjung Aur</option>
                            <option value="Taruko">Taruko</option>
                            <!-- Tambahkan kelurahan lainnya sesuai kebutuhan -->
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" class="form-control" id="alamat" name="alamat" required>
                    </div>
                    <div class="mb-3">
                        <label for="waktu" class="form-label">Waktu</label>
                        <input type="datetime-local" class="form-control" id="waktu" name="waktu" required>
                    </div>
                    <div class="mb-3">
                        <label for="penyebab" class="form-label">Penyebab</label>
                        <input type="text" class="form-control" id="penyebab" name="penyebab">
                    </div>
                    <div class="mb-3">
                        <label for="kerugian" class="form-label">Jumlah Kerugian</label>
                        <input type="number" class="form-control" id="kerugian" name="kerugian">
                    </div>
                    <div class="mb-3">
                        <label for="luka" class="form-label">Korban Luka</label>
                        <input type="number" class="form-control" id="luka" name="luka" >
                    </div>
                    <div class="mb-3">
                        <label for="meninggal" class="form-label">Korban Meninggal</label>
                        <input type="number" class="form-control" id="meninggal" name="meninggal" >
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection
