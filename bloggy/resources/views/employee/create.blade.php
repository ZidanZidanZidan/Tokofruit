<form method="post" action="{{route('employee.store')}}">

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
<br>
<input type="number" name="txt_phone" id="txt_phone">
</br>
  <input type="submit" name="sbm_save" id="sbm_save" value="save">
</form>
