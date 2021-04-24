@if($admin)

<form action="/admin/users/{{$id}}" method="POST" class="flex flex-col w-1/2 m-auto mt-10">
    @csrf
    @method('PATCH')
    <input type="text" name="username" value="{{$username}}" class="user-input-style">
    <input type="email" name="email" value="{{$email}}" class="user-input-style">
    <input type="text" name="userPhone" value="{{$userPhone}}" class="user-input-style">
    <div>
       <input type="radio" id="admin" name="userType" value="0" class="w-10">
       <label for="admin" class="text-yellow-300 text-xl font-body  mr-6">Admin</label>
    </div>
    <div>
       <input type="radio" id="regular" name="userType" value="1" checked class="w-10">
       <label for="regular" class="text-yellow-300 text-xl font-body mr-5">Regular</label>
    </div>
   
   @include('reusable.formButton', ['btnText'=>'Update'])
</form>

@endif