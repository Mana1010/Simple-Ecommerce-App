<x-app-layout>
    <div class="flex flex-col py-3 px-5 h-full relative">
        <header class=" py-5">
            <div class="flex items-center space-x-1">
                <span class="text-[#F68A21] text-5xl"><ion-icon name="create-sharp"></ion-icon></span>
            <h2 class="font-extrabold text-slate-900 text-3xl">
                EDIT PRODUCT
            </h2>
        </div>
    </header>
        <form method="POST" action="{{route('product.edit', $product_data->id)}}" class="w-full shadow pt-7 px-3 flex flex-col space-y-5 py-6">
            @csrf
            @method("PATCH")
            <div class="grid grid-cols-1 md:grid-cols-3 sm:grid-cols-2 gap-3 w-full">
                <div class="flex flex-col space-y-1 sm:col-span-1 md:col-span-2">
                    <label for="product_name" class="text-sm font-bold text-slate-900">Product Name</label>
                    <input required type="text" id="product_name" name="product_name" placeholder="@e.g Hextech" value={{old('product_name', $product_data->product_name)}} class="p-2 rounded-sm border border-black/10 outline-2 focus:border-[#F68A21] focus:ring-0"/>
                </div>
                <div class="flex flex-col space-y-1 col-span-1">
                    @php
                        $categories = ['foods', 'electronics', 'beauty', 'clothes', 'home', 'toys', 'books', 'tools', 'jewelry'];
                    @endphp
                    <label for="category" class="text-sm font-bold text-slate-900">Category</label>
                    <select id="category" name="category" class="p-2 rounded-sm border border-black/10 focus:border-[#F68A21] focus:ring-0">
                        @foreach ($categories as $category)
                        <option value={{$category}} {{$category === $product_data->category ? 'selected' : ''}}>{{ucfirst($category)}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex flex-col space-y-1">
                    <label for="price" class="text-sm font-bold text-slate-900">Price</label>
                    <input required step="any" type="number" id="price" name="price" placeholder="@e.g $15.9" value={{$product_data->price}} class="p-2 rounded-sm border border-black/10 focus:border-[#F68A21] focus:ring-0"/>
                </div>
                <div class="flex flex-col space-y-1">
                    <label for="stock_quantity" class="text-sm font-bold text-slate-900">Stock Quantity</label>
                    <input required type="number" id="stock_quantity" name="stock_quantity" value={{old('stock_quantity', $product_data->stock_quantity)}} class="p-2 rounded-sm border border-black/10 focus:border-[#F68A21] focus:ring-0"/>
                </div>
                <div class="flex flex-col space-y-1">
                    <label for="manufacturer" class="text-sm font-bold text-slate-900">Manufacturer</label>
                    <input required type="text" id="manufacturer" name="manufacturer" class="p-2 rounded-sm border border-black/10 focus:border-[#F68A21] focus:ring-0" value={{old('manufacturer', $product_data->manufacturer)}}/>
                </div>
                <div class="flex flex-col space-y-1 col-span-full">
                    <label for="description" class="text-sm font-bold text-slate-900">Description</label>
                    <textarea required id="description" name="description" class="p-2 rounded-sm border border-black/10 h-28 focus:border-[#F68A21] focus:ring-0 resize-none" placeholder="Your product description here...">{{old('description', $product_data->description)}}</textarea>
                </div>
            </div>
            <div class="flex justify-between md:flex-row flex-col-reverse space-y-2 md:space-y-0">
                <a href="{{route('dashboard', ['category' => 'all'])}}" class="md:w-[20%] w-full py-2 rounded-sm bg-zinc-700 text-white font-bold text-center mt-2 md:mt-0">GO BACK</a>
            <button type="submit" class="md:w-[20%] w-full py-2 rounded-sm bg-[#F68A21] text-white font-bold ">EDIT PRODUCT</button>
        </div>
        </form>
    </div>
    </x-app-layout>
