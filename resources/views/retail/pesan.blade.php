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
                            Kode Pesanan
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase font-bold tracking-wider">
                            Kode Barang
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase font-bold tracking-wider">
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase font-bold tracking-wider">
                            Keterangan
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-900 uppercase font-bold tracking-wider">
                            Aksi
                        </th>
                    </thead>
                    @foreach($permintaanSuppliers as $permintaanSupplier)
                    <tbody class="bg-white divide-y divide-gray-200">
                        <tr>
                            <td class="px-6 py-3 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $loop->iteration }}</div>
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $permintaanSupplier->id_pesanan }}</div>
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $permintaanSupplier->id_barang }}</div>
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $permintaanSupplier->jumlah }}</div>
                            </td>
                            <td class="px-6 py-3 whitespace-nowrap">
                                <div class="text-sm text-gray-900">{{ $permintaanSupplier->keterangan }}</div>
                            </td>
                            <td class="px-6 py-2 whitespace-nowrap">
                                @if($permintaanSupplier->keterangan == "Terkirim" || $permintaanSupplier->keterangan == "Batal")
                                @elseif($permintaanSupplier->keterangan == "Belum Dikirim")
                                    <a href="batal-pesanan/{{ $permintaanSupplier->id_pesanan }}" type="button" class="inline-flex items-center px-2 py-1 border border-transparent rounded-md shadow-sm text-sm font-medium text-white font-bold bg-red-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">Batalkan</a>
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
