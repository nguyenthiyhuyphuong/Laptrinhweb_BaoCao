<?Php

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

$list_product = Product::where('status', '!=', 0)->orderBy('created_at', 'DESC')->get();
$list_brand = Brand::where('status', '!=', 0)->orderBy('created_at', 'DESC')->get();
$list_category = Category::where('status', '!=', 0)->orderBy('created_at', 'DESC')->get();
$brand_id_html = '';
$category_id_html = '';
foreach ($list_brand as $brand) {
   $brand_id_html .= "<option value='$brand->id'>$brand->name</option>";
}
foreach ($list_category as $category) {
   $category_id_html .= "<option value='$category->id'>$category->name</option>";
}
?>
<?php require_once '../views/backend/header.php'; ?>
<!-- CONTENT -->
<form action="index.php?option=product&cat=process" name="THEM" method="post" enctype="multipart/form-data">
   <div class="content-wrapper">
      <section class="content-header">
         <div class="container-fluid">
            <div class="row mb-2">
               <div class="col-sm-12">
                  <h1 class="d-inline">Thêm mới sản phẩm</h1>
               </div>
            </div>
         </div>
      </section>
      <section class="content">
         <div class="card">
            <div class="card-header text-right">
               <a href="index.php?option=product" class="btn btn-sm btn-info">
                  <i class="fa fa-arrow-left" aria-hidden="true"></i>
                  Về danh sách
               </a>
               <button type="submit" class="btn btn-sm btn-success" name="THEM">
                  <i class="fa fa-save" aria-hidden="true"></i>
                  Thêm sản phẩm
               </button>
            </div>
            <div class="card-body">
               <?php require_once '../views/backend/message.php'; ?>
               <div class="row">
                  <div class="col-md-9">
                     <div class="mb-3">
                        <label>Tên sản phẩm (*)</label>
                        <input type="text" placeholder="Nhập tên sản phẩm" name="name" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Slug</label>
                        <input type="text" placeholder="Nhập slug" name="slug" class="form-control">
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                           <div class="mb-3">
                              <label>Danh mục (*)</label>
                              <select name="category_id" class="form-control">
                                 <option value="">Chọn danh mục</option>
                                 <?= $category_id_html; ?>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="mb-3">
                              <label>Thương hiệu (*)</label>
                              <select name="brand_id" class="form-control">
                                 <option value="">Chọn thương hiệu</option>
                                 <?= $brand_id_html; ?>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="mb-3">
                        <label>Chi tiết (*)</label>
                        <textarea name="detail" placeholder="Nhập chi tiết sản phẩm" rows="5" class="form-control"></textarea>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="mb-3">
                        <label>Giá bán (*)</label>
                        <input type="number" value="10000" min="10000" name="price" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Giá khuyến mãi</label>
                        <input type="number" value="10000" min="10000" name="pricesale" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Số lượng</label>
                        <input type="number" value="10000" min="1" name="qty" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Hình đại diện</label>
                        <input type="file" name="image" class="form-control">
                     </div>
                     <div class="mb-3">
                        <label>Trạng thái</label>
                        <select name="status" class="form-control">
                           <option value="1">Xuất bản</option>
                           <option value="2">Chưa xuất bản</option>
                        </select>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </div>
</form>
<?php require_once '../views/backend/footer.php'; ?>