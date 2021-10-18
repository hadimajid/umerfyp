<template>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="heading">User Rating</h3>
                        <div class="star-rating">
                            <star-rating v-model="rating" :increment="0.5" text-class="custom-text"></star-rating>
                        </div>
                        <div class="col-12 offset-2 my-3">
                            <div class="form-group">
                                <textarea v-model="text" name="message" class="w-75 form-control" id="message" cols="30" rows="10" placeholder="Feedback.." required></textarea>
                            </div>
                            <button @click="setRating()" class="btn btn-primary">Publish</button>

                        </div>

                        <h3 class="heading">Reviews</h3>
                        <div class="review-rating">
                            <div class="left-review">
                                <div class="review-title">{{ totalrate }}</div>
                                <div class="review-star">
                                    <star-rating :inline="true" :read-only="true" :show-rating="false" v-model="totalrate" :increment="0.1" :star-size="20" active-color="#000000"></star-rating>
                                </div>
                                <div class="review-people"><i class="fa fa-user"></i> {{ totaluser }} total</div>
                            </div>
                            <div class="right-review">
                                <div class="row-bar">
                                    <div class="left-bar">5</div>
                                    <div class="right-bar">
                                        <div class="bar-container">
                                            <div class="bar-5" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-bar">
                                    <div class="left-bar">4</div>
                                    <div class="right-bar">
                                        <div class="bar-container">
                                            <div class="bar-4" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-bar">
                                    <div class="left-bar">3</div>
                                    <div class="right-bar">
                                        <div class="bar-container">
                                            <div class="bar-3" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-bar">
                                    <div class="left-bar">2</div>
                                    <div class="right-bar">
                                        <div class="bar-container">
                                            <div class="bar-2" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row-bar">
                                    <div class="left-bar">1</div>
                                    <div class="right-bar">
                                        <div class="bar-container">
                                            <div class="bar-1" style="width: 0%;"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<style>
    /* Star Rating */
    * {
        box-sizing: border-box;
    }
    .fa {
        font-size: 25px;
    }
    .left-bar {
        float: left;
        width: 5%;
        margin-top:10px;
    }
    .right-bar {
        margin-top:10px;
        float: left;
        width: 95%;
    }
    .row-bar:after {
        content: "";
        display: table;
        clear: both;
    }
    .review-rating:after {
        content: "";
        display: table;
        clear: both;
    }
    .left-review {
        float: left;
        width: 30%;
        margin-top:10px;
        text-align: center;
    }
    .right-review {
        float: left;
        width: 70%;
        margin-top:10px;
    }
    .review-title{
        font-size: 56pt;
    }
    .review-star{
        margin: 0 0 10px 0;
    }
    .review-people .fa{
        font-size: 11pt;
    }
    .bar-container {
        width: 100%;
        background-color: #f1f1f1;
        text-align: center;
        color: white;
    }
    .bar-5 {height: 18px; background-color: #57bb8a;}
    .bar-4 {height: 18px; background-color: #9ace6a;}
    .bar-3 {height: 18px; background-color: #ffcf02;}
    .bar-2 {height: 18px; background-color: #ff9f02;}
    .bar-1 {height: 18px; background-color: #ff6f31;}
    .star-rating{
        text-align: center;
        margin:auto;
        width: 45%;
    }
    .star-rating .fa:hover{
        color: orange;
    }
    .heading {
        font-size: 25px;
        color: #999;
        border-bottom: 2px solid #eee;
    }
    @media (max-width: 400px) {
        .left-bar, .right-bar, .left-review, .right-review {
            width: 100%;
        }
    }
    .custom-text {
        font-weight: bold;
        font-size: 1.9em;
        border: 1px solid #cfcfcf;
        padding-left: 10px;
        padding-right: 10px;
        border-radius: 5px;
        color: #999;
        background: #fff;
    }
    .btn-grey{
        background-color:#D8D8D8;
        color:#FFF;
    }
    .review-block{
        background-color:#FAFAFA;
        border:1px solid #EFEFEF;
        padding:15px;
        border-radius:3px;
        margin-bottom:15px;
    }
    .review-block-name{
        font-size:12px;
        margin:10px 0;
    }
    .review-block-date{
        font-size:12px;
    }
    .review-block-rate{
        font-size:13px;
        margin-bottom:15px;
    }
    .review-block-title{
        font-size:15px;
        font-weight:700;
        margin-bottom:10px;
    }
    .review-block-description{
        font-size:13px;
    }
</style>

<script>
    export default{
        props:['user'],
        data(){
            return {
                badge: '0',
                feedbackData: [],
                text: '',
                quantity: 1,
                totalprice: '0',
                rating: 0,
                totaluser: 0,
                totalrate: 0
            }
        },
        created(){
            this.getRating();
        },
        methods: {
            setRating() {
                fetch('/api/rating/new', {
                    method: 'post',
                    body: JSON.stringify({text:this.text,user:this.user,rating:this.rating }),
                    headers: {
                        'Content-Type': 'application/json'
                    }
                }).then(res => res.json())
                    .then(data => {
                        swal('Thank you!', 'Your Feedback has been added','success');
                    }).catch(err => {
                    swal('Failed', 'You can\'t add more Feedback', 'error');
                });
            },
            getRating(){
                fetch(`/api/rating`)
                    .then(res => res.json())
                    .then(res => {
                        var mydata = res.data;
                        this.feedbackData = mydata;
                        this.totaluser = mydata.length;
                        var sum = 0;
                        for(var i = 0; i < mydata.length; i++){
                            sum += parseFloat(mydata[i]['rating']);
                        }
                        var avg = sum/mydata.length
                        this.totalrate = parseFloat(avg.toFixed(1));
                        var bar1 = 0;
                        var bar2 = 0;
                        var bar3 = 0;
                        var bar4 = 0;
                        var bar5 = 0;
                        for(var j = 0; j < mydata.length; j++){
                            if(parseInt(mydata[j]['rating']) == '1'){
                                bar1 += 1
                            }
                            if(parseInt(mydata[j]['rating']) == '2'){
                                bar2 += 1
                            }
                            if(parseInt(mydata[j]['rating']) == '3'){
                                bar3 += 1
                            }
                            if(parseInt(mydata[j]['rating']) == '4'){
                                bar4 += 1
                            }
                            if(parseInt(mydata[j]['rating']) == '5'){
                                bar5 += 1
                            }
                        }
                        $('.bar-5').css('width', bar5+'%');
                        $('.bar-4').css('width', bar4+'%');
                        $('.bar-3').css('width', bar3+'%');
                        $('.bar-2').css('width', bar2+'%');
                        $('.bar-1').css('width', bar1+'%');
                    })
                    .catch(err => {
                        console.log(err);
                    });
            },
            showCurrentRating: function(rating) {
                this.currentRating = (rating === 0) ? this.currentSelectedRating : "Click to select " + rating + " stars"
            },
            setCurrentSelectedRating: function(rating) {
                this.currentSelectedRating = "You have Selected: " + rating + " stars";
            }
        }
    }
</script>
