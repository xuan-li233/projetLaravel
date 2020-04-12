@include('partials.head')
<body>
<header class="booklistitle">
    <h2>My booklist</h2>
    <div><a href="/">Return to homepage</a></div>
</header>
<div class="bookwritten">
@foreach($booktable as $key => $data)
    <div class="booklist">
        <form action="{{route('books-update',['id' => $data->id])}}" method="post">
            @csrf
        <input type="text" name="rename" value="{{$data->name}}">
        <input type="text" name="reauthor" value="{{$data->author}}">

        <button class="searchCat">Modifier</button>
            <button class="searchCat"><a href="{{route('books-delete',['id' => $data->id])}}">Supprimer</a></button>
        </form>

    </div>
@endforeach
</div>

<div class="booktow">
<h2>Can't find a book in our lists?</h2>
    <h2>Add your own books here</h2>
<form action="{{route('books-add')}}" method="post">
    @csrf
    <input type="text" name="name" placeholder="Name">
    <input type="text" name="author" placeholder="Author">

    <button class="searchCat">Ajouter</button>
</form>
</div>



</body>
</html>
