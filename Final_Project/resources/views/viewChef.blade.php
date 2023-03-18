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
                <td>SN</td>
                <td>Name</td>
                <td>Email</td>
                <td>Total Recipe</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($chefs as $key => $value)
            @if($value['chef_role']=='chef')
            <tr>
                <td>{{$key+1}}</td>
                <td>{{ $value['chef_name']}}</td>
                <td>{{ $value['chef_email'] }}</td>
                <td>{{ $value['chef_total_recipes']}}</td>
                <td><a class="btn btn-danger" href="/delete/{{$value->id}}"> Delete</a></td>
            </tr>
            @endif
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