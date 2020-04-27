<form id="quote-contact-request" class="form-message" action="form/contact.php" method="post">
    <div class="form-results"></div>
    <div class="form-group row">
        <div class="form-field col-md-6 form-m-bttm">
            <input name="contact-name" type="text" placeholder="Name *" class="form-control required">
        </div>
        <div class="form-field col-md-6">
            <input name="contact-email" type="email" placeholder="Email *" class="form-control required email">
        </div>
    </div>
    <div class="form-group row">
        <div class="form-field col-md-6 form-m-bttm">
            <input name="contact-phone" type="text" placeholder="Phone *" class="form-control required">
        </div>
        <div class="form-field col-md-6">
            <input name="contact-cell" type="text" placeholder="Cell Phone" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <div class="form-field col-md-6 form-m-bttm">
            <input name="contact-address" type="text" placeholder="Address" class="form-control">
        </div>
        <div class="form-field col-md-6">
            <input name="contact-citystate" type="text" placeholder="City, State, Zip" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <div class="form-field col-md-6 form-m-bttm">
            <input name="contact-service" type="text" placeholder="Type of Product Interest" class="form-control">
        </div>
        <div class="form-field col-md-6">
            <input name="contact-besttime" type="text" placeholder="Best time to reach" class="form-control">
        </div>
    </div>
    <div class="form-group row">
        <div class="form-field col-md-12">
            <textarea name="contact-message" placeholder="Messages / Question *" class="txtarea form-control required"></textarea>
        </div>
    </div>
    <input type="text" class="hidden" name="form-anti-honeypot" value="">
    <button type="submit" class="btn solid-btn sb-h">Submit</button>
</form>
