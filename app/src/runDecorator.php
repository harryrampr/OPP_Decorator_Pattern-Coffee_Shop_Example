<?php
declare(strict_types=1);

require_once __DIR__ . '/../../vendor/autoload.php';

use App\ConcreteComponent;
use App\ConcreteDecorator;
use App\Beverage;

/**
 * Display the details of a beverage.
 *
 * @param Beverage $beverage The beverage object to display.
 */
function displayBeverage(Beverage $beverage): void
{
    echo '<div class="beverage">', PHP_EOL;
    echo $beverage->getDescription();
    echo sprintf("</ul>\n<p class=\"total\">Total cost: $%.2F</p>\n</div>%s", $beverage->cost(), PHP_EOL);
}

// Coffees
$houseBlend = new ConcreteComponent('House Blend Coffee', 0.89);
$darkRoasted = new ConcreteComponent('Dark Roasted Coffee', 0.99);
$decaf = new ConcreteComponent('Decaf Coffee', 1.05);
$espresso = new ConcreteComponent('Espresso Coffee', 1.99);

//Condiments
$steamedMilk = new ConcreteDecorator('Steamed Milk Added', .10);
$mocha = new ConcreteDecorator('Mocha Added', .20);
$soy = new ConcreteDecorator('Soy Milk Added', .15);
$whip = new ConcreteDecorator('Whip Cream Added', .10);

echo '<h1>Coffee Shop Simulation</h1>', PHP_EOL;

// Prepare House Blend Coffee with double Mocha and Whip Cream
$beverage = $houseBlend->addDecoration($soy)
    ->addDecoration($mocha)
    ->addDecoration($mocha)
    ->addDecoration($whip);
displayBeverage($beverage);

// Prepare Decaf Coffee with Steamed Milk
$beverage = $decaf->addDecoration($steamedMilk);
displayBeverage($beverage);

// Prepare Dark Roasted Coffee with Mocha and Whip Cream
$beverage = $darkRoasted->addDecoration($steamedMilk)
    ->addDecoration($mocha)
    ->addDecoration($whip);
displayBeverage($beverage);

// Prepare Espresso Coffee
$beverage = $espresso;
displayBeverage($beverage);