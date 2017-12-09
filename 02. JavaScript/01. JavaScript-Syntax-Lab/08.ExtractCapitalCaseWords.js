function solve(input) {
    let upperCaseWords = [];

    for (let line of input) {
        let words = line.split(/\W/).filter(function (word) {
            if(word !== ""){
                return word;
            }
        });

        for (let word of words) {
            if(word === word.toUpperCase()){
                upperCaseWords.push(word);
            }
        }
    }
    console.log(upperCaseWords.join(', '));
}