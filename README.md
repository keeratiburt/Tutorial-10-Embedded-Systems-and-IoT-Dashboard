# Tutorial-9.2-Embedded-Systems-and-Dashboard
การสร้าง Dashboard ด้วยตนเองในรูปแบบ web application ใช้ทักษะในการพัฒนาเว็บไซต์


Objectives
1. เขียนโปรแกรมเพื่อสร้าง Dashboard ของตัวเองได้

Hardware
1.	ESP32                 1	        
2.	เซ็นเซอร์ตามต้องการ  		x
3.	Breadboard            1
4.	Computer	            1
5.	microUSB	            1 

Software
1. Arduino IDE v
2. Web hosting
3. Database
--------------------
Instruction

1. ดาวโหลดโฟลเดอร์ iot9.2 ซึ่งจะรวมไฟล์โค้ดทั้งหมดที่ใช้ในแลป 9.2
2. อัพโหลดโค้ดทั้งหมดลง host (infinityFree) โดยใช้ FTP ด้วยโปรแกรม FileZilla ดูข้อมูลการเชื่อมต่อ FTP ของตัวเองได้จากภาพ ![image](https://github.com/user-attachments/assets/d57dc676-6289-4c8c-a3b8-0d354ace055a)

3. แก้ไขรายละเอียดในไฟล์ con_db.php ที่อยู่ในโฟลเดอร์ pages ให้เป็นฐานข้อมูลของตัวเอง
4. หน้า dashboard จะอยู่ในไฟล์ชื่อ index.php
5. แก้ไขรายละเอียดในไฟล์ index.php ในคำสั่ง "SELECT" ให้เป็นตารางของตัวเอง

  หากเสร็จสิ้นจะต้องขึ้นข้อมูลดังภาพ ![image](https://github.com/user-attachments/assets/3030b8c1-f364-48f4-8448-b58f96afe104)

การแสดงค่าจากตัวแปร array บนหน้าเว็บ <br>
- ในการดึงค่าจากฐานข้อมูลมาใส่ในตัวแปรภาษา PHP ให้ระบุชื่อคอลัมน์ภายใน [''] ดังรูป เป็นการดึงค่าจากคอลัมน์ "temp"
- ตัวเลขใน [] คือลำดับของค่าในตัวแปร array โดยค่าแรกคือ 0 และค่าถัดไปคือ 1, 2, 3 ซึ่งค่าแรกจะเป็นค่าที่มาจาก ID หลังสุดจากคำสั่ง SELECT
<img width="376" alt="image" src="https://github.com/keeratiburt/Tutorial-10-Embedded-Systems-and-IoT-Dashboard/assets/125423996/ae7471eb-834d-44c5-b5f7-68a3d6a131fc">

หากพบปัญหา<br>
- จากตัวอย่างฐานข้อมูลของอาจารย์จะมีตารางชื่อ sensors และมีคอลัมน์ชื่อ controller_id, temp และ humid
- หาก css ไม่แสดง ให้เปลี่ยน path ของ css โดยลบ "../" ออก
- หากรูปภาพหรือไอคอนไม่แสดง ให้เปลี่ยน path ทุก path ที่มี "../" โดยให้ลบ "../"ออก
