function ajouter_coach()
{
var id=formajoutcoach.id


var date=formajoutcoach.date_deb;

var verif=-1;
if(cin.value.length==0)
{alert('La CIN est obligatoire');
verif=0;
return false;
}

else verif=1;
if(date.value==''){
    alert('date est obligatoire');

    return false;

}else verif=1;


// for(i=0;i<email.value.length;i++)
// {console.log(email.value[i]);
// if((email.value[i]!=".")||(email.value[i]!="@")){
// alert('Verifier votre mail');
// return false;}}
// if(i==email.value.length)
//  verif=1;







if(verif==1)
{
    alert('Merci Pour l ajout');

return true;
}





}