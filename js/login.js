function giriskontrol() {
    var email =document.getElementById("email").value;
    var password=document.getElementById("password").value;
    if (email === "" || password === "")
    {
        alert("E-posta veya Şifre alanları boş geçilemez!");
    }
}