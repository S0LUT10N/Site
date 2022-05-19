const carsCatalog = [
    {
        target: 'moskou',
        name: 'NipponExpress',
        alowedMass: 1000,
        price: 100000
    },
    {
        target: 'piter',
        name: 'SPBDelivery',
        alowedMass: 10000,
        price: 60000
    },
    {
        target: 'ufa',
        name: 'FromUFAToPeter',
        alowedMass: 7000,
        price: 90000
    },
    {
        target: 'ufa',
        name: 'AllRoadsToRome',
        alowedMass: 5000,
        price: 30000
    },
    {
        target: 'tuymazi',
        name: 'UnitedStatesOfDelivery',
        alowedMass: 1000,
        price: 30000
    },
    {
        target: 'ulyanovsk',
        name: 'IncasEmpire',
        alowedMass: 10000,
        price: 100000
    },
    {
        target: 'moskou',
        name: 'AustraliaImExport',
        alowedMass: 3000,
        price: 120000
    },
    {
        target: 'ulyanovsk',
        name: 'NegroToEveryone',
        alowedMass: 10000,
        price: 20000
    },
    {
        target: 'tuimazi',
        name: 'RuleTheSeasBritain',
        alowedMass: 10000,
        price: 120000
    },
    {
        target: 'ufa',
        name: 'CUM',
        alowedMass: 6900,
        price: 42000
    },
    {
        target: 'kazan',
        name: 'KazanExpress',
        alowedMass: 6900,
        price: 42000
    },
    {
        target: 'kazan',
        name: 'KazanMove',
        alowedMass: 6900,
        price: 42000
    },
    {
        target: 'kazan',
        name: 'KazanT',
        alowedMass: 6900,
        price: 42000
    },
    {
        target: 'kazan',
        name: 'KazanTrance',
        alowedMass: 6900,
        price: 42000
    },
    {
        target: 'kazan',
        name: 'KazanTona',
        alowedMass: 6900,
        price: 42000
    },

]

const targets = {
    'ufa' : 'Уфа',
    'tuymazi': 'Туймазы',
    'ulyanovsk' : 'Ульяновск',
    'moskou' : 'Москва',
    'piter' : 'Санкт-Петербург',
    'kazan' : 'Казань'
}

function printoutCars() {
    //get elements
    let target = document.getElementById("a").value
    let mass = parseInt(document.getElementById("b").value)
    let price = parseInt(document.getElementById("control").value)

    if (isNaN(mass) == true) mass = 0
    if (isNaN(price) == true) price = 1000000

    let output = document.getElementById("output")

    if (!output) {
        alert("something went wrong")
    }

    removeAllChildNodes(output)
    printOutCarsInNode(output, target, mass, price)
}

function printOutCarsInNode(node, target, mass, price) {
    carsCatalog.forEach((car) => {
        if (car.alowedMass < mass || car.price > price || (target !== car.target )) {
            return
        } if (mass === 0 || price === 0) {
            return null
        }

        const carDiv = document.createElement("div")
        carDiv.className = "container p-3 my-3 bg-dark text-white"

        const carNameElem = document.createElement("h5")
        carNameElem.innerHTML = car.name
        carDiv.appendChild(carNameElem)

        const carTargetElem = document.createTextNode("Территория: " + targets[car.target])
        carDiv.appendChild(carTargetElem)
        carDiv.appendChild(document.createElement("br"))

        const carMassElem = document.createElement("small")
        carMassElem.innerHTML = "Допустимая масса: " + car.alowedMass
        carDiv.appendChild(carMassElem)

        const carPriceElem = document.createElement("small")
        carPriceElem.innerHTML = "   Цена: " + car.price
        carDiv.appendChild(carPriceElem)

        node.appendChild(carDiv)
    })
}

function removeAllChildNodes(parent) {
    while (parent.firstChild) {
        parent.removeChild(parent.firstChild)
    }
}
