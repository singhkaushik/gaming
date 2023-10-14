var money = 0; // Total money owned by player, starts at 100.
var mpc = 1; // Total amount of money per click, starts at 1
var clickerCost = 50; // Total amount to upgrade money per click
var mps = 0; // Total amount of money gained per second, starts at 0
var mpf = Math.round(mps / 5); // Money per second divided by 5.
var factoryWorkerCost = 75; // Total amount to buy factory workers
var factoryWorkers = 0; // Amount of factory workers
var factoryWorkProduction = 0; // How much the factory workers make per second
var factoryCost = 1000; // Total amount to buy factories
var factoryTotal = 1; // Amount of factories
var houseCost = 750; // Total amount to buy houses
var houseTotal = 1; // Amount of houses
var populationProduction = 1; // Amount of money made by population, unaffected by houses
var employeeCost = 500;
var employeeTotal = 0;
var employeeProduction = 0;

/* ---------------------------------

#####################
   Money per Click
#####################

Deals with:
    - "Make Money" button
    - Population
    - Houses
    - Apartments

*/

function clickPoint() {
  // Used to add money when "Get Money" button is clicked
  money = money + mpc;
  document.querySelector("#moneyamount").innerHTML = money;
}

function upgradeMPC() {
  // Used to increase population and add to the amount of money per click
  if (money >= clickerCost) {
    money = money - clickerCost;
    money = money;
    mpc = mpc + 1 * houseTotal;
    populationProduction = populationProduction + 1;
    clickerCost = clickerCost * 1.25;
    clickerCost = clickerCost.toFixed(0);
  }
  document.querySelector("#clickercost").innerHTML = "Cost: $" + clickerCost;

  document.querySelector("#moneyamount").innerHTML = money;
  document.querySelector("#populationamount").innerHTML = mpc;
}

function buyHouse() {
  // Used to multiply money made from population
  if (money >= houseCost) {
    money = money - houseCost;
    houseTotal = houseTotal + 1;
    money = money;
    mpc = populationProduction * houseTotal;
    houseCost = houseCost * 1.25;
    houseCost = houseCost.toFixed(0);
  }
  document.querySelector("#housecost").innerHTML = "Cost: $" + houseCost;

  document.querySelector("#moneyamount").innerHTML = money;
  document.querySelector("#populationamount").innerHTML = mpc;
}

/* ---------------------------------

#####################
   Automatic Money
#####################

Deals with:
    - Money per Second calculator
    - Factory workers
    - Factories

*/

function mpsCalc() {
  // Used to add the correct amount of money per second, every second
  mps = factoryWorkProduction * factoryTotal;
  document.querySelector("#mps").innerHTML = mps;
  money = money + mps;
  document.querySelector("#moneyamount").innerHTML = money;

  setTimeout(mpsCalc, 20);
}

function buyFactWorker() {
  // Used to purchase a factory worker, adding to the money per second
  if (money >= factoryWorkerCost) {
    money = money - factoryWorkerCost;
    mps = mps + 1;
    factoryWorkerCost = factoryWorkerCost * 1.25;
    factoryWorkerCost = factoryWorkerCost.toFixed(0);
    factoryWorkProduction = factoryWorkProduction + 1;
    document.querySelector("#moneyamount").innerHTML = money;
    document.querySelector("#mps").innerHTML =
      factoryWorkProduction * factoryTotal;
  }

  document.querySelector("#factoryWorkerCost").innerHTML =
    "Cost: $" + factoryWorkerCost;
}

function buyFactory() {
  // Used to a buy a factory, multiplying production
  if (money >= factoryCost) {
    money = money - factoryCost;
    factoryCost = factoryCost * 1.25;
    factoryCost = factoryCost.toFixed(0);
    factoryTotal = factoryTotal + 1;
    document.querySelector("#moneyamount").innerHTML = money;
    document.querySelector("#mps").innerHTML =
      factoryWorkProduction * factoryTotal;
  }

  document.querySelector("#factorycost").innerHTML = "Cost: $" + factoryCost;
}

function buyEmployee() {
  // Used to purchase a factory worker, adding to the money per second
  if (money >= employeeCost) {
    money = money - employeeCost;
    mps = mps + 5;
    employeeCost = employeeCost * 1.25;
    employeeCost = employeeCost.toFixed(0);
    employeeProduction = employeeProduction + 10;
    document.querySelector("#moneyamount").innerHTML = money;
    document.querySelector("#mps").innerHTML =
      factoryWorkProduction * factoryTotal;
  }

  document.querySelector("#factoryWorkerCost").innerHTML =
    "Cost: $" + factoryWorkerCost;
}

// ---------------------------------

function openLoans() {
  money = 100000;
}
