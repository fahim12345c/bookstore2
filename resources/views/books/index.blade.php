@extends('layout')

 @section('page-content')
 <h1>Welcome Bookstore </h1>
  <div class="row">
    <div class="col-lg-10">
      <form method="get" action="{{route('books.index')}}">
          <div class="form-row">
              <div class="col-lg-10">
                  <input type="text" id="search" name="search" class="form-control" placeholder="Search..." value="{{request('search')}}">
              </div>
              <div class="col">
                  <button type="submit" class="btn btn-default">Search</button>
              </div>
          </div>
      </form>
  </div>
  <div class="col-lg-2">
    <p class="text-right"><a href="{{route('books.create')}}" class="btn btn-primary">NEW BOOK </a></p>
  </div>
  </div>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>TITLE</th>
            <th>AUTHOR</th>
            <th>PRICE</th>
            <th>ACTION</th>
        </tr>
        @foreach ($books as $book )
        <tr>
            
            <td>{{$book->id}}</td>
            <td>{{$book->title}}</td>
            <td>{{$book->author}}</td>
            <td>{{$book->price}}</td>
            <td><a href="{{route('books.show',$book->id)}}">VIEW</a></td>
            <td><a href="{{route('books.edit',$book->id)}}">EDIT</a></td>
            <td>
              <form method="post" action="{{route('books.destroy',$book->id)}}" onsubmit="return confirm('sure?')">
                @csrf
                <input type="hidden" name="id" value="{{$book->id}}">
                <input type="submit" style="padding: 0; margin:0" value="delet" class="btn btn-primary text-dangger"/>
              </form>
            </td>
                
        </tr>
        @endforeach
    </table>
    {{$books->links()}}
 @endsection
    