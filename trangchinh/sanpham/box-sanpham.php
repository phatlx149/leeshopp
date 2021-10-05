 <!-- Start Slide-show -->
 <div class="list-slide">
   <div class="slide-show">
     <input type="radio" name="r1" id="r1" checked />
     <input type="radio" name="r1" id="r2" />
     <input type="radio" name="r1" id="r3" />
     <input type="radio" name="r1" id="r4" />
     <input type="radio" name="r1" id="r5" />
     <div class="slide s1">
       <img src="<?= $CONTENT_URL ?>/img/slide-1.jpg" alt="" />
     </div>
     <div class="slide">
       <img src="<?= $CONTENT_URL ?>/img/slide-2.jpg" alt="" />
     </div>
     <div class="slide">
       <img src="<?= $CONTENT_URL ?>/img/slide-3.jpg" alt="" />
     </div>
     <div class="slide">
       <img src="<?= $CONTENT_URL ?>/img/slide-4.jpg" alt="" />
     </div>
     <div class="slide">
       <img src="<?= $CONTENT_URL ?>/img/slide-5.jpg" alt="" />
     </div>
     <div class="navigation-auto">
       <div class="auto-btn1"></div>
       <div class="auto-btn2"></div>
       <div class="auto-btn3"></div>
       <div class="auto-btn4"></div>
       <div class="auto-btn5"></div>
     </div>
     <div class="navigation">
       <label for="r1" class="bar"></label>
       <label for="r2" class="bar"></label>
       <label for="r3" class="bar"></label>
       <label for="r4" class="bar"></label>
       <label for="r5" class="bar"></label>
     </div>
   </div>
 </div>
 <!-- End Slide-show -->
 <div class="text-topsp">
   <h2>Top sản phẩm được yêu thích</h2>
 </div>
 <div class="list-item">
   <?php $topsp = top10SP() ?>
   <?php foreach ($topsp as $topsanpham) { ?>
     <div class="box-sp">
       <div class="img">
         <a href="?page=chitietsp&idSanPham=<?= $topsanpham['idSanPham'] ?>"> <img src="../<?= $topsanpham['urlHinh'] ?>" alt="" /></a>
       </div>
       <div class="text_name-item">
         <a href="">
           <p><?= $topsanpham['tenSanPham'] ?></p>
         </a>

       </div>
       <div class="text-price">
         <p>Giá: <?= number_format($topsanpham['donGia']) ?>đ</p>
         <p style="color: #dedede"></p>
       </div>
     </div>
   <?php } ?>
   <!-- <div class="box-sp">
    <div class="img">
      <a href=""> <img src="./img/hinh1.jpg" alt="" /></a>
    </div>
    <div class="text_name-item">
      <a href="">
        <p>Cap gegeen basic</p>
      </a>
    </div>
    <div class="text-price">
      <p>130.000đ</p>
      <p style="color: #dedede"><del>150.000đ</del></p>
    </div>
  </div>
  <div class="box-sp">
    <div class="img">
      <a href=""> <img src="./img/hinh1.jpg" alt="" /></a>
    </div>
    <div class="text_name-item">
      <a href="">
        <p>Cap gegeen basic</p>
      </a>
    </div>
    <div class="text-price">
      <p>130.000đ</p>
      <p style="color: #dedede"><del>150.000đ</del></p>
    </div>
  </div>
  <div class="box-sp">
    <div class="img">
      <a href=""> <img src="./img/hinh1.jpg" alt="" /></a>
    </div>
    <div class="text_name-item">
      <a href="">
        <p>Cap gegeen basic</p>
      </a>
    </div>
    <div class="text-price">
      <p>130.000đ</p>
      <p style="color: #dedede"><del>150.000đ</del></p>
    </div>
  </div>
  <div class="box-sp">
    <div class="img">
      <a href=""> <img src="./img/hinh1.jpg" alt="" /></a>
    </div>
    <div class="text_name-item">
      <a href="">
        <p>Cap gegeen basic</p>
      </a>
    </div>
    <div class="text-price">
      <p>130.000đ</p>
      <p style="color: #dedede"><del>150.000đ</del></p>
    </div>
  </div>
  <div class="box-sp">
    <div class="img">
      <a href=""> <img src="./img/hinh1.jpg" alt="" /></a>
    </div>
    <div class="text_name-item">
      <a href="">
        <p>Cap gegeen basic</p>
      </a>
    </div>
    <div class="text-price">
      <p>130.000đ</p>
      <p style="color: #dedede"><del>150.000đ</del></p>
    </div>
  </div>
  <div class="box-sp">
    <div class="img">
      <a href=""> <img src="./img/hinh1.jpg" alt="" /></a>
    </div>
    <div class="text_name-item">
      <a href="">
        <p>Cap gegeen basic</p>
      </a>
    </div>
    <div class="text-price">
      <p>130.000đ</p>
      <p style="color: #dedede"><del>150.000đ</del></p>
    </div>
  </div>
  <div class="box-sp">
    <div class="img">
      <a href=""> <img src="./img/hinh1.jpg" alt="" /></a>
    </div>
    <div class="text_name-item">
      <a href="">
        <p>Cap gegeen basic</p>
      </a>
    </div>
    <div class="text-price">
      <p>130.000đ</p>
      <p style="color: #dedede"><del>150.000đ</del></p>
    </div>
  </div>
  <div class="box-sp">
    <div class="img">
      <a href=""> <img src="./img/hinh1.jpg" alt="" /></a>
    </div>
    <div class="text_name-item">
      <a href="">
        <p>Cap gegeen basic</p>
      </a>
    </div>
    <div class="text-price">
      <p>130.000đ</p>
      <p style="color: #dedede"><del>150.000đ</del></p>
    </div>
  </div>
  <div class="box-sp">
    <div class="img">
      <a href=""> <img src="./img/hinh1.jpg" alt="" /></a>
    </div>
    <div class="text_name-item">
      <a href="">
        <p>Cap gegeen basic</p>
      </a>
    </div>
    <div class="text-price">
      <p>130.000đ</p>
      <p style="color: #dedede"><del>150.000đ</del></p>
    </div>
  </div>
  <div class="box-sp">
    <div class="img">
      <a href=""> <img src="./img/hinh1.jpg" alt="" /></a>
    </div>
    <div class="text_name-item">
      <a href="">
        <p>Cap gegeen basic</p>
      </a>
    </div>
    <div class="text-price">
      <p>130.000đ</p>
      <p style="color: #dedede"><del>150.000đ</del></p>
    </div>
  </div>
  <div class="box-sp">
    <div class="img">
      <a href=""> <img src="./img/hinh1.jpg" alt="" /></a>
    </div>
    <div class="text_name-item">
      <a href="">
        <p>Cap gegeen basic</p>
      </a>
    </div>
    <div class="text-price">
      <p>130.000đ</p>
      <p style="color: #dedede"><del>150.000đ</del></p>
    </div>
  </div> -->
 </div>
 <div class="phantrang">

 </div>
 <script>
   var counter = 1;
   setInterval(function() {
     document.getElementById('r' + counter).checked = true;
     counter++;
     if (counter > 5) {
       counter = 1;
     }
   }, 3000)
 </script>