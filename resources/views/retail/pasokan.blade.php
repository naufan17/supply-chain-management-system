<x-retail-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                        <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase font-bold tracking-wider">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase font-bold tracking-wider">
                            Kode Barang
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase font-bold tracking-wider">
                            Nama Barang
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase font-bold tracking-wider">
                            Stok
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase font-bold tracking-wider">
                            Keterangan
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase font-bold tracking-wider">
                            Pesan
                        </th>
                    </thead>
                    @foreach($stokSuppliers as $stokSupplier)
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-3 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $loop->iteration }}</div>
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $stokSupplier->id_barang }}</div>
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $stokSupplier->nama_barang }}</div>
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $stokSupplier->stok }}</div>
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap">
                                @if($stokSupplier->keterangan == "Tersedia")
                                    <span class="px-3 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                        {{ $stokSupplier->keterangan }}
                                    </span>
                                @elseif($stokSupplier->keterangan == "Habis")
                                    <span class="px-4 inline-flex text-sm leading-5 font-semibold rounded-full bg-red-100 text-red-800">
                                        {{ $stokSupplier->keterangan }}
                                    </span>
                                @endif                              
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap">
                                @if($stokSupplier->keterangan == "Tersedia")
                                    <a href="form-tambah-pesan/{{ $stokSupplier->id_barang }}" type="button" class="inline-flex items-center px-3 py-1 border border-transparent rounded-md shadow-sm text-sm font-medium text-white font-bold bg-green-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500">Pesan</a>
                                @elseif($stokSupplier->keterangan == "Habis")
                                @endif
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</x-retail-layout>
