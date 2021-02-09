<x-retail-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-50 overflow-hidden shadow-xl sm:rounded-lg">
                <div class="text-center m-4">
                    <h1 class="h4">Jual Barang</h1>
                </div>
                <dl>
                    @foreach($stokRetails as $stokRetail)
                    <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            ID Barang
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                        {{ $stokRetail->id_barang }}
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Nama Barang
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $stokRetail->nama_barang }}
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Stok Tersedia
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $stokRetail->stok }}
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-2 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Keterangan
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            {{ $stokRetail->keterangan }}
                        </dd>
                    </div>
                    @endforeach
                </dl>
                <form action="{{ url('retail/tambah-penjualan') }}" method="GET">
                    <div class="overflow-hidden sm:rounded-md">
                        <div class="px-5 py-4 bg-white sm:p-6">
                            <div class="grid grid-cols-4 gap-6">
                            @foreach($stokRetails as $stokRetail)
                                <input type="hidden" name="id_barang" value="{{ $stokRetail->id_barang }}" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="total" class="block text-sm font-medium text-gray-700">Total Jual</label>
                                    <input type="text" name="total" id="total" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="px-5 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="send" class="inline-flex items-center px-3 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white font-bold bg-yellow-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                Jual
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-retail-layout>