<?php

$list = array(1,2,3,4,5,6);

//-- V1 --
/*$rand = array_rand($list, 1);
echo $list[$rand];*/

//-- V2 --
/*shuffle($list);
echo $list[0];*/

//-- V3 --
shuffle($list);
switch ($list[0]) {
    case 1:
        echo '
        <div class="dice first-face">
            <span class="dot">
            </span>
        </div>
        ';
        break;
    case 2:
        echo '
        <div class="dice second-face">
            <span class="dot">
            </span>
            <span class="dot">
            </span>
        </div>
        ';
        break;
    case 3:
        echo '
        <div class="dice third-face">
            <span class="dot"></span>
            <span class="dot"></span>
            <span class="dot"></span>
        </div>
        ';
        break;
    case 4:
        echo '
        <div class="fourth-face dice">
            <div class="column">
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
            <div class="column">
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
        ';
        break;
    case 5:
        echo '
        <div class="fifth-face dice">
            <div class="column">
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
            <div class="column">
                <span class="dot"></span>
            </div>
            <div class="column">
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
        </div>
        ';
        break;
    case 6:
        echo '
        <div class="sixth-face dice">
            <div class="column">
                <span class="dot"></span>
                <span class="dot"></span>
                <span class="dot"></span>
            </div>
            <div class="column">
                <span class="dot"></span>
                <span class="dot"></span>
                    <span class="dot"></span>
            </div>
        </div>
        ';
        break;
    default:
        echo '
        <div class="dice first-face">
        </div>
        ';
        break;
}