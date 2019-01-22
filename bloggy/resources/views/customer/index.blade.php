<br />
@foreach ($customer as $customerlist)
{{ $customerlist->customer_id}}
<p style ="color : #ff0000;">{{$customerlist->name}}</p>
<p style ="color : green;">{{$customerlist->address}}</p>
<a href="/customer/{{$customerlist->customer_id}}">show</a>
<a href="/customer/{{$customerlist->customer_id}}/edit">edit</a>

<br />
<form action="/customer/{{$customerlist->customer_id}}" method="post">
  {{csrf_field()}}
  {{method_field('DELETE')}}
  <button >X</button>
</form>
<!-- http ://localhost:8000/customer/3 -->
@endforeach

<a href="{{url('customer/create')}}">Go To -></a>
