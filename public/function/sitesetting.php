<?php
function getIcon($icon){
    switch($icon){
        case 0:
            return 'square-root-alt';
            break;
        case 1:
            return 'language';
            break;
        case 2:
            return 'atom';
            break;
        case 3:
            return 'running';
            break;
        case 4:
            return 'heart';
            break;
        case 5:
            return 'globe';
            break;
        case 6:
            return 'project-diagram';
            break;
        case 7:
            return 'globe-americas';
            break;
        default:
            return 'book';
            break;
    }
}

function getColor($color){
    switch($color){
        case 0:
            return 'primary';
            break;
        case 1:
            return 'secondary';
            break;
        case 2:
            return 'success';
            break;
        case 3:
            return 'danger';
            break;
        case 4:
            return 'info';
            break;
        case 5:
            return 'dark';
            break;
        default:
            return 'success';
            break;
    }
}
?>