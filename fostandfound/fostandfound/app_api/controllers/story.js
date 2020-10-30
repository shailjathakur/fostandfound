const mongoose = require('mongoose');
const Story = mongoose.model('story');

const getstories =function (req,res) {


    Story.find().exec(function (err,storydata) {
        if(err){
            res
                .status(404)
                .json(err);
            return;
        }
        res
            .status(200)
            .json(storydata)

    });

};

const createstory =function (req,res) {
    Story.create({
        title: req.body.title,
        type: req.body.type,
        author: req.body.author,
        description: req.body.description
       

    }, (err,storydata) => {
        if(err){
            res
                .status(400)
                .json(err);
        }
        else{
            res
                .status(201)
                .json(storydata);
        }
    });


};

const getSinglestory =function (req,res) {
    Story
        .findById(req.params.storyid)
        .exec((err, Story) => {
            if (!Story) {
                return res
                    .status(404)
                    .json({
                        "message": "Story not found"
                    });
            } else if (err) {
                return res
                    .status(404)
                    .json(err);
            }
            res
                .status(200)
                .json(Story);
        });

};

const updatestory =function (req,res) {
    if(!req.params.storyid){
        res
            .status(404)
            .json({
                "message": "Not Found, storyid is required"
            });
        return;
    }

    Story.findById(req.params.storyid)
        .exec((err, storydata) => {
            if(!storydata){
                res
                    .json(404)
                    .status({
                        "message": "storyid not found"
                    });
                return;
            }
            else if(err){
                res
                    .status(404)
                    .json(err);
                return;
            }
            storydata.title = req.body.title;
            storydata.type = req.body.type;
            storydata.author = req.body.author;
           
            storydata.description = req.body.description;
           

            storydata.save((err, storydata) => {

                if(err){
                    res
                        .status(404)
                        .json(err);
                }
                else{
                    res
                        .status(200)
                        .json(storydata);
                }
            });
        });

};


const deletestory = function (req,res) {
    const storyid = req.params.storyid;

    if(storyid){
        Story
            .findByIdAndRemove(storyid)
            .exec((err,storydata) => {
                if(err){
                    res
                        .status(404)
                        .json(err);
                }

                res
                    .status(204)
                    .json(null);
            });
    }

    else
    {
        res
            .status(404)
            .json({"message" : "No storyid"});
    }

};



module.exports={
    getstories,
    createstory,
    getSinglestory,
    updatestory,
    deletestory
};