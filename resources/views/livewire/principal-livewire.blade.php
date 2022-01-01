
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Ajouter vol
        </h2>
    </x-slot>

    <div>
        <div class="max-w-4xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="mt-5 md:mt-0 md:col-span-2">
                <form method="post" action="">
                    @csrf
                    <div class="shadow overflow-hidden sm:rounded-md">
                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="name" class="block font-medium text-sm text-gray-700">Nom vol</label>
                            <input type="text" name="name" id="name" type="text" class="form-input rounded-md shadow-sm mt-1 block w-full"
                                   value="{{ old('name', '') }}" />
                            @error('name')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="px-4 py-5 bg-white sm:p-6">
                            <label for="pays" class="block text-sm font-medium text-gray-700">pays</label>
                            <select wire:model="selectPays" name="pays" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                <option value="">choisir pays</option>
                                @foreach ($pays as $pays)
                                <option value="{{$pays->id}}">{{$pays->id}} - {{$pays->name}}</option>
                            @endforeach
                            </select>
                            @error('pays')
                                <p class="text-sm text-red-600">{{ $message }}</p>
                            @enderror
                        </div>

                        @if (!is_null($selectPays))
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <label for="ville" class="block text-sm font-medium text-gray-700">ville</label>
                                <select wire:model="selectVille" name="ville" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                    <option value="">choisir ville</option>
                                    @foreach ($villes as $ville)
                                    <option value="{{$ville->id}}">{{$ville->id}} - {{$ville->name}}</option>
                                    @endforeach
                                </select>
                                @error('ville')
                                    <p class="text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>
                        @endif

                        @if (!is_null($selectVille))
                        <div class="flex items-center justify-end px-4 py-3 bg-gray-50 text-right sm:px-6">
                            <button class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 focus:outline-none focus:border-gray-900 focus:shadow-outline-gray disabled:opacity-25 transition ease-in-out duration-150">
                                Ajouter
                            </button>
                        </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
    </div>
