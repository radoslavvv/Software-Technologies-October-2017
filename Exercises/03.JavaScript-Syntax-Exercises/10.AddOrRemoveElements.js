function solve(input) {
    let resultArray = [];

    for (let line of input) {
        let command = line.split(' ')[0];
        let value = line.split(' ')[1];

        if(command === "add"){
            resultArray.push(value);
        }
        else{
            if(value >= 0 && value < resultArray.length){
                resultArray.splice(value,1);
            }
        }
    }

    for (let element of resultArray) {
        console.log(element);
    }
}
