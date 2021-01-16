<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center m-4">
                <h1 class="h4">Permintaan Barang</h1>
                <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white font-bold bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" data-toggle="modal"  data-target="#kirimBarang">
                    Kirim
                </button>
                <!-- <button wire:click="create()" type="button" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white font-bold bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    @if($isOpen)
                        @include(supplier.update)
                    @endif
                    Kirim
                </button> -->
            </div>
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1">
                    <div class="p-6">
                        <table class="table table-sm">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Pesanan</th>
                                    <th>Kode Barang</th>
                                    <th>Jumlah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            @foreach($permintaanSuppliers as $permintaanSupplier)
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $permintaanSupplier->id_pesanan}}</td>                               
                                    <td>{{ $permintaanSupplier->id_barang }}</td>
                                    <td>{{ $permintaanSupplier->jumlah }}</td>
                                    <td>
                                        <a href="delete-permintaan/{{ $permintaanSupplier->id_pesanan }}" type="button" class="inline-flex items-center px-3 py-1 border border-transparent rounded-md shadow-sm text-sm font-medium text-white font-bold bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Tolak</a>
                                    </td>
                                </tr>
                            </tbody>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="kirimBarang" tabindex="-1" aria-labelledby="kirimBarangLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="kirimBarangLabel">Kirim Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('create-barang-retail') }}" method="GET">
                    <div class="form-group">
                        <label for="inputidpesanan">ID Pesanan</label>
                        <select type="text" name="id_pesanan" id="inputidpesanan" class="form-control mb-3" placeholder="ID Pesanan" required autofocus>
                            @foreach($permintaanSuppliers as $permintaanSupplier)
                            <option>{{ $permintaanSupplier->id_pesanan}}</option>                               
                            @endforeach
                        </select>
                        <label for="inputidbarang">ID Barang</label>
                        <select type="text" name="id_barang" id="inputidbarang" class="form-control mb-3" placeholder="ID Barang" required autofocus>
                            @foreach($stokSuppliers as $stokSupplier)
                            <option>{{ $stokSupplier->id_barang }}</option>                               
                            @endforeach
                        </select>
                        <label for="inputbarang">Nama Barang</label>
                        <select type="text" name="nama_barang" id="inputbarang" class="form-control mb-3" placeholder="Nama Barang" required autofocus>
                            @foreach($stokSuppliers as $stokSupplier)
                            <option>{{ $stokSupplier->nama_barang }}</option>                               
                            @endforeach
                        </select> 
                        <label for="inputbarang">Jumlah</label>
                        <select type="text" name="jumlah" id="inputJumlah" class="form-control mb-3" placeholder="Jumlah" required>
                            @foreach($permintaanSuppliers as $permintaanSupplier)
                            <option>{{ $permintaanSupplier->jumlah}}</option>                               
                            @endforeach
                        </select>
                        <button type="send" class="mt-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white font-bold bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>