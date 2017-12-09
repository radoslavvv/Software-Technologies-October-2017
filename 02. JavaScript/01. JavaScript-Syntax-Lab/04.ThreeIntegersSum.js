function solve(input) {
    let numbers = input[0].split(" ");

    let firstNum = Number(numbers[0]);
    let secondNum = Number(numbers[1]);
    let thirdNum = Number(numbers[2]);

    if(firstNum + secondNum === thirdNum){
        console.log(`${Math.min(firstNum,secondNum)} + ${Math.max(firstNum,secondNum)} = ${thirdNum}`);
    }else if(secondNum + thirdNum === firstNum){
        console.log(`${Math.min(secondNum, thirdNum)} + ${Math.max(secondNum, thirdNum)} = ${firstNum}`);
    }
    else if(thirdNum + firstNum === secondNum){
        console.log(`${Math.min(thirdNum,firstNum)} + ${Math.max(thirdNum,firstNum)} = ${secondNum}`);
    }
    else{
        console.log('No');
    }
}