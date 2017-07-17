<?php
require 'config.php';
?>

<svg class="map map--3" viewBox="0 0 1200 800" width="100%" height="100%" preserveAspectRatio="xMidYMid meet">
<title>Map Level 3</title>


<g transform="scale(2.3, 2.3) translate(0,60)">
<g transform="translate(740, -165) rotate(90) scale(1.05,1.05)">
<path d="M75,267,152,265,195,219,255,206,311,223,355,262,426,267,426,759,64,752" class="map__outline" />
</g>

<g transform="translate(720, -150) rotate(90)">
<polygon points="75 267 152 265 195 219 255 206 311 223 355 262 426 267 426 759 64 752" class="map__ground" />
</g>

<!-- Sala Pós-Graduation -->
<g transform="translate(133, -150) rotate(90)">
<rect x="85" y="60" width="70" height="70" class="map__space" />
</g>
<!-- Divider -->
<g transform="translate(133, -150) rotate(90)">
<rect x="190" y="-205" width="130" height="260" class="map__divider" />
</g>
<!-- Sala 206 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="85" y="7" width="80" height="50" class="map__space" />
</g>
<!-- Sala 207 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="85" y="-45" width="80" height="50" class="map__space" />
</g>
<!-- Sala 208 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="85" y="-97" width="80" height="50" class="map__space" />
</g>
<!-- Sala 209 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="85" y="-149" width="80" height="50" class="map__space" />
</g>
<!-- Sala 210 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="85" y="-201" width="80" height="50" class="map__space" />
</g>
<!-- Sala CI1 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="85" y="-261" width="60" height="58" class="map__space" />
</g>
<!-- Sala CI2 near Females bathroom -->
<g transform="translate(133, -150) rotate(90)">
<rect x="85" y="-318" width="60" height="56" class="map__space" />
</g>
<!-- Sala 201 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="345" y="7" width="80" height="50" class="map__space" />
</g>
<!-- Sala 202 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="345" y="-45" width="80" height="50" class="map__space" />
</g>
<!-- Sala 203 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="345" y="-97" width="80" height="50" class="map__space" />
</g>
<!-- Sala 204 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="345" y="-149" width="80" height="50" class="map__space" />
</g>
<!-- Sala 205 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="345" y="-201" width="80" height="50" class="map__space" />
</g>
<!-- Sala P3G -->
<g transform="translate(133, -100) rotate(90)">
<rect x="140" y="75" width="130" height="55" class="map__space" />
</g>

<!-- Bathroom near 206 -->
<g transform="translate(428, 92) rotate(90)">
<polygon points="100 70 100 70 80 40 100 40" class="map__space" />
</g>

<!-- Tiny sala next to P3G -->
<g transform="translate(118, 31) rotate(90)">
<rect x="140" y="75" width="30" height="40" class="map__space" />
</g>

<!-- Sala-->
<g transform="translate(133, 64) rotate(90)">
<rect x="140" y="75" width="70" height="55" class="map__space" />
</g>


<!-- Female Bathroom -->
<g transform="translate(524, -142) rotate(90)">
<rect x="140" y="75" width="23" height="35" class="map__space" />
</g>

<!-- Auditorio
<g transform="translate(-55, -105) rotate(0)">
<polygon points="449 211 565 212 548 268 508 313 449 313" class="map__space" />
</g>
-->
<!-- Sala 305 -->
<g transform="translate(133, -150) rotate(90)">
<rect x="345" y="-253" width="80" height="50" class="map__space" />
</g>
<!-- Sala escadas -->
<g transform="translate(88, -155) rotate(90)">
<polygon points="320 -305 430 -305 430 -366 320 -375" class="map__space" />
</g>

<!-- Eventual Stairs
<g transform="translate(180, 550) rotate(-90)">
<polygon points="449 213 540 212 539 280 505 315 445 330" class="map__lake" />
</g>
-->

