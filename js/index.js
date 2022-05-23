$(document).ready(() => {
    $('.collapse').collapse()
    displaySlider()
    displayCarrusel()
    displayMisvis()
    displayUsMyBoy()
    displayServices()
    displayClientes()
    displayEmpleados()
    displayProyectos()
    displayProyectosConc()
    displayPromotions()
    displayGallery()
    displayWhats()
    displayContactInfo()

    main();
});

var whatsapp, telCont, celCont
function main() {

    (function () {
        'use strict';

        $('a.page-scroll').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top - 50
                    }, 900);
                    return false;
                }
            }
        });


        $('body').scrollspy({
            target: '.navbar-default',
            offset: 80
        });

        // Hide nav on click
        $(".navbar-nav li a").click(function (event) {
            // check if window is small enough so dropdown is created
            var toggle = $(".navbar-toggle").is(":visible");
            if (toggle) {
                $(".navbar-collapse").collapse('hide');
            }
        });


        // Nivo Lightbox 
        $('.portfolio-item a').nivoLightbox({
            effect: 'slideDown',
            keyboardNav: true,
        });

    }());
}
function displayUsMyBoy() {
    $.ajax({
        url: '/portal/php/getUs.php',
        type: 'POST',
        success: function (respuesta) {
            console.log(respuesta)
            switch (respuesta) {
                case '0':
                    break;
                default:
                    var objJSON = JSON.parse(respuesta)
                    var sb = new StringBuilder()
                    $.each(objJSON, function (index, value) {
                        var id, desc, image, name, state
                        $.each(value, function (index2, value2) {
                            switch (index2) {
                                case 'id_servicio':
                                    id = value2
                                    break
                                case 'nombre':
                                    name = value2
                                    break
                                case 'imagen':
                                    image = value2
                                    break
                                case 'descripcion':
                                    desc = value2
                                    break
                                case 'estado':
                                    state = value2
                            }
                        })
                        sb.append(`<p>${desc}</p>`)
                        $('#aboutPhoto').html(`<img src="itech/admin/sitioweb/nosotros/imgNos/${image}" class="img-responsive box" alt="${name}"> `)
                    })
                    $('#about-content').html(sb.toString())
            }
        }
    })
}
function displayMisvis() {
    $.ajax({
        url: '/portal/php/getMisvis.php',
        type: 'POST',
        success: function (respuesta) {
            console.log(respuesta)
            switch (respuesta) {
                case '0':
                    break;
                default:
                    var objJSON = JSON.parse(respuesta)
                    var sb = new StringBuilder()
                    var content = new StringBuilder();
                    var iconMis = 'fa fa-crosshairs'
                    var iconVis = 'fa fa-eye'
                    $.each(objJSON, function (index, value) {
                        var id, desc,name, state
                        $.each(value, function (index2, value2) {
                            switch (index2) {
                                case 'id_misvis':
                                    id = value2
                                    break
                                case 'titulo':
                                    name = value2
                                    break
                                case 'descripcion':
                                    desc = value2
                                    break
                                case 'estado':
                                    state = value2
                            }
                        })
                         
                        if(name==='Misión' || name==='Mision'){
                            sb.append(`<div class="col-xs-6 col-md-6"> <i class="${iconMis}"></i>
                            <h3>${name}</h3>
                            <p>${desc}</p>
                          </div>`)
                        }
                        if(name==='Visión' || name==='Vision'){
                            sb.append(`<div class="col-xs-6 col-md-6"> <i class="${iconVis}"></i>
                            <h3>${name}</h3>
                            <p>${desc}</p>
                          </div>`)
                        }
                    })
                    $('#misvis-content').html(sb.toString())
                   
                    }
        }
    })
}
function displayClientes() {
    $.ajax({
        url: '/portal/php/getClientes.php',
        type: 'POST',
        success: function (respuesta) {
            console.log(respuesta)
            switch (respuesta) {
                case '0':
                    break;
                default:
                    var objJSON = JSON.parse(respuesta)
                    var sb = new StringBuilder()
                    $.each(objJSON, function (index, value) {
                        var clientes
                        $.each(value, function (index2, value2) {
                            switch (index2) {
                                case 'clientes':
                                    clientes = value2
                                    break
                            }
                        })
                            sb.append(`<h2 class="statistic-counter">${clientes}</h2>
                            <p>Clientes satisfechos</p>`)
                    })
                    $('#contentClientes').html(sb.toString())
                   
                    }
        }
    })
}
function displayEmpleados() {
    $.ajax({
        url: '/portal/php/getEmpleados.php',
        type: 'POST',
        success: function (respuesta) {
            console.log(respuesta)
            switch (respuesta) {
                case '0':
                    break;
                default:
                    var objJSON = JSON.parse(respuesta)
                    var sb = new StringBuilder()
                    $.each(objJSON, function (index, value) {
                        var empleados
                        $.each(value, function (index2, value2) {
                            switch (index2) {
                                case 'empleados':
                                    empleados = value2
                                    break
                            }
                        })
                            sb.append(`<h2 class="statistic-counter">${empleados}</h2>
                            <p>Profesionales a tu servicio</p>`)
                    })
                    $('#contentEmpleados').html(sb.toString())
                   
                    }
        }
    })
}
function displayProyectos() {
    $.ajax({
        url: '/portal/php/getProyectos.php',
        type: 'POST',
        success: function (respuesta) {
            console.log(respuesta)
            switch (respuesta) {
                case '0':
                    break;
                default:
                    var objJSON = JSON.parse(respuesta)
                    var sb = new StringBuilder()
                    $.each(objJSON, function (index, value) {
                        var proyectos
                        $.each(value, function (index2, value2) {
                            switch (index2) {
                                case 'proyectos':
                                    proyectos = value2
                                    break
                            }
                        })
                            sb.append(`
                            <h2 class="statistic-counter">${proyectos}</h2>
                            <p>Nuevos proyectos</p>`)
                    })
                    $('#contentProyectos').html(sb.toString())
                   
                    }
        }
    })
}
function displayProyectosConc() {
    $.ajax({
        url: '/portal/php/getProyectosConc.php',
        type: 'POST',
        success: function (respuesta) {
            console.log(respuesta)
            switch (respuesta) {
                case '0':
                    break;
                default:
                    var objJSON = JSON.parse(respuesta)
                    var sb = new StringBuilder()
                    $.each(objJSON, function (index, value) {
                        var proyectosc
                        $.each(value, function (index2, value2) {
                            switch (index2) {
                                case 'proyectosc':
                                    proyectosc = value2
                                    break
                            }
                        })
                            sb.append(`<h2 class="statistic-counter">${proyectosc}</h2>
                            <p>Proyectos concluidos</p>`)
                    })
                    $('#contentProyectosC').html(sb.toString())
                   
                    }
        }
    })
}
function displayServices() {
    $.ajax({
        url: '/portal/php/getServices.php',
        type: 'POST',
        success: function (respuesta) {
            console.log(respuesta)
            switch (respuesta) {
                case '0':
                    break;
                default:
                    var objJSON = JSON.parse(respuesta)
                    var sb = new StringBuilder()
                    $.each(objJSON, function (index, value) {
                        var id, desc, image, name
                        $.each(value, function (index2, value2) {
                            switch (index2) {
                                case 'id_servicio':
                                    id = value2
                                    break
                                case 'nombre':
                                    name = value2
                                    break
                                case 'foto':
                                    image = value2
                                    break
                                case 'descripcion':
                                    desc = value2
                                    break
                            }
                        })
                        sb.append(`<div class="col-md-4"> `)
                        sb.append(`<div class="circular-cropper">`)
                        sb.append(`<img src="itech/admin/sitioweb/servicios/imgServ/${image}" alt="Itech" class="circular-image">`)
                        sb.append(`</div>`)
                        sb.append(`<div class="service-desc">`)
                        sb.append(`<h3>${name}</h3>`)
                        sb.append(`<p>${desc}</p>`)
                        sb.append(`</div>`)
                        sb.append(`</div>`)
                    })
                    $('#services-content').html(sb.toString())
            }
        }
    })
}
function displayPromotions() {
    $.ajax({
        url: '/portal/php/getPromotions.php',
        type: 'POST',
        success: function (respuesta) {
            console.log(respuesta)
            switch (respuesta) {
                case '0':
                    break;
                default:
                    var objJSON = JSON.parse(respuesta)
                    var sb = new StringBuilder()
                    $.each(objJSON, function (index, value) {
                        var id, title, image, desc, state
                        $.each(value, function (index2, value2) {
                            switch (index2) {
                                case 'id_promocion':
                                    id_gallery = value2
                                    break;
                                case 'imagen':
                                    image = value2
                                    break;
                                case 'titulo':
                                    title = value2
                                    break;
                                case 'descripcion':
                                    desc = value2
                                    break
                                case 'status':
                                    state = value2
                                    break;
                            }

                        })
                        sb.append(`<div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="portfolio-item">
                                            <div class="hover-bg embed-responsive embed-responsive-16by9"> 
                                                
                                                    <div class="hover-text">
                                                        <h4>${title}</h4>
                                                        <p>${desc}</p>
                                                    </div>
                                                    <img src="itech/admin/sitioweb/promociones/imgProm/${image}" class="img-responsive" alt="${title}"> 
                                                </a> 
                                            </div>
                                        </div>
                                    </div>`)


                    })
                    $('#promotions-content').html(sb.toString())
            }
        }
    })
}
function displayGallery() {
    $.ajax({
        url: '/portal/php/getGallery.php',
        type: 'POST',
        success: function (respuesta) {
            //console.log(respuesta)
            switch (respuesta) {
                case '0':
                    break;
                default:
                    var objJSON = JSON.parse(respuesta)
                    var sb = new StringBuilder()
                    $.each(objJSON, function (index, value) {
                        var id_gallery, image, desc, state, cat
                        $.each(value, function (index2, value2) {
                            switch (index2) {
                                case 'id_galeria':
                                    id_gallery = value2
                                    break;
                                case 'imagen':
                                    image = value2
                                    break;
                                    case 'categoria':
                                        cat = value2
                                        break;
                                case 'titulo':
                                    desc = value2
                                    break;
                                case 'status':
                                    state = value2
                                    break;
                            }

                        })
                        /*sb.append(`<div class="col-sm-6 col-md-4 col-lg-4">
                                        <div class="portfolio-item">
                                            <div class="hover-bg embed-responsive embed-responsive-16by9"> 
                                                <a href="itech/admin/sitioweb/galeria/imgGal/${image}" title="${desc}" data-lightbox-gallery="gallery1">
                                                    <div class="hover-text">
                                                        <h4>${desc}</h4>
                                                    </div>
                                                    <img src="itech/admin/sitioweb/galeria/imgGal/${image}" class="img-responsive" alt="${desc}"> 
                                                </a> 
                                            </div>
                                        </div>
                                    </div>`)*/
                        sb.append(`<div class="portfolio ${cat}" data-cat="${cat}">
                        <div class="portfolio-wrapper">				  
                              <a href="itech/admin/sitioweb/galeria/imgGal/${image}" target="_blank">  <img src="itech/admin/sitioweb/galeria/imgGal/${image}" alt="${cat}" width="200" height="150"/></a>
                        </div>
                      </div>`)
                    })
                    $('#portfoliolist').html(sb.toString())
            }
        }
    })
}
function displaySlider() {
    $.ajax({
        url: '/portal/php/getSlider.php',
        type: 'POST',
        success: function (respuesta) {
            console.log(respuesta);
            switch (respuesta) {
                case '0':
                    break;
                default:
                    var objJSON = JSON.parse(respuesta)
                    var sb = new StringBuilder()
                    $.each(objJSON, function (index, value) {
                        var id_slider, imageSlider, stateSlider
                        $.each(value, function (index2, value5) {
                            switch (index2) {
                                case 'id_slider':
                                    id_slider= value5
                                    break;
                                case 'imagen':
                                    imageSlider = value5
                                    break;
                                case 'status':
                                    stateSlider = value5
                                    break;
                            }

                        })
                        sb.append(`   
                        <li style="background-image: url('itech/admin/sitioweb/carrusel/imgGal/${imageSlider}'); z-index:0; opacity: 1;">
          <div class="content_slider" >
            <div>
              <h2 class="introtitle">Itech</h2>
        <p>Armando tu equipo ideal</p>
        <button type="button" class="btnSlider"" data-toggle="modal"
    data-target="#modalCitas"><i class="fas fa-dollar"></i><abbr style="text-decoration:none" title="Cotizar la PC de tus sueños">Cotizar sin costo</abbr></button>
      </div>
          </div>
        </li>
                      `)
                    })
                    $('#sliderContent').html(sb.toString())
            }
        }
    })
}
function displayCarrusel() {
    $.ajax({
        url: '/portal/php/getCarrusel.php',
        type: 'POST',
        success: function (respuesta) {
            console.log(respuesta);
            switch (respuesta) {
                case '0':
                    break;
                default:
                    var objJSON = JSON.parse(respuesta)
                    var sb = new StringBuilder()
                    $.each(objJSON, function (index, value) {
                        var id_carrusel, imageCarr, stateCarr
                        $.each(value, function (index2, value5) {
                            switch (index2) {
                                case 'id_slider':
                                    id_carrusel= value5
                                    break;
                                case 'imagen':
                                    imageCarr = value5
                                    break;
                                case 'status':
                                    stateCarr = value5
                                    break;
                            }

                        })
                        sb.append(`   
                        <li style="background-image: url('itech/admin/sitioweb/promos/imgProm/${imageCarr}'); z-index:0; opacity: 1;">
          <div class="content_slider" >
  
        </li>
                      `)
                    })
                    $('#sliderCarrusel').html(sb.toString())
            }
        }
    })
}
function displayContactInfo() {
    $.ajax({
        url: '/portal/php/getLocations.php',
        type: 'POST',
        success: function (respuesta) {
            switch (respuesta) {
                case '0':
                    break;
                default:
                    var objJSON = JSON.parse(respuesta);
                    var tabs = new StringBuilder();
                    var content = new StringBuilder();
                    var active = false
                    var classActive = ''
                    var propActive = ''
                    //console.log(objJSON)
                    $.each(objJSON, function (index, value) {
                        var direccion, telefono, email, sucursal, id, whats, celular
                        $.each(value, function (index2, value2) {
                            switch (index2) {
                                case 'tel':
                                    telefono = value2
                                    break
                                case 'cel':
                                    celular = value2
                                    break
                                case 'whatsapp':
                                    whats = value2
                                    break
                                case 'email':
                                    email = value2
                                    break
                                case 'direccion':
                                    direccion = value2
                                    break
                                case 'nombre_suc':
                                    sucursal = value2
                                    break
                                case 'id_contacto':
                                    id = value2
                                    break
                            }
                        })
                        if (!active) {
                            classActive = 'class="active"'
                            propActive = 'active'
                            active = true
                        } else {
                            classActive = ''
                            propActive = ''
                        }
                        tabs.append(`<li ${classActive}><a id="contactInfoTabs" data-toggle="tab" ">${sucursal}</a></li>`)
                        content.append(`<div id="suc${id}" class="tab-pane fade in ${propActive}">`)
                        content.append('<div class="contact-item">')
                        content.append(`<span><i class="fas fa-map-marker-alt"></i> ${direccion}</span><p id="contact-location"></p>`)
                        content.append('</div>')
                        content.append('<div class="contact-item">')
                        content.append(`<span><i class="fas fa-phone"></i> ${telefono}</span><p id="contact-tel"></p>`)
                        content.append('</div>')
                        content.append('<div class="contact-item">')
                        content.append(`<span><i class="fas fa-mobile-alt"></i> ${celular}</span><p id="contact-tel"></p>`)
                        content.append('</div>')
                        content.append('<div class="contact-item">')
                        content.append(`<span><i class="fab fa-whatsapp"></i> ${whats}</span><p id="contact-tel"></p>`)
                        content.append('</div>')
                        content.append('<div class="contact-item">')
                        content.append(`<span><i class="fas fa-envelope"></i> ${email}</span><p id="contact-email"></p>`)
                        content.append('</div>')
                        content.append('</div>')
                        whatsapp = whats
                        telCont = telefono
                        celCont = celular
                        console.log(celCont)
                        console.log(whatsapp)
                    })
                    $('#contactInfoTabs').html(tabs.toString())
                    $('#contactInfo').html(content.toString())
                    $('#WAButton').floatingWhatsApp({
                        phone: `+52${whatsapp}`, //WhatsApp Business phone number International format-
                        //Get it with Toky at https://toky.co/en/features/whatsapp.
                        headerTitle: '¡Envíanos un mensaje!', //Popup Title
                        popupMessage: '¡Hola!, Gracias por confiar en nosotros. ¿En qué te podemos ayudar?', //Popup Message
                        showPopup: true, //Enables popup display
                        buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
                        //headerColor: 'crimson', //Custom header color
                        //backgroundColor: 'crimson', //Custom background button color
                        position: "right"    
                      });
                /*$('#contact-location').html(direccion)
                $('#contact-email').html(email)
                $('#contact-tel').html(telefono)*/
            }
        }
    })
}
$('#contactForm').submit(function (evt) {
    evt.preventDefault();
});
function makeAppointment() {
    var nombre = $('#name').val() + " " + $('#ape1').val() + " " + $('#ape2').val()
    var registrado = false;

    var parametros = {
        "nombre": nombre,
        "tel": $('#tel').val(),
        "fecha": $('#appointmentDate').val(),
        "hora": $('#appointmentTime').val(),
        "registrado": registrado,
        "motivo": $('#appointment').val(),
        "email": "itech.dgo@gmail.com",
    }

    $.ajax({
        url: '../../itech/php/citas/agregar.php',
        data: parametros,
        type: 'POST',
        beforeSend: function () {

        },
        success: function (respuesta) {
            switch (respuesta) {
                case '1':
                    //$('#confirmationMessage').html('<h3> <strong>¡Solicitud de presupuesto realizada con éxito!</strong> En breve te contactaremos.</h3>');
                    sweetAlert('¡Solicitud de presupuesto realizada con éxito!', 'En breve nos comunicaremos contigo', 'success');
                    //$('#formulario')[0].reset();
                    $.ajax({
                        url: '../portal/mail/appointment.php',
                        data: parametros,
                        type: 'POST',
                        beforeSend: function () { },
                        success: function (respuesta) {
                            switch (respuesta) {
                                case '1':
                                    //console.log("mensaje enviado al administrador")
                                    break;
                                default:
                                    //console.log(respuesta)
                            }
                        }
                    });
                    break;
                default:
                    //$('#confirmationMessage').html('<h3> <strong>La cotización no pudo ser registrada.</strong> Vuelve a intentarlo.</h3>');
                    sweetAlert('¡La cotización no pudo ser registrada!', 'Vuelva a intentarlo', 'error');
                    break;    
            }
        }
    });
    //$('#confirmationModal').modal('show');
}
function sendMessage() {
    var m = moment();
    var fecha = m.format('YYYY-MM-DD');
    var hora = m.format('HH:mm:ss');

    var parametros = {
        "nombre": $('#nombre').val(),
        "telefono": $('#telefono').val(),
        "fecha": fecha,
        "hora": hora,
        "asunto": $('#asunto').val(),
        "mensaje": $('textarea#message').val(),
        "email": $('#email').val(),
    }
    $.ajax({
        url: '../../itech/php/mensajes/insertarMensaje.php',
        data: parametros,
        type: 'POST',
        beforeSend: function () {
            $('#confirmationMessage').html('<i class="fas fa-sync fa-2x fa-spin"></i>');
        },
        success: function (respuesta) {
            switch (respuesta) {
                case '1':
                    //console.log({"respuesta 1":respuesta})
                    $.ajax({
                        url: '../portal/mail/contact_me.php',
                        data: parametros,
                        type: 'POST',
                        success: function (respuesta) {
                            switch (respuesta) {
                                //console.log({"respuesta 2":respuesta})
                                case '1':
                                    //$('#confirmationMessage').html('<i class="fas fa-envelope-open-text" e fa-2x text-success"></i> <h3>¡Mensaje enviado correctamente!</h3>');
                                    //$('#contactForm')[0].reset();
                                   sweetAlert('¡Mensaje enviado con éxito!', 'Gracias por contactarte con nosotros', 'success');
                                    break;
                                default:
                                    //$('#confirmationMessage').html('<i class="fas fa-exclamation-triangle fa-2x text-warning"></i> <h3>El mensaje no pudo ser enviado, inténtalo de nuevo.</h3>');
                                    sweetAlert('¡El mensaje no pudo ser enviado!', 'Intente de nuevo', 'error');
                            }
                        }
                    });
                    break;
                default:
                    //$('#confirmationMessage').html('<i class="fas fa-exclamation-triangle fa-2x text-warning"></i> <h3>No fue posible conectarse al servidor, inténtalo de nuevo.</h3>');
                    sweetAlert('¡No fue posible conectarse al servidor!', 'Intente de nuevo', 'error');
                    break;
            }
        }
    })
    //$('#confirmationModal').modal('show');
}

