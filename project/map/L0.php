<?php
require 'config.php';
?>
<svg class="map map--1" viewBox="0 0 1200 800" width="100%" height="100%" preserveAspectRatio="xMidYMid meet">
<title>Map Level 1</title>

<g transform="scale(2.0, 2.3) translate(0,60)">
<g transform="translate(1008, -228) rotate(90) scale(1.34,1.34)">
<path d="M332,368,383,369,381,728,293,727,294,737,270,750,251,754,221,747,206,736,207,726,118,723,130,366,178,366,215,338,257,327,299,338" class="map__outline" />
</g>

<g transform="translate(1000, -230) rotate(90) scale(1.33,1.33)">
<polygon points="332,368,383,369,381,728,293,727,294,737,270,750,251,754,221,747,206,736,207,726,118,723,130,366,178,366,215,338,257,327,299,338" class="map__ground" />
</g>

<!-- A1 -->
<g transform="translate(760, -140) rotate(90)">
<polygon points="190,675,190,740,208,752,233,756,270,753,298,736,298,676" class="map__space" />
</g>


<!-- divider -->
<g transform="translate(475, -25) rotate(90)">
<rect x="85" y="60" width="100" height="310" class="map__divider" />
</g>

<!-- bathrooms -->
<g transform="translate(240, 205) rotate(90)">
<polygon points="0 0 0 -80 70 -10 70 0" class="map__space" />
</g>

<!-- bathrooms -->
<g transform="translate(370, 275) rotate(-90)">
<polygon points="0 0 0 -80 54 -25 54 0" class="map__space" />
</g>

<!--  -->
<g transform="translate(570, 140) rotate(91)">
<rect x="85" y="60" width="54" height="139" class="map__space" />
</g>


<!-- Professors Secretary -->
<g transform="translate(492, -144) rotate(91)">
<rect x="85" y="60" width="80" height="90" class="map__space" />
</g>

<!-- UFP UV -->
<g transform="translate(400, -144) rotate(91)">
<rect x="85" y="60" width="80" height="190" class="map__space" />
</g>

<!-- Males Bathroom near UFP UV -->
<g transform="translate(207, -144) rotate(91)">
<rect x="85" y="60" width="77" height="60" class="map__space" />
</g>

<!--  -->
<g transform="translate(572, -140) rotate(91)">
<rect x="85" y="60" width="58" height="78" class="map__space" />
</g>


<!--  -->
<g transform="translate(300, 120) rotate(91)">
<rect x="85" y="60" width="70" height="135" class="map__space" />
</g>

<!--  -->
<g transform="translate(150, 120) rotate(91)">
<rect x="85" y="60" width="70" height="50" class="map__space" />
</g>

<!-- Elevator -->
<g transform="translate(140, -66) rotate(91)">
<rect x="85" y="60" width="30" height="40" class="map__space" />
</g>

<!-- Bathroom -->
<g transform="translate(140, 78) rotate(91)">
<rect x="85" y="60" width="40" height="40" class="map__space" />
</g>

</g>
</svg>
<div class="level__pins">

    <a class = "pin pin--1-1" data-category = "2" data-space = "1.01" href = "#" aria-label = "Pin for UFP UV">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--ufpuv"><use xlink:href = "#icon-ufpuv"></use></svg>
        </span>
    </a>
    <a class = "pin pin--1-2" data-category = "2" data-space = "1.02" href = "#" aria-label = "Pin for Secretary">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--support"><use xlink:href = "#icon-support"></use></svg>
        </span>
    </a>
    <a class = "pin pin--1-3" data-category = "2" data-space = "1.03" data-info="false" href = "#" aria-label = "Pin for Elevator">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--elevator"><use xlink:href = "#icon-elevator"></use></svg>
        </span>
    </a>

    <a class = "pin pin--1-4" data-category ="<?php echo roomStatus('A1'); ?>" data-space = "1.04" data-info="<?php echo pinInfo() ?>" href = "#" aria-label = "Pin for Room A1">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--a1"><use xlink:href = "#icon-a1"></use></svg>
        </span>
    </a>
    <a class = "pin pin--1-5" data-category = "2" data-space = "1.05" href = "#" aria-label = "Pin for OSCOT">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--oscot"><use xlink:href = "#icon-oscot"></use></svg>
        </span>
    </a>
    <a class = "pin pin--1-6" data-category = "2" data-space = "1.06" data-info="false" href = "#" aria-label = "Pin for Teacher's Room">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--office"><use xlink:href = "#icon-office"></use></svg>
        </span>
    </a>
    <a class = "pin pin--1-7" data-category = "2" data-space = "1.07" data-info="false" href = "#" aria-label = "Pin for Bathroom">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--maleBathroom"><use xlink:href = "#icon-maleBathroom"></use></svg>
        </span>
    </a>
    <a class = "pin pin--1-8" data-category = "2" data-space = "1.08" href = "#" aria-label = "Pin for CEFOG">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg  class = "icon icon--logo icon--admin"><use xlink:href = "#icon-admin"></use></svg>
        </span>
    </a>
    <a class = "pin pin--1-9" data-category = "2" data-space = "1.09" href = "#" aria-label = "Pin for Ingress Office">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--admin"><use xlink:href = "#icon-admin"></use></svg>
        </span>
    </a>
    <a class = "pin pin--1-10" data-category = "2" data-space = "1.10" data-info="false" href = "#" aria-label = "Pin for ATM">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg width="4px" height="4px" class = "icon icon--logo icon--atm"><use xlink:href = "#icon-atm"></use></svg>
        </span>
    </a>
    <a class = "pin pin--1-11" data-category = "2" data-space = "1.11" data-info="false" href = "#" aria-label = "Pin for Bathroom">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--female"><use xlink:href = "#icon-female"></use></svg>
        </span>
    </a>
    <a class = "pin pin--1-12" data-category = "2" data-space = "1.12" href = "#" aria-label = "Pin for Professor's Secretary">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--support"><use xlink:href = "#icon-support"></use></svg>
        </span>
    </a>
    <a class = "pin pin--1-13" data-category = "2" data-space = "1.13" data-info="false" href = "#" aria-label = "Pin for Bathroom">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--maleBathroom"><use xlink:href = "#icon-maleBathroom"></use></svg>
        </span>
    </a>
        <a class = "pin pin--1-14" data-category = "2" data-space = "1.14" data-info="false" href = "#" aria-label = "Pin for Bathroom">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--female"><use xlink:href = "#icon-female"></use></svg>
        </span>
    </a>
</div>
<!--/level__pins -->
<?php
mysqli_close($conn);
?> 
