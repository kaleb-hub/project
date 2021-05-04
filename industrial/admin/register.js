 function pass(){
         var pass=document.name.password.value;
      var pass1=document.name.confirm.value;
       var update=document.name.update.value;
      var name=document.name.firstname.value;
      var lname=document.name.lastname.value;
      var email=document.name.email.value;
      var gender=document.name.gender.value;
      var age=document.name.age.value;
      if(pass!=pass1)
      {
        alert("password mismatch");
        return false;
      }
      else 
      {
        return true;
      }
      if(update=="" || name=="" || lname==""|| email=="" ||pass=="" ||gender=="" ||age=="")
      {
      	alert("please fill the form");
      	return false;
      }
      else
      {
      	return true;
      }


      }