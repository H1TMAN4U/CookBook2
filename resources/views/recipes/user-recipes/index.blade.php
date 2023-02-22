{{-- <x-app-layout>
	<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8 pb-8 break-all " style="width: 100%;">
        <table class="w-full rounded rounded-lg text-sm text-left text-gray-500 dark:text-gray-400">
			<thead class="bg-white border-b border-gray-100 rounded-lg text-xs text-gray-900 uppercase dark:bg-gray-800 dark:border-gray-700">
				<tr class="bg-white rounded-lg dark:bg-gray-800 border border-gray-700 ">
					<th scope="col" class="px-6 py-4 rounded-t-lg font-medium text-gray-900 whitespace-nowrap dark:text-gray-400 dark:hover:text-white">
						<a href="{{ route('recipes.create') }}" class="btn btn-success btn-sm float-end">Add</a>
					</th>
					<th scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400">Recipe name</th>
					<th scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400">Edit/View/Delete</th>
				</tr>
			</thead>
            @if(count($recipes) > 0)
		    @foreach ($recipes as $value)
			<div class="flex flex-col my-0.5" style="">
                <tr class="bg-white dark:bg-gray-800 dark:hover:bg-gray-700">
                    <td>
                        <a href="show-full/{{$value->id}}" class="flex flex-col items-center bg-white border border-gray-700 shadow md:flex-row md:max-w-full dark:bg-gray-800 dark:hover:bg-gray-700 ">
                            <img class="object-cover w-full h-auto md:h-auto md:w-48 " style="min-height: 182px;"  src="{{ asset('images/' . $value->img) }}" width="128" alt="">
                            <div>
                                <div class="flex flex-col justify-between p-4 leading-normal ">
                                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-300">{{$value['name']}}</h5>
                                    <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">{{$value['descriptions']}}</p>
                                    <p class="">{{ $value->getCategory->name }}</p>
                                </div>
                            </div>
                    <td class="px-2 ">{{ $value->name }}</td>
                    <form method="post" class="flex justify-center align-center" action="{{ route('recipes.destroy', $value->id) }}">
                            @csrf
                            @method('DELETE')
                            <a class="px-1 dark:border-gray-700 dark:hover:text-white" href="{{ route('recipes.show', $value->id) }}">View</a>
                            <a class="px-1 dark:border-gray-700 dark:hover:text-white"  href="{{ route('recipes.edit', $value->id) }}">Edit</a>
                            <input class="px-1 dark:border-gray-700 dark:hover:text-white"  type="submit" class="btn btn-danger btn-sm" value="Delete" style="cursor: pointer"/>
                        </form>
                        </a>
                    </td>
                </tr>
			</div>
			@endforeach
			@else
                <tr class="bg-white dark:border-b border-gray-700 dark:bg-gray-800">
                    <td colspan="8" class="text-center">No Data Found</td>
                </tr>
			@endif
		</table>
		<div class="">
			{!! $recipes->links() !!}
		</div>
</x-app-layout> --}}
<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-8 pb-8 break-all " style="width: 100%;">
	<div class="w-full overflow-x-auto relative shadow-md sm:rounded-lg break-all my-8">
		<table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
			<thead class="text-xs text-gray-900 uppercase dark:text-gray-400">
				<tr class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
					<th scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400 dark:hover:text-white">
						<a href="{{ route('recipes.create') }}" class="btn btn-success btn-sm float-end">Add</a>
					</th>
					<th scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400">Recipe name</th>
					<th scope="col" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-gray-400">Edit/View/Delete</th>
				</tr>
			</thead>
			@if(count($recipes) > 0)
			@foreach($recipes as $value)
				<tr class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 dark:hover:bg-gray-7x00">
					<td style="width: 180px;"><img src="{{ asset('images/' . $value->img) }}" width="auto" style="max-height: 150px; height: 100px;"></td>
					<td class="px-2 ">{{ $value->name }}</td>
					<td style="width: 20px">
						<form method="post" class="flex justify-center align-center" action="{{ route('recipes.destroy', $value->id) }}">
							@csrf
							@method('DELETE')
							<a class="px-1 dark:border-gray-700 dark:hover:text-white" href="{{ route('recipes.show', $value->id) }}">View</a>
							<a class="px-1 dark:border-gray-700 dark:hover:text-white"  href="{{ route('recipes.edit', $value->id) }}">Edit</a>
							<input class="px-1 dark:border-gray-700 dark:hover:text-white"  type="submit" class="btn btn-danger btn-sm" value="Delete" style="cursor: pointer"/>
						</form>
					</td>
				</tr>
			@endforeach
			@else
                <tr class="bg-white dark:border-b border-gray-700 dark:bg-gray-800">
                    <td colspan="8" class="text-center">No Data Found</td>
                </tr>
			@endif
		</table>
		<div class="">
			{!! $recipes->links() !!}
		</div>
	</div>
</div>
</x-app-layout>

