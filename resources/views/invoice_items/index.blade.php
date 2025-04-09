
<x-layoutmain>
    <h1 class="text-xl font-bold">Invoice Details</h1>
    <div class="mb-4">
        <p><strong>Invoice Number:</strong> {{ $invoice->number }}</p>
        <p><strong>Invoice Title:</strong> {{ $invoice->title }}</p>
        <p><strong>From:</strong> {{ $invoice->from }}</p>
        <p><strong>To:</strong> {{ $invoice->to }}</p>
    </div>

    <h2 class="text-lg font-bold">Invoice Items</h2>

    @if ($invoice->items->isEmpty())
        <p class="text-gray-500">No items are associated with this invoice.</p>
    @else
        <table class="table-auto border-collapse border border-gray-400 w-full">
            <thead>
                <tr>
                    <th class="border border-gray-300 px-4 py-2">Item Name</th>
                    <th class="border border-gray-300 px-4 py-2">Quantity</th>
                    <th class="border border-gray-300 px-4 py-2">Price</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($invoice->items as $item)
                    <tr>
                        <td class="border border-gray-300 px-4 py-2">{{ $item->name }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $item->quantity }}</td>
                        <td class="border border-gray-300 px-4 py-2">{{ $item->price }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</x-layoutmain>