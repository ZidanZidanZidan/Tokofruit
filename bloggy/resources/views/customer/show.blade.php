Customer
@foreach ($customer as $customerlist)
{{ $customerlist->customer_id}}
<p style ="color : #ff0000;">{{$customerlist->name}}</p>
<p style ="color : green;">{{$customerlist->address}}</p>
<a href="/customer/{{$customerlist->customer_id}}">show</a>

<br />
<!-- http ://localhost:8000/customer/3 -->
@endforeach

<a href="{{url('customer/create')}}">Go To -></a>
<a href="{{url('customer')}}">index</a>
