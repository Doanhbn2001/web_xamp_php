<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trang chu</title>
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cerulean/bootstrap.min.css" integrity="sha384-3fdgwJw17Bi87e1QQ4fsLn4rUFqWw//KU0g8TvV6quvahISRewev6/EocKNuJmEw" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootlint@1.1.0/dist/browser/bootlint.min.js" integrity="sha384-D0zT3yu3RBG+Jc54wtMtxDEyZGWfa30nEkS/o2AyBZUOmIpezYYjBLZjUetRV3iG" crossorigin="anonymous"></script>
</head>
<body>
  <?php require('header.php') ?>
  <br>
  <?php foreach ($dulieukq as $key => $value): ?>
  <div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-4">
        <div class="card">
          <img src="<?php echo $value['anhavatar'] ?>" class="card-img-top" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title ten"><b><?php echo $value['ten'] ?></b></h5>
            <p class="card-text tuoi"><b>Tuổi: <?php echo $value['tuoi'] ?></b></p>
            <p class="card-text sdt"><b>Tel: <?php echo $value['sdt'] ?></b></p>
            <p class="card-text tuoi"><b>Số đơn hàng : <?php echo $value['sodonhang'] ?></b></p>
            <p class="card-text linkfb"><a href="<?php echo $value['linkfb'] ?>" class='btn btn-secondary btn-sm'> Facebook <i class="fa fa chevron-right"></i></a></p>
          </div>
       </div>
       </div>  
    </div>
  </div>
  <div class="container">
    <div >
      <h3 class="text-xl-center display-4">Sửa nhân sự</h3>
      <hr>
    </div>
  </div>
  <div class="container">
    <form class="form-group" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/controller/update_nhansu">
      <div class="form-grop row">
      <div class="col-md-6">
        <label for="Anhavarta" class="form-label">Ảnh đại diện</label>
        <input type="file" class="form-control" id="Anhavarta" name="anhavatar" placeholder="Upload anh">
      </div>
      <div class="col-md-6">
        <label for="Ten" class="form-label">Tên</label>
        <input type="text" class="form-control" id="Ten" name="ten" placeholder="Vd:Jayce">
      </div>
      </div>
      <div class="form-grop row">
      <div class="col-6">
        <label for="Tuoi" class="form-label">Tuổi</label>
        <input type="text" class="form-control" id="Tuoi" placeholder="Vd:20" name="tuoi">
      </div>
      <div class="col-6">
        <label for="Sdt" class="form-label">Số điện thoại</label>
        <input type="text" class="form-control" id="Sdt" placeholder="Vd:090909090909" name="sdt">
      </div>
      </div>
      <div class="form-grop row">
      <div class="col-md-6">
        <label for="Sodonhang" class="form-label">Số đơn hàng</label>
        <input type="text" class="form-control" id="Sodonhang" name="sodonhang">
      </div>
      <div class="col-md-6">
        <label for="Linkfb" class="form-label">Link Facebook:</label>
        <input type="link" class="form-control" id="Linkfb" name="linkfb">
      </div>
      </div>
      <br>
      <div class="col-12 text-center">
        <button type="submit" class="btn btn-primary">Lưu</button>
      </div>
      <input type="hidden" name="id" value="<?php echo $value['id'] ?>">
    </form>
    <?php endforeach ?>
</div>
</body>
</html>