# laravel

#Table articles :
articol_id – identificator <br>
title – Titlu articolului <br>
description – Descriere articol. <br>
image – imaginea articolului<br>
text – Textul articolului<br>
send_to_admin_email – Indicator ca acest articol trebuie trimis pe email administratorului<br>
sent_to_admin_email – Indicator ca acest articol a fost trimis cu Jobs pe email administratorului.<br>
user_id – Article author<br>
created_at<br>
updated_at<br>
Fiecare articol il poate posta doar utilizatorii inregistrati. Deci folosim Auth service Laravel.<br>
<br>
#Routes:<br>
Adaugare articol:<br>
GET /articles/add<br>
Editare articol:<br>
GET /articles/edit/<articol_id><br>
Salvare articol:<br>
POST /articles/save<br>
Modificare articol:<br>
PUT /articles/update/<articol_id><br>
Vizualiare articole (lista):  cu toate detaliile fiecarui articol<br>
GET /articles<br>
Vizualizare articol cu toate detaliile articolului<br>
GET /articles/<articol_id><br>
<br>
****La fiecare adaugare sau modificare a unui articol, daca checkbox este selectat pentru a notifica administratorul sa fie trimis pe email administatorului (administrator@site.com ) o notificare ca a fost adaugat sau salvat un articol + detalii despre articol + url catre articol cu JobsEvent(Queue).

<H3>Cind cream un articol email automat este livrat catre @ adresa setata in .env (pentru asta va trebui setat smpt server:local sau in cazul meu am folosit smpt sendgrid ca sa monotorizez statistica in test)  </H3>

<img src="sendgrid.png">