function callTo() {
    window.open(`tel:${telCont}`);
}
function openWhatsapp() {
    window.open(`https://wa.me/52${whatsapp}/?text=¡Hola que tal!, quiero una cotización`)
}
function displayWhats() {
    $.ajax({
        url: '/portal/php/getWhats.php',
        type: 'POST',
        success: function (respuesta) {
            console.log(respuesta)
            switch (respuesta) {
                case '0':
                    break;
                default:
                    var objJSON = JSON.parse(respuesta)
                    var sb = new StringBuilder()
                    var content = new StringBuilder();
                    $.each(objJSON, function (index, value) {
                        var whatsPage
                        $.each(value, function (index2, value2) {
                            switch (index2) {
                                case 'whatsapp':
                                    whatsPage = value2
                                    break
                            }
                        })
                         
                            sb.append(`<a href="https://wa.me/+52${whatsPage}/?text=¡Hola que tal!, quiero una cotización" target="_blank">
                            <img src="portal/img/whatsapp.png" class="redimg whatsred" alt="">
                            <p class="usuario">+52${whatsPage}</p>
                          </a>`)
                        
                        
                    })
                    $('#redWhats').html(sb.toString())
                   
                    }
        }
    })
}
function sweetAlert(title, text, icon) {
    Swal.fire({
        title,
        text,
        icon,
        backdrop : 'true',
        showConfirmButton : 'true',
        confirmButtonColor: '#A4161A',
        showCloseButton : 'true'
    });
}

var goToTop = function() {

    $('.js-gotop').on('click', function(event){
        
        event.preventDefault();

        $('html, body').animate({
            scrollTop: $('html').offset().top
        }, 500);
        
        return false;
    });
}
/*
$( document ).ready(function() {
        $('#WAButton').floatingWhatsApp({
            phone: `+52${whatsapp}`, //WhatsApp Business phone number International format-
            //Get it with Toky at https://toky.co/en/features/whatsapp.
            headerTitle: '¡Envíanos un mensaje!', //Popup Title
            popupMessage: '¡Hola!, Gracias por confiar en nosotros. ¿En qué te podemos ayudar?', //Popup Message
            showPopup: true, //Enables popup display
            buttonImage: '<img src="https://rawcdn.githack.com/rafaelbotazini/floating-whatsapp/3d18b26d5c7d430a1ab0b664f8ca6b69014aed68/whatsapp.svg" />', //Button Image
            //headerColor: 'crimson', //Custom header color
            //backgroundColor: 'crimson', //Custom background button color
            position: "right"    
          });
    });
     */