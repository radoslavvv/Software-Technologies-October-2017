function solve(input) {
    let people = [];
    for (let line of input) {
        let name = line.split(' -> ')[0];
        let age = line.split(' -> ')[1];
        let grade  = line.split(' -> ')[2];

        let person = {name:name, age:age, grade:grade};
        people.push(person);
    }
    for (let person of people) {
        console.log(`Name: ${person.name}`);
        console.log(`Age: ${person.age}`);
        console.log(`Grade: ${person.grade}`);
    }
}

