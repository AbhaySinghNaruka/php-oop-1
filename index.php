<?
class Movie
{

    public $title;
    public $year;
    public $genre;

    public function __construct($title, $year, $genre)
    {
        $this->title = $title;
        $this->setYear($year);
        $this->genre = $genre;
    }
    public function setYear($year)
    {
        if (is_int($year) && $year >= 0) {
            $this->year = $year;
        }
    }
    public function getYear()
    {
        return $this->year;
    }
}
$battleship = new Movie('Battleship', 2012, 'Azione, Fantascienza');
$avengersEndGame = new Movie('Avengers: End Game', 2019, 'Azione, Fantascienza');

var_dump($battleship);
var_dump($avengersEndGame);
