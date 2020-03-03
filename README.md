# Login and Registration System

<h2>Server Requirements:</h2>
<ul>
  <li>PHP</li>
  <li>mySQL</li>
  <li>5 MB</li>
 </ul>
<hr>
<h2>How Does it work?</h2>
<p>When openning <b>index.php</b>, The system checks if the person has an encoded login info in the cookies, if not, it will redirect to the login page. when <u>login button</u> is pressed, it will send the info via <b>POST</b> method to the <u>log.php</u> which will try find the email in the database, if it's found it will then check if the password of the email in the database is exactly the same as the one entered, if so, it will save the login, if not it will redirect to the <u>log_error.php</u> where it will say that login info is invaild. for <b>registing</b>, the info written in the registraion page will be sent via <b>POST</b> method to the <u>reg.php</u> which will check if email is already in the database, if not it will save it, if email is there, it will redirect to <u>reg_error.php</u>.</p>
<hr>
<h2>How to start?</h2>
<p>Simply, paste the above codes in your website, change <b>index.php</b> to the file you want people to login to use. <b>change</b> database information in <b>reg.php and log.php</b></p>
<hr>
<h2>Live Preview:</h2>
<a href="http://pocket-team.epizy.com/test/login-system/">Try now!</a>
<hr>
<h2>Need Help?</h2>
<a href="http://pocket-inc.ml/support">Send a message</a><br>
<a href="http://pocket-inc.ml/forum">Ask us on the Forum</a><br>
<a href="emailto:support@pocket-inc.ml">support@pocket-inc.ml</a><br>
<hr>
<a href="http://pocket-inc.ml">&copy; 2020 by Pocket, Inc. All Rights Reserved.</a>
