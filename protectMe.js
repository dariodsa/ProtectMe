function protectMe()
 {
	  var myform = document.getElementById('myForm');
	  var elements=document.getElementById("myForm").elements;
	  //alert(document.getElementById("myForm").length);
	  for (var i = 0, element; element = elements[i++];) 
	  {
		  //alert(element.id+" -> "+element.value);
		  if(element.type=="button" || element.type=="submit")continue;
		  document.getElementById(element.id).style.display="none";
		  
		  if(element.id.length>0)
		  {
				document.getElementById(element.id).value=enctypeMe(element.value);
		  }
		  
	  }
	  myForm.submit();
 }
 var e=17;
 var n=3233;
 function enctypeMe(value)
 {
	var enctypedString="";
	
	for(var i=0;i<value.length;++i)
	{
		enctypedString=enctypedString+
		       addNullChar(newCharacter(value[i].charCodeAt()+i,e,n).toString(16));
	}
	
	return enctypedString;
 }
 function newCharacter(character, e, n)
 {
	var answer=1;
	for(var i=0;i<e;++i)
	{
		answer=(character%n*answer%n)%n;
	}
	return answer;
 }
 function addNullChar(value)
 {
	var len=value.length;
	var nc="";
	for(var i=len;i<4;++i)
	{
	  nc=nc+"0";
	}
	return nc+value;
 }