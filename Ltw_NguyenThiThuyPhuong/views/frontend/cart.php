<?php

use App\Models\Product;
use App\Libraries\Cart;

require_once "views/frontend/cart-addcart.php";
?>
<?php require_once "views/frontend/header.php";?>
<section class="bg-light">
<div class="container">
   <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
      <ol class="breadcrumb py-2 my-0">
         <li class="breadcrumb-item">
            <a class="text-main" href="index.html">Trang chủ</a>
         </li>
         <li class="breadcrumb-item active" aria-current="page">
            Giỏ hàng của bạn
         </li>
      </ol>
   </nav>
</div>
</section>
<section class="hdl-maincontent py-2">
<div class="container">
   <table class="table table-bordered">
      <thead>
         <tr class="bg-dark">
            <th style="width:30px;" class="text-center">STT</th>
            <th style="width:100px;">Hình</th>
            <th>Tên sản phẩm</th>
            <th class="text-center">Giá</th>
            <th style="width:130px" class='text-center'>Số lượng</th>
            <th class="text-center">Thành tiền</th>
            <th></th>
         </tr>
      </thead>
      <tbody>
         <tr>
            <td class="text-center align-middle">1</td>
            <td>
               <img class="img-fluid" src="../public/images/product/thoi-trang-nam-1.jpg" alt="">
            </td>
            <td class="align-middle">Tên sản phẩm</td>
            <td class="text-center align-middle">1000000</td>
            <td class="text-center align-middle">
               <div class="input-group mb-3">
                  <span class="input-group-text" id="sub" onclick="changenumber(id)">-</span>
                  <input type="text" value="1" id="qty" class="form-control text-center">
                  <span class="input-group-text" id="add" onclick="changenumber(id)">+</span>
               </div>
            </td>
            <td class="text-center align-middle">
               12900000
            </td>
            <td class="text-center align-middle">
               <button class="btn btn-sm btn-main">
                  <i class="fa-solid fa-xmark"></i>
               </button>
            </td>
         </tr>
         <tr>
            <td class="text-center align-middle">3</td>
            <td>
               <img class="img-fluid" src="../public/images/product/thoi-trang-nam-1.jpg" alt="">
            </td>
            <td class="align-middle">Tên sản phẩm</td>
            <td class="text-center align-middle">1000000</td>
            <td class="text-center align-middle">
               <div class="input-group mb-3">
                  <span class="input-group-text" id="sub" onclick="changenumber(id)">-</span>
                  <input type="text" value="1" id="qty" class="form-control text-center">
                  <span class="input-group-text" id="add" onclick="changenumber(id)">+</span>
               </div>
            </td>
            <td class="text-center align-middle">
               12900000
            </td>
            <td class="text-center align-middle">
               <button class="btn btn-sm btn-main">
                  <i class="fa-solid fa-xmark"></i>
               </button>
            </td>
         </tr>
         <tr>
            <td class="text-center align-middle">3</td>
            <td>
               <img class="img-fluid" src="../public/images/product/thoi-trang-nam-1.jpg" alt="">
            </td>
            <td class="align-middle">Tên sản phẩm</td>
            <td class="text-center align-middle">1000000</td>
            <td class="text-center align-middle">
               <div class="input-group mb-3">
                  <span class="input-group-text" id="sub" onclick="changenumber(id)">-</span>
                  <input type="text" value="1" id="qty" class="form-control text-center">
                  <span class="input-group-text" id="add" onclick="changenumber(id)">+</span>
               </div>
            </td>
            <td class="text-center align-middle">
               12900000
            </td>
            <td class="text-center align-middle">
               <button class="btn btn-sm btn-main">
                  <i class="fa-solid fa-xmark"></i>
               </button>
            </td>
         </tr>
      </tbody>
      <tfoot>
         <tr>
            <td colspan="5">
               <button class="btn btn-main">Cập nhật</button>
               <a href="checkout.html" class="btn btn-main">Thanh toán</a>
            </td>
            <td colspan="2" class="text-end">
               <strong>Tổng tiền: 0999998887</strong>
            </td>
         </tr>
      </tfoot>
   </table>
</div>
<script>
   function changenumber(id) {
      var qty = parseInt(document.getElementById("qty").value);
      if (id == 'sub') {
         if (qty > 0) {
            qty = qty - 1;
         }
      }
      else {
         qty = qty + 1;
      }
      document.getElementById("qty").value = qty.toString();
   }
</script>
</section>
<?php require_once "views/frontend/footer.php";?>