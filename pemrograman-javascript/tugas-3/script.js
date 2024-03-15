const dataPerson=()=>{
    let form = document.getElementById("frm");
    let nama = form.nama.value;
    let pekerjaan = form.pekerjaan.value;
    let hobi = form.hobi.value;
    // let hasil = (nama&&pekerjaan&&hobi!=""?"Selamat":"Form belum diisi!")

    document.getElementById("hasil").innerHTML = hasil(nama,pekerjaan,hobi);
}

const hasil = (a,b,c) => {
    if(a == ""){
        return "Nama belum diisi"
    }
    else if(b== ""){
        return "Pekerjaan belum diisi"
    }
    else if(c==""){
        return "Hobi belum diisi"
    }
    else{
        alert("Selamat Datang "+a+"!")
        return "" //saya return string kosong karena kalau tidak nanti fungsi hasil akan otomatis mengembalikan nilai undefined
    }
}