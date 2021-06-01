function validateForm()
{
	title = document.getElementById('name').value;
	opinion = document.getElementById('opinion').value;
	img = document.getElementById('image').value;

  if(title=="" || opinion=="" || img=="")
  { 
    alert("Recuerda que debes completar todos los campos, incluyendo imagen!");
    return false;
  }
  return true;
}