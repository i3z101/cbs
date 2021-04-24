<ul class="list-none text-gray-100 w-3/5 mt-5 mb-5 m-auto text-center text-2xl font-body">
    @foreach ($errors->all() as $error)
        <li class="bg-red-500 mb-5 rounded-lg p-3">{{$error}}</li>
    @endforeach
</ul>