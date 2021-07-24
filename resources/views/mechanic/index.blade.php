@foreach ($mechanics as $mechanic)

<a href="{{route('mechanic.edit', $mechanic)}}"> 
    {{$mechanic->name}} {{$mechanic->surname}} 
</a>
<br>
<form method="POST" action="{{route('mechanic.destroy', $mechanic)}}">
   @csrf
   <button type="submit">DELETE</button>
</form>

@endforeach