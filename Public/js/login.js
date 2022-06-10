function show() {
    var p = document.getElementById("pwd");
    p.setAttribute("type", "text");
}

function hide() {
    var p = document.getElementById("pwd");
    p.setAttribute("type", "password");
}

var pwShown = 0;

document.getElementById("eye").addEventListener("click", function () {
    if (pwShown == 0) {
        pwShown = 1;
        show();
    } else {
        pwShown = 0;
        hide();
    }
}, false);

function validate1() {
    var uu = document.getElementById("txt-input").value;
    var pu1 = document.getElementById("pwd").value;
    if(uu== "") {
    alert("Vui lòng nhập tên!");
      return false;
    }
    if(pu1 == "") {
    alert("Vui lòng nhập mật khẩu!");
      return false;
    }
    var name=localStorage.getItem('username_db')
    var pass=localStorage.getItem('password_db')
                                                                                  
    if(((uu=="Nguyễn Quốc Toản")&&(pu1=="abc123"))||((uu==name)&&(pu1==pass))){
      alert("Đăng nhập thành công:");location.assign("file:///C:/Users/ADMIN/Downloads/doanjs/index.html"); 
	} else{                           
      alert("Tài khoản hoặc mật khẩu sai, hãy đăng nhập lại!")
      document.getElementById("txt-input").value="";
      document.getElementById("pwd").value="";
      }
    return true;
    }
    function xemtt(){
        var name=localStorage.getItem("username_db")
        var pass=localStorage.getItem("password_db")
  
        document.getElementById("d1").innerHTML ="Tài Khoản:" + name
        document.getElementById("d2").innerHTML="Mật khẩu:" + pass
    }

