@extends('adminpanel')

@section('adminContent')

<div class="recentorders">
    <div class="cardHeader">
        <h2>Chefs List</h2>
        {{-- <a href="" class="btn">View All</a> --}}
    </div>
    <table>
        <thead>
            <tr>
                <td>Chef's Name</td>
                <td>Chef's Email</td>
                <td>Total Recipe</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($chefs as $value)
            <tr>
                <td>{{ $value['chef_name']}}</td>
                <td>{{ $value['chef_email'] }}</td>
                <td>{{ $value['chef_total_recipes']}}</td>
                <td><a class="btn btn-danger" href="/delete/{{$value->id}}"> Delete</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<!-- New Customers -->
<!-- <div class="recentCustomers">
    <div class="cardHeader">
        <h2>Recent Customers</h2>
    </div>
    <table>
        <tr>
            <td width="60px">
                <div class="imgbox">
                    <img src="./577734.jpg" />
                </div>
            </td>
            <td>
                <h4>ujwal<br /><span>Nepal</span></h4>
            </td>
        </tr>
        <tr>
            <td width="60px">
                <div class="imgbox">
                    <img src="./577734.jpg" />
                </div>
            </td>
            <td>
                <h4>ujwal<br /><span>Nepal</span></h4>
            </td>
        </tr>
        <tr>
            <td width="60px">
                <div class="imgbox">
                    <img src="./577734.jpg" />
                </div>
            </td>
            <td>
                <h4>ujwal<br /><span>Nepal</span></h4>
            </td>
        </tr>
        <tr>
            <td width="60px">
                <div class="imgbox">
                    <img src="./577734.jpg" />
                </div>
            </td>
            <td>
                <h4>ujwal<br /><span>Nepal</span></h4>
            </td>
        </tr>
        <tr>
            <td width="60px">
                <div class="imgbox">
                    <img src="./577734.jpg" />
                </div>
            </td>
            <td>
                <h4>ujwal<br /><span>Nepal</span></h4>
            </td>
        </tr>
        <tr>
            <td width="60px">
                <div class="imgbox">
                    <img src="./577734.jpg" />
                </div>
            </td>
            <td>
                <h4>ujwal<br /><span>Nepal</span></h4>
            </td>
        </tr>
        <tr>
            <td width="60px">
                <div class="imgbox">
                    <img src="./577734.jpg" />
                </div>
            </td>
            <td>
                <h4>ujwal<br /><span>Nepal</span></h4>
            </td>
        </tr>
    </table>
</div> -->

@endsection