<div class="col-md-4">
    <div class="sidebar-right">

        <div class="wgs-box wgs-menus">
            <div class="wgs-content">
                <ul class="list list-grouped">
                    <li class="list-heading">
                        <span>Service Navigation</span>
                        <ul>
                            @foreach($serviceDetailsSidebarData as $link)
                                <li @if($link->href === $path){!!'class="current"'!!}@else{{''}}@endif><a href="{{ $link->href }}">{{ $link->title }}</a></li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="wgs-box wgs-quoteform">
            <h3 class="wgs-heading">Free Quote Request</h3>
            <div class="wgs-content">
                <p>If you have any questions or would like to book a session please contact us.</p>
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
                            <input name="contact-service" type="text" placeholder="Interest of Service" class="form-control">
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
            </div>
        </div>

    </div>
</div>