<!-- Elevator -->
<g transform="translate(105, -75) rotate(91)">
<rect x="85" y="60" width="30" height="40" class="map__space" />
</g>
</g>
</svg>
<div class="level__pins">

    <a class = "pin pin--3-1" data-category ="<?php echo roomStatus('209') ?>" data-space = "3.01" href = "#" aria-label = "Pin for Room 209">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--209"><use xlink:href = "#icon-209"></use></svg>
        </span>
    </a>

    <a class = "pin pin--3-2" data-category ="<?php echo roomStatus('210') ?>" data-space = "3.02" href = "#" aria-label = "Pin for Room 210">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--210"><use xlink:href = "#icon-210"></use></svg>
        </span>
    </a>

    <a class = "pin pin--3-3" data-category ="<?php echo roomStatus('211') ?>" data-space = "3.03" href = "#" aria-label = "Pin for Room 211">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--211"><use xlink:href = "#icon-211"></use></svg>
        </span>
    </a>


    <a class = "pin pin--3-4" data-category ="<?php echo roomStatus('212') ?>" data-space = "3.04" href = "#" aria-label = "Pin for Room 212">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--212"><use xlink:href = "#icon-212"></use></svg>
        </span>
    </a>


    <a class = "pin pin--3-5" data-category ="<?php echo roomStatus('213') ?>" data-space = "3.05" href = "#" aria-label = "Pin for Room 213">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--213"><use xlink:href = "#icon-213"></use></svg>
        </span>
    </a>

    <a class = "pin pin--3-6" data-category ="<?php echo roomStatus('214') ?>" data-space = "3.06" href = "#" aria-label = "Pin for Room 214">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--214"><use xlink:href = "#icon-214"></use></svg>
        </span>
    </a>
    <a class="pin pin--3-7" data-category="2" data-space="3.07" href="#" aria-label="Pin for Office">
        <span class="pin__icon">
            <svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--office"><use xlink:href = "#icon-office"></use></svg>
        </span>
    </a>
    <a class="pin pin--3-8" data-category="2" data-space="3.08" href="#" aria-label="Pin for Office & Bathroom">
        <span class="pin__icon">
            <svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--office"><use xlink:href = "#icon-office"></use></svg>
        </span>
    </a>
    <a class="pin pin--3-9" data-category="2" data-space="3.09" data-info="false" href="#" aria-label="Pin for Elevator">
        <span class="pin__icon">
            <svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--elevator"><use xlink:href = "#icon-elevator"></use></svg>
        </span>
    </a>
    <a class="pin pin--3-10" data-category="2" data-space="3.10" data-info="false" href="#" aria-label="Pin for Offices">
        <span class="pin__icon">
            <svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--office"><use xlink:href = "#icon-office"></use></svg>
        </span>
    </a>

    <a class = "pin pin--3-11" data-category ="<?php echo roomStatus('201') ?>" data-space = "3.11" href = "#" aria-label = "Pin for Room 201">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--201"><use xlink:href = "#icon-201"></use></svg>
        </span>
    </a>

    <a class = "pin pin--3-12" data-category ="<?php echo roomStatus('202') ?>" data-space = "3.12" href = "#" aria-label = "Pin for Room 202">
        <span class = "pin__icon">
            <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
            <svg class = "icon icon--logo icon--202"><use xlink:href = "#icon-202"></use></svg>
        </span>
        <!--</a>-->

        <a class = "pin pin--3-13" data-category ="<?php echo roomStatus('203') ?>" data-space = "3.13" href = "#" aria-label = "Pin for Room 203">
            <span class = "pin__icon">
                <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
                <svg class = "icon icon--logo icon--203"><use xlink:href = "#icon-203"></use></svg>
            </span>
        </a>

        <a class = "pin pin--3-14" data-category ="<?php echo roomStatus('204') ?>" data-space = "3.14" href = "#" aria-label = "Pin for Room 204">
            <span class = "pin__icon">
                <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
                <svg class = "icon icon--logo icon--204"><use xlink:href = "#icon-204"></use></svg>
            </span>
        </a>

        <a class = "pin pin--3-15" data-category ="<?php echo roomStatus('205') ?>" data-space = "3.15" href = "#" aria-label = "Pin for Room 205">
            <span class = "pin__icon">
                <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
                <svg class = "icon icon--logo icon--205"><use xlink:href = "#icon-205"></use></svg>
            </span>
        </a>


        <a class = "pin pin--3-16" data-category ="<?php echo roomStatus('206') ?>" data-space = "3.16" href = "#" aria-label = "Pin for Room 206">
            <span class = "pin__icon">
                <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
                <svg class = "icon icon--logo icon--206"><use xlink:href = "#icon-206"></use></svg>
            </span>
        </a>

        <a class = "pin pin--3-17" data-category ="<?php echo roomStatus('207') ?>" data-space = "3.17" href = "#" aria-label = "Pin for Room 207">
            <span class = "pin__icon">
                <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
                <svg class = "icon icon--logo icon--207"><use xlink:href = "#icon-207"></use></svg>
            </span>
        </a>

        <a class = "pin pin--3-18" data-category ="<?php echo roomStatus('208') ?>" data-space = "3.18" href = "#" aria-label = "Pin for Room 208">
            <span class = "pin__icon">
                <svg class = "icon icon--pin"><use xlink:href = "#icon-pin"></use></svg>
                <svg class = "icon icon--logo icon--208"><use xlink:href = "#icon-208"></use></svg>
            </span>
        </a>
        <a class="pin pin--3-19" data-category="2" data-space="3.19" data-info="false" href="#" aria-label="Pin for Bathroom">
            <span class="pin__icon">
                <svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
                <svg class = "icon icon--logo icon--female"><use xlink:href = "#icon-female"></use></svg>
            </span>
        </a>
        <a class="pin pin--3-20" data-category="2" data-space="3.20" data-info="false" href="#" aria-label="Pin for Male's Bathroom">
            <span class="pin__icon">
                <svg class="icon icon--pin"><use xlink:href="#icon-pin"></use></svg>
                <svg class = "icon icon--logo icon--maleBathroom"><use xlink:href = "#icon-maleBathroom"></use></svg>
            </span>
        </a>
        <a class="pin pin--3-21" data-category="2" data-space="3.21" data-info="false" href="#" aria-label="Pin for Female's Bathroom">
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
