@if($listings == null)
    <p>No listing found</p>
@endif    

<h1>{{$listing['title']}}</h1>


<p>{{$listing['description']}}</p>
