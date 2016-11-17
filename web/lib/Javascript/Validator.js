
/**
 * Created by lilikovac on 17.11.16.
 */

function validateName(x){
    var re = /[A-Za-z -']$/;
    if(re.test(document.getElementById(x).value)){
        document.getElementById(x).parentNode.className = "form-group has-success";
        document.getElementById(x).className = "form-control form-control-success";
        return true;
    }else{
        document.getElementById(x).parentNode.className = "form-group has-danger";
        document.getElementById(x).className = "form-control form-control-danger";
        return false;
    }

}

function validateEmail(x){
    var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    if (re.test(document.getElementById(x).value)) {
        document.getElementById(x).parentNode.className = "form-group has-success";
        document.getElementById(x).className = "form-control form-control-success";
        return true;
    }
    else{
        document.getElementById(x).parentNode.className = "form-group has-danger";
        document.getElementById(x).className = "form-control form-control-danger";
        return false;
    }
}
