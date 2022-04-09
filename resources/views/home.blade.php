
@extends('layouts/app' )


@section('content')

<!-- Page -->
<div class="gla_page" id="gla_page">

    
    
    <!-- To Top -->
    <a href="#gla_page" class="gla_top ti ti-angle-up gla_go"></a>


    <!-- Music -->
    <div class="gla_music_icon">
        <i class="ti ti-music"></i>
    </div>
    <div class="gla_music_icon_cont">
        <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/241787418&color=%23ff5500&auto_play=true&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe><div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/joseanlog" title="Jósean Log" target="_blank" style="color: #cccccc; text-decoration: none;">Jósean Log</a> · <a href="https://soundcloud.com/joseanlog/chachacha-acustico" title="Chachachá (acústico)" target="_blank" style="color: #cccccc; text-decoration: none;">Chachachá (acústico)</a></div>
        <!--iframe src="https://soundcloud.com/joseanlog/chachacha-acustico&amp;auto_play=true&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe-->
    </div>
    
    <!-- Header -->
    <header>       

        <nav class="gla_light_nav gla_transp_nav">

            <div class="container">
                
                <div class="gla_logo_container clearfix">
                    <img src="images/glanz_logo.png" alt="" class="gla_logo_rev">
                    <div class="gla_logo_txt">
                        <!-- Logo -->
                        <a href="/" class="gla_logo">Mis XV</a>
                        
                        <!-- Text Logo -->
                        <div class="gla_logo_und">Abril 16, 2022</div>
                    </div>
                </div>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ dd(session('status')) }}
                        {{ session('status') }}
                    </div>
                @endif

                <!-- Menu -->
                <!--div class="gla_main_menu gla_main_menu_mobile">
                    
                    <div class="gla_main_menu_icon">
                        <i></i><i></i><i></i><i></i>
                        <b>Menu</b>
                        <b class="gla_main_menu_icon_b">Back</b>
                    </div>
                </div-->
            </div>
            <!-- container end -->
        </nav>
        
    </header>
    <!-- Header End -->


    <!-- Slider -->
    <div class="gla_slider gla_image_bck  gla_wht_txt gla_fixed"  data-image="{{ asset('images/anochecer.jpg') }}" data-stellar-background-ratio="0.8">

        <!-- Over -->
        <div class="gla_over" data-color="#1e1d2d" data-opacity="0.2"></div>


        <div class="container">

            
            <!-- Slider Texts -->
            <div class="gla_slide_txt gla_slide_center_middle text-center">
                 <div class="gla_flower gla_flower2">
                    <div class="gla_flower2_name_l">Ketzaly <b>Te esperamos</b></div>
                    <div class="gla_flower2_name_r">Galván <b>Abril 16, 2022</b></div>
                    <img src="{{ asset('images/ketza_face.jpeg') }}" alt="">
                </div>

                
            </div>
            <!-- Slider Texts End -->
        
        </div>
        <!-- container end -->

        <!-- Slide Down -->
        <a class="gla_scroll_down gla_go" href="#gla_content">
            <b></b>
            Scroll
        </a>


    </div>
    <!-- Slider End -->

    <!-- Content -->
    <section id="gla_content" class="gla_content">


       <!-- section -->
        <section class="gla_section gla_image_bck" data-color="#fafafd">
                     
            <div class="container text-center">
                <p><img src="{{ asset('images/animations/flower5.gif') }}" data-bottom-top="@src:images/animations/flower5.gif; opacity:1" class="gla_animated_flower" height="150" alt=""></p>
                <h2>Mis XV's años</h2>
                <h3 class="gla_subtitle">16th Abril</h3>
                
                <p>Nos conocimos una noche de bar, sin intención de conocer a alguien y con objetivos diferentes. Al finalizar la noche lo que parecía una amistad se transformo al paso del tiempo en la relaciòn que acompañaran este 21 de octubre  </p>
   
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->


        <!-- section -->
        <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="{{ asset('images/arena.jpeg') }}">
            
            <!-- Over -->
            <div class="gla_over" data-color="#1e1d2d" data-opacity="0.4"></div>
            
            <div class="container text-center">
                <p><img src="{{ asset('images/animations/savethedate_wh.gif') }}" data-bottom-top="@src:images/animations/savethedate_wh.gif" height="150" alt=""></p>
                <h2>Octubre 21th, 2021</h2>
                <h3 class="gla_subtitle">Salón La Montaña del Águila,<br>Cancún,  MX</h3>
                <div class="gla_countdown" data-year="2021" data-month="10" data-day="21"></div>
                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->


        <!-- section -->
        <section class="gla_section">
            
            
            <div class="container text-center">
                <p><img src="{{ asset('images/animations/flower6.gif') }}" data-bottom-top="@src:images/animations/flower6.gif; opacity:1" class="gla_animated_flower" height="110" alt=""></p>
                <h2>Detalles Boda</h2>
                <h3 class="gla_subtitle">Cuándo & Dónde</h3>
                <p>Nuestra boda será en el registro civil sólo con las/os testigas/os, después estaremos en el salón La Montaña del Águila donde realizaremos una unión espiritual y posteriormente se dará inicio a la celebración. </p>
                <div class="row text-center">
                    <div class="col-md-4 gla_round_block">
                        <div class="gla_round_im gla_image_bck" data-image="{{ asset('images/boda_civil.jpeg') }}"></div>
                        <h3>La Boda Civil</h3>
                        <p>12:00 PM – 1:00 PM<br>
                        Registro Civil,<br>
                        Cancún<br>
                        MX</p>
                        <a href="https://www.google.com.mx/maps/place/DIRECCI%C3%93N+DE+REGISTRO+CIVIL+-+Oficial%C3%ADa+01+y+Oficial%C3%ADa+02/@21.1615027,-86.8284827,18.1z/data=!4m12!1m6!3m5!1s0x8f4c2c0737a9f0ab:0x1a0a54df0bd2c1b9!2sParque+de+las+Palapas!8m2!3d21.1611457!4d-86.8274882!3m4!1s0x8f4c2c07236d5771:0xd887a1d6aeeb4125!8m2!3d21.1618759!4d-86.8280604" target="_blank" class="btn">View Map</a>
                    </div>
                    <div class="col-md-4 gla_round_block">
                        <div class="gla_round_im gla_image_bck" data-image="{{ asset('images/ritual.jpeg') }}"></div>
                        <h3>Unión Espiritual</h3>
                        <p>1:00 PM – 1:30 PM<br>
                        Salón La Montaña del Águila,<br>
                        Cancún<br>
                        MX</p>
                        <a href="https://www.google.com.mx/maps/place/La+Monta%C3%B1a+Del+Aguila/@21.1402127,-86.8955736,20.15z/data=!4m8!3m7!1s0x8f4c2b49a7fb6a05:0x832825043d4efa37!5m2!4m1!1i2!8m2!3d21.1398869!4d-86.8954289" target="_blank" class="btn">View Map</a>
                    </div>
                    <div class="col-md-4 gla_round_block">
                        <div class="gla_round_im gla_image_bck" data-image="{{ asset('images/salon.jpeg') }}"></div>
                        <h3>Celebración</h3>
                        <p>1:30 PM – 11:30 PM<br>
                        Salón La Montaña del Águila,<br>
                        Cancún<br>
                        MX</p>
                        <a href="https://www.google.com.mx/maps/place/La+Monta%C3%B1a+Del+Aguila/@21.1402127,-86.8955736,20.15z/data=!4m8!3m7!1s0x8f4c2b49a7fb6a05:0x832825043d4efa37!5m2!4m1!1i2!8m2!3d21.1398869!4d-86.8954289" target="_blank" class="btn">View Map</a>
                    </div>
                </div>

                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->


        <!-- section -->
        <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.2" data-image="{{ asset('images/palmeras.jpg') }}">
            
            <!-- Over -->
            <div class="gla_over" data-color="#1e1d2d" data-opacity="0.4"></div>
            
            <div class="container text-center">
                <p><img src="images/animations/rsvp_wh.gif" data-bottom-top="@src:images/animations/rsvp_wh.gif" height="200" alt=""></p>
                
                <div class="row">
                    <div class="col-md-8 col-md-push-2">
                        @if ($errors->any())
                            <div class="errors">
                                <ul style="list-style: none;
                                        padding-left: 0px;
                                        text-align: left;
                                        color: red;
                                        padding: 16px;
                                        background-color: white;">
                                    @foreach ($errors->all() as $message)
                                        
                                        <li>{{ $message }}</li>
                                        
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <form action="/post" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Tu nombre*</label>
                                    <input type="text" name="nombre" class="form-control form-opacity">
                                </div>
                                <div class="col-md-6">
                                    <label>Tu teléfono*</label>
                                    <input type="number" name="telefono" class="form-control form-opacity">
                                </div>
                  
                                <div class="col-md-6">
                                    <label>Confirma tu asistencia</label>

                                    <input type="radio" name="attend" value="Si, asistiré">
                                    <span>Si, asistiré</span><br>
                                    <input type="radio" name="attend" value="No podré asistir">
                                    <span>No podré asistir</span>
                                    
                                </div>
                                <div class="col-md-6">
                                    <label>¿Llevas acompañantes?</label>

                                    <input type="radio" name="friends" value="Si">
                                    <span>Si</span><br>
                                    <input type="radio" name="friends" value="No">
                                    <span>No</span>
                                    
                                </div>
                                <div class="col-md-6" style="margin-top: 15px;">
                                    <label>¿Cuántos acompañantes?</label>
                                    <input type="number" name="paxs" class="form-control form-opacity" value="0">
                                </div>
                                <div class="col-md-6" style="margin-top: 15px;">
                                    <label>Nombres de acompañantes</label>
                                    <input type="text" name="pax_names" class="form-control form-opacity" value='Solo yo'>
                                </div>
                                <div class="col-md-12">
                                    <label>Comentarios</label>
                                    <textarea name="message" class="form-control form-opacity">
                                        
                                    </textarea>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" class="btn submit" value="Send">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                
                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->


        <!-- section -->
        <section class="gla_section gla_image_bck">
            
            
            <div class="container text-center">
                <p><img src="{{ asset('images/animations/flower7.gif') }}" data-bottom-top="@src:images/animations/flower7.gif; opacity:1" class="gla_animated_flower" height="110" alt=""></p>
                <h2>Nuestros Momentos</h2>
                <p>Les confiamos parte de nuestra relación capturada en pequeños momentos significativos para nosotres. Hemos construido está relación en pandemia, descubriendo formas de amar, compartir, celebrar y crecer, sin duda esta relación nos ha hecho crecer, personalmente, en pareja y profesionalmente por esto y más queremos dar el siguiente paso y compartir todo lo que el mundo tiene que ofrecernos. </p>
                
                <!-- filters -->
                <div class="button-group filter-button-group">
                    <a data-filter="*">Mostrar todos</a>
                    <a data-filter=".conociendonos">Conociendonos</a>
                    <a data-filter=".enamorado">Enamorandonos</a>
                    <a data-filter=".juntes">Viviendo juntes</a>
                    <a data-filter=".compartiendo">Compartiendo</a>
                </div>
                <!-- filters end -->

                <!-- grid -->
                <div class="gla_portfolio_no_padding grid">
                    
                    <div class="col-sm-4 gla_anim_box grid-item conociendonos">
                        <div class="gla_shop_item">
                            <a href="{{ asset('images/memorias/conociendonos/palapas.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/conociendonos/palapas.jpeg') }}" alt="">
                            </a>
                            
    

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item conociendonos">
                        <div class="gla_shop_item">
                            <a href="{{ asset('images/memorias/conociendonos/esquites.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/conociendonos/esquites.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item enamorado">
                        <div class="gla_shop_item">
                            <a href="{{ asset('images/memorias/enamorandonos/casa.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/enamorandonos/casa.jpeg') }}" alt="">
                            </a>

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item conociendonos">
                        <div class="gla_shop_item">
                            <a href="{{ asset('images/memorias/conociendonos/antro.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/conociendonos/antro.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item compartiendo">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/compartiendo/relojes.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/compartiendo/relojes.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item juntes">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/juntes/sonrisa.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/juntes/sonrisa.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item enamorado">
                        <div class="gla_shop_item">
                            <a href="{{ asset('images/memorias/enamorandonos/febrero.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/enamorandonos/febrero.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item conociendonos">
                        <div class="gla_shop_item">
                            <a href="{{ asset('images/memorias/conociendonos/fiesta.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/conociendonos/fiesta.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>
                    <div class="col-sm-4 gla_anim_box grid-item compartiendo">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/compartiendo/alitas.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/compartiendo/alitas.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>
                    <div class="col-sm-4 gla_anim_box grid-item juntes">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/juntes/noche.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/juntes/noche.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item compartiendo">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/compartiendo/amigos.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/compartiendo/amigos.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item enamorado">
                        <div class="gla_shop_item">
                            <a href="{{ asset('images/memorias/enamorandonos/programando.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/enamorandonos/programando.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>
                    <div class="col-sm-4 gla_anim_box grid-item compartiendo">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/compartiendo/cine.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/compartiendo/cine.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item conociendonos">
                        <div class="gla_shop_item">
                            <a href="{{ asset('images/memorias/conociendonos/chinos.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/conociendonos/chinos.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item compartiendo">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/compartiendo/family.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/compartiendo/family.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item juntes">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/juntes/mascarillas.jpg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/juntes/mascarillas.jpg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item enamorado">
                        <div class="gla_shop_item">
                            <a href="{{ asset('images/memorias/enamorandonos/beso.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/enamorandonos/beso.jpeg') }}" alt="">
                            </a>

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item compartiendo">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/compartiendo/hijos.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/compartiendo/hijos.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item juntes">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/juntes/cocinando.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/juntes/cocinando.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item conociendonos">
                        <div class="gla_shop_item">
                            <a href="{{ asset('images/memorias/conociendonos/juntos.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/conociendonos/juntos.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item compartiendo">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/compartiendo/juntos.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/compartiendo/juntos.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item juntes">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/juntes/closet.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/juntes/closet.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item conociendonos">
                        <div class="gla_shop_item">
                            <a href="{{ asset('images/memorias/conociendonos/chat.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/conociendonos/chat.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                     <div class="col-sm-4 gla_anim_box grid-item compartiendo">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/compartiendo/love.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/compartiendo/love.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item conociendonos">
                        <div class="gla_shop_item">
                            <a href="{{ asset('images/memorias/conociendonos/hotcake.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/conociendonos/hotcake.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item juntes">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/juntes/durmiendo.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/juntes/durmiendo.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item compartiendo">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/compartiendo/newyear.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/compartiendo/newyear.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item juntes">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/juntes/juego.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/juntes/juego.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item compartiendo">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/compartiendo/papa.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/compartiendo/papa.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                     <div class="col-sm-4 gla_anim_box grid-item juntes">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/juntes/bella_durmiente.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/juntes/bella_durmiente.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item compartiendo">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/compartiendo/pastel.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/compartiendo/pastel.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item compartiendo">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/compartiendo/playa.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/compartiendo/playa.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item compartiendo">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/compartiendo/playa_todos.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/compartiendo/playa_todos.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item compartiendo">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/compartiendo/propuesta.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/compartiendo/propuesta.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item compartiendo">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/compartiendo/turista.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/compartiendo/turista.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    <div class="col-sm-4 gla_anim_box grid-item compartiendo">
                        <div class="gla_shop_item">
                             <a href="{{ asset('images/memorias/compartiendo/xcaret.jpeg') }}" class="lightbox">
                                <img src="{{ asset('images/memorias/compartiendo/xcaret.jpeg') }}" alt="">
                            </a>
                            

                        </div>
                    </div>

                    




                 </div>
                 <!-- grid end -->
                

                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->




        <!-- section -->
        <section class="gla_section gla_image_bck gla_fixed gla_wht_txt" data-stellar-background-ratio="0.8" data-image="{{ asset('images/vango.jpeg') }}">
            
            <!-- Over -->
            <div class="gla_over" data-color="#1e1d2d" data-opacity="0.4"></div>
            
            <div class="container text-center">
                <p><img src="images/animations/thnyou_wh.gif" alt="" height="200" data-bottom-top="@src:images/animations/thnyou_wh.gif"></p>

                
                
            </div>
            <!-- container end -->

        </section>
        <!-- section end -->

    

            
        

    </section>
    <!-- Content End -->
    

    

</div>
<!-- Page End -->



@endsection


