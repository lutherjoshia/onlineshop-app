<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Products') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <table>
                        <thead>
                            <th>#</th>
                            <th>Title</th>
                            <Th>Deskripsi</Th>
                            <th>Price</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            {{-- @foreach ($products as $product) --}}
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">

                                    <div class="text-sm text-gray-900">
                                        {{-- {{ $loop->iteration }} --}}1
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{-- {{ $product['title'] }} --}}MSI
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{-- {{ $product['title'] }} --}}Laptop bruik
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900">
                                        {{-- Rp{{ number_format($product->price, 0, ',', '.') }} --}}6 juta
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                    <button type="button" wire:click="delete">
                                        Delete
                                    </button>
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
