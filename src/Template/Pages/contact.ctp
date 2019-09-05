<?php
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = "new";
?>
<script type="text/javascript">
window.onload=function () {
    $('#contact').addClass('active');
};
</script>
        <!-- Contact -->
        <section id="contact-section" >
            <div  class="page-header">
                <h1>Contact <small> Get in touch</small></h1>
            </div>
            <div class="row">
                <!-- Form col -->
                <div class="span8 offset2">
                    <form class="well" id="contactForm" action="#" method="post">
                        <label>Your Name</label>
                        <input type="text" class="input-xlarge" placeholder="Whats your name?" name="name" id="name">
                        <label>Your Email</label>
                        <input type="text" class="input-xlarge" placeholder="How can i contact you?" name="email" id="email">
                        <label>Message</label>
                        <textarea class="input-xxlarge"  rows="4"  name="comments"  id="comments"></textarea>
                        <p>
                            <input type="button" value="Send" name="submit" id="submit" class="btn"/>
                        </p>
                    </form>
                </div>
                <!-- ENDS form col -->
                <div class="span6 offset3">
                    <h3> San Francisco State University<i class="icon-envelope"></i><a href="#"> <small>email@server.com</small></a></h3>
                </div>
            </div>
        </section>
        <!-- ENDS Contact -->
        <script>document.title = "Gator Trader-Contact";</script>


