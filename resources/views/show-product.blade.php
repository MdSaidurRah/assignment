@extends('layout')

@section('page-content')
<h1> Product Detail</h1>
<hr/>
    <a href="{{url('/edit-product/'.$product[0]->id)}}" class="btn btn-primary"> Edit Product</a>
    <hr>


    <table class="table table-bordered">
        <tbody>

        <tr>
            <td>Name</td>
            <td>{{$product[0]->name}}</td>
        </tr>
        <tr>
            <td>Description</td>
            <td>{{$product[0]->description}}</td>
        </tr>
        <tr>
            <td>Price</td>
            <td>{{$product[0]->price}}</td>
        </tr>
        <tr>
            <td>Stock Quantity</td>
            <td>{{$product[0]->quantity}}</td>
        </tr>
        </tbody>
    </table>


@stop
