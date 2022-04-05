<div class="py-1">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="w-full flex items-center justify-center my-4">
            <h2 class="text-xl font-bold">Create new listing</h2>
        </div>
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <div class="bg-white p-6 rounded shadow mt-4">
                    <form wire:submit.prevent="create" method="POST">
                        @csrf
                        <div class="flex flex-col">
                            <div class="sm:w-3/4 grid grid-cols-1 gap-2">
                                <label class="block mb-0">
                                    <span class="text-gray-700">Title</span>
                                </label>
                                    <input
                                        wire:model="title"
                                        placeholder="e.g. Wooden stole..."
                                        class="form-input bg-gray-200 h-12 focus:outline-none focus:bg-gray-100 text-lg px-4 rounded-lg border-gray-300 focus:border-indigo-400 focus:shadow-none mt-1 block w-full"
                                        type="text">
                                @error('title') <span class="text-red-500">{{ $message }}</span> @enderror

                                <label class="block mb-0">
                                    <span class="text-gray-700">Price</span>
                                </label>
                                    <input
                                        wire:model="price"
                                        placeholder="50.00"
                                        class="form-input bg-gray-200 h-12 focus:outline-none focus:bg-gray-100 text-lg px-4 rounded-lg border-gray-300 focus:border-indigo-400 focus:shadow-none mt-1 block w-full"
                                        type="number">
                                @error('price') <span class="text-red-500">{{ $message }}</span> @enderror

                                <label class="block mb-0">
                                    <span class="text-gray-700">Email</span>
                                </label>
                                    <input
                                        wire:model="email"
                                        placeholder="e.g. john@example.com"
                                        class="form-input bg-gray-200 h-12 focus:outline-none focus:bg-gray-100 text-lg px-4 rounded-lg border-gray-300 focus:border-indigo-400 focus:shadow-none mt-1 block w-full"
                                        type="email">
                                @error('email') <span class="text-red-500">{{ $message }}</span> @enderror

                                <label class="block mb-0">
                                    <span class="text-gray-700">Mobile</span>
                                </label>
                                    <input
                                        wire:model="mobile"
                                        placeholder="e.g. +234 567 8910"
                                        class="form-input bg-gray-200 h-12 focus:outline-none focus:bg-gray-100 text-lg px-4 rounded-lg border-gray-300 focus:border-indigo-400 focus:shadow-none mt-1 block w-full"
                                        type="text">
                                @error('mobile') <span class="text-red-500">{{ $message }}</span> @enderror

                                <label class="block mb-0">
                                    <span class="text-gray-700">Description</span>
                                </label>
                                <textarea
                                    wire:model="description"
                                    rows="4"
                                    cols="50"
                                    class="focus:shadow-none bg-gray-200 rounded-lg p-4 text-lg">
                                </textarea>
                                @error('description') <span class="text-red-500">{{ $message }}</span> @enderror
                                
                                <label class="block">
                                    <span class="text-gray-700">Currency</span>
                                </label>
                                <select 
                                    wire:model="currency"
                                    class="block appearance-none w-full bg-gray-200 border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                    <option>-Select-</option>
                                    <option value="KES">KES</option>
                                    <option value="USD">USD</option>
                                </select>
                                @error('currency') <span class="text-red-500">{{ $message }}</span> @enderror

                                <label class="block">
                                    <span class="text-gray-700">Category</span>
                                </label>
                                <select 
                                    wire:model="category_id"
                                    class="block appearance-none w-full bg-gray-200 border border-gray-400 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline">
                                    <option>-Select-</option>
                                    @foreach ($categories as $category)
                                        <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                </select>
                                @error('category_id') <span class="text-red-500">{{ $message }}</span> @enderror
                            <div class="mt-2">
                                <button class="p-4 text-lg mt-2 mr-2 px-3 py-1 bg-indigo-500 hover:bg-indigo-600 text-white font-medium rounded" type="submit">
                                    {{ __('Create') }}
                                </button>
                                @if($success_response) <span class="text-green-700 text-base"><p>Listing successfully added</p></span> @endif
                            </div>
                    </form>
                    </div>
            </div>
        </div>
    </div>
</div>