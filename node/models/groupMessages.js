var mongoose = require('mongoose');
var Schema = mongoose.Schema;

var schema = new Schema({
    group: [{ type: Schema.Types.ObjectId, ref: 'message_groups' }],
    content: { type: String, required: true },
    sender: { type: Number, required: true },
    receiver: { type: Number, required: true }
    
})

module.exports = mongoose.model('GroupMessage', schema);