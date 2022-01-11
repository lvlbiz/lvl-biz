function password_show_hide() {
    var x = $('#password')[0];
    var show_eye = $('#show_eye')[0];
    var hide_eye = $('#hide_eye')[0];
    
    $(hide_eye).removeClass('d-none');
    if (x.type === "password") {
      x.type = "text";
      show_eye.style.display = "none";
      hide_eye.style.display = "block";
    } else {
      x.type = "password";
      show_eye.style.display = "block";
      hide_eye.style.display = "none";
    }
}