function solve(input) {
    let dict = {};

    let lastLine = input.pop();

    for (let line of input) {
        let key = line.split(' ')[0];
        let value = line.split(' ')[1];

        dict[key] = value;
    }
    if(dict.hasOwnProperty(lastLine)){
        console.log(dict[lastLine]);
    }
    else{
        console.log("None");
    }
}