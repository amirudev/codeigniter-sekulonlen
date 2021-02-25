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
?>