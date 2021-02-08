<x-app-layout>
    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="text-center m-4">
                    <h1 class="h4">Tambah Barang</h1>
                </div>
                <form action="{{ url('supplier/tambah-barang') }}" method="GET">
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-5 py-4 bg-white sm:p-6">
                            <div class="grid grid-cols-4 gap-6">
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="nama_barang" class="block text-sm font-medium text-gray-700">Nama Barang</label>
                                    <input type="text" name="nama_barang" id="nama_barang" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                                <div class="col-span-6 sm:col-span-4">
                                    <label for="jumlah" class="block text-sm font-medium text-gray-700">Jumlah</label>
                                    <input type="text" name="jumlah" id="jumlah" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                </div>
                            </div>
                        </div>
                        <div class="px-5 py-3 bg-gray-50 text-right sm:px-6">
                            <button type="send" class="inline-flex items-center px-3 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white font-bold bg-blue-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                                Tambah
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>