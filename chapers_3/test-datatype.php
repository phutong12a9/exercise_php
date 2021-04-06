<?php
$data = 1;
switch (gettype($data)) {
        case 'integer':
            echo "The data type is integer.";
            break;
        case 'double':
                echo "The data type is Number.";
                break;
        case 'boolean':
                echo "The data type is Boolean.";
                break;
        case 'string':
                echo "The data type is String.";
                break;
        case 'array':
                echo "The data type is Array.";
                break;
        default:
                echo "The data type unknown.";
                break;
}