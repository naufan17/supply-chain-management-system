<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center m-4">
                    <h1 class="h4">Supplier</h1>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold">Stok Barang</div>
                            </div>
                            <div class="ml-12">
                                <div class="h1 mt-2 text-gray-600 dark:text-gray-400 lfont-semibold text-lg font-weight-bold">
                                    {{ $stokSuppliers }}
                                </div>
                            </div>
                        </div>
                        <div class="p-6 border-t border-gray-200 dark:border-gray-700 md:border-t-0 md:border-l">
                            <div class="flex items-center">
                                <div class="ml-4 text-lg leading-7 font-semibold">Permintaan Barang</div>
                            </div>
                            <div class="ml-12">
                                <div class="h1 mt-2 text-gray-600 dark:text-gray-400 lfont-semibold text-lg font-weight-bold">
                                {{ $permintaanSuppliers }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>