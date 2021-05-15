function iletisim()
{
    var isim = document.getElementById("isim").value;
    var email = document.getElementById("email").value;
    var konu = document.getElementById("konu").value;
    var mesaj = document.getElementById("mesaj").value;
    var cinsiyet = document.getElementById("cinsiyet").value;
    if(isim===""||email===""||konu===""||mesaj===""||cinsiyet===null)
    {
        alert("Bütün alanlar dolu olmalıdır!");
    }
    alert("öylesine");
}