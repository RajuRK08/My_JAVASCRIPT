<html>
<head>
<title>Welcome to JavaScript </title>
<script language="javascript">
function onsubmit_validation()
{
 if(document.form1.Name.value=="")
    {
        alert ( "Please fill ur name.");
        document.form1.Name.focus();
        return false;
    }
 if(document.form1.pass1.value =="")
    {
        alert ( "enter the password");
        document.form1.pass1.focus();
        return false;
    }
if(document.form1.pass2.value=="")
    {
        alert ( "enter the re-enter password");
        document.form1.pass2.focus();
        return false;
    }
if((document.form1.pass1.value) != (document.form1.pass2.value))
    {
        alert ("re-enter password are not same");
        document.form1.pass2.focus();
        return false;
    }
if(document.form1.Age.selectedIndex==0)
     {
        alert("Please select the age");
        return false;
     }
if(document.form1.gender[0].checked == false && document.form1.gender[1].checked == false )
   {
        alert ( "Please select the gender.");
        return false; 
   }
if(document.form1.c1.checked== false && document.form1.c2.checked== false && document.form1.c3.checked== false)
        {
        alert("select any qualification");
        return false;
		}
      
       if(document.form1.Terms.checked== false)
       {
        alert("please check the terms");
        return false;
        }
   
 var emailExp= /^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+.([a-z]+).([a-z]){2,3}$/;  
 //<!--/^([a-zA-Z0-9\._]+)@([a-zA-Z0-9])+.([a-z]+).([a-z]){2,3}$/; -->
 //<!-- /^[\w\-\.\+\!]+\@[a-zA-Z0-9\.\-]+\.[\w\-\.]{2,3}$/; -->  
 
   if(document.form1.email.value.match(emailExp))
    {
   
    }  
   else   
   {
   alert("plz enter valid email address");
   return false;
   }
   alert("Form valid");
   return true;
}
</script>
</head>
<body>
<form name="form1">
<h2><center>User Form</center></h2>
<table align="center" bgcolor="#ffee99" border="1" width="400" height="400">
<tr>
<td>
Enter ur name :
</td>
<td>
<input type="text" name="Name">
</tr>
<tr>
<td>
Enter ur Password :
</td>
<td>
<input type="password" name="pass1">
</tr>
<tr>
<td>
Re-Enter ur Password :
</td>
<td>
<input type="password" name="pass2">
</tr>
<tr>
<td>
Select ur Age :
</td>
<td>
<Select name="Age">
<option>select</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
</select>
</td>
</tr>
<tr>
<td>
Gender:
</td>
<td>
<input type="radio" name="gender" value="Male">Male
<input type="radio" name="gender" value="Female">female
</td>
</tr>
<tr>
<td>
Qualification:
</td>
<td>
<input type="checkbox" name="c1" value="B.E">B.E
<input type="checkbox" name="c2" value="B.Tech">B.Tech
<input type="checkbox" name="c3" value="M.c.A">M.C.A
</td>
</tr>
<tr>
<td>
E-Mail Address : 
</td>
<td>
<input type="text" name="email">
</td>
</tr>
<tr>
<td>
Terms:
</td>
<td>
<input type="checkbox" name="Terms" value="terms">Terms
</tr>
<tr>
<td></td>
<td><input type="button" name="s1" value="Submit" onclick="onsubmit_validation()">
<input type="Reset" name="r1" value="Reset">
</td>
</tr>
</table>
</form>
</body>
</html>