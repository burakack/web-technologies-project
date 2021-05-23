function iletisim(){
    var isim = document.getElementById("isim");
    var email = document.getElementById("email");
    var konu = document.getElementById("konu");
    var mesaj = document.getElementById("mesaj");
    var yas = document.getElementById("yas");
    if(isim.value==""||email.value==""||konu.value==""||mesaj.value==""||yas.value=="")
    {
        alert("Bütün alanlar dolu olmalıdır!");
    }
}
function temizle()
{
    isim.value="";
    email.value="";
    konu.value="";
    mesaj.value="";
    yas.value="";
}