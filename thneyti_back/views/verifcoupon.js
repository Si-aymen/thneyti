function verif_coupon()
{
var date_d = document.getElementById('date_deb').value;
var date_f = document.getElementById('date_experation').value;
var date_actuelle = new Date();

if (date_d >= date_f) 
{
	alert('la date debut doit être inférieur à la date fin');

}
else if (date_d >  date_actuelle)
{
alert('la date debut doit être inférieur ou égale  à la date dateactuelle');
}
}