<div class="cabezote__grid">
    <div class="cabezote__titulo">FACTURA</div>
    <div class="cabezote__logo">TPTECH</div>
    <div class="cabezote__fecha">{{ date ( 'd-m-Y' ); }}</div>
</div>

<div class="cabezote__cliente">
    <p><b>Cliente:</b>{{ Auth::User()->name }}</p>
    <p><b>Dirección:</b> {{ Auth::User()->dire }} </p>
    <p><b>Teléfono:</b> {{ Auth::User()->tel }}</p>
</div>

<h2 class="cabezote__detalle_fact">Detalle Factura</h2>