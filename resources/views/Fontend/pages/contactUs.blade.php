
 @extends('Fontend.LayoutInner.master')

 @section('contned')

 <!--------------about banner--------------->
 <section id="noticeBanner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="about-banner-text ">
                    <h3>যোগাযোগ</h3>
                </div>
            </div>
        </div>
    </div>
</section>

<!--------------about banner--------------->

<!------faunded-------->

<!-----contact us page------>
<section id="contact-information">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="address-contact text-center">

                    <h5>Address</h5>
                    <h6>আজিমপুর ঢাকা - ১২০৫</h6>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="address-contact text-center">
                        <h5>Phone</h5>
                        <h6>02-8625917</h6>
                        <!-- <p>+880 02-48321659
                                </p> -->
                </div>
            </div>
            <div class="col-lg-4">
                <div class="address-contact text-center">
                        <h5>Email</h5>
                        <h6>asc1957bd@gmail.com</h6>
                        <!-- <p>nlpsc12178@gmail.com
                            </p> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!---------contact information-------------->
<section id="conform">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="contactlist text-center">
                    <form>
                        <div class="row">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Your Name">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Mobile No.">
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Email Address">
                            </div>
                        </div>
                        <div class="message">
                            <textarea name="" id="" placeholder="Message"></textarea>
                        </div>
                        <button type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-------contact map--------------->
<section>
    <div class="container">
        <div class="row mb-5">
            <div class="col-lg-12">
                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.5163107211556!2d90.38122831532944!3d23.728960984599944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8cf93af9501%3A0xd90c937c789f428a!2sAgrani%20School%20and%20College!5e0!3m2!1sen!2sbd!4v1594487412893!5m2!1sen!2sbd" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-----contact us page------>


@endsection
