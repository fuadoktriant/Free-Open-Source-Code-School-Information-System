<script type="text/javascript">
function cek(form){
var lama = form.p_lama.value;
var baru = form.p_baru.value;
var lagi = form.p_lagi.value;
if(lama==""){
alert('mohon isi password lama!');
return false;
}
if(baru==""){
alert('mohon isi password baru!');
return false;
}
if(lagi==""){
alert('ulangi ketik password baru!');
return false;
}
if(baru!=lagi){
alert('Password baru tidak cocok,\nCek ulang password baru Anda!');
return false;
}
return true;
}
</script>
<script type="text/javascript" src="sorot.js"></script>
<h1 align="center">Ganti Password</h1>
<div align="center" style="font-family:Arial, Helvetica, sans-serif">
<fieldset style="width:40%;">
<legend>Ganti Password</legend>

<form onKeyUp="highlight(event)" onClick="highlight(event)" name="form" id="form" class="form" action="ubah_password.php" onsubmit="return cek(this)" method="post">
<table width="307" height="175" border="0" align="center" style="margin:20px;">
  <tr>
    <td width="128">Password Lama </td>
    <td width="14">:</td>
    <td width="151">
      <input type="password" name="p_lama" id="p_lama"/>
    </td>
  </tr>
  <tr>
    <td>Password Baru </td>
    <td>:</td>
    <td>
      <input type="password" name="p_baru" id="p_baru"/>
    </td>
  </tr>
  <tr>
    <td>Ulangi Password </td>
    <td>:</td>
    <td>
      <input type="password" name="p_lagi" id="p_lagi"/>
    </td>
  </tr>
  <tr align="center">
    <td height="50" colspan="3"><input type="submit" name="Submit" value="Ganti Password" />
      <input type="reset" name="reset" value="Reset" /></td>
  </tr>
</table>
</form>
</fieldset>
</div>