#ตั้งค่า  Mail
You can send mail from localhost with sendmail package , sendmail package is inbuild in XAMPP. So if you are using XAMPP then you can easily send mail from localhost.

for example you can configure C:\xampp\php\php.ini and c:\xampp\sendmail\sendmail.ini for gmail to send mail.

in C:\xampp\php\php.ini find extension=php_openssl.dll and remove the semicolon from the beginning of that line to make SSL working for gmail for localhost.

in php.ini file find [mail function] and change

SMTP=smtp.gmail.com
smtp_port=587
sendmail_from = my-gmail-id@gmail.com
sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
Now Open C:\xampp\sendmail\sendmail.ini. Replace all the existing code in sendmail.ini with following code

[sendmail]

smtp_server=smtp.gmail.com
smtp_port=587
error_logfile=error.log
debug_logfile=debug.log
auth_username=my-gmail-id@gmail.com
auth_password=my-gmail-password
force_sender=my-gmail-id@gmail.com
Now you have done!! create php file with mail function and send mail from localhost.

PS: don't forgot to replace my-gmail-id and my-gmail-password in above code. Also, don't forget to remove duplicate keys if you copied settings from above. For example comment following line if there is another sendmail_path : sendmail_path="C:\xampp\mailtodisk\mailtodisk.exe" in the php.ini file

Also remember to restart the server using the XAMMP control panel so the changes take effect.


#ตัวอย่างเว็บ

http://www.okdstore.com/