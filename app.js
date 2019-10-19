function myFun()
    {
        var name = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var mobile = document.getElementById("mobile").value;
        var dob = document.getElementById("dob").value;
        var mm = document.getElementById("mm").checked;
        var ff = document.getElementById("ff").checked;
        var gg = document.getElementById("gg").checked;
        var rr = document.getElementById("rr").checked;
        var oo = document.getElementById("oo").checked;
        var state = document.getElementById("state").value;
        var img = document.getElementById("img").value;
        var msg = document.getElementById("msg");
        var mobEx = /^[6-9][0-9]{9}$/;
        var regEx = /^([a-zA-Z0-9\.-]+)@([a-zA-Z]+).([a-zA-Z]{2,3})(.[a-zA-Z]{2,3})?$/;


        //name validation
        if(name == "")
        {
            msg.innerHTML = "please enter name";
            return false;
        }
        if(!isNaN(name))
        {
            msg.innerHTML = "only characters are allowed";
            return false;
        }

        //email validation
        if(email == ""){
            msg.innerHTML="please enter email";
        }

        if(!regEx.test(email))
        {
            msg.innerHTML="invalid email";
            return false;
        }

        //mobile validation
        if(mobile == ""){
            msg.innerHTML = "please enter mobile no";
            return false;
        }
        if(!mobEx.test(mobile))
        {
            msg.innerHTML="enter valid number";
            return false;
        }

        //date valid
        if(dob =="")
        {
            msg.innerHTML = "please enter dob";
            return false;
        }
        //checkbox vali
        if((mm == "") && (ff == "")){
            msg.innerHTML="select gender";
            return false;
        }

        if((gg == "") && (rr == "") && (oo == "")){
            msg.innerHTML = "select hobbies";
            return false;
        }

        //state valid
        if(state == ""){
            msg.innerHTML = "select state";
            return false;
        }

        //image
        if(img == ""){
            msg.innerHTML = "please upload your images";
            return false;
        }



    }