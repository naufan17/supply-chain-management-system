<x-retail-layout>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center m-4">
                <h1 class="h4">Stok Barang</h1>
                <button type="button" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white font-bold bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500" data-toggle="modal"  data-target="#tambahPenjualan">
                    Jual
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
                                </tr>
                            </thead>
                            @foreach($stokRetails as $stokRetail)
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $stokRetail->id_barang }}</td>                               
                                    <td>{{ $stokRetail->nama_barang }}</td>
                                    <td>{{ $stokRetail->jumlah }}</td>
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
</x-retail-layout>
<div class="modal fade" id="tambahPenjualan" tabindex="-1" aria-labelledby="tambahPenjualanLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahPenjulanLabel">Jual Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('create-penjualan') }}" method="GET">
                    <div class="form-group">
                        <label for="inputidbarang">ID Barang</label>
                        <select type="text" name="id_barang" id="inputidbarang" class="form-control mb-3" placeholder="ID Barang" required autofocus>
                            @foreach($stokRetails as $stokRetail)
                            <option>{{ $stokRetail->id_barang }}</option>                               
                            @endforeach
                        <label for="inputJumlah">Jumlah</label>
                        <input type="text" name="jumlah" id="inputJumlah" class="form-control mb-3" placeholder="Jumlah" required>
                        <button type="send" class="mt-2 inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white font-bold bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Jual</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

