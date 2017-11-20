function solve(input) {
    let numbers = input.map(Number).sort(function (a,b){
        return b-a;
    }).slice(0,3);

    for (let number of numbers) {
        console.log(number);
    }
}
