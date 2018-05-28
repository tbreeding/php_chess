
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        * {
            box-sizing: border-box;
        }
        body {
            background-color: #eee;
            display: flex;
            flex-wrap: wrap;
            width: 490px;
        }
        .piece {
            height: 40px;
        }
        .dark {
            background-color: gray;
        }
        .light {
            background-color: #bbb;
        }
        .square {
            height: 55px;
            width: 55px;
            display: flex;
            justify-content: center;
            align-items: center;
            
        }
    
    </style>
</head>
<body>
    
</body>
</html>

<?php

class piece {
    protected $type = null;
    protected $images = [
        'K' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/king.png',
        'Q' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/queen.png',
        'B' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/bishop.png',
        'N' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/knight.png',
        'R' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/rook.png',
        'P' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/whites/pawn.png',
        'k' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/king.png',
        'q' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/queen.png',
        'b' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/bishop.png',
        'n' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/knight.png',
        'r' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/rook.png',
        'p' => 'http://classes.codingbootcamp.cz/assets/classes/33/pieces/blacks/pawn.png'
    ];
    function __construct($type) {
        $this->type = $type;
    }
    function __toString() {

        return "<img  class='piece' src='{$this->images[$this->type]}' />";
    }
}

$white = ['R', 'N', 'B', 'Q', 'K', 'B', 'N', 'R',
        'P', 'P', 'P', 'P', 'P', 'P', 'P', 'P'];

$black = ['r', 'n', 'b', 'q', 'k', 'b', 'n', 'r',
        'p', 'p', 'p', 'p', 'p', 'p', 'p', 'p'];

foreach ($white as $key => $piece) {
    $white_pieces[$key] = new piece($piece);
}

foreach ($black as $key => $piece) {
    $black_pieces[$key] = new piece($piece);
}
 
