    <?php
    if(isset($_COOKIE['add_success'])) {
        ?>
        <script type="text/javascript">
            toastr["success"]("Thêm mới thành công", "Thông báo: ");

        </script>
        <?php 
    } else if(isset($_COOKIE['delete_success'])) {
        ?>
        <script type="text/javascript">
            toastr["success"]("Xóa thành công", "Thông báo: ");

        </script>
        <?php 
    } else if(isset($_COOKIE['edit_success'])) {
        ?>
        <script type="text/javascript">
            toastr["success"]("Sửa thành công", "Thông báo: ");

        </script>
        <?php
    } 
    ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Danh sách khách hàng</title>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https:////cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
        <link href="public/css/bootstrap.min.css" rel="stylesheet">
        <link href="public/css/font-awesome.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <link href="public/css/datepicker3.css" rel="stylesheet">
        <link href="public/css/styles.css" rel="stylesheet">

        <!--Custom Font-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    </head>

    <body>

        <?php include_once('view/layout/headerAdmin.php'); ?>

        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
            <div class="profile-sidebar">
                <div class="profile-userpic">
                    <img src="public/images/mong.jpg" class="img-responsive" alt="">
                </div>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name"><?= $_SESSION['employee']['employee_name'] ?></div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="divider"></div>
            <ul class="nav menu">
                <li><a href="?mod=admin&act=overview"><em class="fa fa-calendar">&nbsp;</em> Tổng quan</a></li>
                <li><a href="?mod=product&act=list"><em class="fa fa-calendar">&nbsp;</em> Sản phẩm</a></li>
                <li class="active"><a href="?mod=customer&act=list"><em class="fa fa-bar-chart">&nbsp;</em> Khách hàng</a></li>
                <li><a href="?mod=employee&act=list"><em class="fa fa-clone">&nbsp;</em> Nhân viên</a></li>
                <li><a href="?mod=bill&act=list"><em class="fa fa-toggle-off">&nbsp;</em> Hóa đơn</a></li>
            </ul>
        </div>

        <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
            <h2 align="center">DANH SÁCH KHÁCH HÀNG</h2>
            <hr>
            <a href="?mod=customer&act=add" class="btn btn-primary">Thêm mới</a>
            <hr>
            <table class="table table-hover" id="myTable">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>#</th>
                        <th>Tên khách hàng</th>
                        <!-- <th>Sinh nhật</th> -->
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i = 0;
                    foreach($data as $row) { 
                        $i++;
                        ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?= $row['customer_code'] ?></td>
                            <td><?= $row['customer_name'] ?></td>
                            <!-- <td><?= $row['customer_birthday'] ?></td> -->
                            <td><?= $row['customer_email'] ?></td>
                            <td><?= $row['customer_mobile'] ?></td>
                            <td><?= $row['customer_address'] ?></td>
                            <td>
                                <a href="javasript:;" class="btn btn-primary btn-show" data-id="<?= $row['customer_code'] ?>" data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-eye"></i></a>
                            <!-- <a href="?mod=customer&act=edit&code=<?= $row['customer_code'] ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                                <a href="?mod=customer&act=delete&code=<?= $row['customer_code'] ?>" class="btn btn-danger btn-delete"><i class="fas fa-trash"></i></a> -->
                            </td>
                        </tr>
                        <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>

        <div class="modal fade" id="modal-show" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Thông tin khách hàng</h5>
                    </div>
                    <div class="modal-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>Mã nhân viên: </td>
                                    <td><span id="code_detail_customer"></span></td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Tên nhân viên:</td>
                                    <td><span id="name_detail_customer"></span></td>
                                </tr>
                                <tr>
                                    <td>Sinh nhật:</td>
                                    <td><span id="birthday_detail_customer"></span></td>
                                </tr>
                                <tr>
                                    <td>Email:</td>
                                    <td><span id="email_detail_customer"></span></td>
                                </tr>
                                <tr>
                                    <td>Số điện thoại:</td>
                                    <td><span id="mobile_detail_customer"></span></td>
                                </tr>
                                <tr>
                                    <td>Địa chỉ:</td>
                                    <td><span id="address_detail_customer"></span></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
            $(document).ready(function() {
                $('#myTable').DataTable();

                $('.btn-show').on('click', function() {
                    $('#modal-show').modal('show');
                    var id = $(this).data('id');

                    $.ajax({
                        type: 'get',
                        dataType: "json",
                        url: '?mod=customer&act=detail_ajax&code=' + id,
                        success: function(reponse) {

                            $('#code_detail_customer').html(reponse.customer_code);
                            $('#name_detail_customer').html(reponse.customer_name);
                            $('#birthday_detail_customer').html(reponse.customer_birthday);
                            $('#images_customer').attr("src", "../public/img/" + reponse.customer_image + "")
                            $('#email_detail_customer').html(reponse.customer_email);
                            $('#mobile_detail_customer').html(reponse.customer_mobile);
                            $('#address_detail_customer').html(reponse.customer_address);

                        }
                    });
                });

                $('.btn-delete').click(function(e) {
                    e.preventDefault();
                    var url = $(this).attr('href');
                    console.log(url);
                    swal({
                        tittle: "Bạn có muốn xóa không.?",
                        text: "Sau khi xóa sẽ không thể khôi phục lại.!",
                        icon: "warning",
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            window.location.href = url;
                        }
                    })
                });
            });

        </script>
    </body>

</html>