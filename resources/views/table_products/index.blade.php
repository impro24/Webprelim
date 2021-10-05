@extends('layouts.app')

@section('content')
<div class="container">
    <table>
    <tr>
        <th>Brand</th>
        <th>Company</th>
        <th>Model</th>
    </tr>
    <tr>
        <td>Dell
        <img src="/dell.jpg" alt="">
        </td>
        <td>Dell Inc.</td>
        <td>New Inspiron 15 3000 Laptop</td>
    </tr>
    <tr>
        <td>Lenovo
        <img src="/lenovo.jpg" alt="">
        </td>
        <td>Lenovo Inc.</td>
        <td>Ryzen 5</td>
    </tr>
    <tr>
         <td>Apple
        <img src="/mac.jpg" alt="">
        </td>
        <td>Apple Inc.</td>
        <td>Apple Macbook</td>
</table>
</div>
    </tr>
@endsection
<style>
table, th, td{
    border:10px solid black;
    padding:1px;
    background-color: skyblue;
    width: 900px;
    height: 150px;
    text-align: center;
    }
   img{
       width: 150px;
       height: 100px;
   }
</style>
