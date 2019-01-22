<br />
@foreach ($employee as $employeelist)
{{ $employeelist->employee_id}}
<p style ="color : #ff0000;">{{$employeelist->employee_name}}</p>
<p style ="color : green;">{{$employeelist->employee_address}}</p>
<p style="color  : purple;">{{$employeelist->employee_phone_number}}</p>
<a href="/employee/{{$employeelist->employee_id}}">show</a>
<a href="/employee/{{$employeelist->employee_id}}/edit">edit</a>

<br />
<form action="/employee/{{$employeelist->employee_id}}" method="post">
  {{csrf_field()}}
  {{method_field('DELETE')}}
  <button >X</button>
</form>
<!-- http ://localhost:8000/customer/3 -->
@endforeach

<a href="{{url('employee/create')}}">Go To -></a>
