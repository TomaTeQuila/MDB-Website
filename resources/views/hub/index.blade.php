@extends('templates.master')
@section('main-content')
<section class="index-section">
    <div class="index-info">
        <div class="mdblogo">
            <img src="{{asset('images/www.png')}}" alt="">
        </div>
        <p>Experiencia UNICA y DEFINITIVA en UNTURNED ROLEPLAY</p>
    </div>
    <div class="container-cards">
        <div class="card-index">
            <figure>
                <img src="{{asset('images/enterovio.png')}}" alt="" srcset="">
            </figure>
            <div class="contenido">
                <h3>¿Que somos?</h3>
                <p>
                    Somos un servidor roleplay de unturned. Somos un servidor bastante ambicioso,
                    el cual quiere llevar el concepto de rol a otro nivel, manteniendo un balance
                    entre lo profesional, lo serio, y lo entretenido.
                </p>
                <div class="box">
                    <a href="#">Ver más...</a>
                </div>
            </div>
        </div>
        <div class="card-index tienda">
            <figure>
                <img src="{{asset('images/TIENDA.png')}}" alt="" srcset="">
            </figure>
            <div class="contenido">
                <h3>Tienda</h3>
                <p>El servidor cuenta con microtransacciones para mantener el hosting del servidor web y el hosting del servidor unturned. Encontrarás una serie de 
                    ventajas para comprar.
                </p>
                <a href="#">Ver más...</a>
            </div>
        </div>
        <div class="card-index galeria">
            <figure>
                <img src="{{asset('images/GALERIA.png')}}" alt="" srcset="">
            </figure>
            <div class="contenido">
                <h3>Galeria</h3>
                <p>Revisa los mejores momentos del servidor, que tanto nosotros como equipo y la comunidad, han querido compartir con otros usuarios, para así guardar esos momentos por siempre. <3 </p>
                <a href="#">Ver más...</a>
            </div>
        </div>
    </div>
</section>
@endsection

   