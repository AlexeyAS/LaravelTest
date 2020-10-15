<div class="jumbotron">
    <div class="container">
        <h1>Последние посты</h1>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                @foreach($data as $element)
                    @if ($loop->first)
                <div class="carousel-item active">
                    <h6>{{$element->name}}</h6>
                    <h5>{{$element->message}}</h5>
                    <p>{{$element->created_at}}</p>
                </div>
                    @else
                    <div class="carousel-item">
                        <h6>{{$element->name}}</h6>
                        <h5>{{$element->message}}</h5>
                        <p>{{$element->created_at}}</p>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
</div>
