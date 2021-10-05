@extends('layouts.app')

@section('content')
<div class="container">
    <table>
    <tr>
        <th>Dell</th>
        <th>Lenovo</th>
        <th>Apple</th>
    </tr>
    <tr>
    <td>Inspiron<img src="/dell.jpg" alt="">
    </td>
    <td>IdeaPad<img src="/lenovo.jpg" alt="">
    </td>
    <td>MacBook Pro<img src="/mac.jpg" alt="">
    </td>
    </tr>
    <tr>
        <th>₱25 490.00</th>
        <th>₱25 495.00</th>
        <th> ₱180 283.00</th>
    </tr>
   
</table>
</div>
    </tr>
@endsection
<style>
table, th, td{
    border:1px solid black;
    padding:10px;
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