window.addEventListener("load", function() {
    // Hàm JavaScript bạn muốn chạy ngay khi trang tải
    sumtotal();
    total();
  });

function sumrow(id){
    var list = document.querySelectorAll(".item");
    var quantity = parseInt(list[id].querySelector(".quantity").value) ;
    var price = parseInt(list[id].querySelector(".price").textContent) ;
    var sumrow = list[id].querySelector(".sumrow");
    sumrow.innerHTML = quantity*price;
    sumtotal();
    total();
}
function sumtotal(){
    var list = document.querySelectorAll(".item");
    var total = 0;
    for(var i=0; i<list.length; i++){
        var sumrow = parseInt(list[i].querySelector(".sumrow").textContent);
        total +=sumrow;
    }
    document.querySelector(".cart_subtotal").innerHTML = total;
}
function total(){
    var cart_subtotal = parseInt(document.querySelector(".cart_subtotal").textContent) ;
    var cart_tax = cart_subtotal*0.03;
    document.querySelector(".cart_tax").innerHTML = cart_tax;
    document.querySelector(".cart_total").innerHTML =cart_subtotal+  cart_tax;
}

$(document).ready(function() {
  $('#quantity').on('change', function() {
      $('#myForm').submit();
  });
});

// function postdata(id) {
//     var list = document.querySelectorAll(".item");
//     var quantity = parseInt(list[id].querySelector(".quantity").value) ;
//     var product_id= parseInt(list[id].querySelector(".product_id").textContent);
//     // Gửi dữ liệu về máy chủ bằng AJAX
//     console.log(quantity);
//     console.log(product_id);
//     var xhr = new XMLHttpRequest();
//     xhr.open('GET', "/cart-update?new_quantity=" + encodeURIComponent(quantity) + '&product_id=' + encodeURIComponent(product_id), true);
//     var csrfToken = document.querySelector('meta[name="csrf-token"]').content;
//     xhr.setRequestHeader('csrf-token', csrfToken);
//     xhr.onreadystatechange = function() {
//       if (xhr.readyState === 4 && xhr.status === 200) {
//         // Xử lý phản hồi từ route Laravel (nếu cần)
//         console.log(xhr.responseText);
//       }
//     };
//     xhr.send();
//   }
