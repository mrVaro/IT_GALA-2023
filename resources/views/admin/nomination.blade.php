<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Nominer') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-xl sm:rounded-lg">
                
                <div class="  py-6 px-6">

                        @if ($message = Session::get('success'))
                            <div class="flex justify-center py-4">
                                
                                <div
                                    class="flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                                
                                    <div class="flex items-center justify-center w-12 bg-green-500">
                                        <svg
                                        class="w-6 h-6 text-white fill-current"
                                        viewBox="0 0 40 40"
                                        xmlns="http://www.w3.org/2000/svg"
                                        >
                                        <path
                                            d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"
                                        />
                                        </svg>
                                    </div>
                            
                                    <div class="px-4 py-2 -mx-3">
                                        <div class="mx-3">
                                            <span class="font-bold text-green-500 dark:text-green-400"
                                            >IT-AWARD </span
                                            >
                                            <p class="text-sm text-gray-600 dark:text-gray-200">
                                            {{$message}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        @endif 

                        @if ($message = Session::get('Warning'))
                            <div class="flex justify-center py-4">
                                
                                <div
                                    class="flex w-full max-w-sm overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
                                
                                    <div class="flex items-center justify-center w-12 bg-amber-500">
                                        <svg
                                        class="w-6 h-6 text-white fill-current"
                                        viewBox="0 0 40 40"
                                        xmlns="http://www.w3.org/2000/svg"
                                        >
                                        <path
                                            d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"
                                        />
                                        </svg>
                                    </div>
                            
                                    <div class="px-4 py-2 -mx-3">
                                        <div class="mx-3">
                                            <span class="font-bold text-amber-500 dark:text-amber-400"
                                            >IT-AWARD </span
                                            >
                                            <p class="text-sm text-gray-600 dark:text-gray-200">
                                            {{$message}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        @endif
{{-- md:h-32 --}}
                        <div class=" py-4  my-4 ">

                            <form  style="" action="{{ route('admin.award.nominer',null,false) }}" class="" method="post" enctype="multipart/form-data">
                                @csrf

                                <div class="grid md:grid-cols-6 gap-6">
                                    
                                    <div class="col-span-2 pt-0 mb-3">
                                        <label class="font-bold "> Matricule</label>
                                        <input type="text" placeholder="Matricule"   name='matricule' value="{{old("matricule")}}"
                                        class="relative w-full px-3 py-2 text-sm text-gray-600 placeholder-gray-400 bg-white border-gray-400 rounded outline-none focus:border-coolGray-400 focus:outline-none focus:ring-coolGray-100" />
                                        @error('matricule')
                                                <div class="text-sm font-thin text-center text-red-600">{{ $errors->first('matricule') }}  </div>
                                        @enderror
                                    </div>


                                    <div class=" col-span-2 pt-0 mb-3">
                                        <label class="font-bold "> Catégorie </label>
                                        <select  name='categorie' value="{{old('categorie')}}"
                                            class="relative w-full px-4 py-2 text-sm text-gray-600 placeholder-gray-400 bg-white border-gray-400 rounded outline-none form-select focus:border-coolGray-400 focus:outline-none focus:ring-coolGray-100">
                                
                                            <option value=""></option>
                                            @foreach ($categories as $categorie )
                                                <option value="{{$categorie->id}}">{{$categorie->libelle}}</option>
                                            @endforeach
                                                
                                        </select>
                                        
                                        @error('categorie')
                                                <div class="text-sm font-thin text-center text-red-600">{{ $errors->first('categorie') }}  </div>
                                        @enderror
                                    </div>

                                    <div class=" col-span-2 pt-0  mb-3">
                                        <label class="font-bold "> Photo du nominé </label>
                                        <input type="file" class="text-xs md:text-xl" name="photo" />
                                        @error('import_photo')
                                            <div class="font-semibold text-center text-red-600">{{ $errors->first('import_photo') }}  </div>
                                        @enderror

                                    </div>

                                </div>
                                
                               <div class="flex justify-center">
                                <button class="px-4 py-2 mt-5 font-bold  bg-gray-600 rounded-md">  Enregistrer </button>
                               </div>
                            </form>
                                             
                    </div>

                </div>
                
            </div>
        </div>
    </div>

   
</x-app-layout>
