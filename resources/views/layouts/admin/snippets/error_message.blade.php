
  @if($errors->count()>0)
    <ul>
      @foreach($errors->all() as $error)
      <li class="alert alert-danger">{{$error}}</li>
      @endforeach
    </ul>
    @endif
@endsection