function success() {
    swal({
        title: "Yeay",
        text: "Email atau Password anda sudah terdaftar",
        icon: "success",
        button: true,
    });
}

function failed() {
    swal({
        title: "Oops..",
        text: "Email atau Password anda salah",
        icon: "error",
        button: true,
    });
}
