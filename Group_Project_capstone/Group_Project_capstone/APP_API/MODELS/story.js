const mongoose = require('mongoose');

const storySchema = new mongoose.Schema({
    name: {
        type: String,
        required: true,
        minLength: 3
    },
    type: {
        type: String,
        required: true
    },
   
   
    author:{
        type: String,
        required: true
    },
    
    description:{
        type: String,
        required: true
    }
   
});

mongoose.model('story', storySchema);

