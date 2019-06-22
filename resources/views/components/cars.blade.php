@isset($cars)
  <table>
    <tr>
      <th>ID</th>
      <th>Model</th>
      <th>Brand</th>
      <th>Fuel Type</th>
    </tr>
    @foreach($cars as $car)
      <tr>
        <td><a href={{ route('cars.show', $car->id)}}>{{$car->id}}</a></td>
        <td>{{$car->model}}</td>
        <td>{{$car->marke}}</td>
        <td>{{$car->fuel_type}}</td>
      </tr>
    @endforeach
  <table>
@endisset
