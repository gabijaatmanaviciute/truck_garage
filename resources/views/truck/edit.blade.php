<form method="POST" action="{{route('truck.update',[$truck])}}">
        Maker: <input type="text" name="truck_maker" value="{{$truck->maker}}">
        Plate: <input type="text" name="truck_plate" value="{{$truck->plate}}">
        Make Year: <input type="number" name="make_year" value="{{$truck->make_year}}">
        Mechanic Notices: <textarea name="mechanic_notices">{{$truck->mechanic_notices}}</textarea>
        <select name="mechanic_id">
            @foreach ($mechanics as $mechanic)
                <option value="{{$mechanic->id}}" @if($mechanic->id == $truck->mechanic_id) selected @endif>
                    {{$mechanic->name}} {{$mechanic->surname}}
                </option>
            @endforeach
        </select>
        @csrf
        <button type="submit">EDIT</button>
</form>
