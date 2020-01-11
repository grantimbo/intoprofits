<style>

.wrap {
    display: grid;
    grid-template-columns: 1fr 3fr;
    grid-gap: 2rem;
    justify-items: center;
    margin-bottom: 4rem;
}
.card {
    background: #efefef;
    padding: 40px 25px;
    border-radius: 2px;
    margin-bottom: 20px;
    box-sizing: border-box;
    width: 100%;
    display: block;
}
.sidebar {
    display: block;
    width: 100%;
}

/* steps */
.steps p {
    margin-top: 0;
}
.steps p:last-child {
    margin-bottom: 0;
}
.steps p.active {
    color: #0047ab;
    position: relative;
}
.steps p.active:before {
    content: "";
    position: absolute;
    width: 3px;
    height: 100%;
    left: -25px;
    background: #0047ab;
}

/* progress */
.progress {
    text-align: center;
}
.circle-progress {
    height: 110px;
    width: 110px;
    margin: 0 auto;
    position: relative;
}
.prog-label {
    background: #ffffff;
    border-radius: 50%;
    bottom: 10px;
    color: #000000;
    cursor: default;
    display: block;
    font-size: 25px;
    left: 10px;
    line-height: 86px;
    position: absolute;
    right: 10px;
    text-align: center;
    top: 10px;
}
.prog-pie {
    height: 100%;
    width: 100%;
    left: 0;
    position: absolute;
    top: 0;
    clip: rect(0px,110px,110px,55px);
}
.prog-pie .half-circle {
    height: 100%;
    width: 100%;
    border: 10px solid #3ea940;
    border-radius: 50%;
    clip: rect(0, 110px, 55px, 0);
    left: 0;
    position: absolute;
    top: 0;
}
.circle-progress .right-side {
    display:none;
}
.circle-progress .left-side {
    transform: rotate(-20deg);
}
.circle-progress.percent30 .left-side {
    transform: rotate(30deg);
}
.circle-progress.percent50 .left-side {
    transform: rotate(90deg);
}
.circle-progress.percent90 .left-side {
    transform: rotate(90deg);
}
.circle-progress.percent90 .right-side {
    display: block;
    transform: rotate(-135deg);
}
.circle-progress.percent90 .prog-pie {
    clip: auto;
}
.prog-shadow {
    height: 100%;
    width: 100%;
    border: 20px solid #dadada;
    border-radius: 50%;
}



/* process */
.process-section {
    display: none;
}
.process-section h1 {
    margin-top: 0;
}
.process-section.active {
    display: block;
}
.process-section input {
    font-family: "Open Sans", sans-serif;
    font-size: 14px;
    font-weight: 400;
    width: 100%;
    height: 44px;
    padding: 10px 20px 10px 10px;
    color: #151515;
    border: 2px solid #e4e4e4;
    border-radius: 3px;
    outline: none;
    background-color: #f3f5f7;
    box-shadow: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    -webkit-transition: all 0.2s;
    -moz-transition: all 0.2s;
    -o-transition: all 0.2s;
    transition: all 0.2s;
}
.process-section input::placeholder {
  color: #aba9a9;
}
.process-section button.btn {
    background: #0047ab;
    color: #fff;
    border: none;
    margin-top: 30px;
}


/* step one */
.star-rate span {
    font-size: 50px;
    color: #a9a9a9;
    cursor: pointer;
}

.star-rate span.active {
    color: #e6bf32;
}


/* embed form */
#kajabi-form .kajabi-form__content {
    max-width: 100% !important;
}
#kajabi-form .kajabi-form__title,
#kajabi-form .kajabi-form__subtitle {
    display: none;
}

</style>





<main class="wrap">

    <aside class="sidebar">
        <section class="steps card">
            <p class="one active">Step 1 - Rate Program</p>
            <p class="two">Step 2 - Record Testimony</p>
            <p class="three">Step 3 - Upload Testimony</p>
            <p class="four">Step 4 - Review Testimony</p>
        </section>
        <!-- /steps -->

        <section class="progress card">
            <p>Your Progress</p>
            <div class="circle-progress">
                <div class="prog-label">20%</div>
                <div class="prog-pie">
                    <div class="left-side half-circle"></div>
                    <div class="right-side half-circle"></div>
                </div>
                <div class="prog-shadow"></div>
            </div>
        </section>
        <!-- /progress -->
    </aside>


    <section class="process card">
    
        <div class="process-section active one">
            <h1>How Would You Rate The Program?</h1>
            <p>Select a rating from 1 to 5 with being bad to 5 being awesome.</p>
            <input type="email" placeholder="Email" onchange="inputMail(this)">
            <div class="star-rate">
                <span data-rate="1" title="Give 1 stars" onclick="changeRate(this)">★</span>
                <span data-rate="2" title="Give 2 stars" onclick="changeRate(this)">★</span>
                <span data-rate="3" title="Give 3 stars" onclick="changeRate(this)">★</span>
                <span data-rate="4" title="Give 4 stars" onclick="changeRate(this)">★</span>
                <span data-rate="5" title="Give 5 stars" onclick="changeRate(this)">★</span>
            </div>
            <button class="btn btn-primary nxtStep" onclick="stepOne()">Next</button>
        </div>
        <!-- /rate-program -->

        <div class="process-section two">
            <h1>Record Your Video Testimonial</h1>
            <p>The next step is to record your video testimonial where you share your experience of the Apex Seller program. The tutorial video below explains how to shoot your video and what structure/format to follow.</p>
            <button class="btn btn-primary nxtStep" onclick="stepTwo()">Next</button>
        </div>
        <!-- /record-testimony -->

        <div class="process-section three">
            <h1>Send Us Your Video Testimonial File</h1>
            <p>The next step is to send us your video file via Dropbox or Google Drive.</p>
            <input type="text" placeholder="https://drive.google.com/videofile" id="video_url" onchange="inputVidLink(this)">
            <br>
            <input type="text" placeholder="Desciption" id="questions" onchange="inputQuestions(this)">
            <button class="btn btn-primary nxtStep" onclick="stepThree()">Next</button>
        </div>
        <!-- /upload-testimony -->

        <div class="process-section four">
            <h1>Review your Testimony</h1>
            <p>Please review your testimony before sending it to us.</p>
            <script src=https://app.intoprofits.com/forms/307926/embed.js></script>
        </div>
        <!-- /upload-testimony -->


    </section>
    <!-- /process -->


