$(document).ready(function () {
    // jQuery.validator.setDefaults({
    //     debug:true,
    //     success:'valid'
    // });
    $.validator.addMethod("regex", function(value, element) {
        return this.optional(element) || /^[a-z0-9\ ]+$/i.test(value);
    });
    $('#registerForm').validate({
        rules:{
            username:{
                required:true,
                regex: true,
                minlength:6,
                maxlength:50,
                remote:{
                    url:"/checkUser",
                    type: "get"
                }

            },
            email:{
                required:true,
                email:true,
                remote:{
                    url:"/checkMail",
                    type: "get"
                }
            },
            password:{
                required:true,
                minlength:6,
                maxlength:20
            },
            confirmPassword:{
                required:true,
                equalTo:"#password"
            }
        },
        messages:{
            username:{
                required:"Please enter your username!",
                regex:"Username isn't special characters!",
                minlength:"Password must be between 6 and 50!",
                maxlength:"Password must be between 6 and 50!",
                remote:"Username is already registered!"
            },
            email:{
                required:"Please enter your email!",
                email:"Email is invalid!",
                remote: "Email is already registered!"
            },
            password:{
                required:"Please enter your password!",
                minlength:"Password must be between 6 and 20!",
                maxlength:"Password must be between 6 and 20!"
            },
            confirmPassword:{
                required:"Please confirm password!",
                equalTo:"Password is incorrectly confirmed!"
            }
        }
    });

    $('#loginForm').validate({
        rules: {
            username:{
                required:true,
                regex:true,
                minlength:6,
                maxlength:50
            },
            password:{
                required:true,
                minlength:6,
                maxlength:20
            }
        },
        messages:{
            username:{
                required:"Please enter your username!",
                regex:"Username isn't special characters!",
                minlength:"Password must be between 6 and 50!",
                maxlength:"Password must be between 6 and 50!"
            },
            password:{
                required:"Please enter your password!",
                minlength:"Password must be between 6 and 20!",
                maxlength:"Password must be between 6 and 20!"
            }
        }
    });
});
