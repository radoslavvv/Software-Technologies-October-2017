function solve(input) {
    let number = Number(input);

    for(let i = 1; i <= number; i++){
        let currentNumber = i.toString();
        let currentNumberReversed = reverseString(i.toString());

        if(currentNumber === currentNumberReversed){
            console.log(i);
        }
    }
}

function reverseString(string) {
    let reversedString = string
        .split('')
        .reverse()
        .join('');

    return reversedString;
}

