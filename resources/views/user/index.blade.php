<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <table class="table table-success table-striped-columns">
        <h3 class="d-flex alain-time-center">list user</h3>
        <tr>
            <td>id</td>
            <td>tên</td>
            <td>tuổi</td>
            <td>ngày sinh</td>
            <td>giới tính</td>
            <td>address</td>
            <td>chọn</td>
        </tr>
        <?php foreach($profile as $file):?>
        <tr>     
            <th><?= $file -> id_user ?></th>
            <th><?= $file -> name ?></th>
            <th><?= $file -> age ?></th>
            <th><?= $file -> date_birday ?></th>
            <th><?= $file -> sex?></th>
            <th><?= $file -> address?></th>
            <th>
                <a href= "/chinh_sua_khach_hang/<?= $file -> id ?>" class="btn btn-warning text-light">Sửa</a>
                <button onclick="return confirm('bạn có chắc muốn xóa')" class="btn btn-danger" type="submit">Xóa</button>
            </th>
        </tr>
        <?php endforeach;?>
      </table>
</body>
</html>