function Calculator(leftOperand, operator, rightOperand) {
    this.leftOperand = leftOperand;
    this.operator = operator;
    this.rightOperand = rightOperand;

    this.calculateResult = function () {
        let result = 0;

        let arithmeticOperators = ['+', '-', '*', '/', '^'];
        let bitwiseOperators = ['AND', 'OR', 'XOR'];
        let conversionOperators = ['2', '10', '16'];

        if(arithmeticOperators.includes(this.operator)){
                switch (this.operator){
                    case '+':
                        result = this.leftOperand + this.rightOperand;
                        break;
                    case '-':
                        result = this.leftOperand - this.rightOperand;
                        break;
                    case '*':
                        result = this.leftOperand * this.rightOperand;
                        break;
                    case '/':
                        result = this.leftOperand / this.rightOperand;
                        break;
                    case '^':
                        result = Math.pow(this.leftOperand, this.rightOperand);
                        break;
                }
        }
        else if(bitwiseOperators.includes(this.operator)){
                switch (this.operator) {
                    case 'AND':
                        result = this.rightOperand && this.leftOperand;
                        break;
                    case 'OR':
                        result = this.rightOperand || this.leftOperand;
                        break;
                    case 'XOR':
                        result = this.rightOperand ^ this.leftOperand;
                        break;
                }
        }
        else if(conversionOperators.includes(this.operator)){
            result = parseInt(this.leftOperand, this.operator).toString(this.rightOperand);
        }

        return result;
    };

}
module.exports = Calculator;
