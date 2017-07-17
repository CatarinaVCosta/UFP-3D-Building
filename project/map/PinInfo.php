
<?php
require 'config.php';
require_once 'roomsConfig.php';

if (!isset($_SESSION['username'])) {
    $userRole = 10;
}

$queryRole = "select * from user where username='" . $_SESSION['username'] . "';";
$sqlRole = mysqli_query($conn, $queryRole);

while ($row = mysqli_fetch_assoc($sqlRole)) {
    $userRole = $row['role'];
    $toggle = $row['toggle'];
}
?>

<div class="content">
    <!--L0-->
    <div class="content__item" data-space="1.01" data-category="2">
        <h3 class="content__item-title">UFP UV</h3>
        <div class="content__item-details">
            <p class="content__meta">
                <span class="content__meta-item"><strong>Time Table: </strong> 10:00 &mdash; 13:00 & 14:30 &mdash; 19:30</span> 
            <p></p> <span>Pedagogical Coordination</span></br>
            <span>Help Desk</span></br>
            <span>Technical Support</span></br>
            <p></p>
            <span><strong>www.ufpuv.com | ufpuv-suporte@ufp.edu.pt</strong></span>
            </p>
        </div>
    </div>

    <div class="content__item" data-space="1.08" data-category="2">
        <h3 class="content__item-title">ES-CEFOG</h3>
        <div class="content__item-details">
            <p class="content__meta">
                <span class="content__meta-item"><strong>Time Table: </strong> 10:00 &mdash; 12:30 & 15:00 &mdash; 17:30</span> 
            <p></p> <span>Lifelong Learning Center</span></br>
            </p>
        </div>
    </div>

    <div class="content__item" data-space="1.05" data-category="2">
        <h3 class="content__item-title">OSCOT</h3>
        <div class="content__item-details">
            <p class="content__meta">
                <span>Security Observatory, Organized Crime and Terrorism</span>
            </p>
        </div>
    </div>

    <div class="content__item" data-space="1.11" data-category="2">
        <h3 class="content__item-title">Female's Bathroom</h3>
        <div class="content__item-details">
            <p class="content__meta">
            </p>
        </div>
    </div>

    <div class="content__item" data-space="1.06" data-category="2">
        <h3 class="content__item-title">Teacher's Room</h3>
        <div class="content__item-details">
            <p class="content__meta">
            </p>
        </div>
    </div>

    <div class="content__item" data-space="1.07" data-category="2">
        <h3 class="content__item-title">Male's Bathroom</h3>
        <div class="content__item-details">
            <p class="content__meta">
            </p>
        </div>
    </div>

    <div class="content__item" data-space="1.14" data-category="2">
        <h3 class="content__item-title">Female's Bathroom</h3>
        <div class="content__item-details">
            <p class="content__meta">         
            </p>
        </div>
    </div>

    <div class="content__item" data-space="1.03" data-category="2">
        <h3 class="content__item-title">Elevator</h3>
        <div class="content__item-details">
            <p class="content__meta">            
            </p>
        </div>
    </div>

    <div class="content__item" data-space="1.09" data-category="2">
        <h3 class="content__item-title">Admission's Office</h3>
        <div class="content__item-details">
            <p class="content__meta">
                <span class="content__meta-item"><strong>Time Table: </strong> 09:00 &mdash; 20:00</span> 
            <p></p> <span>Applications and First Registrations</span></br>
            </p>
        </div>
    </div>

    <div class="content__item" data-space="1.02" data-category="2">
        <h3 class="content__item-title">Student's Office</h3>
        <div class="content__item-details">
            <p class="content__meta">
                <span class="content__meta-item"><strong>Time Table: </strong> 09:00 &mdash; 20:00</span> 
            <p></p> <span>General attendance for Students</span></br>
            </p>
        </div>
    </div>


    <div class="content__item" data-space="1.10" data-category="2">
        <h3 class="content__item-title">ATM</h3>
        <div class="content__item-details">
            <p class="content__meta">
                <strong>Automatic Teller Machine</strong></p>
        </div>
    </div>

    <div class="content__item" data-space="1.12" data-category="2">
        <h3 class="content__item-title">Teacher's Office</h3>
        <div class="content__item-details">
            <p class="content__meta">
                <span class="content__meta-item"><strong>Time Table: </strong> 09:00 &mdash; 20:00</span> 
            <p></p> <span>General attendance for Teachers</span></br>
        </div>
    </div>

    <div class="content__item" data-space="1.13" data-category="2">
        <h3 class="content__item-title">Male's Bathroom</h3>
        <div class="content__item-details">
            <p class="content__meta">
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('A1'); ?>" data-space = "1.04" >
        <h3 class="content__item-title">Room A1</h3>
        <div class="info">
            <?php if (roomStatus('A1') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('A1'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('A1'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('A1'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('A1')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('A1')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('A1')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('A1'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('104'); ?>" data-space = "2.10">
        <h3 class="content__item-title">Room 104</h3>
        <div class="info">
            <?php if (roomStatus('104') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('104'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('104'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('104'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('104')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('104')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('104')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('104'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('105'); ?>" data-space = "2.11">
        <h3 class="content__item-title">Room 105</h3>
        <div class="info">
            <?php if (roomStatus('105') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('105'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('105'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('105'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('105')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('105')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('105')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('105'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('106'); ?>" data-space = "2.12">
        <h3 class="content__item-title">Room 106</h3>
        <div class="info">
            <?php if (roomStatus('106') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('106'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('106'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('106'); ?></span></p> 
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('106')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('106')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('106')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('106'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-space="2.13" data-category="2">
        <h3 class="content__item-title">Elevator</h3>
        <div class="content__item-details">
            <p class="content__meta">
            </p>
        </div>
    </div>

    <div class="content__item" data-space="2.17" data-category="2">
        <h3 class="content__item-title">Female's Bathroom</h3>
        <div class="content__item-details">
        </div>
    </div>

    <div class="content__item" data-space="2.18" data-category="2">
        <h3 class="content__item-title">Male's Bathroom</h3>
        <div class="content__item-details">
        </div>
    </div>

    <div class="content__item" data-level="1" data-category ="<?php echo roomStatus('101'); ?>" data-space = "2.07">
        <h3 class="content__item-title">Room 101</h3>
        <div class="info">
            <?php if (roomStatus('101') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('101'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('101'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('101'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('101')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('101')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('101')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('101'); ?></span></p>
            </p>
            <p class="content__desc"></p>

        </div>
    </div>

    <div class="content__item" data-level="1" data-category ="<?php echo roomStatus('102'); ?>" data-space = "2.08">
        <h3 class="content__item-title">Room 102</h3>
        <div class="info">
            <?php if (roomStatus('102') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('102'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('102'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('102'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('102')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('102')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('102')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('102'); ?></span></p>
            </p>
            <p class="content__desc"></p>

        </div>
    </div>

    <div class="content__item" data-level="1" data-category ="<?php echo roomStatus('103'); ?>" data-space = "2.09">
        <h3 class="content__item-title">Room 103</h3>
        <div class="info">
            <?php if (roomStatus('103') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('103'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('103'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('103'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('103')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('103')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('103')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('103'); ?></span></p>
            </p>
            <p class="content__desc"></p>

        </div>
    </div>

    <div class="content__item" data-level="1" data-category ="<?php echo roomStatus('107'); ?>" data-space = "2.01">
        <h3 class="content__item-title">Room 107</h3>
        <div class="info">
            <?php if (roomStatus('107') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('107'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('107'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('107'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('107')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('107')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('107')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('107'); ?></span></p>
            </p>
            <p class="content__desc"></p>

        </div>
    </div>

    <div class="content__item" data-level="1" data-category ="<?php echo roomStatus('108'); ?>" data-space = "2.02">
        <h3 class="content__item-title">Room 108</h3>
        <div class="info">
            <?php if (roomStatus('108') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('108'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('108'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('108'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('108')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('108')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('108')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('108'); ?></span></p>
            </p>
            <p class="content__desc"></p>

        </div>
    </div>

    <div class="content__item" data-level="1" data-category ="<?php echo roomStatus('109'); ?>" data-space = "2.03">
        <h3 class="content__item-title">Room 109</h3>
        <div class="info">
            <?php if (roomStatus('109') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('109'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('109'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('109'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('109')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('109')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('109')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('109'); ?></span></p>
            </p>
            <p class="content__desc"></p>

        </div>
    </div>

    <div class="content__item" data-level="1" data-category ="<?php echo roomStatus('110'); ?>" data-space = "2.04">
        <h3 class="content__item-title">Room 110</h3>
        <div class="info">
            <?php if (roomStatus('110') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('110'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('110'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('110'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('110')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('110')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('110')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('110'); ?></span></p>
            </p>
            <p class="content__desc"></p>

        </div>
    </div>

    <div class="content__item" data-level="1" data-category ="<?php echo roomStatus('111'); ?>" data-space = "2.05">
        <h3 class="content__item-title">Room 111</h3>
        <div class="info">
            <?php if (roomStatus('111') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('111'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('111'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('111'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('111')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('111')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('111')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('111'); ?></span></p>
            </p>
            <p class="content__desc"></p>

        </div>
    </div>

    <div class="content__item" data-level="1" data-category ="<?php echo roomStatus('A2'); ?>" data-space = "2.06">
        <h3 class="content__item-title">Room A2</h3>
        <div class="info">
            <?php if (roomStatus('A2') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('A2'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('A2'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('A2'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('A2')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('A2')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('A2')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('A2'); ?></span></p>
            </p>
            <p class="content__desc"></p>

        </div>
    </div>

    <!--L2-->
    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('209'); ?>" data-space = "3.01">
        <h3 class="content__item-title">Room 209</h3>
        <div class="info">
            <?php if (roomStatus('209') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('209'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('209'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('209'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('209')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('209')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('209')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('209'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('210'); ?>" data-space = "3.02">
        <h3 class="content__item-title">Room 210</h3>
        <div class="info">
            <?php if (roomStatus('210') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('210'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('210'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('210'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('210')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('210')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('210')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('210'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('211'); ?>" data-space = "3.03">
        <h3 class="content__item-title">Room 211</h3>
        <div class="info">
            <?php if (roomStatus('211') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('211'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('211'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('211'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('211')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('211')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('211')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('211'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('212'); ?>" data-space = "3.04">
        <h3 class="content__item-title">Room 212</h3>
        <div class="info">
            <?php if (roomStatus('212') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('212'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('212'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('212'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('212')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('212')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('212')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('212'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('213'); ?>" data-space = "3.05">
        <h3 class="content__item-title">Room 213</h3>
        <div class="info">
            <?php if (roomStatus('213') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('213'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('213'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('213'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('213')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('213')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('213')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('213'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('214'); ?>" data-space = "3.06">
        <h3 class="content__item-title">Room 214</h3>
        <div class="info">
            <?php if (roomStatus('214') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('214'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('214'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('214'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('214')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('214')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('214')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('214'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>



    <div class="content__item" data-space="3.07" data-category="2">
        <h3 class="content__item-title">Teacher's Room</h3>
        <div class="content__item-details">
            <p class="content__meta">
            </p>
        </div>
    </div>

    <div class="content__item" data-space="3.09" data-category="2">
        <h3 class="content__item-title">Elevator</h3>
        <div class="content__item-details">
            <p class="content__meta">
            </p>
        </div>
    </div>

    <div class="content__item" data-space="3.10" data-category="2">
        <h3 class="content__item-title">Offices</h3>
        <div class="content__item-details">
            <p class="content__meta">
            </p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('201'); ?>" data-space = "3.11">
        <h3 class="content__item-title">Room 201</h3>
        <div class="info">
            <?php if (roomStatus('201') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('201'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('201'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('201'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('201')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('201')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('201')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('201'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('202'); ?>" data-space = "3.12">
        <h3 class="content__item-title">Room 202</h3>
        <div class="info">
            <?php if (roomStatus('202') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('202'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('202'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('202'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('202')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('202')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('202')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('202'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('203'); ?>" data-space = "3.13">
        <h3 class="content__item-title">Room 203</h3>
        <div class="info">
            <?php if (roomStatus('203') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('203'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('203'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('203'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('203')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('203')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('203')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('203'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('204'); ?>" data-space = "3.14">
        <h3 class="content__item-title">Room 204</h3>
        <div class="info">
            <?php if (roomStatus('204') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('204'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('204'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('204'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('204')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('204')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('204')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('204'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('205'); ?>" data-space = "3.15">
        <h3 class="content__item-title">Room 205</h3>
        <div class="info">
            <?php if (roomStatus('205') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('205'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('205'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('205'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('205')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('205')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('205')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('205'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('206'); ?>" data-space = "3.16">
        <h3 class="content__item-title">Room 206</h3>
        <div class="info">
            <?php if (roomStatus('206') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('206'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('206'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('206'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('206')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('206')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('206')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('206'); ?></span></p>
            </p>
            <p class="content__desc"></p>  
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('207'); ?>" data-space = "3.17">
        <h3 class="content__item-title">Room 207</h3>
        <div class="info">
            <?php if (roomStatus('207') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('207'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('207'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('207'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('207')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('207')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('207')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('207'); ?></span></p>
            </p>
            <p class="content__desc"></p> 
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('208'); ?>" data-space = "3.18">
        <h3 class="content__item-title">Room 208</h3>
        <div class="info">
            <?php if (roomStatus('208') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('208'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('208'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('208'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('208')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('208')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('208')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('208'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-space="3.19" data-category="2">
        <h3 class="content__item-title">Female's Bathroom</h3>
        <div class="content__item-details">
            <p class="content__meta">
            </p>
        </div>
    </div>

    <div class="content__item" data-space="3.20" data-category="2">
        <h3 class="content__item-title">Male's Bathroom</h3>
        <div class="content__item-details">
            <p class="content__meta">
            </p>
        </div>
    </div>

    <div class="content__item" data-space="3.21" data-category="2">
        <h3 class="content__item-title">Female's Bathroom</h3>
        <div class="content__item-details">
            <p class="content__meta">
            </p>
        </div>
    </div>


    <!--L3-->

    <div class="content__item" data-space="4.07" data-category="2">
        <h3 class="content__item-title">IT Office</h3>
        <div class="content__item-details">
            <p><strong>Information Systems and Communications</strong>
            <p class="content__meta">
                <span class="content__meta-item"><strong>Opening Hours: </strong> 6:30AM &mdash; 11:30PM</span> 
            <p></p><span class="content__meta-item"><strong>Contacts: </strong> helpdesk.sic@ufp.edu.pt | http://sic.ufp.pt</span>
            <p></p><span class="content__meta-item"><strong>Services: </strong></span>
            <p></p><span>- Wireless network configuration (eduroam)</span>
            <p></p><span>- SPSS instalation</span>
            <p></p><span>- Computer consultation</span>
            </p>
        </div>
    </div>

    <div class="content__item" data-space="4.09" data-category="2">
        <h3 class="content__item-title">Offices</h3>
        <div class="content__item-details">
            <p class="content__meta">
            </p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('306'); ?>" data-space = "4.02">
        <h3 class="content__item-title">Room 306</h3>
        <div class="info">
            <?php if (roomStatus('306') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('306'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('306'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('306'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('306')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('306')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('306')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('306'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-space="4.03" data-category="2">
        <h3 class="content__item-title">ISUS</h3>
        <div class="content__item-details2">
            <p class="content__meta">
                <span class="content__meta-item2" style='float: left; width: 50%; text-align: left;'><strong>Researchers/Founders:</strong> 
                    </br>António Lobo Ribeiro - alobo@ufp.edu.pt
                    </br>José Manuel Torres - jtorres@ufp.edu.pt
                    </br>Pedro Miguel Sobral - pmsobral@ufp.edu.pt
                    </br>Rui Silva Moreira - rmoreira@ufp.edu.pt
                </span> 
                <span class="content__meta-item2" style="float: left; width: 50%; text-align: left;"><strong>Researchers:</strong>
                    </br>Carlos Velasquez - carlosv@ufp.edu.pt
                    </br>Christophe Soares - csoares@ufp.edu.pt
                </span>
            </p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('308'); ?>" data-space = "4.04">
        <h3 class="content__item-title">Room 308</h3>
        <div class="info">
            <?php if (roomStatus('308') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('308'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('308'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('308'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('308')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('308')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('308')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('308'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('309'); ?>" data-space = "4.05">
        <h3 class="content__item-title">Room 309</h3>
        <div class="info">
            <?php if (roomStatus('309') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('309'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('309'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('309'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('309')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('309')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('309')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('309'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('310'); ?>" data-space = "4.06">
        <h3 class="content__item-title">Room 310</h3>
        <div class="info">
            <?php if (roomStatus('310') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('310'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('310'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('310'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('310')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('310')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('310')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('310'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('301'); ?>" data-space = "4.10">
        <h3 class="content__item-title">Room 301</h3>
        <div class="info">
            <?php if (roomStatus('301') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('301'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('301'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('301'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('301')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('301')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('301')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('301'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('302'); ?>" data-space = "4.11">
        <h3 class="content__item-title">Room 302</h3>
        <div class="info">
            <?php if (roomStatus('302') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('302'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('302'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('302'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('302')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('302')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('302')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('302'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('303'); ?>" data-space = "4.12">
        <h3 class="content__item-title">Room 303</h3>
        <div class="info">
            <?php if (roomStatus('303') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('303'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('303'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('303'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('303')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('303')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('303')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('303'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('304'); ?>" data-space = "4.13">
        <h3 class="content__item-title">Room 304</h3>
        <div class="info">
            <?php if (roomStatus('304') == 3) { ?>
                <span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('304'); ?></span>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('304'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('304'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('304')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('304')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('304')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('304'); ?></span></p>
            </p>
            <p class="content__desc"></p>
        </div>
    </div>

    <div class="content__item" data-level="1" data-info="<?php pinInfo(); ?>" data-category ="<?php echo roomStatus('305'); ?>" data-space = "4.14">
        <h3 class="content__item-title">Room 305</h3>
        <div class="info">
            <?php if (roomStatus('305') == 3) { ?>
                <p><span class="content__meta-item"><strong>Teacher: </strong><?php echo teacher('305'); ?></span></p>
                <p><span class="content__meta-item"><strong>Course: </strong><?php echo course('305'); ?></span></p>
                <p><span class="content__meta-item"><strong>Hour: </strong><?php echo classDuration('305'); ?></span></p>
            <?php } ?>
        </div>
        <div class="content__item-details">
            <p class="content__meta">
                <?php if (plug('305')) { ?>
                    <img src="./img/plug.svg" alt="Plug" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (videoProjector('305')) {
                    ?>
                    <img src="./img/projector.svg" alt="Video Projector" style ="width: 50px;height: 50px;">&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php
                }
                if (architectsTable('305')) {
                    ?>
                    <img src="./img/drawing_board.png" alt="Table" style ="width: 60px;height: 60px;">
                <?php } ?> 
            <p><span class="content__meta-item"><strong>Capacity: </strong><?php echo capacity('305'); ?></span></p>
        </div>
    </div>

    <div class="content__item" data-space="4.15" data-category="2">
        <h3 class="content__item-title">Noble Hall</h3>
        <div class="content__item-details">
            <p class="content__meta">
            </p>
        </div>
    </div>

    <div class="content__item" data-space="4.16" data-category="2">
        <h3 class="content__item-title">Male's Bathroom</h3>
        <div class="content__item-details">
            <p class="content__meta">
            </p>
        </div>
    </div>

    <div class="content__item" data-space="4.18" data-category="2">
        <h3 class="content__item-title">Female's Bathroom</h3>
        <div class="content__item-details">
            <p class="content__meta">
            </p>
        </div>
    </div>

    <!--L-1-->
    <div class="content__item" data-space="5.01" data-category="2">
        <h3 class="content__item-title">Library</h3>
        <div class="content__item-details">
            <p class="content__meta">
            <p><span class="content__meta-item"><strong>Time Table (Monday - Thrusday): </strong> 08:00 &mdash; 20:00</span></p> 
            <p><span class="content__meta-item"><strong>Time Table (Friday): </strong> 08:00 &mdash; 18:00</span></p>
            </p>
        </div>
    </div>

    <div class="content__item" data-space="5.02" data-category="2">
        <h3 class="content__item-title">Info</h3>
        <div class="content__item-details">
            <p class="content__meta">
            <p><span class="content__meta-item"><strong>Time Table: </strong> 10:00 &mdash; 13:00 & 14:30 &mdash; 19:30</span></p> 
            </p>
        </div>
    </div>

    <div class="content__item" data-space="5.03" data-category="2">
        <h3 class="content__item-title">Reprography</h3>
        <div class="content__item-details">
            <p class="content__meta">
            <p><span class="content__meta-item"><strong>Time Table: </strong> 08:00 &mdash; 13:00 & 14:00 &mdash; 20:00</span></p> 
            </p>
        </div>
    </div>

    <div class="content__item" data-space="5.04" data-category="2">
        <h3 class="content__item-title">Printing Office</h3>
        <div class="content__item-details">
            <p class="content__meta">
            <p><span class="content__meta-item"><strong>Time Table: </strong> 10:00 &mdash; 13:00 & 14:00 &mdash; 17:00</span></p> 
            </p>
        </div>
    </div>

    <div class="content__item" data-space="5.05" data-category="2">
        <h3 class="content__item-title">Bathrooms</h3>
        <div class="content__item-details">
            <p class="content__meta">

        </div>
    </div>

    <div class="content__item" data-space="5.06" data-category="2">
        <h3 class="content__item-title">Bar</h3>
        <div class="content__item-details">
            <p class="content__meta">
            <p><span class="content__meta-item"><strong>Time Table (Monday - Friday): </strong> 08:00 &mdash; 21:00</span></p>
            <p><span class="content__meta-item"><strong>Time Table (Saturday): </strong> 08:00 &mdash; 13:00</span></p>
        </div>
    </div>

    <button class="boxbutton boxbutton--dark content__button content__button--hidden" aria-label="Close details"><svg class="icon icon--cross"><use xlink:href="#icon-cross"></use></svg></button>
</div>
<!-- content -->
</div>
<!-- /main -->
<aside class="spaces-list" id="spaces-list">
    <div class="search">
        <input class="search__input top_accordion" placeholder="Search..." />
        <div class="panel" style="display:none">
            <span class="label">
<!--                <input id="sort-by-name" class="label__checkbox" type="checkbox" aria-label="Show alphabetically"/>
                <label class="label__text">A - Z</label>-->
            </span>
            <ul class="list grouped-by-category">

                <!--LU1-->
                <li class="list__item" data-level="1" data-category="2" data-space="5.01"><a href="#" class="list__link">Library</a></li>
                <li class="list__item" data-level="1" data-category="2" data-space="5.02"><a href="#" class="list__link">Info</a></li>
                <li class="list__item" data-level="1" data-category="2" data-space="5.03"><a href="#" class="list__link">Printer Room</a></li>
                <li class="list__item" data-level="1" data-category="2" data-space="5.04"><a href="#" class="list__link">Info</a></li>
                <li class="list__item" data-level="1" data-category="2" data-space="5.05"><a href="#" class="list__link">Bathrooms</a></li>
                <li class="list__item" data-level="1" data-category="2" data-space="5.06"><a href="#" class="list__link">Bar</a></li>


                <!--L0-->
                <li class="list__item" data-level="2" data-category="2" data-space="1.01"><a href="#" class="list__link">UFP UV</a></li>
                <li class="list__item" data-level="2" data-category="2" data-space="1.02"><a href="#" class="list__link">Student's Office</a></li>
                <li class="list__item" data-level="2" data-category="2" data-space="1.03"><a href="#" class="list__link">Elevator</a></li>
                <li class="list__item" data-level="2" data-category="2" data-space="1.05"><a href="#" class="list__link">OSCOT</a></li>
                <li class="list__item" data-level="2" data-category="2" data-space="1.06"><a href="#" class="list__link">Teacher's Room</a></li>
                <li class="list__item" data-level="2" data-category="2" data-space="1.11"><a href="#" class="list__link">Female's Bathroom</a></li>
                <li class="list__item" data-level="2" data-category="2" data-space="1.14"><a href="#" class="list__link">Female's Bathroom</a></li>
                <li class="list__item" data-level="2" data-category="2" data-space="1.12"><a href="#" class="list__link">Teacher's Office</a></li>
                <li class="list__item" data-level="2" data-category="2" data-space="1.08"><a href="#" class="list__link">ES-CEFOG</a></li>
                <li class="list__item" data-level="2" data-category="2" data-space="1.09"><a href="#" class="list__link">Admission's Office</a></li>
                <li class="list__item" data-level="2" data-category="2" data-space="1.10"><a href="#" class="list__link">ATM</a></li>	
                <li class="list__item" data-level="2" data-category="2" data-space="1.07"><a href="#" class="list__link">Male's Bathroom </a></li>
                <li class="list__item" data-level="2" data-category="2" data-space="1.13"><a href="#" class="list__link">Male's Bathroom </a></li>
                <li class = "list__item" data-level="2" data-category ="<?php echo roomStatus('A1'); ?>" data-space = "1.04"><a href = "#" class ="list__link">Room A1</a></li>

                <!--L1-->
                <li class="list__item" data-level="3" data-category="2" data-space="2.13"><a href="#" class="list__link">Elevator</a></li>
                <li class="list__item" data-level="3" data-category="2" data-space="2.14"><a href="#" class="list__link">Conti's Room</a></li>
                <li class="list__item" data-level="3" data-category="2" data-space="2.15"><a href="#" class="list__link">Conti's Room</a></li>
                <li class="list__item" data-level="3" data-category="2" data-space="2.16"><a href="#" class="list__link">Female's Bathroom</a></li>
                <li class="list__item" data-level="3" data-category="2" data-space="2.17"><a href="#" class="list__link">Female's Bathroom</a></li>
                <li class="list__item" data-level="3" data-category="2" data-space="2.18"><a href="#" class="list__link">Male's Bathroom</a></li>
                <li class = "list__item" data-level="3" data-category ="<?php echo roomStatus('107'); ?>" data-space = "2.01"><a href = "#" class ="list__link">Room 107</a></li>
                <li class = "list__item" data-level="3" data-category ="<?php echo roomStatus('108'); ?>" data-space = "2.02"><a href = "#" class ="list__link">Room 108</a></li>
                <li class = "list__item" data-level="3" data-category ="<?php echo roomStatus('109'); ?>" data-space = "2.03"><a href = "#" class ="list__link">Room 109</a></li>
                <li class = "list__item" data-level="3" data-category ="<?php echo roomStatus('110'); ?>" data-space = "2.04"><a href = "#" class ="list__link">Room 110</a></li>
                <li class = "list__item" data-level="3" data-category ="<?php echo roomStatus('111'); ?>" data-space = "2.05"><a href = "#" class ="list__link">Room 111</a></li>
                <li class = "list__item" data-level="3" data-category ="<?php echo roomStatus('A2'); ?>" data-space = "2.06"><a href = "#" class ="list__link">Room A2</a></li>

                <li class = "list__item" data-level="3" data-category ="<?php echo roomStatus('101'); ?>" data-space = "2.07"><a href = "#" class ="list__link">Room 101</a></li>

                <li class = "list__item" data-level="3" data-category ="<?php echo roomStatus('102'); ?>" data-space = "2.08"><a href = "#" class ="list__link">Room 102</a></li>

                <li class = "list__item" data-level="3" data-category ="<?php echo roomStatus('103'); ?>" data-space = "2.09"><a href = "#" class ="list__link">Room 103</a></li>

                <li class = "list__item" data-level="3" data-category ="<?php echo roomStatus('104'); ?>" data-space = "2.10"><a href = "#" class ="list__link">Room 104</a></li>

                <li class = "list__item" data-level="3" data-category ="<?php echo roomStatus('105'); ?>" data-space = "2.11"><a href = "#" class ="list__link">Room 105</a></li>

                <li class = "list__item" data-level="3" data-category ="<?php echo roomStatus('106'); ?>" data-space = "2.12"><a href = "#" class ="list__link">Room 106</a></li>



                <!--L2-->
                <li class="list__item" data-level="4" data-category="2" data-space="3.07"><a href="#" class="list__link">Teacher's Room</a></li>
                <li class="list__item" data-level="4" data-category="2" data-space="3.08"><a href="#" class="list__link">Office & Bathroom</a></li>
                <li class="list__item" data-level="4" data-category="2" data-space="3.09"><a href="#" class="list__link">Elevator</a></li>
                <li class="list__item" data-level="4" data-category="2" data-space="3.10"><a href="#" class="list__link">Offices</a></li>
                <li class = "list__item" data-level="4" data-category ="<?php echo roomStatus('209'); ?>" data-space = "3.01"><a href = "#" class ="list__link">Room 209</a></li>
                <li class = "list__item" data-level="4" data-category ="<?php echo roomStatus('210'); ?>" data-space = "3.02"><a href = "#" class ="list__link">Room 210</a></li>
                <li class = "list__item" data-level="4" data-category ="<?php echo roomStatus('211'); ?>" data-space = "3.03"><a href = "#" class ="list__link">Room 211</a></li>
                <li class = "list__item" data-level="4" data-category ="<?php echo roomStatus('212'); ?>" data-space = "3.04"><a href = "#" class ="list__link">Room 212</a></li>
                <li class = "list__item" data-level="4" data-category ="<?php echo roomStatus('213'); ?>" data-space = "3.05"><a href = "#" class ="list__link">Room 213</a></li>
                <li class = "list__item" data-level="4" data-category ="<?php echo roomStatus('214'); ?>" data-space = "3.06"><a href = "#" class ="list__link">Room 214</a></li>
                <li class = "list__item" data-level="4" data-category ="<?php echo roomStatus('201'); ?>" data-space = "3.11"><a href = "#" class ="list__link">Room 201</a></li>
                <li class = "list__item" data-level="4" data-category ="<?php echo roomStatus('202'); ?>" data-space = "3.12"><a href = "#" class ="list__link">Room 202</a></li>
                <li class = "list__item" data-level="4" data-category ="<?php echo roomStatus('203'); ?>" data-space = "3.13"><a href = "#" class ="list__link">Room 203</a></li>
                <li class = "list__item" data-level="4" data-category ="<?php echo roomStatus('204'); ?>" data-space = "3.14"><a href = "#" class ="list__link">Room 204</a></li>
                <li class = "list__item" data-level="4" data-category ="<?php echo roomStatus('205'); ?>" data-space = "3.15"><a href = "#" class ="list__link">Room 205</a></li>
                <li class = "list__item" data-level="4" data-category ="<?php echo roomStatus('206'); ?>" data-space = "3.16"><a href = "#" class ="list__link">Room 206</a></li>
                <li class = "list__item" data-level="4" data-category ="<?php echo roomStatus('207'); ?>" data-space = "3.17"><a href = "#" class ="list__link">Room 207</a></li>
                <li class = "list__item" data-level="4" data-category ="<?php echo roomStatus('208'); ?>" data-space = "3.18"><a href = "#" class ="list__link">Room 208</a></li>
                <li class="list__item" data-level="4" data-category="2" data-space="3.19"><a href="#" class="list__link">Female's Bathroom</a></li>
                <li class="list__item" data-level="4" data-category="2" data-space="3.20"><a href="#" class="list__link">Male's Bathroom</a></li>
                <li class="list__item" data-level="4" data-category="2" data-space="3.21"><a href="#" class="list__link">Female's Bathroom</a></li>



                <!--L3-->
                <li class="list__item" data-level="5" data-category="2" data-space="4.01"><a href="#" class="list__link">Pos-Graduated Room</a></li>
                <li class="list__item" data-level="5" data-category="2" data-space="4.03"><a href="#" class="list__link">ISUS</a></li>
                <li class="list__item" data-level="5" data-category="2" data-space="4.07"><a href="#" class="list__link">IT Office</a></li>
                <li class="list__item" data-level="5" data-category="2" data-space="4.08"><a href="#" class="list__link">Office</a></li>
                <li class="list__item" data-level="5" data-category="2" data-space="4.09"><a href="#" class="list__link">Offices</a></li>
                <li class="list__item" data-level="5" data-category="2" data-space="4.15"><a href="#" class="list__link">Noble Hall</a></li>
                <li class="list__item" data-level="5" data-category="2" data-space="4.16"><a href="#" class="list__link">Male's Bathroom</a></li>
                <li class="list__item" data-level="5" data-category="2" data-space="4.17"><a href="#" class="list__link">Offices</a></li>
                <li class="list__item" data-level="5" data-category="2" data-space="4.18"><a href="#" class="list__link">Female's Bathroom</a></li>
                <li class = "list__item" data-level="5" data-category ="<?php echo roomStatus('306'); ?>" data-space = "4.02"><a href = "#" class ="list__link">Room 306</a></li>
                <li class = "list__item" data-level="5" data-category ="<?php echo roomStatus('308'); ?>" data-space = "4.04"><a href = "#" class ="list__link">Room 308</a></li>
                <li class = "list__item" data-level="5" data-category ="<?php echo roomStatus('309'); ?>" data-space = "4.05"><a href = "#" class ="list__link">Room 309</a></li>
                <li class = "list__item" data-level="5" data-category ="<?php echo roomStatus('310'); ?>" data-space = "4.06"><a href = "#" class ="list__link">Room 310</a></li>
                <li class = "list__item" data-level="5" data-category ="<?php echo roomStatus('301'); ?>" data-space = "4.10"><a href = "#" class ="list__link">Room 301</a></li>
                <li class = "list__item" data-level="5" data-category ="<?php echo roomStatus('302'); ?>" data-space = "4.11"><a href = "#" class ="list__link">Room 302</a></li>
                <li class = "list__item" data-level="5" data-category ="<?php echo roomStatus('303'); ?>" data-space = "4.12"><a href = "#" class ="list__link">Room 303</a></li>
                <li class = "list__item" data-level="5" data-category ="<?php echo roomStatus('304'); ?>" data-space = "4.13"><a href = "#" class ="list__link">Room 304</a></li>
                <li class = "list__item" data-level="5" data-category ="<?php echo roomStatus('305'); ?>" data-space = "4.14"><a href = "#" class ="list__link">Room 305</a></li>

            </ul>
        </div>
        <button class="boxbutton boxbutton--darker close-search" aria-label="Close details"><svg class="icon icon--cross"><use xlink:href="#icon-cross"></use></svg></button>
        <?php if ($userRole == 0 || $userRole == 2) { ?>

            <div class="searchWraper"><span class="btn big search">Search</span></div>
            <div class="container_reservation">
                <input id="reservation" class="toggle" type="checkbox"/>
                <label for="reservation" class="label name reservation">
                    Reservation 
                </label>
                <div class="navBody">
                    <div class="optFiltros">
                        <form id="fForm" method="post" action="../user/reservation.php" class="opts" name="optsFiltros" ></form>
                        <div class="tab group">
                            <input id="capacidade" class="toggle" type="checkbox"/>
                            <label for="capacidade" class="label name">
                                capacity
                            </label>
                            <div class="tabContent">
                                <div class="formWraper">
                                    <span class="qtd name">alunos:</span>
                                    <input type="text" name="qtd" value=<?php echo isset($_POST["submit"]) ? $_POST["qtd"] : "0"; ?> class="qtd" maxlength="3" placeholder="0" form="fForm"/>
                                    <input type="submit" name="alterar" class="btn qtd alterar" style="display:none;" form="fForm"/>
                                    <div class="qtdWraper">
                                        <span class="btn qtd Plus">+</span>
                                        <span class="btn qtd Minus">-</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab group">
                            <input id="sala" class="toggle" type="checkbox" />
                            <label for="sala" class="label name">
                                room
                            </label>
                            <div class="tabContent">
                                <div class="formWraper">
                                    <div class="checkWraper">
                                        <input class="check" name="plug" type="checkbox" id="plug" form="fForm"/>
                                        <span class="name">plug</span>
                                    </div> 
                                    <div class="checkWraper">
                                        <input class="check" name="projector" type="checkbox" id="projector" form="fForm"/>
                                        <span class="name">video projector</span>
                                    </div>
                                    <div class="checkWraper">
                                        <input class="check" name="table" type="checkbox" id="table" form="fForm"/>
                                        <span class="name">architect's table</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab group">
                            <input id="schedule" class="toggle" type="checkbox" checked/>
                            <label for="schedule" class="label name">
                                schedule
                            </label>
                            <div class="tabContent">
                                <div class="formWraper">
                                    <div class="optionWraper">
                                        <span class="qtd name">Date:</span>
                                        <input type="date" name="date" id="date" form="fForm" <?php echo isset($_POST["submit"]) ? "value='" . $_POST["date"] . "'" : ""; ?>>
                                    </div>
                                    <div class="optionWraper">
                                        <span class="qtd name">Start Hour:</span>
                                        <input type="time" name="start" id="start" form="fForm" <?php echo isset($_POST["submit"]) ? "value='" . $_POST["start"] . "'" : ""; ?>/>
                                    </div>
                                    <div class="optionWraper">
                                        <span class="qtd name">Duration:</span>
                                        <select name="duration" id="duration" form="fForm">
                                            <?php for ($i = 15; $i <= 120; $i += 15) { ?>
                                                <option <?php echo isset($_POST["submit"]) && $_POST["duration"] == $i ? "selected" : ""; ?> > <?php echo $i; ?> </option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="submit" value="submit" name="submit" form="fForm"/>
                    </div>
                </div>
            </div>
        </div>



    <?php } else if ($userRole == 1) {
        ?>
        <div class="container_edit_room">
            <form action="AdminSettings/adminEditRoom.php">
                <input type="submit" class="search__input" value="Edit Room" style="color: white; margin-top:10px;">
            </form>
        </div>
        <div class="container_edit_user">
            <form action="AdminSettings/adminEditUser.php">
                <input type="submit" class="search__input" value="Edit User" style="color: white; margin-top:10px;">
            </form>
        </div>
        <div class="container_edit_schedule">
            <form action="AdminSettings/adminEditSchedule.php">
                <input type="submit" class="search__input" value="Edit Schedule" style="color: white; margin-top:10px;">
            </form>
        </div>

        <div class="container_export_excel">
            <form action="index.php" method="GET">
                <input type="submit" class="search__input" name="export" value="Export Excel" style="color: white; margin-top:10px;">
            </form>
        </div>
        <div class="container_import_excel2">
            <form action="../PHPExcel-1.8/scheduleData.php" method="post" enctype="multipart/form-data">
                <label class="container_import_excel">

                    <input type="file" class="search__input" style="color: white; margin-top:10px;" name="fileToUpload" id="fileToUpload">
                    <div class="text">
                        <p>* Warning! All previous excel data will be deleted.</p>
                    </div>
                    <input type="submit" class="search__input" value="Import Excel" name="submitExcel" style="color: white;">
                </label>
            </form>
        </div>
        <?php
//    if(isset($_POST['submitExcel'])){
//        
//        print_r($_FILES);
//    }
//    
    }
    ?>

    <div class="container_current_user">
        <div class="panel" style="display:none">

            <?php
            if (!isset($_SESSION['username'])) {
                echo "<a href='../loginsignin/signinLogin.php'>
                <input type='submit' class='search__input' value='Login' style='color: white;'>
            </a>";
            }

            if (isset($_SESSION['username']) && $userRole != 1) {
                echo "<a href='../user/userSettings.php'>
                <input type='submit' class='search__input' value='Change Password' style='color: white;'>
            </a>";
                echo "<a href='../user/userSettings.php'>
                <input type='submit' class='search__input' value='View History' style='color: white;'>
            </a>";
                echo "<a href='logout.php'>
                <input type='submit' class='search__input' value='Logout' style='color: white;'>
            </a>";
                if (isset($_SESSION['username']) && $userRole == 2) {
                    echo" <p>Hide/Show personal info.";
                    ?>
                    <form action="post">
                        <div class="toggleWraper">
                            <label id="switchProf" class="switch">
                                <input id="toggleProf" name="toggle" type="checkbox" <?php if ($toggle == 1) echo 'checked'; ?>>
                                <div class="sliderProf"></div>
                            </label>
                        </div>
                    </form>
                    <?php
                }
            }

            if (isset($_SESSION['username']) && $userRole == 1) {
                echo "<a href='AdminSettings/adminSettings.php'>
                <input type='submit' class='search__input' value='Change Password' style='color: white;'>
            </a>";
                echo "<a href='AdminSettings/adminSettings.php'>
                <input type='submit' class='search__input' value='Validate Reservations' style='color: white;'>
            </a>";
                echo "<a href='logout.php'>
                <input type='submit' class='search__input' value='Logout' style='color: white;'>
            </a>";
            }
            ?>
        </div>

        <input type="submit" class="search__input bottom_accordion" style="color: white;" value="<?php
               if (isset($_SESSION['username'])) {
                   echo $_SESSION['username'];
               } else {
                   echo "Guest";
               }
               ?>"/>
               <?php if (isset($_SESSION['username']) && $userRole == 2) { ?>

        <?php } ?>

    </div>


</aside>

<!--/spaces-list -->
<?php
mysqli_close($conn);
?> 

