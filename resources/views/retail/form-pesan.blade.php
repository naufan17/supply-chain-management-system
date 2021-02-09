<x-retail-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-50 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="text-center m-4">
                    <h1 class="h4">Pesan Barang</h1>
                </div>
                <dl>
                    @foreach($stokSuppliers as $stokSupplier)
                    <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            ID Barang
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $stokSupplier->id_barang }}
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Nama Barang
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $stokSupplier->nama_barang }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Jumlah Tersedia
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $stokSupplier->jumlah }}
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Keterangan
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $stokSupplier->keterangan }}
                        </dd>
                    </div>
                    @endforeach
                </dl>
                <form action="{{ url('retail/tambah-pesanan') }}" method="GET">
                    <div class="overflow-hidden sm:rounded-md">
                        <div class="px-5 py-4 bg-white sm:p-6">
                            <div class="grid grid-cols-4 gap-6">
                            @foreach($stokSuppliers as $stokSupplier)
                                <input type="hidden" name="id_barang" value="{{ $stokSupplier->id_barang }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah Pesan</label>
                                    <input type="text" name="jumlah" id="jumlah" value="" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="px-5 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="send" class="inline-flex items-center px-3 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white font-bold bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">
                                Pesan
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-retail-layout>