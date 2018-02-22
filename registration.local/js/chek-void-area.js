$(document).ready(function () {

    $("<div  style='display:none;' class='btn btn-warning disabled' id='errors'></div>").appendTo('#insertErorr');//////////------ create an div error---------
    $('#errors').hide();///---------------hide div error-----------
    $('#btn').click(function () {
        //----------------regular expression for chek email---------------------
        var checkEmail = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        var errors = '';//-----------------string for errors adding---------------------
        //--------------------start cheking-----------------------------
        if ($('#login').val().length < 6) {
            errors += 'Login less then 6 symbols';
        } else if ($('#pass').val().length < 4) {
            errors += 'Password less then 4 symbols';
        } else if ($('#pass').val() !== $('#conf').val()) {
            errors += 'Passwords are different';
        } else if ($('#email').val() === "") {
            errors += 'Write an Email';
        } else if (checkEmail.test($('#email').val()) === false){
            errors += 'Incorrect Email';
        } else if ($('#avatar').val() === "") {
            errors += 'Upload an avatar';
        }
            if (errors !== '') {
                $('#errors').html(errors);//--------------adding to error div error string---------------
//            $('#errors').css('display','flex');

                $('#errors').show();//------------------show error div-------------------
//            $('form').submit(function () {
                return false;//------------------make page to not reload?---------------------
                // });

            }

    });

});
