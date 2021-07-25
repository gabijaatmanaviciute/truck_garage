@foreach ($trucks as $truck)
  <a href="{{route('truck.edit',[$truck])}}">{{$truck->maker}} {{$truck->plate}} {{$truck->make_year}}</a>
  <br>
  <small>Mechanic: {{$truck->truckMechanic->name}} {{$truck->truckMechanic->surname}} </small>
  <form method="POST" action="{{route('truck.destroy', [$truck])}}">
   @csrf
   <button type="submit">DELETE</button>
  </form>
  <br>
@endforeach
