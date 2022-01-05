window.addEventListener('load',function(){
    mostrar_institucion();
},false);

function mostrar_institucion()
{
    var ajaxUrl=base_url+'/Estudiantes/llenarInstitucion';
    var request=(window.XMLHttpRequest)?new XMLHttpRequest():new ActiveXObject('Microsoft.XMLHTTP');
    request.open("GET",ajaxUrl,true);
    request.send();

    request.onreadystatechange=function()
    {
        if(request.readyState==4 && request.status==200)
        {
            document.querySelector('#txtInstitucion').innerHTML=request.responseText;
            document.querySelector('#txtInstitucion').value=1;
        }
    }

}

document.addEventListener('DOMContentLoaded',function()
{
    if(document.querySelector("#formRegistroEstudiantes"))
    {
        let formRegistroEstudiantes=document.querySelector("#formRegistroEstudiantes");
        formRegistroEstudiantes.onsubmit=function(e)
        {
            e.preventDefault();
            let strNombre=document.querySelector('#txtNombre').value;
            let strPaterno=document.querySelector('#txtPaterno').value;
            let strMaterno=document.querySelector('#txtMaterno').value;
            let strCurp=document.querySelector('#txtCurp').value;
            let strEmailInst=document.querySelector('#txtEmailInst').value;
            let strEmailAlt=document.querySelector('#txtEmailAlt').value;
            let strInstitucion=document.querySelector('#txtInstitucion').value;
            let strCel=document.querySelector('#txtCel').value;
            let strTelefono=document.querySelector('#txtTelefono').value;
            let strPassword=document.querySelector('#txtPassword').value;
            let strConfirmarPassword=document.querySelector('#txtConfirmarPass').value;

            if(strPassword.length<5)
            {
                Swal.fire({
                    icon: 'info',
                    title: 'Oops...',
                    text: 'El password debe de tener un mínimo de 5 carecteres.'
                });
                return false;
            }
            if(strPassword!=strConfirmarPassword)
            {
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'Los passwords no coinciden.'
                });
                return false;
            }

            
            var request=(window.XMLHttpRequest)?new XMLHttpRequest():new ActiveXObject('Microsoft.XMLHTTP');
            var ajaxUrl=base_url+'/Estudiantes/register';
            var formData=new FormData(formRegistroEstudiantes);
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
                            title: 'Esta seguro que quieres enviar una solicitud de acceso.?',
                            text: "",
                            icon: 'warning',
                            showCancelButton: true,
                            confirmButtonColor: '#3085d6',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Si, cambiarla!'
                          }).then((result) => {
                            if (result.isConfirmed) {
                              Swal.fire(
                                'Solicitud enviada al administrador!',
                                'El password se ha cambiado con éxito.',
                                'success'
                              )
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