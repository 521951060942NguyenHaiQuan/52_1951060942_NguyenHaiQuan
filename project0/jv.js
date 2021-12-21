function kiemtranhap(giatri){
    if(giatri==8){
        alert("Bạn nhập 8")
    }
    else{
        alert("Không phải 8")
    }
}
function xuat10cau(){
    for(i=0;i<11;i++){
        document.write("Xin chào")
    }
    return
}

function thaydoichon(){
    var theP = document.getElementById("xuat");
    var dropdown=document.getElementById("chon");
    theP.innerHTML =dropdown.value;
}
function changeColorButton(thamso){
    var nut=document.getElementById("nut");
    // if(thamso==1){
    nut.style.backgroundColor="red";
    nut.style.backgroundColor="while"
    //}
}

