

<div class="searchBar">
    <form action='{{route('other')}}' method='post'>
        @csrf
        <label>
            <input type="text" placeholder="Search a list you want?" name="type">
        </label>
        <button class="searchBut" type="submit"></button>
    </form>
</div>
<div class="catBut">
    <a href="{{route('otherlist',['id' => 'hardcover-fiction'])}}"> <button class="searchCat" type="recherche">hardcover-fiction</button></a>
    <a href="{{route('otherlist',['id' => 'E-Book Fiction'])}}"><button class="searchCat" type="recherche">E-Book Fiction</button></a>
    <a href="{{route('otherlist',['id' => 'Manga'])}}"><button class="searchCat" type="recherche">Manga</button></a>
    <a href="{{route('otherlist',['id' => 'Childrens Middle Grade'])}}"><button class="searchCat" type="recherche">Childrens Middle Grade</button></a>
    <a href="{{route('otherlist',['id' => 'Picture Books'])}}"><button class="searchCat" type="recherche">Picture Books</button></a>
</div>
