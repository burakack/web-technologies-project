function giriskontrol() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var control = "";
    if (email === "" || password === "") {
        control += "E-posta veya Şifre alanları boş geçilemez!"
    } else if (email.search('@') < 0) {
        control += "Bu geçerli bir e-posta değil!";
    }
    if(control!=="")
    {
        alert(control);
    }
}