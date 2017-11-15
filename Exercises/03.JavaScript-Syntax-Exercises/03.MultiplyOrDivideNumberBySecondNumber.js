function solveq(input) {
    let firstNumber = +input['0'];
    let secondNumber = +input['1'];

    let result = 0;
    if(secondNumber >= firstNumber){
        result = secondNumber * firstNumber;
    }else{
        result = firstNumber / secondNumber;
    }
    console.log(result);
}