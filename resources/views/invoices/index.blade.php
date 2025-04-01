<x-layoutmain>


    <div class="flex flex-col bg-blue-400 flex-grow px-1">
        {{-- <div class="flex flex-row self-center ">
            <div>listing invoices</div>
        </div> --}}
        @if ($message = Session::get('success'))
        <div class="flex flex-row self-center bg-green-300">
            <h3 class="text-center text-5xl">{{ $message }}</h3>
        </div>
        @endif

        @if ($message = Session::get('failure'))
        <div class="flex flex-row self-center bg-red-300">
            <h3 class="text-center text-5xl">{{ $message }}</h3>
        </div>
        @endif
        

        <table class="bg-amber-200 table-auto">
            <caption class="caption-top">listing invoices</caption>
            <thead class="bg-amber-400 border-b-amber-900 border border-t-0 border-l-0 border-r-0 ">
                <tr>
                    <td>id</td>
                    <td>Number</td>
                    <td>Title</td>
                    <td>from</td>
                    <td>to</td>
                    <td>Items</td>
                    <td colspan="3">Actions</td>
                </tr>
            </thead>

            <tbody>
                @foreach ($data as $element)
                    <tr class="even:bg-blue-100 odd:bg-amber-100">
                        <td class="">{{ $element->id }}</td>
                        <td class="">{{ $element->num }}</td>
                        <td class="">{{ $element->title }}</td>
                        <td class="">{{ $element->from }}</td>
                        <td class="">{{ $element->to }}</td>
                        <td class="">{{ $element->items_count }}</td>
                        <td class="w-20 "><x-buttonform-edit id="{{ $element->id }}" ></x-buttonform-edit></td>
                        <td class="w-20 bg-amber-400"><x-buttonform-delete
                                id="{{ $element->id }}"></x-buttonform-delete></td>
                        <td class="w-20">Download</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div>
</x-layoutmain>
