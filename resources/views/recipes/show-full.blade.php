<x-app-layout>
    {{-- <div class="max-w-7xl mx-auto px-4 py-8 sm:px-6 lg:px-8  justify-center flex">
        <div class="max-w-sm w-full lg:max-w-full lg:flex" >
            @foreach ($recipe as $value)
            <div class="h-96 lg:h-auto lg:w-96 flex-none bg-cover rounded-t lg:rounded-t-none
            lg:rounded-l text-center overflow-hidden" style="background-image: url('{{ asset('images/' . $value->img) }}');"></div>
                <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b
                lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal" style="width:100%">
                    <div class="mb-8 ">
                        <h1 class="text-gray-900 font-bold text-xl mb-2">{{$value->name}}</h1>
                        <div class="break-all">
                            <p class="text-gray-700 text-base py-2">{{$value->description}}</p>
                            <p class="text-gray-700 text-base py-2">{{$value->instructions}}</p>
                        </div>
                    </div>
                    <div>
                        <b>Ingredients</b>
                        @foreach($RecipeData->ingredient as $value)
                        <div class="flex flex-col py-1 ">
                            <div class="rounded-lg border-4 border-gray-500/50">
                                <p class="px-1">{{ $value->name }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="flex justify-between">
                        <div class="flex items-center">
                            <div>
                                <b class="">Category: {{ $RecipeData->getCategory->name }}</b>
                            </div>
                        </div>
                        <p class="text-gray-600">{{$value->created_at}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div> --}}
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8 pb-8 break-all" style="width: 100%; height:100vh;">
        <div class="grid grid-cols-2 flex w-full rounded-t-lg dark:bg-gray-800" style="height:55vh">
            <div class="m-8">
                @foreach ($recipes as $value)
                    <img class="flex justify-center	w-full rounded-lg" src="{{ asset('images/' . $value->img) }}" alt=""
                    style="height: 500px;">
                @endforeach
            </div>
            <div class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8 m-8 pr-4 w-full break-normal">
                <div>
                    @foreach ($recipes as $value)
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">{{$value->name}}</h3>
                    <p class="my-4 font-light">{{$value->descriptions}}</p>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="flex flex-col p-8 text-left rounded-b-lg md:rounded-br-lg dark:bg-gray-800 " style="width: 100%; height: 40vh;">
            <div class="max-w-2xl text-gray-500 dark:text-gray-400">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Efficient Collaborating</h3>
                <p class="my-4 font-light">You have many examples that can be used to create a fast prototype for your team."</p>
            </div>
            <div class="flex space-x-3">
                @foreach($recipes as $value)
                    <img class="rounded-full w-9 h-9" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/joseph-mcfall.png" alt="profile picture">
                    <div class="space-y-0.5 font-medium dark:text-white text-left">
                    {{-- <div>{{$value->ingredients[0]}}</div> --}}
                @endforeach
                <div class="text-sm font-light text-gray-500 dark:text-gray-400">CTO at Google</div>
                </div>
            </div>
        </div>
    </main>
</x-app-layout>

