@if($admin)

    <footer class="bg-yellow-300">
        <div class="grid grid-cols-2 md:grid-cols-3 place-items-center">
          <ul class="flex flex-col p-10">
            <li class="mt-5 text-2xl border-b-2 border-gray-700  text-gray-700 font-body"><a href="/admin/profile">Profile</a></li>
            <li class="mt-5 text-2xl  text-gray-700 font-body"><a href="/admin/users">Users</a></li>
            <li class="mt-5 text-2xl  text-gray-700 font-body"><a href="/admin/movies">Movies</a></li>
            <li class="mt-5 text-2xl  text-gray-700 font-body"><a href="/admin/cinemas">Cinemas</a></li>
          </ul>  
          <ul class="flex flex-col p-10">
            <li class="mt-5 text-2xl border-b-2 border-gray-700 text-gray-700 font-body"><a href="#">About us</a></li>
            <li class="mt-5 text-2xl  text-gray-700 font-body"><a href="#">Why CBS</a></li>
            <li class="mt-5 text-2xl  text-gray-700 font-body"><a href="#">Our parteners</a></li>
            <li class="mt-5 text-2xl  text-gray-700 font-body"><a href="#">Jobs</a></li>
          </ul> 
          <ul class="flex flex-col p-10">
            <li class="mt-5 text-2xl border-b-2 border-gray-700 text-gray-700 font-body"><a href="#">Thoughts</a></li>
            <li class="mt-5 text-2xl  text-gray-700 font-body"><a href="#">Vision</a></li>
            <li class="mt-5 text-2xl  text-gray-700 font-body"><a href="/admin/movies">Our productions</a></li>
            <li class="mt-5 text-2xl  text-gray-700 font-body"><a href="/admin/register">Join us</a></li>
          </ul> 
        </div>
        <p class="text-center text-lg text-gray-700 font-body">&copy; All rights reserved 2018 - {{date('Y')}}</p>
        
    </footer>
    
@else

<footer class="bg-yellow-300">
  <div class="grid grid-cols-2 md:grid-cols-3 place-items-center">
    <ul class="flex flex-col p-10">
      <li class="mt-5 text-2xl border-b-2 border-gray-700  text-gray-700 font-body"><a href="/admin/profile">Profile</a></li>
      <li class="mt-5 text-2xl  text-gray-700 font-body"><a href="/users">Users</a></li>
      <li class="mt-5 text-2xl  text-gray-700 font-body"><a href="/movies">Movies</a></li>
      <li class="mt-5 text-2xl  text-gray-700 font-body"><a href="/cinemas">Cinemas</a></li>
    </ul>  
    <ul class="flex flex-col p-10">
      <li class="mt-5 text-2xl border-b-2 border-gray-700 text-gray-700 font-body"><a href="#">About us</a></li>
      <li class="mt-5 text-2xl  text-gray-700 font-body"><a href="#">Why CBS</a></li>
      <li class="mt-5 text-2xl  text-gray-700 font-body"><a href="#">Our parteners</a></li>
      <li class="mt-5 text-2xl  text-gray-700 font-body"><a href="#">Jobs</a></li>
    </ul> 
    <ul class="flex flex-col p-10">
      <li class="mt-5 text-2xl border-b-2 border-gray-700 text-gray-700 font-body"><a href="#">Thoughts</a></li>
      <li class="mt-5 text-2xl  text-gray-700 font-body"><a href="#">Vision</a></li>
      <li class="mt-5 text-2xl  text-gray-700 font-body"><a href="/movies">Our productions</a></li>
      <li class="mt-5 text-2xl  text-gray-700 font-body"><a href="/register">Join us</a></li>
    </ul> 
  </div>
  <p class="text-center text-lg text-gray-700 font-body">&copy; All rights reserved 2018 - {{date('Y')}}</p>

@endif