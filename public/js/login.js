function checklogin() {
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;
    if(username=="admin" && password=="admin123") {
        document.location.href = "db.php";
    } else {
        document.getElementById("message").innerHTML = "Incorrect username or password (for admins/authorized personnel only)";
    }
}
