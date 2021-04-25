<dialog class="border border-yellow-300 bg-transparent rounded-md mt-10 w-72 hidden ml-12 md:ml-24 md:w-96 md:absolute" id="modal">
    <form action="/complete" method="POST" class="flex flex-col w-full justify-center items-center">
        @csrf
        <input type="text" name="name" required placeholder="Your name" class="border-b border-gray-200 bg-transparent w-4/5 placeholder-gray-500 text-gray-200 focus:outline-none outline-none mb-3 p-4 text-xl font-body">
        <input type="text" name="phone" required placeholder="Your phone" class="border-b border-gray-200 bg-transparent w-4/5 placeholder-gray-500 text-gray-200 focus:outline-none outline-none mt-3 p-4 font-body text-xl">
        <input type="email" name="email" required placeholder="Your email" class="border-b border-gray-200 bg-transparent w-4/5 placeholder-gray-500 text-gray-200 focus:outline-none outline-none mt-3 p-4 font-body text-xl">
        <input type="text" name="mName" required readonly value="{{$movieName}}" class="border-b border-gray-200 bg-transparent w-4/5 placeholder-gray-500 text-gray-200 focus:outline-none outline-none mt-3 p-4 font-body text-xl">
        <input type="text" name="cName" required readonly value="{{$cinemaName}}" class="border-b border-gray-200 bg-transparent w-4/5 placeholder-gray-500 text-gray-200 focus:outline-none outline-none mt-3 p-4 font-body text-xl">
        <input type="text" name="amount" required readonly  class="border-b border-gray-200 bg-transparent w-4/5 placeholder-gray-500 text-gray-200 focus:outline-none outline-none mt-3 p-4 font-body text-xl">
        <div class="flex flex-row justify-between items-center mt-5">
            <button type="submit" class="bg-green-600 text-xl font-body rounded-md p-2 mr-10 w-24 text-center text-gray-200" id="complete-btn">Complete</a>
            <button type="button" class="bg-red-600 text-xl font-body rounded-md p-2 w-24 text-center text-gray-200" id="cancel-btn">Cancel</button>
        </div>
    </form>
    @if($errors->any())
        @include('reusable.formErrors', ['errors'=>$errors]) 
    @endif
</dialog>