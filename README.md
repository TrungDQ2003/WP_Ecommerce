Hướng dẫn deploy Website lên nền tảng của InfinityFree
B1: Đăng ký TK trên InfinityFree
![image_2024-06-06_082037640](https://github.com/TrungDQ2003/WP_Ecommerce/assets/129701793/03bc31a9-cb21-4ee3-a99d-128e389908a0)
B2: Nhấp tạo tài khoản hosting, sau đó chọn phương án hosting tùy vào nhu cầu
![image_2024-06-06_082316871](https://github.com/TrungDQ2003/WP_Ecommerce/assets/129701793/d710f41f-9452-4bfa-9cd1-dd922edded21)
B3: Tạo domain name
![image_2024-06-06_082415660](https://github.com/TrungDQ2003/WP_Ecommerce/assets/129701793/902696bf-446f-4773-bc49-ad4ed45b0cca)
B4:Thiết lập thông tin cho label của website và các thông tin liên quan đến FTP... Sau đó nhấn Create Account
![image_2024-06-06_082632314](https://github.com/TrungDQ2003/WP_Ecommerce/assets/129701793/0f33dea0-db20-498a-8c00-10efdb5e3fd5)
B5: Thông báo tạo thành công, sau đó nhấn Finish
![image_2024-06-06_082804951](https://github.com/TrungDQ2003/WP_Ecommerce/assets/129701793/8ba930d1-e775-4b48-b788-956982ea0149)
B6: Trong bảng điều khiển của InfinityFree nhấn vào biểu tượng File Manager để thiết lập
![image_2024-06-06_083031678](https://github.com/TrungDQ2003/WP_Ecommerce/assets/129701793/2125bdee-8047-4b6a-89d0-a702437124fc)
B7:Add source code trên github vào file htdoc (lưu ý: hãy vào file htdoc rồi mới add source code)
![image_2024-06-06_083204475](https://github.com/TrungDQ2003/WP_Ecommerce/assets/129701793/275b587c-dc14-423d-97fe-863ce7b4faf0)
B8: Quay trở lại bảng điều khiển sau đó nhấn vào mục MySQL Database để thiết lập cơ sở dữ liệu, sau đó nhấn vô biểu tượng Create Database
![image_2024-06-06_083456605](https://github.com/TrungDQ2003/WP_Ecommerce/assets/129701793/48b74b91-140a-4cda-9ba5-8fdb6c3ad491)
B9: Sau khi tạo xong database nhấn vào biểu tượng phpMyAdmin để tiến hành thêm dữ liệu
![image_2024-06-06_083636179](https://github.com/TrungDQ2003/WP_Ecommerce/assets/129701793/4a4f4b24-435d-4890-a965-134b3aa8e335)
B10: Sau khi truy cập vào phpMyAdmin, import sql file để lấy CSDL
![image_2024-06-06_083816754](https://github.com/TrungDQ2003/WP_Ecommerce/assets/129701793/5889e3a0-b028-4ef4-8460-c70a4feb8056)
B11: Sau khi tạo được các bảng cho CSDL, tiến hành thay đổi tên miền website trong database sang tên miền của bạn(truy cập vào bảng wp6g_users và bảng wp6g_options thay đổi url của CSDL sang url mà bạn đã tạo lúc nãy)
![image_2024-06-06_084803013](https://github.com/TrungDQ2003/WP_Ecommerce/assets/129701793/72fcffd9-0cfb-4a51-80fd-51b538f5681b)
![image_2024-06-06_084914625](https://github.com/TrungDQ2003/WP_Ecommerce/assets/129701793/3fa9b0a4-0bf7-4411-9f59-feb1360c48f4)

Sau khi hoàn thành các bước trên nếu website đã hoạt động tức là việc deploy đã thành công!!!
