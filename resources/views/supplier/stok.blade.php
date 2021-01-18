<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center m-4">
                <h1 class="h4 mr-96">Stok Barang</h1>
                <button type="button" class="ml-96 inline-flex items-center px-3 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white font-bold bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500" data-toggle="modal"  data-target="#tambahBarang">
                    Tambah
                </button>
                <button class="-ml-20 inline-flex items-center px-3 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white font-bold bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" data-toggle="modal"  data-target="#editBarang">
                    Update
                </button>
            </div>
            <div class="mt-2 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                <div class="grid grid-cols-1">
                    <div class="p-6">
                        <table class="table table-sm">
                            <thead class="thead-light">
                                <tr>
                                    <th>No</th>
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Jumlah</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            @foreach($stokSuppliers as $stokSupplier)
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $stokSupplier->id_barang }}</td>                              
                                    <td>{{ $stokSupplier->nama_barang }}</td>
                                    <td>{{ $stokSupplier->jumlah }}</td>
                                    <td>
                                        <a href="delete-barang/{{ $stokSupplier->id_barang }}" type="button" class="inline-flex items-center px-2 py-1 border border-transparent rounded-md shadow-sm text-sm font-medium text-white font-bold bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Hapus</a>
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

<div class="modal fade" id="tambahBarang" tabindex="-1" aria-labelledby="tambahBarangLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahBarangLabel">Tambah Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('create-barang-supplier') }}" method="GET">
                    <div class="form-group">
                        <label for="inputbarang">Nama Barang</label>
                        <input type="text" name="nama_barang" id="inputbarang" class="form-control mb-3" placeholder="Nama Barang" required autofocus>
                        <label for="inputJumlah">Jumlah</label>
                        <input type="text" name="jumlah" id="inputJumlah" class="form-control mb-3" placeholder="Jumlah" required>
                        <button type="send" class="mt-2 inline-flex items-center px-3 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white font-bold bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">Tambah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editBarang" tabindex="-1" aria-labelledby="editBarangLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editBarangLabel">Update Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('update-stok-supplier') }}" method="GET">
                    <div class="form-group">
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
                        <label for="inputJumlah">Jumlah</label>
                        <input type="text" name="jumlah" id="inputJumlah" class="form-control mb-3" placeholder="Jumlah" required>
                        <button type="send" class="mt-2 inline-flex items-center px-3 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white font-bold bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

