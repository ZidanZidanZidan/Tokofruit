<form method="post" action="{{route('supplier.store')}}">

  {{csrf_field()}}
  <br>
  <input type="text" name="txt_id" id="txt_id">
</br>
  <br>
  <input type="text" name="txt_name" id="txt_name">
  </br>
  <br>
  <input type="text" name="txt_address" id="txt_address">
</br>
  <input type="submit" name="sbm_save" id="sbm_save" value="save">
</form>
