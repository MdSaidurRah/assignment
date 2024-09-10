@extends('layout')

@section('page-content')
<h1> New Product Entry</h1>
<hr/>

<div class="row">
    <div class="col-md-6">
        <form action="{{url('/update-product')}}" method="post">
            @csrf


            <input type="hidden" name="id" value="{{$product[0]->id}}">

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Product Name</label>
                <input type="text" name="name" value="{{$product[0]->name}}" class="form-control" id="name" placeholder="Product Name">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Product Description</label>
                <textarea  name="description" class="form-control" rows="5">{{ $product[0]->description}}</textarea>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Price</label>
                <input type="number" min="0" name="price" value="{{$product[0]->price}}" class="form-control" id="price" placeholder="Product Name">
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Quantity </label>
                <input type="number" min="0" name="quantity" value="{{$product[0]->quantity}}" class="form-control" id="quantity" placeholder="Quantity  ">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

    <div class="col-md-6"></div>
</div>



@stop
