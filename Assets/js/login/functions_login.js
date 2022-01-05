document.addEventListener('DOMContentLoaded',function()
{
    if(document.querySelector("#formLogin"))
    {
        let formLogin=document.querySelector("#formLogin");
        formLogin.onsubmit=function(e)
        {
            e.preventDefault();
            let strEmail=document.querySelector('#txtEmail').value;
            let strPassword=document.querySelector('#txtPassword').value;
            
            var request=(window.XMLHttpRequest)?new XMLHttpRequest():new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl=base_url+'/Login/loginuser';
            var formData=new FormData(formLogin);
            request.open("POST",ajaxUrl,true);
            request.send(formData);
            request.onreadystatechange=function()
            {
                if(request.readyState!=4)
                    return;
                if(request.status==200)
                {
                    var objData=JSON.parse(request.responseText);
                    if(objData.status)
                    {
                        window.location=base_url+'/';
                    }
                    else
                    {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: objData.msg
                        });
                        document.querySelector('#txtPassword').value="";
                    }
                }
                else
                {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Algo salio mal!'
                    });
                }
                return false;
            }  
        }
    }

    if(document.querySelector("#formResetPass"))
    {
        let formResetPass=document.querySelector("#formResetPass");
        formResetPass.onsubmit=function(e)
        {
            e.preventDefault();

            let strEmail=document.querySelector('#txtEmail').value;
            var request=(window.XMLHttpRequest)?new XMLHttpRequest():new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl=base_url+'/Login/resetPass';
            var formData=new FormData(formResetPass);
            request.open("POST",ajaxUrl,true);
            request.send(formData);
            request.onreadystatechange=function()
            {
                if(request.readyState!=4)
                    return;
                if(request.status==200)
                {
                    var objData=JSON.parse(request.responseText);
                    if(objData.status)
                    {
                        Swal.fire({
                            title: 'Esta seguro que quieres cambiar tu password.?',
                            text: objData.msg,
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Si, cambiarla!'
                          }).then((result) => {
                            if (result.isConfirmed) {
                              Swal.fire(
                                'Password Cambiada!',
                                'Se te ha enviado un coreo.',
                                'success'
                              )
                              window.location=base_url+'/login';
                            }
                          })
                        
                    }
                    else
                    {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: objData.msg
                        });
                        document.querySelector('#txtEmail').value="";
                    }
                }
                else
                {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Algo salio mal!'
                    });
                }
                return false;
            }
        }
    }

    if(document.querySelector("#formCambiarPass"))
    {
        let formCambiarPass=document.querySelector("#formCambiarPass");
        formCambiarPass.onsubmit=function(e)
        {
            e.preventDefault();

            let strNuevoPassword=document.querySelector('#txtNuevoPassword').value;
            let strConfirmarPassword=document.querySelector('#txtConfirmarPassword').value;
            let strUserId=document.querySelector('#txtUserId').value;

            if(strNuevoPassword.length<5)
            {
                Swal.fire({
                    icon: 'info',
                    title: 'Oops...',
                    text: 'El password debe de tener un mínimo de 5 carecteres.'
                });
                return false;
            }
            if(strNuevoPassword!=strConfirmarPassword)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Los passwords no coinciden.'
                });
                return false;
            }

            var request=(window.XMLHttpRequest)?new XMLHttpRequest():new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl=base_url+'/Login/changePass';
            var formData=new FormData(formCambiarPass);
            request.open("POST",ajaxUrl,true);
            request.send(formData);
            request.onreadystatechange=function()
            {
                if(request.readyState!=4)
                    return;
                if(request.status==200)
                {
                    var objData=JSON.parse(request.responseText);
                    if(objData.status)
                    {
                        Swal.fire({
                            title: 'Esta seguro que quieres cambiar tu password.?',
                            text: "",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Si, cambiarla!'
                          }).then((result) => {
                            if (result.isConfirmed) {
                              Swal.fire(
                                'Password Cambiada!',
                                'El password se ha cambiado con éxito.',
                                'success'
                              )
                              window.location=base_url+'/login';
                            }
                          })
                        
                    }
                    else
                    {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: objData.msg
                        });
                       
                        document.querySelector('#txtNuevoPassword').value="";
                        document.querySelector('#txtConfirmarPassword').value="";
                        document.querySelector('#txtUserId').value="";
                    }
                }
                else
                {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Algo salio mal!'
                    });
                }
                return false;
            }
        }
    }

    if(document.querySelector("#formLoginProfesor"))
    {
        let formLoginProfesor=document.querySelector("#formLoginProfesor");
        formLoginProfesor.onsubmit=function(e)
        {
            e.preventDefault();
            let strId=document.querySelector('#txtIdTec').value;
            let strPassword=document.querySelector('#txtPassword').value;
            
            var request=(window.XMLHttpRequest)?new XMLHttpRequest():new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl=base_url+'/Loginprofesor/loginUserProfesor';
            var formData=new FormData(formLoginProfesor);
            request.open("POST",ajaxUrl,true);
            request.send(formData);
            request.onreadystatechange=function()
            {
                if(request.readyState!=4)
                    return;
                if(request.status==200)
                {
                    var objData=JSON.parse(request.responseText);
                    if(objData.status)
                    {
                        window.location=base_url+'/';
                    }
                    else
                    {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: objData.msg
                        });
                        document.querySelector('#txtPassword').value="";
                    }
                }
                else
                {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Algo salio mal!'
                    });
                }
                return false;
            }  
        }
    }

},false);