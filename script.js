



function validator(regex,inputField){
	if(regex.test(inputField)){
		return true;
	}
	return false;
}


function strengthOf(str){
	var strength = 0;
	if(str.match(/[a-z]/)){
		strength += 1;
		//alert('cp1');
	}
	if(str.match(/[A-Z]/)){
		strength += 1;
		//alert('cp2');
	}
	if(str.match(/[0-9]/)){
		strength += 1;
		//alert('cp3');
	}
	var FLAG=false;
	var regex = /^[!@#$%\^&*)(+=._-]*$/;
	for(var i=0;i<str.length;i++){
		if(str[i]==' '){
			FLAG=true;
			break;
		}
	}
	if(FLAG || str.match(regex)){
		strength += 1;
		//alert('cp4');
	}
	//alert(strength);
	return strength;
}


function validatePhotoUpload(fileName){
    var allowed_extensions = new Array("jpg","png","jpeg");
    var file_extension = fileName.split('.').pop().toLowerCase(); // split function will split the filename by dot(.), and pop function will pop the last element from the array which will give you the extension as well. If there will be no extension then it will return the filename.
    for(var i = 0; i <= allowed_extensions.length; i++)
    {
        if(allowed_extensions[i]==file_extension)
        {
            return true; // valid file extension
        }
    }
    return false;
}

function formValidator(){
	var check=true;
	var name = document.getElementById('name').value;
	var mobile = document.getElementById('mobile').value;
	var email = document.getElementById('email').value;
	var roll = document.getElementById('roll').value;
	var room = document.getElementById('room').value;
	var hostel = document.getElementById('hostel').value;
	var course = document.getElementById('course').value;
	var branch = document.getElementById('branch').value;
	var pass = document.getElementById('password').value;
	var repass = document.getElementById('rePassword').value;
	var question = document.getElementById('question').value;
	var answer = document.getElementById('answer').value;
	var photo = document.getElementById('photo').value;

	var reg = /^[A-Za-z\. ]+$/;
	if(name.length<8 && !(validator(reg, name))){
		check = false;
		document.getElementById("name").style.borderColor = "red";
	}else{
		document.getElementById("name").style.borderColor = "lime";
	}


	if(isNaN(mobile) || mobile.length!=10 || mobile[0]=='0'){
		check = false;
		document.getElementById("mobile").style.borderColor = "red";
	}else{
		document.getElementById("mobile").style.borderColor = "lime";
	}


	var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
	var ampersendIndex = email.indexOf("@") + 1;
	//alert(ampersendIndex);
    if (reg.test(email)==false || !(isNaN(email[0])) || !(isNaN(email[ampersendIndex]))) 
    {
    	check = false;
        document.getElementById("email").style.borderColor = "red";
	}else{
		document.getElementById("email").style.borderColor = "lime";
	}


	reg = /^[A-Za-z0-9]+$/;
	if(validator(reg, roll)==false || roll.length==0){
		check = false;
		document.getElementById("roll").style.borderColor = "red";
	}else{
		document.getElementById("roll").style.borderColor = "lime";
	}


	if(validator(reg, room)==false || room.length==0){
		check = false;
		document.getElementById("room").style.borderColor = "red";
	}else{
		document.getElementById("room").style.borderColor = "lime";
	}


	reg = /^[A-Za-z ]+$/;
	if(validator(reg, hostel)==false || hostel.length==0){
		check = false;
		document.getElementById("hostel").style.borderColor = "red";
	}else{
		document.getElementById("hostel").style.borderColor = "lime";
	}


	reg = /^[A-Za-z0-9\. ]+$/;
	if(validator(reg, course)==false || course.length==0){
		check = false;
		document.getElementById("course").style.borderColor = "red";
	}else{
		document.getElementById("course").style.borderColor = "lime";
	}


    if(validator(reg, branch)==false || branch.length==0){
		check = false;
		document.getElementById("branch").style.borderColor = "red";
	}else{
		document.getElementById("branch").style.borderColor = "lime";
	}


	var strengthOfPassword = strengthOf(pass);
	if(pass!=repass || pass.length<8 || repass.length<8 || strengthOfPassword==1){
		check = false;
		document.getElementById("password").style.borderColor = "red";
		document.getElementById("rePassword").style.borderColor = "red";
    }else{
    	if(strengthOfPassword==2){
    		document.getElementById("password").style.borderColor = "yellow";
    		document.getElementById("rePassword").style.borderColor = "yellow";
    	}else{
    		document.getElementById("password").style.borderColor = "lime";
    		document.getElementById("rePassword").style.borderColor = "lime";
    	}
    } 


    if(question.length>0){
    	document.getElementById("question").style.borderColor = "lime";
    }else{
    	check = false;
    	document.getElementById("question").style.borderColor = "red";
    }


	if(answer.length>0){
    	document.getElementById("answer").style.borderColor = "lime";
    }else{
    	check = false;
    	document.getElementById("answer").style.borderColor = "red";
    }    


    if(validatePhotoUpload(photo)==false){
    	//alert("File type is not supported...");	
    	check = false;
    }
    
	return check;
}
