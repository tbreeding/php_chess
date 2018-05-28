<?php



class square {
    protected $x_coord = null;
    protected $y_coord = null;
    protected $piece = null;

   public function __construct($x, $y, $piece = null) {
        $this->x_coord = $x;
        $this->y_coord = $y;
        $this->piece = $piece;
    }
    protected function isDark() {
        if(($this->x_coord % 2 === 0 && $this->y_coord % 2 === 0) || 
            ($this->x_coord % 2 > 0 && $this->y_coord % 2 > 0)) 
        {
            return true;
        } else {
            return false;
        }
    }
    public function __toString() {
        $class = $this->isDark() ? "class='square dark'" : "class='square light'";
        return "<div {$class} id='{$this->x_coord}{$this->y_coord}'>{$this->piece}</div>";
    }
}
