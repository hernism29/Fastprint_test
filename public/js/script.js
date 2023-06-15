//alert('hello WPU');
function validateInput() {
    var inputValue = document.getElementById("nama_produk").value;

    if (inputValue === "") {
      alert("Input Nama tidak boleh kosong!");
      return false;
    }

    return true;
  }
