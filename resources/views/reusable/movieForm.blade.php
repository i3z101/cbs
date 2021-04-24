@if($update)
   <form action="/admin/movies/{{$mId}}" method="POST" class="flex flex-col w-1/2 m-auto mt-10">
        @csrf
        @method('PATCH')
        <label class="movie-input-label">Movie name</label>
        <input type="text" name="mName" value="{{$name}}" class="user-input-style">
        <label class="movie-input-label">Movie description</label>
        <textarea type="email" name="mDesc" class="user-input-style resize-none">{{$description}}</textarea>
        <label class="movie-input-label">Movie creator</label>
        <input type="text" name="mCreator" value="{{$creator}}" class="user-input-style">
        <label class="movie-input-label">Movie guide</label>
        <input type="text" name="mGuide" value="{{$guide}}" class="user-input-style">
        <label class="movie-input-label">Movie Genres</label>
        <select name="mGenre[]" multiple='multiple' class="mb-5 user-input-style over">
                <option class="mb-4 p-4" value="Action"  @for ($i=0; $i < count($movieGenres); $i++){
                    @if ($movieGenres[$i] == "Action" )
                        selected
                    @endif
                }@endfor>
                    Action
                </option>
                <option class="mb-4 p-4" value="Thriller" @for ($i=0; $i < count($movieGenres); $i++){
                    @if ($movieGenres[$i] == "Thriller" )
                        selected
                    @endif
                }@endfor>
                    Thriller
                </option>
                <option class="mb-4 p-4" value="Comedy" @for ($i=0; $i < count($movieGenres); $i++){
                    @if ($movieGenres[$i] == "Comedy" )
                        selected
                    @endif
                }@endfor>
                    Comedy
                </option>
                <option class="mb-4 p-4" value="Science fiction" @for ($i=0; $i < count($movieGenres); $i++){
                    @if ($movieGenres[$i] == "Science fiction" )
                        selected
                    @endif
                }@endfor>
                    Science fiction
                </option>
                <option class="mb-4 p-4" value="Mystery" @for ($i=0; $i < count($movieGenres); $i++){
                    @if ($movieGenres[$i] == "Mystery" )
                        selected
                    @endif
                }@endfor>
                    Mystery
                </option>
                <option class="mb-4 p-4" value="Horror" @for ($i=0; $i < count($movieGenres); $i++){
                    @if ($movieGenres[$i] == "Horror" )
                        selected
                    @endif
                }@endfor>
                    Horror
                </option> 
        </select>

        <label class="movie-input-label">Movie Times</label>
        <select name="mTime[]" multiple='multiple' class="mb-5 user-input-style over">
            <option class="mb-4 p-4" value="11:00"  @for ($i=0; $i < count($movieTimes); $i++){
                @if ($movieTimes[$i] == "11:00" )
                    selected
                @endif
            }@endfor>
                11:00
            </option>
            <option class="mb-4 p-4" value="13:00" @for ($i=0; $i < count($movieTimes); $i++){
                @if ($movieTimes[$i] == "13:00" )
                    selected
                @endif
            }@endfor>
                13:00
            </option>
            <option class="mb-4 p-4" value="15:00" @for ($i=0; $i < count($movieTimes); $i++){
                @if ($movieTimes[$i] == "15:00" )
                    selected
                @endif
            }@endfor>
                15:00
            </option>
            <option class="mb-4 p-4" value="17:00" @for ($i=0; $i < count($movieTimes); $i++){
                @if ($movieTimes[$i] == "17:00" )
                    selected
                @endif
            }@endfor>
                17:00
            </option>
            <option class="mb-4 p-4" value="19:00" @for ($i=0; $i < count($movieTimes); $i++){
                @if ($movieTimes[$i] == "19:00" )
                    selected
                @endif
            }@endfor>
                19:00
            </option> 
            <option class="mb-4 p-4" value="23:00" @for ($i=0; $i < count($movieTimes); $i++){
                @if ($movieTimes[$i] == "23:00" )
                    selected
                @endif
            }@endfor>
                23:00
            </option>
            <option class="mb-4 p-4" value="01:00" @for ($i=0; $i < count($movieTimes); $i++){
                @if ($movieTimes[$i] == "01:00" )
                    selected
                @endif
            }@endfor>
                01:00
            </option>
    </select>
    <select name="cinema" class="mb-5 user-input-style over">
        @foreach ($cinemas as $cinema)
            <option value="{{$cinema->cId}}" {{$cinemaId == $cinema->cId ? "selected" : ""}}>{{$cinema->cName}}</option>
        @endforeach
    </select>
    </form> 

@else

<form action="/admin/movies" method="POST" class="flex flex-col w-1/2 m-auto mt-10" enctype="multipart/form-data">
    @csrf
    <label class="movie-input-label">Movie name</label>
    <input type="text" name="mName" placeholder="Spider man" class="user-input-style placeholder-gray-400">
    <label class="movie-input-label">Movie description</label>
    <textarea type="email" name="mDesc" placeholder="Better Parker has been bit.." class="user-input-style resize-none placeholder-gray-400"></textarea>
    <label class="movie-input-label">Movie creator</label>
    <input type="text" name="mCreator" placeholder="Marvel" class="user-input-style placeholder-gray-400">
    <label class="movie-input-label">Movie guide</label>
    <input type="text" name="mGuide" placeholder="PG" class="user-input-style">
    <label class="movie-input-label">Movie Rating</label>
    <input type="text" name="mRating" placeholder="5" class="user-input-style">
    <label class="movie-input-label">Movie poster</label>
    <div class="user-input-style">
        <label class="flex flex-col tracking-wide cursor-pointer p-3">
            <span class="text-gray-200 text-lg uppercase">
                select poster
            </span>
            <span class="text-gray-200 text-sm uppercase">
                max:5MB
            </span>
            <input type="file" class="hidden" name="mPoster" accept=".png, .jpg, .jpeg"/>
        </label>
    </div>
    <label class="movie-input-label">Movie Genres</label>
    <select name="mGenre[]" multiple='multiple' class="mb-5 user-input-style over">
            <option class="mb-4 p-4" value="Action">
                Action
            </option>
            <option class="mb-4 p-4" value="Thriller">
                Thriller
            </option>
            <option class="mb-4 p-4" value="Comedy">
                Comedy
            </option>
            <option class="mb-4 p-4" value="Science fiction">
                Science fiction
            </option>
            <option class="mb-4 p-4" value="Mystery">
                Mystery
            </option>
            <option class="mb-4 p-4" value="Horror">
                Horror
            </option> 
    </select>

    <label class="movie-input-label">Movie Times</label>
    <select name="mTime[]" multiple='multiple' class="mb-5 user-input-style over">
        <option class="mb-4 p-4" value="11:00">
            11:00
        </option>
        <option class="mb-4 p-4" value="13:00">
            13:00
        </option>
        <option class="mb-4 p-4" value="15:00">
            15:00
        </option>
        <option class="mb-4 p-4" value="17:00">
            17:00
        </option>
        <option class="mb-4 p-4" value="19:00">
            19:00
        </option> 
        <option class="mb-4 p-4" value="23:00">
            23:00
        </option>
        <option class="mb-4 p-4" value="01:00">
            01:00
        </option>
</select>

<select name="cinema" class="mb-5 user-input-style over">
    <option selected disabled>Select cinema</option>
    @foreach ($cinemas as $cinema)
        <option value="{{$cinema->cId}}">{{$cinema->cName}}</option>
    @endforeach
</select>
    @include('reusable.formButton', ['btnText'=>'Create'])
</form> 

@endif