<?php include_once('header.php'); ?>

<section class="container">
    <section class="row">
        <section class="col-md-12">
            Google maps Here

            <script src="http://maps.googleapis.com/maps/api/js"></script>
            <script>
                function initialize() {
                    var mapProp = {
                        center:new google.maps.LatLng(51.508742,-0.120850),
                        zoom:5,
                        mapTypeId:google.maps.MapTypeId.ROADMAP
                    };
                    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
                }
                google.maps.event.addDomListener(window, 'load', initialize);
            </script>

            <div id="googleMap" style="width:100%;height:380px;"></div>

        </section>
                <section class="col-md-8">
                    <h2>Contact Message</h2>
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputAmount">Name</label>

                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
                                <input type="text" class="form-control" id="exampleInputAmount" placeholder="Name">
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="sr-only" for="exampleInputAmount">Email</label>

                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></div>
                                <input type="text" class="form-control" id="exampleInputAmount" placeholder="Email">
                            </div>
                        </div>



                        <div class="form-group">
                            <label class="sr-only" for="exampleInputAmount">Name</label>

                            <div class="input-group">
                                <div class="input-group-addon"><span class="glyphicon glyphicon-pencil"></span></div>
                                <textarea class="form-control" rows="3" placeholder="Enter Your Message here"></textarea>
                            </div>
                        </div>

                        <p>
                            <button type="button" class="btn btn-primary btn-lg">Send Message</button>
                        </p>

                    </form>
                </section>

                <section class="col-md-4">
                    <br><br>
                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingOne">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Address #1
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingTwo">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Address #2
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading" role="tab" id="headingThree">
                                <h4 class="panel-title">
                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Address #3
                                    </a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                <div class="panel-body">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </section>
        </section>

    </section>
</section>






<hr>


<?php include_once('footer.php'); ?>