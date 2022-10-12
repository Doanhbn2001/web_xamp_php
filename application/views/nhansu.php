<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cerulean/bootstrap.min.css" integrity="sha384-3fdgwJw17Bi87e1QQ4fsLn4rUFqWw//KU0g8TvV6quvahISRewev6/EocKNuJmEw" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.0/font/bootstrap-icons.css" integrity="sha384-ejwKkLla8gPP8t2u0eQyL0Q/4ItcnyveF505U0NIobD/SMsNyXrLti6CWaD0L52l" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootlint@1.1.0/dist/browser/bootlint.min.js" integrity="sha384-D0zT3yu3RBG+Jc54wtMtxDEyZGWfa30nEkS/o2AyBZUOmIpezYYjBLZjUetRV3iG" crossorigin="anonymous"></script>
</head>
<body>
  <?php require('header.php') ?>
  <div class="container">
    <div class="text-xl-center">
      <h3 class="display-4">Danh sách nhân sự</h3>
    </div>
   </div>
  <div class="container">
    <div class="row">
      
        <?php foreach ($mangketqua as $key => $value): ?>
        <div class="col-sm-4">
        <div class="card">
          <img src="<?php echo $value['anhavatar'] ?>" class="card-img-top" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title ten"><b><?php echo $value['ten'] ?></b></h5>
            <p class="card-text tuoi"><b>Tuổi: <?php echo $value['tuoi'] ?></b></p>
            <p class="card-text sdt"><b>Tel: <?php echo $value['sdt'] ?></b></p>
            <p class="card-text tuoi"><b>Số đơn hàng : <?php echo $value['sodonhang'] ?></b></p>
            <p class="card-text linkfb"><a href="<?php echo $value['linkfb'] ?>" class='btn btn-secondary btn-sm'> Facebook <i class="fa fa chevron-right"></i></a></p>
            <p class="card-text">
            <a href="<?php echo base_url()?>index.php/controller/xoa_nhansu/<?php echo $value['id'] ?>" class="btn btn-warning btn-xl"><i class="bi bi-calendar-x-fill"></i>Xóa</a>
            <a href="<?php echo base_url() ?>index.php/controller/sua_nhansu/<?php echo $value['id'] ?>" class="btn btn-outline-danger btn-xl"><i class="bi bi-vector-pen"></i>Sửa</a>
            </p>
          </div>
       </div>
       </div>  
       <?php endforeach ?>


      
    </div>
  </div>
	<div class="container">
    <div >
      <h3 class="text-xl-center display-4">Thêm nhân sự mới</h3>
      <hr>
    </div>
  </div>
  <div class="container">
    <!-- <form class="form-group" method="post" enctype="multipart/form-data" action="<?php //echo base_url(); ?>index.php/controller/nhansu_add"> -->
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
        <button type="button" class="btn btn-primary nutxulyajax">Thêm mới</button>
        <button type="reset" class="btn btn-outline-danger">Nhập lại</button>
      </div>
    <!-- </form> -->
</div>
<script>
  $.ajax({
    url: '/controller/ajax_add',
    type: 'POST',
    dataType: 'json',
    data: {param1: 'value1'},
  })
  .done(function() {
    console.log("success");
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
  
</script>
</body>
</html>