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
    <td>If you purchased hardware, software, peripherals or accessories manufactured by a third party, those products will generally be subject to a third party manufacturer’s warranty or guarantee, which will have been communicated to you upon receipt of the product.
    </td>
    <td>As a Lenovo Authorized Service Provider (AASP) Vanguard offers professional technical service and hardware repair for Lenovo warranty and non-warranty service issues.
 </td>
    <td>AppleCare products provide additional hardware service options and expert technical support from Apple. Learn about AppleCare plans. Warranty and repair.
</td>
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
    </tr>
    @endsection
