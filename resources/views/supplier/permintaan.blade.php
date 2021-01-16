<x-app-layout>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center m-4">
                <h1 class="h4">Permintaan Barang</h1>
                <button wire:click="create()" type="button" class="inline-flex items-center px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white font-bold bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                    @if($isOpen)
                        @include(supplier.update)
                    @endif
                    Kirim
                </button>
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
                                </tr>
                            </thead>
                            @foreach($permintaanSuppliers as $permintaanSupplier)
                            <tbody>
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $permintaanSupplier->id_pesanan}}</td>                               
                                    <td>{{ $permintaanSupplier->id_barang }}</td>
                                    <td>{{ $permintaanSupplier->jumlah }}</td>
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
</x-app-layout>