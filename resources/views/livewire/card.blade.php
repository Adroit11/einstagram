<div class="card promoting-card mb-5">
    <!-- Card content -->
    <div class="card-body d-flex flex-row align-items-center">
        <!-- Avatar -->
        <img src="{{ $avatar }}" class="rounded-circle mr-3" height="50px" width="50px" alt="avatar">
        <!-- Content -->
        <div>

        <!-- Title -->
        <h5 class="card-title font-weight-bold mt-2">{{ $user }}</h5>

        </div>

    </div>
    <!-- Card image -->
    <div class="view overlay">
        <img class="card-img-top rounded-0" src="{{ $post }}" alt="Card image cap">
        <a href="#!">
        <div class="mask rgba-white-slight"></div>
        </a>
    </div>
    <!-- Card content -->
    <div class="card-body">
        <!-- Text -->
        <p>{{ $caption }}</p>
        <!-- Button -->
        <span>{{ $date }}</span>
        <i class="fas fa-share-alt text-muted float-right p-1 my-1" data-toggle="tooltip" data-placement="top" title="Share this post"></i>
        <i class="fas fa-heart text-muted float-right p-1 my-1 mr-3" data-toggle="tooltip" data-placement="top" title="I like it"></i>
    </div>
</div>
