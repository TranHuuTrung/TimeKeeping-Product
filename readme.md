# TimeKeeping-Product
Đồ Án Vi Điều Khiển 

1. Tên Đề tài
  Chấm công hay điểm danh nhân viên bằng quét thẻ từ.
2. Mô tả đề tài: 
  Hệ thống điểm danh tự động bằng thẻ từ: giúp quá trình quản lý nhân sự của công ty, quản lí giáo viên, quản lý học sinh sinh viên trong trường học, vị trí của đối tượng quản lý được dễ dàng nhanh chóng và chính xác, giúp nâng cao hiệu quả quản lý nhân sự của công ty, của nhà trường đối với học sinh sinh viên về mọi mặt của công tác đào tạo và quản lý con người. Các sự kiện vắng mặt, điểm danh, truy xét địa điểm vị trí. được dễ dàng hiển thị trên hệ thống một cách tức thời và chính xác. Mỗi nhân viên, học sinh sinh viên chỉ cần đeo 1 tag hoặc thẻ RFID, tại các vị trí trong công ty, nhà trường phủ sóng RFID là dễ dàng có thể đem lại kết quả quản lý như mong muốn.
3. Các thành phần
  - Module đọc thẻ từ
  - Wemos D1 Uno
  - Hệ thống xử lí, website, server
4.	Mục tiêu Đồ án:
  -	Sản phẩm cuối cùng:
    Hệ thống điểm danh hằng ngày áp dụng cho các công ty, trường học, giúp việc quản lí nhân sự và học sinh, sinh viên có hiệu quả.
  -	Tính năng:
    + Điểm danh tự động bằng thẻ từ.
    + Thống kê thông tin về số lần vắng hoặc trễ của tất cả nhân viên, sinh viên.
    + Phân quyền xem thông tin của các user login vào.
  -	Yêu cầu:
    + Dễ sử dụng, ổn định, đa chức năng.
    + Hệ thống đọc thẻ từ, thu phát RFID, module ESP8266…. Sử dụng vi điều khiển.
    + Giá thành rẻ, dễ dàng lắp đặt.
5.	Phương thức hoạt động của hệ thống
  - Mỗi nhân viên, HSSV sẽ được cấp một thẻ RFID chứa mã số, thông tin của nhân        viên, HSSV đó. Các thẻ này có thể được thiết kế dưới dạng thẻ nhân viên, thẻ trường học, thẻ HSSV, gắn lên cặp, quần áo hoặc vòng đeo... cho người sử dụng.
  - Các đầu đọc RFID và Ăng-ten sẽ được gắn ở một 1 vị thuận lợi trong công ty hoặc trường học, những nơi quan trọng, đảm bảo phủ sóng toàn bộ khuôn viên của công ty, trường học cần quản lý nhân sự, HSSV.
  - Đưa toàn bộ dữ liệu lên server để lưu lại, phục vụ thống kê.
  - Thông qua hệ thống phần mềm website quản lý sẽ giúp quản lí nhân sự hay HSSV và những bộ phận liên quan biết được việc có mặt hay vắng mặt của nhân viên, HSSV, biết được những nhân viên, HSSV đi trễ hay vị trí của HSSV... tăng hiệu quả hoạt động của công ty nhà trường và giáo dục HSSV. Tuy nhiên hệ thống sẽ không quản lý nếu một HSSV nào đó đã rời khỏi trường học.



<!-- 
<?php
   $server_username = "id2881520_14081997hs";
   $server_password ="centralpart";
   $server_host="localhost";
   $database="id2881520_rfidsystem";

   $connect = mysqli_connect($server_host, $server_username, $server_password, $database);
   mysqli_query($connect,"SET NAMES 'UTF8'");
   if(!$connect){
    echo "not connect to databse".mysqli_connect_error();
   }

?> -->
