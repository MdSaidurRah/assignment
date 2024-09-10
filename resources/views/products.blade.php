@extends('layout')

@section('page-content')
<h1> List Of Products</h1>
<hr/>
    <a href="{{url('/add-product')}}" class="btn btn-primary"> Add Product</a>
    <hr>


    <table class="table table-bordered">
        <thead>
            <tr>
                <th>SL</th>
                <th>Product Name</th>
                <th>Product Description</th>
                <th>Product Price</th>
                <th>Product Quantity</th>
                <th></th>
            </tr>
        </thead>
        <tbody>

            @foreach($product as $item)
                <tr>
                    <td></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>{{$item->price}}</td>
                    <td>{{$item->quantity}}</td>
                    <td>{{$item->created_at}}</td>
                    <td>{{$item->updated_at}}</td>
                    <td>
                        <a href="{{url('/show-product/'.$item->id)}}" class="btn btn-success"> Show </a>
                        <a href="{{url('/edit-product/'.$item->id)}}" class="btn btn-info"> Edit </a>
                        <a href="{{url('/delete-product/'.$item->id)}}" class="btn btn-danger"> Delete </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@stop
