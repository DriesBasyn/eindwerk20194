@extends('layouts.dashboard')
@section('content')

<table class="table">git basename
    <thead>
    <tr>
        <th scope="col">id</th>
        <th scope="col">name</th>
        <th scope="col">transaction</th>
        <th scope="col">price</th>
        <th scope="col">order date</th>
    </tr>
    </thead>
    <tbody>
    @if(isset($orders))
    @foreach($orders as $order)
    <?php  $user = \App\User::where('id',$order->user_id)->first();?>
    <tr>
        <th>{{$order->id}}</th>
        <td>{{$user->name.' '.$user->firstname}}</td>
        <td>{{$order->transaction_id}}</td>git
        <td>&dollar;{{$order->price}}</td>
        <td>{{$order->created_at}}</td>
    </tr>
    @endforeach
    @endif
    </tbody>
</table>
@endsection

