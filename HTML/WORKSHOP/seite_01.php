<?php
    require_once "inc.head.html";
?>
<header>
Inhalt Seite 01
</header>

<section class="section">

    <dl>
        <dt>#01</dt>
            <dd>
                <img src="img/01_img.png" alt="Simply Square" 
                onmouseover="nhpup.popup('DIES IST DER CODE DAZU: <br/><br/> <img src=&quot;img&#47;guess_who.png&quot;/>', 
                {'width': 200});">
            </dd>

        <dt> Begriff 1</dt>
            <dd> <a onmouseover="nhpup.popup('So habe ich das gemacht: <br/><br/> <img src=&quot;guess_who.png&quot;/>', 
                {'width': 200});">Beschreibung des Begriffs</a></dd>


    </dl>
</section>

<footer>

</footer>

<?php
    require_once "inc.foot.html";
?>