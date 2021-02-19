<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <h1>Choose your flight</h1>

    <form class="" action="{{route('result')}}" method="post">
      @csrf
      @method('post')

      <select class="" name="code_departure">
        @foreach ($airports as $airport)
          <option value="{{ $airport-> code}}">{{$airport -> name}}</option>
        @endforeach
      </select>

      <select class="" name="code_arrival">
        @foreach ($airports as $airport)
          <option value="{{ $airport-> code}}">{{$airport -> name}}</option>

        @endforeach
      </select>
      
      <select class="" name="code_third">
        @foreach ($airports as $airport)
          <option value="{{ $airport-> code}}">{{$airport -> name}}</option>

        @endforeach
      </select>
      <button type="submit">Search</button>

    </form>

  </body>
</html>
