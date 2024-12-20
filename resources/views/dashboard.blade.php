<x-app-layout>
    <x-slot name="header">
        <header class="p-5 flex justify-between items-center bg-white sticky-0 top-0 inset-0">
            <div class="flex flex-col space-y-1">
            <div class="flex items-center space-x-1">
           <span class="text-[#F68A21] text-5xl"><ion-icon name="cart-sharp"></ion-icon></span>
        <h2 class="font-extrabold text-slate-900 text-3xl">
            YOUR PRODUCT
        </h2>
    </div>
    <div class=" grid md:grid-cols-10 grid-cols-5 items-center gap-1">
        @php
            $iconList = ["grid", "fast-food", "shirt", "brush", "desktop", "file-tray-stacked", "basketball", "book", "construct", "sparkles"]
        @endphp
        @foreach ($categoryListTotal as $key => $categoryProduct)
            <div class="p-2 rounded-sm border border-zinc-300 space-x-1 text-sm flex items-center">
                <span class="text-[#F68A21]  flex items-center justify-center"><ion-icon name="{{$iconList[$key]}}-sharp"></ion-icon></span>
                <span class="flex items-center font-semibold text-slate-900">{{$categoryProduct}}</span>
            </div>
        @endforeach
    </div>
</div>

        <a href={{ route('product.create') }} class="bg-[#F68A21] px-2.5 flex items-center rounded-sm py-2.5 text-white space-x-1 hover:bg-[#F68A21]/90 transition-colors duration-100 ease-in">
            <span class="flex items-center justify-center text-lg"><ion-icon name="add-circle-sharp"></ion-icon></span>
            <span class="text-sm hidden sm:flex">ADD PRODUCT</span>
        </a>
    </header>
    </x-slot>
    <div class="grid grid-cols-10 items-center pl-2 pb-3 ">
        <a href={{route("dashboard", ["category" => 'all'])}} class="flex items-center justify-center w-full text-sm font-bold space-x-1 {{request()->query('category') === 'all' ? 'text-[#F68A21]' : 'text-slate-900'}} hover:text-[#F68A21] p-2 transition-colors duration-100 ease-in-out cursor-pointer">
            <span class="flex items-center justify-center"><ion-icon name="grid-sharp"></ion-icon></span>
            <span class="xl:flex hidden">ALL</span>
                </a>
