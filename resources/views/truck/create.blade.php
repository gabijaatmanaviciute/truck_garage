<form method="POST" action="{{route('truck.store')}}">
    Maker: <input type="text" name="truck_maker">
    Plate: <input type="text" name="truck_plate">
    Make Year: <input type="number" name="make_year">
    Mechanic Notices: <textarea name="mechanic_notices"></textarea>
    <select name="mechanic_id">
        @foreach ($mechanics as $mechanic)
            <option value="{{$mechanic->id}}">{{$mechanic->name}} {{$mechanic->surname}}</option>
        @endforeach
    </select>
   @csrf
   <button type="submit">ADD</button>
</form>