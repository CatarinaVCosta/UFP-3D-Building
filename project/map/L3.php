<?php
require 'config.php';
?>
<svg class="map map--4" viewBox="0 0 1200 800" width="100%" height="100%" preserveAspectRatio="xMidYMid meet">
<title>Map Level 4</title>

<g transform="scale(2.3, 2.3) translate(0,60)">
<g transform="translate(740, -165) rotate(90) scale(1.05,1.05)">
<path d="M75,267,152,265,195,219,255,206,311,223,355,262,426,267,426,759,64,752" class="map__outline" />
</g>

<g transform="translate(720, -150) rotate(90)">
<polygon points="75 267 152 265 195 219 255 206 311 223 355 262 426 267 426 759 64 752" class="map__ground" />
</g>

<!-- Sala Pós-Graduation -->
<g transform="translate(133, -150) rotate(90)">
<rect x="85" y="60" width="50" height="70" class="map__space" />
</g>
<!-- Divider -->
<g transform="translate(133, -150) rotate(90)">
<rect x="190" y="-205" width="130" height="260" class="map__divider" />
</g>
<!-- Sala 306 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="85" y="7" width="80" height="50" class="map__space" />
</g>
<!-- Sala 307 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="85" y="-45" width="80" height="50" class="map__space" />
</g>
<!-- Sala 308 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="85" y="-97" width="80" height="50" class="map__space" />
</g>
<!-- Sala 309 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="85" y="-149" width="80" height="50" class="map__space" />
</g>
<!-- Sala 310 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="85" y="-201" width="80" height="50" class="map__space" />
</g>
<!-- Sala CI1 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="85" y="-261" width="60" height="58" class="map__space" />
</g>
<!-- Sala CI2 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="85" y="-318" width="70" height="56" class="map__space" />
</g>
<!-- Sala 301 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="345" y="7" width="80" height="50" class="map__space" />
</g>
<!-- Sala 302 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="345" y="-45" width="80" height="50" class="map__space" />
</g>
<!-- Sala 303 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="345" y="-97" width="80" height="50" class="map__space" />
</g>
<!-- Sala 304 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="345" y="-149" width="80" height="50" class="map__space" />
</g>
<!-- Sala 305 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="345" y="-201" width="80" height="50" class="map__space" />
</g>
<!-- Sala P3G -->
<g transform="translate(133, -150) rotate(90)">
<rect x="140" y="75" width="186" height="55" class="map__space" />
</g>
<!-- Bathroom -->
<g transform="translate(118, 38) rotate(90)">
<rect x="140" y="75" width="30" height="40" class="map__space" />
</g>
<!-- Sala P3G -->
<g transform="translate(133, 70) rotate(90)">
<rect x="140" y="75" width="65" height="55" class="map__space" />
</g>
<!-- Females Bathroom -->
<g transform="translate(468, 56) rotate(90)">
<rect x="140" y="75" width="50" height="40" class="map__space" />
</g>

<!-- Secretariado -->
<g transform="translate(430, 60) rotate(90)">
<rect x="140" y="75" width="50" height="20" class="map__space" />
</g>

