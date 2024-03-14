# Tutorial-10-Embedded-Systems-and-Dashboard
การใช้งาน RFID (Radio Frequency Identification)


Objectives
1. เขียนโปรแกรมเพื่อสร้าง Dashboard ของตัวเองได้

Hardware
1.	ESP32                 1	        
2.	เซ็นเซอร์ตามต้องการ  		1
3.	Breadboard            1
4.	Computer	            1
5.	microUSB	            1 

Software
1. Arduino IDE v
2. Web hosting
3. Database
--------------------
Instruction

1. ดาวโหลดโฟลเดอร์ iot10 ซึ่งจะรวมไฟล์โค้ดทั้งหมดที่ใช้ในแลป 10
2. อัพโหลดโค้ดทั้งหมดลง 000webhost ในหน้า File Manager ดังภาพ <img width="1386" alt="image" src="https://github.com/keeratiburt/Tutorial-10-Embedded-Systems-and-IoT-Dashboard/assets/125423996/3ac6dc14-5c83-4ac3-9a82-ee1547e133a7">

3. แก้ไขรายละเอียดในไฟล์ con_db.php ที่อยู่ในโฟลเดอร์ pages ให้เป็นฐานข้อมูลของตัวเอง
4. หน้า dashboard จะอยู่ในไฟล์ชื่อ index.php
5. แก้ไขรายละเอียดในไฟล์ index.php ในคำสั่ง "SELECT" ให้เป็นตารางของตัวเอง

การแสดงค่าจากตัวแปร array บนหน้าเว็บ
- ในการดึงค่าจากฐานข้อมูลมาใส่ในตัวแปรภาษา PHP ให้ระบุชื่อคอลัมน์ภายใน [''] ดังรูป เป็นการดึงค่าจากคอลัมน์ "temp"
- ตัวเลขใน [] คือลำดับของค่าในตัวแปร array โดยค่าแรกคือ 0 และค่าถัดไปคือ 1, 2, 3 ซึ่งค่าแรกจะเป็นค่าที่มาจาก ID หลังสุดจากคำสั่ง SELECT
<img width="376" alt="image" src="https://github.com/keeratiburt/Tutorial-10-Embedded-Systems-and-IoT-Dashboard/assets/125423996/ae7471eb-834d-44c5-b5f7-68a3d6a131fc">

