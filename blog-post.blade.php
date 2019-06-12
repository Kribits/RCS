    <div class="card-deck ">
        <div class="card ">
            <img src="{{ $postItem->img_url }}" class="card-img-top " alt="... ">
            <div class="card-body ">
                <h5 class="card-title ">{{ $postItem->title }}</h5>
                <p class="card-text ">{{ $postItem->excerpt }}</p>
                <p class="card-text "><small class="text-muted ">Last updated 3 mins ago</small></p>
                <a href="/blog/{{ $postItem->id }}" class="btn btn-warning">Lasīt</a>
            </div>
        </div>
    </div>
                