<a href={{route("dashboard", ["category" => 'foods'])}} class="flex items-center justify-center w-full text-sm font-bold space-x-1 {{request()->query('category') === 'foods' ? 'text-[#F68A21]' : 'text-slate-900'}} hover:text-[#F68A21] p-2 transition-colors duration-100 ease-in-out cursor-pointer">
<span class="flex items-center justify-center"> <ion-icon name="fast-food-sharp"></ion-icon></span>
<span class="xl:flex hidden">FOODS</span>
    </a>

    <a href={{route("dashboard", ["category" => 'clothes'])}} class="cursor-pointer flex items-center justify-center w-full text-sm font-bold space-x-1 {{request()->query('category') === 'clothes' ? 'text-[#F68A21]' : 'text-slate-900'}} hover:text-[#F68A21] p-2 transition-colors duration-100 ease-in-out">
        <span class="flex items-center justify-center"><ion-icon name="shirt-sharp"></ion-icon></span>
        <span class="xl:flex hidden">CLOTHES</span>
            </a>
            <a href={{route("dashboard", ["category" => 'beauty'])}} class="cursor pointer flex items-center justify-center w-full text-sm font-bold space-x-1 {{request()->query('category') === 'beauty' ? 'text-[#F68A21]' : 'text-slate-900'}} hover:text-[#F68A21] p-2 transition-colors duration-100 ease-in-out">
                <span class="flex items-center justify-center"><ion-icon name="brush-sharp"></ion-icon></span>
                <span class="xl:flex hidden">BEAUTY</span>
                    </a>
                    <a href={{route("dashboard", ["category" => 'electronics'])}} class="cursor-pointer flex items-center justify-center w-full text-sm font-bold space-x-1 {{request()->query('category') === 'electronics' ? 'text-[#F68A21]' : 'text-slate-900'}} hover:text-[#F68A21] p-2 transition-colors duration-100 ease-in-out">
                        <span class="flex items-center justify-center"><ion-icon name="desktop-sharp"></ion-icon></span>
                        <span class="xl:flex hidden">ELECTRONICS</span>
                            </a>
                            <a href={{route("dashboard", ["category" => 'home'])}} class="cursor-pointer flex items-center justify-center w-full text-sm font-bold space-x-1 {{request()->query('category') === 'home' ? 'text-[#F68A21]' : 'text-slate-900'}} hover:text-[#F68A21] p-2 transition-colors duration-100 ease-in-out">
                                <span class="flex items-center justify-center"><ion-icon name="file-tray-stacked-sharp"></ion-icon></span>
                                <span class="xl:flex hidden">HOME</span>
                                    </a>
                                    <a href={{route("dashboard", ["category" => 'toys'])}} class="cursor-pointer flex items-center justify-center w-full text-sm font-bold space-x-1 {{request()->query('category') === 'toys' ? 'text-[#F68A21]' : 'text-slate-900'}} hover:text-[#F68A21] p-2 transition-colors duration-100 ease-in-out">
                                        <span class="flex items-center justify-center"><ion-icon name="basketball-sharp"></ion-icon></span>
                                        <span class="xl:flex hidden">TOYS</span>
                                            </a>
                                            <a href={{route("dashboard", ["category" => 'books'])}} class="cursor-pointer flex items-center justify-center w-full text-sm font-bold space-x-1 {{request()->query('category') === 'books' ? 'text-[#F68A21]' : 'text-slate-900'}} hover:text-[#F68A21] p-2 transition-colors duration-100 ease-in-out">
                                                <span class="flex items-center justify-center"><ion-icon name="book-sharp"></ion-icon></span>
                                                <span class="xl:flex hidden">BOOKS</span>
                                                    </a>
                                                    <a href={{route("dashboard", ["category" => 'tools'])}} class="cursor-pointer flex items-center justify-center w-full text-sm font-bold space-x-1 {{request()->query('category') === 'tools' ? 'text-[#F68A21]' : 'text-slate-900'}} hover:text-[#F68A21] p-2 transition-colors duration-100 ease-in-out">
                                                        <span class="flex items-center justify-center"><ion-icon name="construct-sharp"></ion-icon></span>
                                                        <span class="xl:flex hidden">TOOLS</span>
                                                            </a>
                                                            <a href={{route("dashboard", ["category" => 'jewelry'])}} class="cursor-pointer flex items-center justify-center w-full text-sm font-bold space-x-1 {{request()->query('category') === 'jewelry' ? 'text-[#F68A21]' : 'text-slate-900'}} hover:text-[#F68A21] p-2 transition-colors duration-100 ease-in-out">
                                                                <span class="flex items-center justify-center"><ion-icon name="sparkles-sharp"></ion-icon></span>
                                                                <span class="xl:flex hidden">JEWELRY</span>
                                                                    </a>
    </div>

    <div class="pt-5 flex-grow w-full">
        @if ($products->isEmpty())
        <div class="w-full h-full flex-col items-center justify-center space-y-4 flex">
            <span class="text-[#F68A21] text-5xl"><ion-icon name="file-tray-stacked-sharp"></ion-icon></span>
           <span class="text-4xl text-slate-600">NO PRODUCT AVAILABLE</span>
           <a href={{ route('product.create') }} class="bg-[#F68A21] px-2.5 flex items-center rounded-sm py-2.5 text-white space-x-1 hover:bg-[#F68A21]/90 transition-colors duration-100 ease-in">
            <span class="flex items-center justify-center text-lg"><ion-icon name="add-circle-sharp"></ion-icon></span>
            <span class="text-sm">ADD PRODUCT</span>
        </a>
        </div>
        @else
        <div class="w-full grid gap-2 2xl:grid-cols-5 xl:grid-cols-4 sm:grid-cols-2 grid-cols-1 md:grid-cols-3 px-5">


            @foreach ($products as $key => $product )
            @php
            switch ($product->category) {
                case 'foods':
                $category = 'fast-food';
                break;
                case 'clothes':
                $category = 'shirt';
                break;
                case 'beauty':
                $category = 'brush';
                break;
                case 'electronics':
                $category = 'desktop';
                break;
                case 'home':
                $category = 'file-tray-stacked';
                break;
                case 'toys':
                $category = 'basketball';
                break;
                case 'books':
                $category = 'book';
                break;
                case 'tools':
                $category = 'construct';
                break;
                case 'jewelry':
                $category = 'sparkles';
                break;
                default:
                $category = 'none';
                break;
            }
        @endphp

            <div class="h-[410px] shadow px-3 py-2.5 flex items-center flex-col relative justify-center space-y-1 break-words">
                <div class="w-full flex justify-end">
                <small class="text-slate-900 text-[0.65rem] font-semibold">PRODUCT ID: {{$product->id}}</small>
            </div>
                <h1 class=" font-semibold text-xl break-words text-center text-[#F68A21]">{{$product->product_name}}</h1>
                <span class="text-lg p-2 rounded-full w-10 h-10 flex items-center justify-center bg-[#F68A21] text-white absolute -top-4 -left-4"><ion-icon name="{{ $category }}-sharp"></ion-icon></span>
                <h3 class="text-center flex items-center justify-center space-x-1 text-slate-900">
                    <span class="text-xl flex items-center justify-center"><ion-icon name="cash-outline"></ion-icon></span>
                    <span class="font-semibold text-sm">{{$product->price}}</span></h3>
                    <h3 class="text-center flex items-center justify-center space-x-1 text-slate-900">
                        <span class="text-xl flex items-center justify-center"><ion-icon name="cube-outline"></ion-icon></span>
                        <span class="font-semibold text-sm">{{$product->stock_quantity}}</span></h3>
                        <h3 class="text-center flex items-center justify-center space-x-1 text-slate-900">
                            <span class="text-xl flex items-center justify-center"><ion-icon name="settings-outline"></ion-icon></span>
                            <span class="font-semibold text-sm">{{$product->manufacturer}}</span></h3>
                            <div class="pt-2 space-y-1 flex flex-col items-start w-full flex-grow overflow-y-auto">
                            <h6 class="text-center flex items-center justify-center space-x-1 text-slate-900">
                                <span class="text-md flex items-center justify-center"><ion-icon name="document-text-outline"></ion-icon></span>
                                <span class="font-semibold text-sm">Product Description:</span></h6>
                <p class="whitespace-pre-wrap text-sm text-slate-900">{{$product->description}}</p>
        </div>
        <div class="flex flex-col items-start w-full pt-2">
            <h3 class="text-center flex items-center justify-center space-x-1 text-slate-900">
                <span class="text-md flex items-center justify-center"><ion-icon name="time-sharp"></ion-icon></span>
                <span class="font-semibold text-[0.8rem]">{{$product->created_at->format('M j, Y g:i A')}}</span></h3>
                <h3 class="text-center flex items-center justify-center space-x-1 text-slate-900">
                    <span class="text-md flex items-center justify-center"><ion-icon name="refresh-circle-sharp"></ion-icon></span>
                    <span class="font-semibold text-[0.8rem]">{{$product->updated_at->diffForHumans()}}</span></h3>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 items-center w-full gap-2">
            <a onclick="handleDeleteProduct({{$product->id}}, '{{$product->product_name}}')" class="space-x-1 py-2 bg-[#F68A21] text-white rounded-md cursor-pointer hover:ring-[1px] hover:ring-[#F68A21] hover:bg-transparent hover:text-slate-900 flex justify-center items-center font-bold transition-colors duration-100 ease-in-out">
                <span class="flex items-center justify-center text-lg"><ion-icon name="trash-bin-outline"></ion-icon></span>
                <span class="text-[0.9rem]">DELETE</span>
            </a>
            <a href={{route('product.edit', $product->id)}} class="space-x-1 py-2 ring-[#F68A21] text-slate-900 rounded-md cursor-pointer hover:bg-[#F68A21] hover:text-white ring-[1px] flex justify-center items-center font-bold transition-colors duration-100 ease-in-out">
                <span class="flex items-center justify-center text-lg"><ion-icon name="create-outline"></ion-icon></span>
                <span class="text-[0.9rem]">EDIT</span>
            </a>
        </div>
            </div>
            @endforeach

        </div>
        @endif
    </div>


</x-app-layout>
