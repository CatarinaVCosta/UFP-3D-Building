<?php
require 'config.php';
?>
<svg class="map map--2" viewBox="0 0 1200 800" width="100%" height="100%" preserveAspectRatio="xMidYMid meet">
<title>Map Level 2</title>

<g transform="scale(2.0, 2.3) translate(0,60)">
<g transform="translate(1008, -228) rotate(90) scale(1.34,1.34)">
<path d="M332,368,383,369,381,728,293,727,294,737,270,750,251,754,221,747,206,736,207,726,118,723,130,366,178,366,215,338,257,327,299,338" class="map__outline" />
</g>


<g transform="translate(1000, -230) rotate(90) scale(1.33,1.33)">
<polygon points="332,368,383,369,381,728,293,727,294,737,270,750,251,754,221,747,206,736,207,726,118,723,130,366,178,366,215,338,257,327,299,338" class="map__ground" />
</g>

<!-- divider -->
<g transform="translate(475, -25) rotate(90)">
<rect x="85" y="60" width="100" height="310" class="map__divider" />
</g>

<!-- Sala Pós-Graduation -->
<g transform="translate(172, -148) rotate(91)">
<rect x="85" y="60" width="80" height="70" class="map__space" />
</g>

<!-- Sala ... -->
<g transform="translate(228, -146) rotate(91)">
<rect x="85" y="60" width="80" height="55" class="map__space" />
</g>

<!-- Sala ... -->
<g transform="translate(349, -144) rotate(91)">
<rect x="85" y="60" width="80" height="120" class="map__space" />
</g>

<!-- Sala ... -->
<g transform="translate(405, -142) rotate(91)">
<rect x="85" y="60" width="80" height="55" class="map__space" />
</g>

<!-- Sala ... -->
<g transform="translate(463, -140) rotate(91)">
<rect x="85" y="60" width="80" height="55" class="map__space" />
</g>

<!-- Sala (cont) -->
<g transform="translate(518, -138) rotate(91)">
<rect x="85" y="60" width="56" height="52" class="map__space" />
</g>

<!-- Sala (cont) -->
<g transform="translate(572, -136) rotate(91)">
<rect x="85" y="60" width="56" height="52" class="map__space" />
</g>

<!-- Sala ... -->
<g transform="translate(151, 113) rotate(91)">
<rect x="85" y="60" width="80" height="55" class="map__space" />
</g>

<!-- Sala ... -->
<g transform="translate(228, 113) rotate(91)">
<rect x="85" y="60" width="80" height="55" class="map__space" />
</g>

<!-- Sala ... -->
<g transform="translate(349, 113) rotate(91)">
<rect x="85" y="60" width="80" height="120" class="map__space" />
</g>

<!-- Sala ... -->
<g transform="translate(470, 113) rotate(91)">
<rect x="85" y="60" width="80" height="120" class="map__space" />
</g>

<g transform="translate(521, 123) rotate(91)">
<rect x="85" y="60" width="70" height="49" class="map__space" />
</g>

<g transform="translate(572, 94) rotate(91)">
<rect x="85" y="60" width="100" height="50" class="map__space" />
</g>

<g transform="translate(760, -140) rotate(90)">
<polygon points="190,675,190,740,208,752,233,756,270,753,298,736,298,676" class="map__space" />
</g>


<!-- Elevator -->
<g transform="translate(140, -66) rotate(91)">
<rect x="85" y="60" width="30" height="40" class="map__space" />
</g>

<!-- Bathroom -->
<g transform="translate(135, 78) rotate(91)">
<rect x="85" y="60" width="32" height="37" class="map__space" />
</g>

<!-- Bathroom near 106 -->
<g transform="translate(498, 105) rotate(90)">
<polygon points="100 70 100 70 80 40 100 40" class="map__space" />
</g>

<!-- Male Bathroom near Conti-->
<g transform="translate(584, -135) rotate(90)">
<rect x="140" y="75" width="20" height="40" class="map__space" />
</g>


</g>

