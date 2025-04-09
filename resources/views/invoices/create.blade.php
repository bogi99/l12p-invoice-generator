<x-layoutmain>

    <div class="flex flex-col bg-blue-400 flex-grow px-1">
        {{-- <form action="{{ Request::url()}}/" method="POST"  class="bg-amber-200"> --}}
        <div class="flex flex-row self-center ">Create a new Invoice</div>

        <div class="flex flex-row self-center">
            <form action="/invoices" method="POST" class="bg-amber-200 p-2 ">
                @csrf
                @method('POST')
                {{-- <div class="flex flex-col">
                <label class="" for="numx">Invoice Number:</label>
                <input id='numx' name="num" type="text" class="bg-amber-50">

                </div> --}}

                <div class="mb-4">
                    @error('num')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                
                <div class="flex flex-col">
                <label class=""  for="titlex"><p>Invoice Title:</p></label>
                <input id='titlex' name="title" type="text" class="bg-amber-50">
                </div>
                
                <div class="mb-4">
                    @error('title')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="flex flex-col">
                <label for="fromx">Invoice from:</label>
                <input id='fromx' name="from" type="text" class="bg-amber-50">
                </div>
                <div class="mb-4">
                    @error('from')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="flex flex-col">
                <br><label for="tox" class="">Invoice to:</label>
                <input id='tox' name="to" type="text" class="bg-amber-50">
                </div>
                <div class="mb-4">
                    @error('to')
                        <div class="text-red-500 mt-2 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="flex flex-row self-center">
                    <input id="" type="submit" name="save"
                        class=" bg-blue-300 hover:bg-blue-300 hover:shadow-sm shadow-black p-2 rounded-b-full  rounded-t-full">
                </div>

            </form>
        </div>
    </div>
</x-layoutmain>
