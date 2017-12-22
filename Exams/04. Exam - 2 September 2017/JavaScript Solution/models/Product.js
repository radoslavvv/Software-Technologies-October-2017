const mongoose = require('mongoose');

let productSchema = mongoose.Schema({
    name: {type: 'string', required: 'true'},
    status: {type: 'string', required: 'true'},
    quantity: {type: 'number', required: 'true'},
    priority: {type: 'number', required: 'true'}
});

let Product = mongoose.model('Product', productSchema);

module.exports = Product;