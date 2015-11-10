<h3>4.1 class definition</h3>
<pre> class Bear 
{

    // define properties

    public $name;

    public $weight;

    public $age;

    public $sex;

    public $colour;

    // define methods

    public function eat()
    {
        echo $this->name." is eating...";
    }

    public function run()
    {    
        echo $this->name." is running...";
    }

    public function kill()
    {
        echo $this->name." is killing prey...";
    }

    public function sleep()
    {
        echo $this->name." is sleeping...";
    }

} </pre>
<h3>4.2 spwan class</h3>
<pre>

// my first bear

$daddy = new Bear;

// give him a name

$daddy->name = "Daddy Bear";

// how old is he

$daddy->age = 8;

// what sex is he

$daddy->sex = "male";

// what colour is his coat

$daddy->colour = "black";

// how much does he weigh

$daddy->weight = 300;

// give daddy a wife

$mommy = new Bear;

$mommy->name = "Mommy Bear";

$mommy->age = 7;

$mommy->sex = "female";

$mommy->colour = "black";

$mommy->weight = 310;

// and a baby to complete the family

$baby = new Bear;

$baby->name = "Baby Bear";

$baby->age = 1;

$baby->sex = "male";

$baby->colour = "black";

$baby->weight = 180;

// a nice evening in the Bear family

// daddy kills prey and brings it home

$daddy->kill();

// mommy eats it

$mommy->eat();

// and so does baby

$baby->eat();

// mommy sleeps

$mommy->sleep();

// and so does daddy

$daddy->sleep();

// baby eats some more

$baby->eat();
</pre>
<h3>4.3 constructor</h3>
<pre>

// class definition

class Bear {

    // define properties

    public $name;

    public $weight;

    public $age;

    public $colour;

    

    // constructor

    public function __construct() 
    {

        $this->age = 0;

        $this->weight = 100;

        $this->colour = "brown";

    }

    

    // define methods

}
</pre>
<h3>4.3 Extend //inheritance</h3>
<pre>// class definition

class Bear {

    // define properties

    public $name;

    public $weight;

    public $age;

    public $sex;

    public $colour;

    // constructor

    public function __construct() 
    {

        $this->age = 0;

        $this->weight = 100;

    }

    // define methods

    public function eat($units) 
    {

        echo $this->name." is eating ".$units." units of food...";

        $this->weight += $units;

    }

    public function run() 
    {

        echo $this->name." is running...";

    }

    public function kill() 
    {

        echo $this->name." is killing prey...";

    }

    public function sleep() 
    {

        echo $this->name." is sleeping...";

    }

}

// extended class definition

class PolarBear extends Bear {

    // constructor

    public function __construct() 
    {

        parent::__construct();

        $this->colour = "white";

        $this->weight = 600;

    }

    // define methods

    public function swim() 
    {

        echo $this->name." is swimming...";

    }

}</pre>
<h3>4.3 keyword final</h3>
<p>will not allow to inheritance from class<br>
final class Bear{}</p>