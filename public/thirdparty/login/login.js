
	function Login() {
   // showLoading();
	encriptar();
	
    var wsURL = "https://ws.up.ac.th/mobile/AuthenService.asmx/Login?username=" + user_en + "&password=" + passW_en + "&platformName=AND&deviceType=PHN&ProductName=ESalary_AND&ServiceUser=&ServicePass=";
   
    var ret = false;
   
    $.ajax({
        beforeSend: function () {         
           
        }, //Show spinner
        complete: function () { hideLoading(); }, //Hide spinner
        url: wsURL,
        dataType:'xml',
        async: true,
        cache: false,      
        success: function (xml) {
            debugger;
            if ($(xml).text() == "") {
                alert('Username หรือ รหัสผ่านไม่ถูกต้อง');
            }
            else if ($(xml).text() == "SESSION_LOCK") {
                alert('ท่านกรอกรหัสผิดเกิน 3 ครั้ง กรุณาทดลองใหม่ในภายหลัง');
            }
            else {
                sessionKey = $(xml).text();
				document.getElementById("a").innerHTML=sessionKey;
				//location.href =
                LoadProfile();
                ret = true;
            }
        },
        error: function (result) {
            alert('ERROR : ' + ':' + result.status + ' : ' + result.statusText);
            ret = false;
        }
    });
    return ret
}


function LoadProfile() {
   

    $.ajax({
        beforeSend: function () { }, //Show spinner
        complete: function () {  }, //Hide spinner
        url: "https://ws.up.ac.th/mobile/StudentService.asmx/GetStudentInfo?sessionID=" + sessionKey,
        dataType: 'xml',
        async: true,
        cache: false,
        success: function (xml) {
            debugger;
			StudentCode =$(xml).find("StudentCode").text();
			CitizenID =$(xml).find("CitizenID").text();
            LoginName = $(xml).find("Title").text() + $(xml).find("FirstName_TH").text() + '  ' + $(xml).find("LastName_TH").text();    				
			FacultyName_TH =$(xml).find("FacultyName_TH").text();
			ProgramName_TH =$(xml).find("ProgramName_TH").text();
		
           // hideLoading();
            document.getElementById("StudentC").innerHTML = StudentCode;
			document.getElementById("CitizenID").innerHTML = CitizenID;
			document.getElementById("LoginN").innerHTML = LoginName;
			document.getElementById("FacultyName").innerHTML = FacultyName_TH;
			document.getElementById("ProgramName").innerHTML = ProgramName_TH;
			
        },
        error: function (result) {
            alert('ERROR : ' + ':' + result.status + ' : ' + result.statusText);
           
        }
    });
}



 