<!--
<g transform="translate(405, 100) rotate(225) scale(1.1,1.1)">
<path d="M0 0-70 70A99 99 0 0 1-70-70Z" fill="#bfbfbf" class="map_space"/>
</g>
-->
<g transform="translate(-55, -105) rotate(0)">
<polygon points="449 211 565 212 548 268 508 313 449 313" class="map__space" />
</g>
</g>
</svg>
<div class="level__pins">
    <?php
    $dateNow = date('Y-m-d');
    $hourNow = date("H:i:s", time() - 3600);
    ?>
    <a class="pin pin--4-1" data-category="2" data-space="4.01" data-info="<?php echo pinInfo() ?>" href="#" aria-label="Pin for Postgraduate Room">
        <span class="pin__icon">
            <svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--graduated"><use xlink:href = "#icon-graduated"></use></svg>
        </span>
    </a>

    <a class = "pin pin--4-2" data-category ="<?php echo roomStatus('306') ?>" data-space = "4.02" data-info="<?php echo pinInfo() ?>" href = "#" aria-label = "Pin for Room 306">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--306"><use xlink:href = "#icon-306"></use></svg>
        </span>
    </a>
    <a class="pin pin--4-3" data-category="2" data-space="4.03" href="#" aria-label="Pin for ISUS">
        <span class="pin__icon">
            <svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--307"><use xlink:href = "#icon-307"></use></svg>
        </span>
    </a>

    <a class = "pin pin--4-4" data-category ="<?php echo roomStatus('308') ?>" data-space = "4.04" data-info="<?php echo pinInfo() ?>" href = "#" aria-label = "Pin for Room 308">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--308"><use xlink:href = "#icon-308"></use></svg>
        </span>
    </a>

    <a class = "pin pin--4-5" data-category ="<?php echo roomStatus('309') ?>" data-space = "4.05" data-info="<?php echo pinInfo() ?>" href = "#" aria-label = "Pin for Room 309">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--309"><use xlink:href = "#icon-309"></use></svg>
        </span>
    </a>

    <a class = "pin pin--4-6" data-category ="<?php echo roomStatus('310') ?>" data-space = "4.06" data-info="<?php echo pinInfo() ?>" href = "#" aria-label = "Pin for Room 310">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--310"><use xlink:href = "#icon-310"></use></svg>
        </span>
    </a>
    <a class="pin pin--4-7" data-category="2" data-space="4.07" href="#" aria-label="Pin for IT Office">
        <span class="pin__icon">
            <svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--it"><use xlink:href = "#icon-it"></use></svg>
        </span>
    </a>
    <a class="pin pin--4-8" data-category="2" data-space="4.08" data-info="false" href="#" aria-label="Pin for Office">
        <span class="pin__icon">
            <svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--office"><use xlink:href = "#icon-office"></use></svg>
        </span>
    </a>
    <a class="pin pin--4-9" data-category="2" data-space="4.09" data-info="false" href="#"  aria-label="Pin for Offices">
        <span class="pin__icon">
            <svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--office"><use xlink:href = "#icon-office"></use></svg>
        </span>
    </a>

    <a class = "pin pin--4-10" data-category ="<?php echo roomStatus('301') ?>" data-space = "4.10" data-info="<?php echo pinInfo() ?>" href = "#" aria-label = "Pin for Room 301">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--301"><use xlink:href = "#icon-301"></use></svg>
        </span>
    </a>

    <a class = "pin pin--4-11" data-category ="<?php echo roomStatus('302') ?>" data-space = "4.11" data-info="<?php echo pinInfo() ?>" href ="#" aria-label = "Pin for Room 302">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--302"><use xlink:href = "#icon-302"></use></svg>
        </span>
    </a>

    <a class = "pin pin--4-12" data-category ="<?php echo roomStatus('303') ?>" data-space = "4.12" data-info="<?php echo pinInfo() ?>" href = "#" aria-label = "Pin for Room 303">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--303"><use xlink:href = "#icon-303"></use></svg>
        </span>
    </a>

    <a class = "pin pin--4-13" data-category ="<?php echo roomStatus('304') ?>" data-space = "4.13" data-info="<?php echo pinInfo() ?>" href = "#" aria-label = "Pin for Room 304">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--304"><use xlink:href = "#icon-304"></use></svg>
        </span>
    </a>

    <a class = "pin pin--4-14" data-category ="<?php echo roomStatus('305') ?>" data-space = "4.14" data-info="<?php echo pinInfo() ?>" href = "#" aria-label = "Pin for Room 305">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--305"><use xlink:href = "#icon-305"></use></svg>
        </span>
    </a>
    <a class="pin pin--4-15" data-category="2" data-space="4.15" data-info="false" href="#" aria-label="Pin for Noble Hall">
        <span class="pin__icon">
            <svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--nobleHall"><use xlink:href = "#icon-nobleHall"></use></svg>
        </span>
    </a>
    <a class="pin pin--4-16" data-category="2" data-space="4.16" data-info="false" href="#" aria-label="Pin for Bathroom">
        <span class="pin__icon">
            <svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--maleBathroom"><use xlink:href = "#icon-maleBathroom"></use></svg>
        </span>
    </a>
    <a class="pin pin--4-17" data-category="2" data-space="4.17" data-info="false" href="#" aria-label="Pin for Offices">
        <span class="pin__icon">
            <svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--office"><use xlink:href = "#icon-office"></use></svg>
        </span>
    </a>
    <a class="pin pin--4-18" data-category="2" data-space="4.18" data-info="false" href="#" aria-label="Pin for Bathroom">
        <span class="pin__icon">
            <svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--female"><use xlink:href = "#icon-female"></use></svg>
        </span>
    </a>
</div>
<!-- /level__pins -->
<?php
mysqli_close($conn);
?> 
