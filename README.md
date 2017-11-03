# ProtectMe
Protects your (GET || POST) data <br>
This library helps you to protect your data if you can't use HTTPS standard. Library use RSA encryption to encrypt your data and to send them protected over the network. <br>
After that they are decrypted ( just like in IP protocol ) using the RSA decrpytion. <br>
The library is still in under construction, but there are some instruction how to use it.<br>
#Example<br>                                                                                  
`<form id="myForm" name="myForm" action="action.php" method="GET" onsubmit="protectMe()">`<br>
You just add event onsubmit and say that you want to call Java Script method protectMe() .<br>
Your inputs must have their names and id, like in the next example.<br>
`<input type="text" name="username" id="username" value="user1">`<br>
In the backend you need to use this part of the code.<br>
Going to be added
