
<form  id="quote-contact-request" class="form-quote" action="form/contact.php" method="post">
    <div class="form-results"></div>
    <div class="form-group">
        <div class="form-field">
            <input name="contact-name" type="text" placeholder="Name *" class="form-control required">
        </div>
    </div>
    <div class="form-group">
        <div class="form-field">
            <input name="contact-email" type="email" placeholder="Email *" class="form-control required email">
        </div>
    </div>
    <div class="form-group">
        <div class="form-field form-m-bttm">
            <input name="contact-phone" type="text" placeholder="Phone" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <div class="form-field">
            <input name="contact-service" type="text" placeholder="Topic of Interest" class="form-control">
        </div>
    </div>
    <div class="form-group">
        <div class="form-field">
            <textarea name="contact-message" placeholder="Messages *" class="txtarea form-control required"></textarea>
        </div>
    </div>
    <input type="text" class="hidden" name="form-anti-honeypot" value="">
    <button type="submit" class="btn btn-alt sb-h">Submit</button>
</form>
