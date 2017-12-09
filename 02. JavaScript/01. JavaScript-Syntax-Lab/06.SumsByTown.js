function solve(input) {
    let objects = input.map(JSON.parse);

    let sums = {};
    for(let object of objects){
        if(!(object.town in sums)){
            sums[object.town] = 0;
        }
        sums[object.town] += object.income;
    }
    let towns = Object.keys(sums).sort();

    for (let town of towns) {
        console.log(`${town} -> ${sums[town]}`);
    }
}
