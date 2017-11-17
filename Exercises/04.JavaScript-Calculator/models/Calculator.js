function Calculator(leftOperand, operator, rightOperand) {
    this.leftOperand = leftOperand;
    this.operator = operator;
    this.rightOperand = rightOperand;

    this.calculateResult = function () {
        let result = 0;

        switch (this.operator) {
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
            case 'AND':
            case 'OR':
            case 'XOR':
                result = bitwise(this.leftOperand, this.operator, this.rightOperand);
                break;
        }
        return result;

        function bitwise(leftOperand, operator, rightOperand) {
            let result = 0;
            if ((rightOperand === 0 || rightOperand === 1) && (leftOperand === 0 || leftOperand === 1)) {
                switch (operator) {
                    case 'AND':
                        result = rightOperand && leftOperand;
                        break;
                    case 'OR':
                        result = rightOperand || leftOperand;
                        break;
                    case 'XOR':
                        result = rightOperand ^ leftOperand;
                        break;
                }
            } else {
                result = "Error";
            }
            return result;
        }
    };

}
module.exports = Calculator;
