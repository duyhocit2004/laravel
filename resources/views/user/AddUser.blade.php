<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Add User</title>
</head>
<body>
    <div class="container-fluid">
    <h1>thêm khách hàng</h1>
    <form class="container-small" method="post">
      @csrf
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">id người dùng</label>
          <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
          {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">tên</label>
          <input type="text" class="form-control" id="exampleInputPassword1">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">tuổi</label>
            <input type="text" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">ngày sinh</label>
            <input type="date" class="form-control" id="exampleInputPassword1">
          </div>
          <div class="mb-3">
            <label for="disabledSelect" class="form-label">giới tính</label>
            <select id="disabledSelect" value="<?=$title["sex"]?>" class="form-select">
              <option>nam</option>
              <option>nữ</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">địa chỉ</label>
            <input type="text" class="form-control" value="<?=$title["address"]?>" id="exampleInputPassword1">
          </div>
          <div class="container d-flex justify-content-center mb-3">
            <button class="btn btn-primary w-50">Thêm khách hàng</button>
        </div>
      </form>
    </div>
</body>
</html>