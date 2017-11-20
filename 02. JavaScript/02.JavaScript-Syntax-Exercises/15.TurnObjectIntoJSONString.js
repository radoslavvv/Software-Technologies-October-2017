function solve(input) {
    let object = {};

    for (let line of input) {
        let key = line.split(' -> ')[0];
        let value = line.split(' -> ')[1];

        object[key] = value;
    }

    let string = JSON.stringify(object);
    console.log(string);
}

solve(['name -> Angel','surname -> Georgiev']);
