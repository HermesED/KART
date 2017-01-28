    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center bottom-separator">
                    <img src="<?= base_url();?>assets/images/home/under.png" class="img-responsive inline" alt="">
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="testimonial bottom">
                        <h2>Testimonial</h2>
                        <div class="media">
                            <div class="pull-left">
                                <a href="#"><img src="<?= base_url();?>assets/images/home/profile1.png" alt="JCF image not available"></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Bad design is smoke, while good design is a mirror.</blockquote>
                                <h3><a href="#">- Juan-Carlos Fernandez</a></h3>
                            </div>
                         </div>
                        <div class="media">
                            <div class="pull-left">
                                <a href="https://upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Steve_Jobs_WWDC07.jpg/800px-Steve_Jobs_WWDC07.jpg" target="_blank"><img src="<?= base_url();?>assets/images/home/stevejobs2.jpg" alt="Steve Jobs"></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Design is a funny word. Some people think design means how it looks. But of course, if you dig deeper, it’s really how it works.</blockquote>
                                <h3><a href="https://en.wikipedia.org/wiki/Steve_Jobs" target="_blank">- Steve Jobs</a></h3>
                            </div>
                        </div>
                        <div class="media">
                            <div class="pull-left">
                                <a href="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b8/Portrait_de_Picasso%2C_1908.jpg/230px-Portrait_de_Picasso%2C_1908.jpg" target="_blank"><img src="<?= base_url();?>assets/images/home/pablopicasso2.jpg" alt="Pablo Picasso in 1908"></a>
                            </div>
                            <div class="media-body">
                                <blockquote>Art is the lie that reveals the truth.</blockquote>
                                <h3><a href="https://en.wikipedia.org/wiki/Pablo_Picasso" target="_blank">-  Pablo Picasso</a></h3>
                            </div>
                         </div>   
                    </div> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:someone@example.com">email@email.com</a> <br> 
                        Phone: +62 xxx xxx xxxx <br> 
                        Fax: +62 xxx xxx xxxx <br> 
                        </address>

                        <h2>Address</h2>
                        <address>
                        Jl. Baji Ateka No.20, <br> 
                        Makassar, <br> 
                        Sulawesi Selatan <br> 
                        Indonesia <br> 
                        </address>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <div class="contact-form bottom">
                        <h2>Send a message</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="sendemail.php">
                            <div class="form-group">
                                <input type="text" name="namemsg" class="form-control" required="required" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" name="emailmsg" class="form-control" required="required" placeholder="Email Id">
                            </div>
                            <div class="form-group">
                                <textarea id="message" name="message" required="required" class="form-control" rows="8" placeholder="Your text here"></textarea>
                            </div>                        
                            <div class="form-group">
                                <input type="submit" name="submit" class="btn btn-submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="copyright-text text-center">
                        <p>&copy; Your Company 2016. All Rights Reserved.</p>
                        <p>Crafted by <a target="_blank" href="http://designscrazed.org/">Thanks to templates and design by: Allie</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->
    
</body>
</html>
