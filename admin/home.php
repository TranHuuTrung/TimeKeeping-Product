<?php include("includes/header.php") ?>
        <!-- include navleft co lien quan den row -->
        <?php include("includes/navleft.php")?>
        <div class="alert breadcrumb-tab">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                        <i class="fa fa-home"></i>
                        <a href="#">Home</a>
                    </li>
                </ol>
            </nav>
        </div>
        <div id="main" class="content-main controduction-app col-xs-7 col-sm-10 col-md-10 col-lg-10">
         
            <div class="row text-center">
                <div class="alert alert-success col-sm-6 col-sm-offset-3 col-md-6 col-lg-6">
                    <h1> Đồ Án Vi Điều Khiển </h1>
                    <br/>
                    <strong>TimeKeeping-Product</strong>
                </div>
            </div>
    
            <div class="content-introduce">
                <div class="paragraph mb-15">
                    <span class="item-content">1. Tên Đề tài</span>
                    <p>Chấm công hay điểm danh nhân viên bằng quét thẻ từ.</p>
                </div>
                <div class="paragraph mb-15">
                    <span class="item-content">2. Mô tả đề tài:  </span> 
                    <p>Hệ thống điểm danh tự động bằng thẻ từ: giúp quá trình quản lý nhân sự của công ty,
                    quản lí giáo viên, quản lý học sinh sinh viên trong trường học, vị trí của đối tượng quản lý được dễ dàng nhanh chóng và chính xác, giúp nâng cao hiệu quả quản lý nhân sự của công ty, của nhà trường đối với học sinh sinh viên về mọi mặt của công tác đào tạo và quản lý con người. Các sự kiện vắng mặt, điểm danh, truy xét địa điểm vị trí. được dễ dàng hiển thị trên hệ thống một cách tức thời và chính xác. Mỗi nhân viên, học sinh sinh viên chỉ cần đeo 1 tag hoặc thẻ RFID, tại các vị trí trong công ty,
                    nhà trường phủ sóng RFID là dễ dàng có thể đem lại kết quả quản lý như mong muốn.</p>
                </div>
                <div class="paragraph mb-15">
                    <span class="item-content">3. Các thành phần</span>
                    <ul>
                        <li> - Module đọc thẻ từ</li>
                        <li> - Wemos D1 Uno</li>
                        <li> - Hệ thống xử lí, website, server</li>
                    </ul>
                </div>
                <div class="paragraph mb-15">
                    <span class="item-content"> 4.	Mục tiêu Đồ án:</span>
                    <ul>
                        <li> - Sản phẩm cuối cùng:<br/>
                        Hệ thống điểm danh hằng ngày áp dụng cho các công ty,
                        trường học, giúp việc quản lí nhân sự và học sinh, sinh viên có hiệu quả.
                        </li>
                        <li> - Tính năng:
                            <ul class="sub-item-content">
                                <li> + Điểm danh tự động bằng thẻ từ.</li>
                                <li> + Thống kê thông tin về số lần vắng hoặc trễ của tất cả nhân viên, sinh viên.</li>
                                <li> + Phân quyền xem thông tin của các user login vào.</li>
                            </ul>
                        </li>
                        <li> - Yêu cầu:
                            <ul class="sub-item-content">
                                <li> + Dễ sử dụng, ổn định, đa chức năng.</li>
                                <li> + Hệ thống đọc thẻ từ, thu phát RFID, module ESP8266…. Sử dụng vi điều khiển.</li>
                                <li> + Giá thành rẻ, dễ dàng lắp đặt.</li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <div class="paragraph mb-15">
                    <span class="item-content">5. Phương thức hoạt động của hệ thống</span>
                    <ul>
                        <li>
                         - Mỗi nhân viên, HSSV sẽ được cấp một thẻ RFID chứa mã số, thông tin của nhân viên, HSSV đó. Các thẻ này có thể được thiết kế dưới dạng thẻ nhân viên, thẻ trường học,
                        thẻ HSSV, gắn lên cặp, quần áo hoặc vòng đeo... cho người sử dụng.</li>
                        <li>
                         - Các đầu đọc RFID và Ăng-ten sẽ được gắn ở một 1 vị thuận lợi trong công ty hoặc trường học, những nơi quan trọng, đảm bảo phủ sóng toàn bộ khuôn viên của công ty,
                        trường học cần quản lý nhân sự, HSSV.
                        </li>
                        <li>
                         - Đưa toàn bộ dữ liệu lên server để lưu lại, phục vụ thống kê.
                        </li>
                        <li>
                         - Thông qua hệ thống phần mềm website quản lý sẽ giúp quản lí nhân sự hay HSSV và những bộ phận liên quan biết được việc có mặt hay vắng mặt của nhân viên, HSSV, biết được những nhân viên, HSSV đi trễ hay vị trí của HSSV... tăng hiệu quả hoạt động của công ty nhà trường và giáo dục HSSV.
                        Tuy nhiên hệ thống sẽ không quản lý nếu một HSSV nào đó đã rời khỏi trường học.
                        </li>
                    </ul>
                </div>  
            </div>
            
        </div>
    </div><!-- end wrap main -->
    <!-- footer included -->
<?php include("includes/footer.php") ?>