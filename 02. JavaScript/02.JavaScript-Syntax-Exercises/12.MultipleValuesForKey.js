function solve(input) {
    let lastLine = input.pop();

    let dict = {};
    for (let line of input) {
        let key = line.split(' ')[0];
        let value = line.split(' ')[1];

        if(!dict.hasOwnProperty(key)){
            dict[key] = [];
        }
        dict[key].push(value);
    }
    if(dict.hasOwnProperty(lastLine)){
        let result = dict[lastLine];
        for (let value of result)
            console.log(value);
        }
        else{
        console.log("None");
    }

}