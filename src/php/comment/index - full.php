<div id="comment-module" data-gg-clientid="377830509757-mibgdq9q3l13i25p0omftu7mbip5a7bp" data-gg-apikey="AIzaSyCrbYoIUJ5q0KObBr_pGzPnO_9_yzvegJw" data-fb-appid="792252207542136">
  <link href="dist/comment.min.css" rel="stylesheet"/>
  <script src="https://apis.google.com/js/client.js?onload=googleCallback" async="" defer=""></script>
  <script src="http://connect.facebook.net/en_US/all.js"></script>
  <script type="text/javascript">var commentURL = "comment";</script>
  <div class="media reply-box">
    <img class="d-flex mr-3" src="img/avatar.jpg" />
    <div class="media-body">
      <form class="form-reply">
        <textarea name="text" placeholder="Thêm bình luận" maxlength="500"></textarea>
        <button type="submit" name="submitForm">Gửi</button>
        <span class="counter">
          Bạn còn <strong>500</strong> ký tự còn lại
        </span>
      </form>
    </div>
  </div>
  <ul class="list-unstyled comment-list"></ul>
  <div class="no-comments">Hiện tại không có bình luận nào. Bạn hãy là người bình luận đầu tiên!</div>
  <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header bg-info text-white text-uppercase">
          <h5 class="modal-title">Thông tin của bạn</h5>
        </div>
        <form id="infoForm">
          <div class="modal-body">
            <input type="hidden" name="avatar" value="" />
            <div class="d-flex align-content-center justify-content-center">
              <button type="button" id="btnOpenFB" class="btn btn-facebook text-white mr-2 ml-2">
                <i class="fa fa-facebook mr-2"></i>
                <i class="fa fa-spinner fa-pulse fa-fw mr-2"></i>
                Facebook
              </button>
              <button type="button" id="btnOpenGG" class="btn btn-google text-white mr-2 ml-2">
                <i class="fa fa-google-plus mr-2"></i>
                <i class="fa fa-spinner fa-pulse fa-fw mr-2"></i>
                Google
              </button>
            </div>
            <hr class="mr-3 ml-3" />
            <div class="form-group">
              <label class="label">Họ tên</label>
              <input class="form-control" type="text" name="name" placeholder="Họ tên" required="" />
            </div>
            <div class="form-group">
              <label class="label">Email</label>
              <input class="form-control" type="email" name="email" placeholder="Email" required="" />
            </div>
            <div class="form-group">
              <label class="label">Số điện thoại</label>
              <input class="form-control" type="text" name="phone" placeholder="Số điện thoại" />
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Hủy</button>
            <button type="submit" class="btn btn-primary">Gửi bình luận</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <script src="dist/comment.min.js"></script>
</div>