</svg>
<div class="level__pins">

    <a class = "pin pin--2-1" data-category ="<?php echo roomStatus('107') ?>" data-space = "2.01" href = "#" aria-label = "Pin for Room 107">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--107"><use xlink:href = "#icon-107"></use></svg>
        </span>
    </a>

    <a class = "pin pin--2-2" data-category ="<?php echo roomStatus('108') ?>" data-space = "2.02" href = "#" aria-label = "Pin for Room 108">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--108"><use xlink:href = "#icon-108"></use></svg>
        </span>
    </a>

    <a class = "pin pin--2-3" data-category ="<?php echo roomStatus('109') ?>" data-space = "2.03" href = "#" aria-label = "Pin for Room 109">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--109"><use xlink:href = "#icon-109"></use></svg>
        </span>
    </a>

    <a class = "pin pin--2-4" data-category ="<?php echo roomStatus('110') ?>" data-space = "2.04" href = "#" aria-label = "Pin for Room 110">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--110"><use xlink:href = "#icon-110"></use></svg>
        </span>
    </a>

    <a class = "pin pin--2-5" data-category ="<?php echo roomStatus('111') ?>" data-space = "2.05" href = "#" aria-label = "Pin for Room 111">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--111"><use xlink:href = "#icon-111"></use></svg>
        </span>
    </a>

    <a class = "pin pin--2-6" data-category ="<?php echo roomStatus('A2') ?>" data-space = "2.06" href = "#" aria-label = "Pin for Room A2">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--a2"><use xlink:href = "#icon-a2"></use></svg>
        </span>
    </a>

    <a class = "pin pin--2-7" data-category ="<?php echo roomStatus('101') ?>" data-space = "2.07" href = "#" aria-label = "Pin for Room 101">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--101"><use xlink:href = "#icon-101"></use></svg>
        </span>
    </a>

    <a class = "pin pin--2-8" data-category ="<?php echo roomStatus('102') ?>" data-space = "2.08" href = "#" aria-label = "Pin for Room 102">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--102"><use xlink:href = "#icon-102"></use></svg>
        </span>
    </a>

    <a class = "pin pin--2-9" data-category ="<?php echo roomStatus('103') ?>" data-space = "2.09" href = "#" aria-label = "Pin for Room 103">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--103"><use xlink:href = "#icon-103"></use></svg>
        </span>
    </a>

    <a class = "pin pin--2-10" data-category ="<?php echo roomStatus('104') ?>" data-space = "2.10" href = "#" aria-label = "Pin for Room 104">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--104"><use xlink:href = "#icon-104"></use></svg>
        </span>
    </a>

    <a class = "pin pin--2-11" data-category ="<?php echo roomStatus('105') ?>" data-space = "2.11" href = "#" aria-label = "Pin for Room 105">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--105"><use xlink:href = "#icon-105"></use></svg>
        </span>
    </a>

    <a class = "pin pin--2-12" data-category ="<?php echo roomStatus('106') ?>" data-space = "2.12" href = "#" aria-label = "Pin for Room 106">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--106"><use xlink:href = "#icon-106"></use></svg>
        </span>
    </a>
    <a class="pin pin--2-13" data-category="2" data-space="2.13" data-info="false" href="#" aria-label="Pin for Elevator">
        <span class="pin__icon">
            <svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--elevator"><use xlink:href = "#icon-elevator"></use></svg>
        </span>
    </a>
    <a class="pin pin--2-14" data-category="2" data-space="2.14" data-info="false" href="#" aria-label="Pin for Conti">
        <span class="pin__icon">
            <svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--conti"><use xlink:href = "#icon-conti"></use></svg>
        </span>
    </a>
    <a class="pin pin--2-15" data-category="2" data-space="2.15" data-info="false" href="#" aria-label="Pin for Conti">
        <span class="pin__icon">
            <svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--conti"><use xlink:href = "#icon-conti"></use></svg>
        </span>
    </a>
    <a class="pin pin--2-16" data-category="2" data-space="2.16" data-info="false" href="#" aria-label="Pin for Bathroom">
        <span class="pin__icon">
            <svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--female"><use xlink:href = "#icon-female"></use></svg>
        </span>
    </a>
    <a class="pin pin--2-17" data-category="2" data-space="2.17" data-info="false" href="#" aria-label="Pin for Bathroom">
        <span class="pin__icon">
            <svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--female"><use xlink:href = "#icon-female"></use></svg>
        </span>
    </a>
    <a class="pin pin--2-18" data-category="2" data-space="2.18" data-info="false" href="#" aria-label="Pin for Male's Bathroom">
        <span class="pin__icon">
            <svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--maleBathroom"><use xlink:href = "#icon-maleBathroom"></use></svg>
        </span>
    </a>
</div>
<!-- /level__pins -->
<?php
mysqli_close($conn);
?> 
