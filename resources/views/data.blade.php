@extends('layout.master')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
        <table class="table my-5">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">NAME</th>
      <th scope="col">EMAIL</th>
      <th scope="col">SUBJECT</th>
      <th scope="col">MESSAGE</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
      @php $i=1;
      @endphp
      @foreach ($contact as $item)
    <tr>
      <td>{{$i++}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->email}}</td>
      <td>{{$item->subject}}</td>
      <td>{{$item->message}}</td>
      <td>
      <a href="{{route('editt',['id'=> $item->id])}}"  class="btn btn-primary">edit</a>
          <a href="{{route('del',['id'=> $item->id])}}"  class="btn btn-danger">delete</a>
      </td>
      
    </tr>
@endforeach
  </tbody>
</table>
            
        </div>
        <div class="col-md-2">
            
        </div>
    </div>
</div>

@endsection