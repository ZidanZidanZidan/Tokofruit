<br />
@foreach ($supplier as $supplierlist)
{{ $supplierlist->supplier_id}}
<p style ="color : green;">{{$supplierlist->supplier_name}}</p>
<p style ="color : blue;">{{$supplierlist->supplier_address}}</p>

<br />
@endforeach

<a href="{{url('supplier/create')}}">Go To -></a>
