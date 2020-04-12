@include('partials.head')
    <body>
         @include('partials.page-header')


        <div class="best-seller-fiction">
            <div class="secondTitle">
                <h2>Best sold {{$id}} this week</h2>
            </div>
            <div class="carousel" data-flickity='{ "groupCells": true }'>
                @foreach ($responseList->results->books as $res)
                    <div class="carousel-cell" data-title="{{$res->title}}">
                        <a href="{{route('book',['name' => $responseList->results->list_name,'title'=>$res->title])}}">  <img src="{{$res->book_image}}"> </a>
                        <p>{{ $res->title}}</p>

                    </div>
                @endforeach

            </div>



        </div>







{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>--}}
        <script src="{{mix('js/app.js')}}"></script>
  <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    </body>
</html>
