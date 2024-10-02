<x-layout>
    <div class="border">
        <h1 class="mb-5 mt-2 text-center">{{$article->title}}</h1>
        {{-- Carousel --}}
        <div>
            @if ($article->images->count() > 0)
                <div id="carouselExampleIndicators" class="carousel slide mb-5">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        @foreach ($article->images as $image)
                            <div class="carousel-item @if ($loop->first) active @endif">
                                <img src="{{Storage::url($image->path)}}" class="d-block w-100 carouselImgCustom" alt="immagini dell'articolo">
                            </div>
                        @endforeach
                    </div>
                    @if ($article->images->count() > 1)
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    @endif
                </div>
                <div class="carousel-inner">
                    <!-- <div class="carousel-item active">
                        <img src="https://placehold.co/600x400" class="d-block w-100 carouselImgCustom" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://placehold.co/600x400" class="d-block w-100 carouselImgCustom" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://placehold.co/600x400" class="d-block w-100 carouselImgCustom" alt="...">
                    </div> -->
                    @foreach ($article->images as $key => $image)
                    <div class="carousel-item @if ($loop->first) active @endif>
                        <img src="{{ $image->getUrl(300, 300) }}" class="d-block w-100 rounded shadow" alt="Immagine {{$key + 1 }} dell'articolo {{ $article_to_chack->title }}">
                    </div>
                    @endforeach
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            {{-- Carousel --}}


            <h5 class="showElementCustom">Categoria: {{$article->category->name}}</h5>
            <h5 class="showElementCustom">Prezzo: €{{$article->price}}</h5>
            <h6 class="showElementCustom">Annuncio di: {{$article->user->name}}</h6>

            @else
                <img src="https://placehold.co/600x400" alt="">
            @endif
        </div>
        <h5 class="showElementCustom">Categoria: {{$article->category->name}}</h5>
        <h5 class="showElementCustom">Prezzo: €{{$article->price}}</h5>
        <h6 class="showElementCustom">Annuncio di: {{$article->user->name}}</h6>
    </div>
    <div class="container mt-3 mb-3">
        <a href="{{ route('article.index', ['article' => $article]) }}">
            <button type="button" class="btn btn-outline-primary rounded-pill">Back</button>
    </div>
</x-layout>