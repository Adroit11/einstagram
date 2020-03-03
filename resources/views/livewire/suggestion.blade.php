<div class="d-flex flex-column">
    {{-- Stop trying to control. --}}
    <div class="d-flex flex-row align-items-center">
        <div class="p-2">
            <img class="rounded-circle profile-avatar" src="https://instagram.flos10-1.fna.fbcdn.net/v/t51.2885-19/s150x150/67376655_2919803311370030_4184278180531535872_n.jpg?_nc_ht=instagram.flos10-1.fna.fbcdn.net&amp;_nc_ohc=-Yt35ycQqmIAX-O8AaL&amp;oh=cf8c97b70a5639ad1f97d85f93a70b43&amp;oe=5E8F7E82">
        </div>
        <div class="px-1">
            {{ $user->name }}
        </div>
    </div>
    <div class="px-3 bg-white mb-4 border rounded">
        <div class="row py-3">
            <div class="col-9">
                Stories
            </div>
            <div class="col-3">
                Watch All
            </div>
        </div>
        <div class="d-flex flex-column">
            @foreach($stories as $story)
                <div class="row mb-2">
                    <div class="col-2">
                        <img class="border border-danger suggestion-avatar rounded-circle" src="{{$story->user->avatar}}" alt="{{$story->user->name}} avatar"/>
                    </div>
                    <div class="col-7">
                        <span class="font-weight-bold">{{ $story->user->name }}</span><br />
                        <small class="">{{ $story->created_at->diffForHumans() }}</small>
                    </div>
                    <div class="col-3">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="px-3 bg-white border rounded">
        <div class="row py-3">
            <div class="col-9">
                Suggestions for you
            </div>
            <div class="col-3">
                See All
            </div>
        </div>
        <div class="d-flex flex-column">
            @foreach($suggestions as $suggestion)
                <div class="row mb-2">
                    <div class="col-2">
                        <img class="border border-danger suggestion-avatar rounded-circle" src="{{$suggestion->avatar}}" alt="{{$suggestion->name}} avatar"/>
                    </div>
                    <div class="col-7">
                        <span class="font-weight-bold">{{ $suggestion->name }}</span><br />
                        <small class="">Suggested for you</small>
                    </div>
                    <div class="col-3">
                        <button type="button" class="btn btn-outline-primary">Follow</button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
