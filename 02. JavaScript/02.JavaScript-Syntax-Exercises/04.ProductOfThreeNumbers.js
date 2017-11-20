function solve(input) {
    let firstNumber = +input[0];
    let secondNumber = +input[1];
    let thirdNumber = +input[2];

    let negativeNumbers = [firstNumber,secondNumber,thirdNumber];
    let negativeNumbersCount = negativeNumbers.filter(n => n < 0).length;

    if(negativeNumbersCount % 2 === 0){
        console.log("Positive")
    }
    else{

        console.log("Negative");
    }

}