</main>


<script>

    function inputMail(inputText) {

        var mail = inputText.value
        // console.log(mail)


        var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

        if(inputText.value.match(mailformat)) {
            // document.form1.text1.focus();
            document.querySelector('input[id="form_submission_email"]').value = mail
            return true;
        } else {
            alert("You have entered an invalid email address!");
            // document.form1.text1.focus();
            return false;
        }

        

    }

    function changeRate(rate) {

        var finalRate = rate.dataset.rate

        if (finalRate == 1) {
            finalRate = '1 Star'
            document.querySelector('span[data-rate="1"]').classList.add('active')
            document.querySelector('span[data-rate="2"]').classList.remove('active')
            document.querySelector('span[data-rate="3"]').classList.remove('active')
            document.querySelector('span[data-rate="4"]').classList.remove('active')
            document.querySelector('span[data-rate="5"]').classList.remove('active')
            console.log(finalRate)
        } else if (finalRate == 2) {
            finalRate = '2 Stars'
            document.querySelector('span[data-rate="1"]').classList.add('active')
            document.querySelector('span[data-rate="2"]').classList.add('active')
            document.querySelector('span[data-rate="3"]').classList.remove('active')
            document.querySelector('span[data-rate="4"]').classList.remove('active')
            document.querySelector('span[data-rate="5"]').classList.remove('active')
            console.log(finalRate)
        } else if (finalRate == 3) {
            finalRate = '3 Stars'
            document.querySelector('span[data-rate="1"]').classList.add('active')
            document.querySelector('span[data-rate="2"]').classList.add('active')
            document.querySelector('span[data-rate="3"]').classList.add('active')
            document.querySelector('span[data-rate="4"]').classList.remove('active')
            document.querySelector('span[data-rate="5"]').classList.remove('active')
            console.log(finalRate)
        } else if (finalRate == 4) {
            finalRate = '4 Stars'
            document.querySelector('span[data-rate="1"]').classList.add('active')
            document.querySelector('span[data-rate="2"]').classList.add('active')
            document.querySelector('span[data-rate="3"]').classList.add('active')
            document.querySelector('span[data-rate="4"]').classList.add('active')
            document.querySelector('span[data-rate="5"]').classList.remove('active')
            console.log(finalRate)
        } else {
            finalRate = '5 Stars'
            document.querySelector('span[data-rate="1"]').classList.add('active')
            document.querySelector('span[data-rate="2"]').classList.add('active')
            document.querySelector('span[data-rate="3"]').classList.add('active')
            document.querySelector('span[data-rate="4"]').classList.add('active')
            document.querySelector('span[data-rate="5"]').classList.add('active')
            console.log(finalRate)
        }


        document.querySelector('input[id="form_submission_custom_2"]').value = finalRate
        console.log(finalRate)


    }

    function inputVidLink(link) {

        var vidLink = link.value

        if (vidLink != null) {
            document.querySelector('input[id="form_submission_custom_3"]').value = vidLink
            return true
        } else {
            alert("Please enter a link");
            return false;
        }
    }

    function inputQuestions(question) {

        var Questions = question.value

        if (Questions != null) {
            document.querySelector('input[id="form_submission_custom_4"]').value = Questions
            return true
        } else {
            alert("Please answer the questions");
            return false;
        }

    }

    function stepOne() {
        document.querySelector('div.process-section.one').classList.remove('active')
        document.querySelector('div.process-section.two').classList.add('active')

        document.querySelector('section.steps p.one').classList.remove('active')
        document.querySelector('section.steps p.two').classList.add('active')

        document.querySelector('.prog-label').innerHTML = "30%"


        console.log('one')
    }

    function stepTwo() {
        document.querySelector('div.process-section.two').classList.remove('active')
        document.querySelector('div.process-section.three').classList.add('active')

        document.querySelector('section.steps p.two').classList.remove('active')
        document.querySelector('section.steps p.three').classList.add('active')

        document.querySelector('.circle-progress').classList.remove('percent30')
        document.querySelector('.circle-progress').classList.add('percent50')
        document.querySelector('.prog-label').innerHTML = "50%"

        console.log('two')
    }

    function stepThree() {
        document.querySelector('div.process-section.three').classList.remove('active')
        document.querySelector('div.process-section.four').classList.add('active')

        document.querySelector('section.steps p.three').classList.remove('active')
        document.querySelector('section.steps p.four').classList.add('active')

        document.querySelector('.circle-progress').classList.remove('percent50')
        document.querySelector('.circle-progress').classList.add('percent90')
        document.querySelector('.prog-label').innerHTML = "90%"
        
    }

</script>