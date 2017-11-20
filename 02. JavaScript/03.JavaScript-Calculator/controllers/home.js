const Calculator = require('../models/Calculator');

module.exports = {
    indexGet: (req, res) => {
        res.render('home/index');
    },
    indexPost: (req, res) => {
        let calculatorParams = req.body['calculator'];

        let calculator = new Calculator();
        calculator.leftOperand = +calculatorParams.leftOperand;
        calculator.operator = calculatorParams.operator;
        calculator.rightOperand = +calculatorParams.rightOperand;

        if(calculator.leftOperand && calculator.operator && calculator.rightOperand){
            let bitwiseOperators = ['AND', 'OR', 'XOR'];
            let conversionOperators = ['2', '10', '16'];

            let result = calculator.calculateResult();

            if(conversionOperators.includes(calculator.operator)){
                res.render('home/index', {'calculator': calculator, 'result': result});
            }else if(bitwiseOperators.includes(calculator.operator) && (calculator.leftOperand === 0 || calculator.leftOperand === 1) && (calculator.rightOperand === 0 || calculator.rightOperand === 1)){
                res.render('home/index', {'calculator': calculator, 'result': result});
            }else if(bitwiseOperators.includes(calculator.operator)){
                res.render('home/index', {'error': 'Error! For this action use just 1 and 0, please!'});
            }else{
                res.render('home/index', {'calculator': calculator, 'result': result});
            }
        }
        else{
            res.render('home/index', {'calculator': calculator, 'error': 'Error! Fill out each form, please!'});
        }
    }
};