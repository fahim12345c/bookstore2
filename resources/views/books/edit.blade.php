@extends('layout')

@section('page-content')
 <h1>UPDATE BOOK</h1>
 <form method="post" action="{{route('books.update')}}">
    @csrf
    <input type="hidden" name="id" value="{{$book->id}}">
    <div class="form-group">
      <label for="exampleInputEmail1">TITLE</label>
      <input type="text" class="form-control" placeholder="Enter Title" name="title" value="{{old('title',$book->title)}}">
      <div>{{$errors->first('title')}}</div>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">AUTHOR</label>
        <input type="text" class="form-control" placeholder="Enter Author" name="author" value="{{old('author',$book->author)}}">
        <div>{{$errors->first('author')}}</div>
     </div>
      <div class="form-group">
        <label for="exampleInputEmail1">ISBN</label>
        <input type="text" class="form-control" placeholder="Enter Isbn" name="isbn" value="{{old('isbn',$book->isbn)}}">
        <div>{{$errors->first('isbn')}}</div>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">STOCK</label>
        <input type="text" class="form-control" placeholder="Enter Stock" name="stock" value="{{old('stock',$book->stock)}}">
        <div>{{$errors->first('stock')}}</div>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">PRICE</label>
        <input type="text" class="form-control" placeholder="Enter Price" name="price" value="{{old('price',$book->price)}}">
        <div>{{$errors->first('price')}}</div>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{route('books.index')}}" class="btn btn-danger">BACK</a>
  </form>
@endsection