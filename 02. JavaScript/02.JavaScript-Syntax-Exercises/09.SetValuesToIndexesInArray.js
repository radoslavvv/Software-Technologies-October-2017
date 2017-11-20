function solve(input) {
    let arraySize = +input[0];
    let resultArray = new Array(arraySize).fill(0);

    input.shift();

    for (let line of input) {
        let lineParams = line.split(/\s\-\s/);

        let index = +lineParams[0];
        let value = +lineParams[1];

        if(index >= 0 && index < arraySize){
            resultArray[index] = value;
        }
    }
    for (let element of resultArray) {
        console.log(element);
    }
}