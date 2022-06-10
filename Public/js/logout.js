function validate() {
    var p = document.getElementById("phone").value;
    var p2 = document.getElementById("full_name").value;
    var p3 = document.getElementById("password").value;
    var p4 = document.getElementById("password-repeat").value;
    var p5 = document.getElementById("address").value;
     
    if(p== "") {
    alert("Vui lòng nhập số điện thoại!");
    return false;
    }
    if(p2== "") {
    alert("Vui lòng nhập full_name!");
    return false;
    }
    if((p3 == "") || (p1.length < 8)) {
    alert("Vui lòng nhập mật khẩu!");
    return false;
    }
    if(p4 == "") {
    alert("Vui lòng xác minh mật khẩu!");
    return false;
    }
    if(p5 == "") {
        alert("Vui lòng nhập địa chỉ!");
        return false;
        }
    if((p != "") && (p2 != "") && (p3 != "") && (p3 == p4)){
      localStorage.setItem("phone_db", p);
      localStorage.setItem("fullname_db", p2);
      localStorage.setItem("pass_db", p3);
  
      alert("Bạn đã đăng ký thành công!"); location.replace("dn.html")
      return false;
    }else alert("Xin hãy điền đúng thông tin");
  
    return true;
  
  }
  