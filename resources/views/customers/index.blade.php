@extends('layouts.app')

@section('content')
    <a href="{{ route('customers.create') }}">Add New Customer</a>
    <h1>All Customer</h1>
    <table border="1px" cellpadding="2px" cellspacing="0px">
        <thead>
            <tr>
                <th>Id</th>
                <th>Profile Img</th>
                <th>Full Name</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>Create At</th>
                <th>Update At</th>
            </tr>
        </thead>
        <tbody>
            @foreach($customers as $customer)
                <tr>
                    <td>{{$customer->id}}</td>
                    <td>{{$customer->profile_img}}</td>
                    <td>{{$customer->full_name}}</td>
                    <td>{{$customer->phone_number}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->created_at}}</td>
                    <td>{{$customer->updated_at}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div>{{ $customers->links() }}</div>
@stop