var express = require('express');
var router = express.Router();

var ctrlStory = require('../controllers/story');

router.get('/stories', ctrlStory.getstories);
router.post('/stories', ctrlStory.createstory);
router.get('/stories/:storyid', ctrlStory.getSinglestory);
router.put('/stories/:storyid', ctrlStory.updatestory);
router.delete('/stories/:storyid', ctrlStory.deletestory);

module.exports = router;