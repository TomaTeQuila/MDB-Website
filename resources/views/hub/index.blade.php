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
                    <a href="#info-section"  onclick="smoothScroll('seccion2')">Ver más...</a>
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
<section class='info-section' id='info-section'>
    <div class="container-cards">
        <div class="card-index">
            <div class="contenido">
                <h1>INFORMACIÓN</h1>
                <p>
                    Bienvenidos a "MDB Roleplay", tu experiencia de simulación de vida real en el mundo de Unturned. Sumérgete en un servidor chileno vibrante y cautivador que busca ofrecer a los jugadores una auténtica experiencia de roleplay. En nuestro servidor, la creatividad y la interacción entre los jugadores son fundamentales para crear historias únicas y emocionantes. Desde el bullicio de la ciudad hasta los rincones remotos del mapa, "MDB Roleplay" ofrece una amplia variedad de oportunidades para explorar, socializar y sumergirte en roles diversos. Nuestro equipo se esfuerza por mantener un ambiente acogedor y justo, fomentando la participación activa de la comunidad. Ya sea que desees forjar una carrera, sumergirte en intrigas políticas o simplemente disfrutar de la vida virtual, te invitamos a unirte a nosotros en "MDB Roleplay", donde la vida virtual cobra vida con autenticidad y diversión. ¡Prepárate para embarcarte en una experiencia única y emocionante que va más allá de los límites del juego!</p>
                <p>
                    Explora aún más las posibilidades en "MDB Roleplay" al convertirte en miembro VIP. Ofrecemos una variedad de membresías VIP que no solo mejoran tu experiencia de juego, sino que también contribuyen al mantenimiento y desarrollo continuo de nuestro servidor de Unturned y la plataforma web. Al adquirir un VIP, no solo desbloqueas beneficios exclusivos, sino que también te conviertes en un miembro destacado de nuestra comunidad.
                    Los VIPs están disponibles para su compra a través de métodos convenientes, como transferencia bancaria en Chile y PayPal, para garantizar opciones accesibles para todos nuestros jugadores. Tu apoyo financiero es fundamental para mantener la calidad del servidor y proporcionar nuevas y emocionantes características para la comunidad.
                </p>
                <p><span class="letra-chica">Es importante tener en cuenta que todas las compras de VIP son finales, y no se ofrecen reembolsos. Esta política nos ayuda a mantener la estabilidad financiera del servidor y a continuar brindando experiencias de juego excepcionales. Agradecemos sinceramente tu apoyo y esperamos verte en "MDB Roleplay", donde la diversión y la autenticidad se encuentran en cada rincón de nuestra comunidad.</span></p>
            </div>
        </div>
    </div>
</section>

<script>
    function smoothScroll(targetId) {
        const targetElement = document.getElementById(targetId);
        window.scrollTo({
            top: targetElement.offsetTop,
            behavior: 'smooth'
        });
    }
</script>
@endsection

   