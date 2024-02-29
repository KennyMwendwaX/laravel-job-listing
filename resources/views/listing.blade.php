@if($listing == null)
    <p>No listing found</p>
@else
    <h1>{{$listing['title']}}</h1>
    <p>{{$listing['description']}}</p>
@endif    


