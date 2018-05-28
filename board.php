<?php

require_once 'piece.php';
require_once 'square.php';

$boardArray = [
    [ //row 1
        ['x' => 0, 'y' => 0, 'piece' => $white_pieces[0]], 
        ['x' => 1, 'y' => 0, 'piece' => $white_pieces[1]],
        ['x' => 2, 'y' => 0, 'piece' => $white_pieces[2]], 
        ['x' => 3, 'y' => 0, 'piece' => $white_pieces[3]], 
        ['x' => 4, 'y' => 0, 'piece' => $white_pieces[4]], 
        ['x' => 5, 'y' => 0, 'piece' => $white_pieces[5]], 
        ['x' => 6, 'y' => 0, 'piece' => $white_pieces[6]], 
        ['x' => 7, 'y' => 0, 'piece' => $white_pieces[7]]
        
    ],
    [ //row 2
        ['x' => 0, 'y' => 1, 'piece' => $white_pieces[8]], 
        ['x' => 1, 'y' => 1, 'piece' => $white_pieces[9]],
        ['x' => 2, 'y' => 1, 'piece' => $white_pieces[10]], 
        ['x' => 3, 'y' => 1, 'piece' => $white_pieces[11]], 
        ['x' => 4, 'y' => 1, 'piece' => $white_pieces[12]], 
        ['x' => 5, 'y' => 1, 'piece' => $white_pieces[13]], 
        ['x' => 6, 'y' => 1, 'piece' => $white_pieces[14]], 
        ['x' => 7, 'y' => 1, 'piece' => $white_pieces[15]] 
    ],
    [ //row 3
        ['x' => 0, 'y' => 2], 
        ['x' => 1, 'y' => 2],
        ['x' => 2, 'y' => 2], 
        ['x' => 3, 'y' => 2], 
        ['x' => 4, 'y' => 2], 
        ['x' => 5, 'y' => 2], 
        ['x' => 6, 'y' => 2], 
        ['x' => 7, 'y' => 2] 
    ],
    [ //row 4
        ['x' => 0, 'y' => 3], 
        ['x' => 1, 'y' => 3],
        ['x' => 2, 'y' => 3], 
        ['x' => 3, 'y' => 3], 
        ['x' => 4, 'y' => 3], 
        ['x' => 5, 'y' => 3], 
        ['x' => 6, 'y' => 3], 
        ['x' => 7, 'y' => 3] 
    ],
    [ //row 5
        ['x' => 0, 'y' => 4], 
        ['x' => 1, 'y' => 4],
        ['x' => 2, 'y' => 4], 
        ['x' => 3, 'y' => 4], 
        ['x' => 4, 'y' => 4], 
        ['x' => 5, 'y' => 4], 
        ['x' => 6, 'y' => 4], 
        ['x' => 7, 'y' => 4] 
    ],
    [ //row 6
        ['x' => 0, 'y' => 5], 
        ['x' => 1, 'y' => 5],
        ['x' => 2, 'y' => 5], 
        ['x' => 3, 'y' => 5], 
        ['x' => 4, 'y' => 5], 
        ['x' => 5, 'y' => 5], 
        ['x' => 6, 'y' => 5], 
        ['x' => 7, 'y' => 5] 
    ],
    [ //row 7
        ['x' => 0, 'y' => 6, 'piece' => $black_pieces[8]], 
        ['x' => 1, 'y' => 6, 'piece' => $black_pieces[9]],
        ['x' => 2, 'y' => 6, 'piece' => $black_pieces[10]], 
        ['x' => 3, 'y' => 6, 'piece' => $black_pieces[11]], 
        ['x' => 4, 'y' => 6, 'piece' => $black_pieces[12]], 
        ['x' => 5, 'y' => 6, 'piece' => $black_pieces[13]], 
        ['x' => 6, 'y' => 6, 'piece' => $black_pieces[14]], 
        ['x' => 7, 'y' => 6, 'piece' => $black_pieces[15]] 
    ],
    [ //row 8
        ['x' => 0, 'y' => 7, 'piece' => $black_pieces[0]], 
        ['x' => 1, 'y' => 7, 'piece' => $black_pieces[1]],
        ['x' => 2, 'y' => 7, 'piece' => $black_pieces[2]], 
        ['x' => 3, 'y' => 7, 'piece' => $black_pieces[3]], 
        ['x' => 4, 'y' => 7, 'piece' => $black_pieces[4]], 
        ['x' => 5, 'y' => 7, 'piece' => $black_pieces[5]], 
        ['x' => 6, 'y' => 7, 'piece' => $black_pieces[6]], 
        ['x' => 7, 'y' => 7, 'piece' => $black_pieces[7]]
        
    ]
];

class board {
    public $board = null;
    public $squares = [];

    public function __construct($boardArray) {
        $this->board = $boardArray;

        foreach($this->board as $key => $row) {
            foreach($row as $key => $square) {
                    $thisPiece = isset($square['piece']) ? $square['piece'] : null;
                    $this->squares[] = new square($square['x'], $square['y'], $thisPiece);
            }
        }  
        var_dump($this->squares);    
    }
    public function __toString() {
        foreach($this->squares as $square) {
            echo $square;
        }
        return '';
    }
}

$board = new board($boardArray);

echo $board;
