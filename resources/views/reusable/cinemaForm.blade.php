@if($update)
<form action="/admin/cinemas/{{$cinema->cId}}" method="POST" class="flex flex-col w-1/2 m-auto mt-10">
    @csrf
    @method('PATCH')
    <label class="movie-input-label">Cinema name</label>
    <input type="text" name="cName" value="{{$cinema->cName}}" class="user-input-style">
    <label class="movie-input-label">Cinema address</label>
    <input type="text" name="cAddress" value="{{$cinema->cAddress}}" class="user-input-style resize-none">
    <label class="movie-input-label">Cinema operation</label>
    <input type="text" name="cOperation" value="{{$cinema->cOperation}}" class="user-input-style">
    <label class="movie-input-label">Cinema branches</label>
    <input type="text" name="cBranches" value="{{implode(" ", json_decode($cinema->cBranches))}}" class="user-input-style">
    <label class="movie-input-label">Cinema Rating</label>
    <input type="text" name="cRating" value="{{$cinema->cRating}}" class="user-input-style">
    @include('reusable.formButton', ['btnText'=>'Update'])
</form>
@else

<form action="/admin/cinemas" method="POST" class="flex flex-col w-1/2 m-auto mt-10">
    @csrf
    <label class="movie-input-label">Cinema name</label>
    <input type="text" name="cName" placeholder="VOX" class="user-input-style placeholder-gray-400">
    <label class="movie-input-label">Cinema address</label>
    <input type="text" name="cAddress" placeholder="UAE" class="user-input-style placeholder-gray-400">
    <label class="movie-input-label">Cinema operation</label>
    <input type="text" name="cOperation" placeholder="11:00AM-11:00PM" class="user-input-style placeholder-gray-400">
    <label class="movie-input-label">Cinema branches</label>
    <input type="text" name="cBranches" placeholder="Dubai" class="user-input-style">
    <label class="movie-input-label">Cinema Rating</label>
    <input type="text" name="cRating" placeholder="5" class="user-input-style">
    @include('reusable.formButton', ['btnText'=>'Add'])
</form>
@endif