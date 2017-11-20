function solve(input) {
    let people = [];

    for (let line of input) {
        let jsonString = JSON.parse(line);
        people.push(jsonString);

    }
    for (let person of people) {
        console.log(`Name: ${person.name}`);
        console.log(`Age: ${person.age}`);
        console.log(`Date: ${person.date}`);
    }
}
