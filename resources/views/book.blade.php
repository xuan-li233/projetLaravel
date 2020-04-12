@include('partials.head')
<body>

@include('partials.title')
<div class="book-detail">
    @foreach ($responseBook->results->books as $res)
        @if ($res->title === $title)

            <div class="bookimage">

                <img src="{{$res->book_image}}">

            </div>

    <div class="detail">
        <div class="head-like">
        <h2>{{$title}}</h2>
        <form action={{route('books-add')}} method="post">
            {{ csrf_field() }}
            <input type="hidden" name="name" value="{{$res->title}}">
            <input type="hidden" name="author" value="{{$res->author}}">
            <button class="like">&#9733;</button>
        </form>
        </div>
        <p>Written by: {{$res->author}}</p>
        <p>{{$res->description}}</p>
        <p>Published by: {{$res->publisher}}</p>




    </div>



        @endif
    @endforeach

</div>











<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="{{mix('js/app.js')}}"></script>
<script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
<script typet="text/javascript" src="http://libs.baidu.com/jquery/1.9.1/jquery.min.js"></script>


</body>
</html>
