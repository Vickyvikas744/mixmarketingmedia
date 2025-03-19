--- 
customlog: 
  - 
    format: combined
    target: /etc/apache2/logs/domlogs/mixmarketingmedia.com
  - 
    format: "\"%{%s}t %I .\\n%{%s}t %O .\""
    target: /etc/apache2/logs/domlogs/mixmarketingmedia.com-bytes_log
documentroot: /home/mixmarke/public_html
group: mixmarke
hascgi: 1
homedir: /home/mixmarke
ip: 65.108.232.153
owner: shivayhost
phpopenbasedirprotect: 1
port: 80
scriptalias: 
  - 
    path: /home/mixmarke/public_html/cgi-bin
    url: /cgi-bin/
serveradmin: webmaster@mixmarketingmedia.com
serveralias: mail.mixmarketingmedia.com www.mixmarketingmedia.com
servername: mixmarketingmedia.com
usecanonicalname: 'Off'
user: mixmarke
