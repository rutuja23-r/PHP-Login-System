$(document)
.on("submit" ,"form.js-register" ,"form.js-login",function(event) {
    event.preventDefault();

        var _form = $(this) ;
        var _error = $(".js-error" ,_form) ;

        var dataObj = {
               email:$("input[type='email']" , _form).val() ,
            password: $("input[type='password']" , _form).val()
        } ;

        if(dataObj.email.length < 6) {
            _error 
            .text("please enter a valid email address ")
            .show();
            return false ;

        }
        else if (dataObj.password.length < 11) {
            _error
            .text("please enter a password that is at least 11 characters long ")
            .show();
            return false

        }
        // ajax code started 
        _error.hide() ;

        $.ajax({
            type :'POST' ,
            url : '/' ,
            data :dataObj ,
            dataType : 'json' ,
            async :true ,
        })




        
        

    

    return false ;
})