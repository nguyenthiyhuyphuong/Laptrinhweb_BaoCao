<?php

//use App\Libraries\MyClass;
use App\Models\Category;

$list = Category::where('status', '=', 0)->orderBy('created_at', 'DESC')->get();
?>

<?php require_once '../views/backend/header.php'; ?>
<!-- CONTENT -->
<form action="index.php?option=category&cat=process" name="THEM" method="post" enctype="multipart/from-data">
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-12">
                        <h1 class="d-inline">Thùng rác thương hiệu</h1>
                    </div>
                </div>
            </div>
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            <a class="btn btn-sm btn-info" href="index.php?option=category">
                                <i class="fas fa-bars"></i> Tất cả</a>
                            <a class="btn btn-sm btn-danger" href="index.php?option=category&cat=trash">
                                <i class="fas fa-trash"></i> Thùng rác</a>
                        </div>
                        <div class="col-md-6 text-right">
                            <a href="index.php?option=category" class="btn btn-sm btn-info">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                Về danh sách
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <?php require_once '../views/backend/message.php'; ?>
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width:30px;">
                                            <input type="checkbox">
                                        </th>
                                        <th class="text-center" style="width:130px;">Hình ảnh</th>
                                        <th>Tên thương hiệu</th>
                                        <th>Tên slug</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if (count($list) > 0) : ?>
                                        <?php foreach ($list as $item) : ?>
                                            <tr clas3s="datarow">
                                                <td>
                                                    <input type="checkbox">
                                                </td>
                                                <td>
                                                    <img src="../public/images/category/<?= $item->image; ?>" alt="<?= $item->image; ?>">
                                                </td>
                                                <td>
                                                    <div class="name">
                                                        <?= $item->name; ?>
                                                    </div>
                                                    <div class="function_style">
                                                        <a class="btn btn-info btn-xs" href="index.php?option=category&cat=restore&id=<?= $item->id; ?>">
                                                            <i class="fas fa-undo"></i> Khôi phục</a>
                                                        <a class="btn btn-danger btn-xs" href="index.php?option=category&cat=destroy&id=<?= $item->id; ?>">
                                                            <i class="fas fa-trash"></i> Xóa khỏi CSDL</a>
                                                    </div>
                                                </td>
                                                <td><?= $item->slug; ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</form>
<!-- END CONTENT-->
<?php require_once '../views/backend/footer.php'; ?>